<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

use App\Document;
use App\Group;
use App\Inscription;
use App\Schoolyear;
use App\Semester;
use App\Student;
use App\Tutor;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InscriptionController extends Controller
{

	use AuthorizesRequests;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->authorize('show', new Inscription);

		//solo inscripciones del ciclo vigente y si es director
		if(Auth::user()->role === 'director')
			$inscriptions = Inscription::where(['school_id' => Auth::user()->school_id, 'schoolyear_id' => Schoolyear::orderBy('id', 'DESC')->first()->id])->latest()->get();
		else
			$inscriptions = Inscription::where('schoolyear_id', Schoolyear::orderBy('id', 'DESC')->first()->id)->latest()->get(); //si es admin solo los del ciclo actual

		return view('inscription.index', compact('inscriptions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('create', new Inscription);
		//de acuerdo al usuario, obtener su escuela y datos actuales de ciclo y semestres
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();


		$semesters = Semester::all()->lists('nombre','id');

		$groups = Group::where('semester_id', '=', 1)->lists('nombre','id');
		
		return view('inscription.create', compact('schoolyear','semesters', 'groups'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('create', new Inscription);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();
		$request['school_id'] = Auth::user()->school_id;
		$request['schoolyear_id'] = $schoolyear->id;

		//student first
		$student = null;
		if(!isset($request['student_id']) || $request['student_id']==0){
			$student = Student::create($request->all());
		}else
		{
			$student = Student::findOrFail($request['student_id']);
			$student->update($request->all());
		}

		$request['student_id'] = $student->id;
		$inscription = Inscription::create($request->all());

		//agregar al grupo
		$inscription->group->students->push($student);
		//return redirect('inscription');
		return view('inscription.step2', compact('inscription'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Inscription  $inscription
	 * @return Response
	 */
	public function show(Inscription  $inscription)
	{
		$this->authorize('edit', $inscription);
		//$inscription = Inscription::findOrFail($id);
		return view('inscription.show', compact('inscription'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Inscription  $inscription
	 * @return Response
	 */
	public function edit(Inscription  $inscription)
	{
		$this->authorize('edit', $inscription);
		//$inscription = Inscription::findOrFail($id);
		$semesters = Semester::all()->lists('nombre','id');
		$inscription->student['semester_id'] = $inscription->semester_id; //incrustar valor para vincularlo a formulario
		$inscription->student['group_id'] = $inscription->group_id;
		$groups = Group::where('semester_id', $inscription->semester_id)->lists('nombre','id');
		return view('inscription.edit', compact('inscription','semesters','groups'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Inscription  $inscription
	 * @return Response
	 */
	public function update(Inscription  $inscription, Request $request)
	{
		$this->authorize('edit', $inscription);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		//$inscription = Inscription::findOrFail($id);

		if(!isset($request['step']) || $request['step']<1 && $request['step'] >3)
		{
			return redirect('inscription.create');
		}
		//actualizar estudiante
		if($request['step'] == 1){
			$inscription->student->update($request->all());
			//actualizar grupo
			if($inscription->group_id != $request['group_id']){
				//buscar grupo anterior
				$inscription->group->students()->detach($inscription->student);
				//agregamos al nuevo
				$inscription->group_id=$request['group_id'];
				$group = Group::find($request['group_id']);
				$group->students()->attach($inscription->student);
			}

			$inscription->update($request->all());

			//mostrar paso 2
			return view('inscription.step2', compact('inscription'));
		}
		elseif ($request['step'] == 2) {
			if($request['tutor_id'] != 0 && $inscription->tutor_id != $request['tutor_id']){
				$inscription->student->tutor_id =$request['tutor_id'];
				$inscription->student->save();
			}

			if($inscription->student->tutor)
				$inscription->student->tutor->update($request->all());
			else
			{
				$inscription->student->tutor_id = Tutor::create($request->all())->id;
				$inscription->student->save();
			}
			//mostrar paso 3 ...
			return view('inscription.step3', compact('inscription'));
		}elseif ($request['step'] == 3) {
			if($inscription->student->document){
				$request['student_id'] = $inscription->student_id;
				$inscription->student->document->update($request->all());
			}
			else{
				$request['student_id'] = $inscription->student_id;
				Document::create($request->all());
				return redirect()->route('inscription.show', [$inscription]);
			}
		}
		
		return redirect('inscription');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Inscription  $inscription
	 * @return Response
	 */
	public function destroy(Inscription  $inscription)
	{
		$this->authorize('edit', $inscription);

		Inscription::destroy($id);
		return redirect('inscription');
	}

	public function printdoc($id){
		//solo director o admin
		$this->authorize('show', $inscription);

		$inscription = Registration::findOrFail($id);
		//return view('registration.print', compact('inscription'));
		
		$view =  \View::make('registration.print', compact('inscription'))->render();
    $pdf = \App::make('dompdf.wrapper');
    $pdf->loadHTML($view);
    return $pdf->stream('printdoc');
	}

}
