<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Group;
use App\Schoolyear;
use App\Semester;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class GroupController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::findOrFail(1);
		$school = $user->school;
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();
		//$groups = Group::fromsy($schoolyear->id);
		return view('group.index', compact('school','schoolyear'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id Semestre o grado
	 * @return Response
	 */
public function toJson($id){

		$semester = Semester::with('groups')->findOrFail($id);
		$error = is_null($semester);
  	$message = $error ? "No se encontró el semestre." : "OKay";

  	return response()->json(array (
			'error' => $error,
			'semester' => $semester,
			'message' => $message),
			200
		)->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//de acuerdo al usuario, obtener su escuela y datos actuales de ciclo y semestres
		$user = User::findOrFail(1); //despues quitar
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();
		$semesters = Semester::all()->lists('nombre','id');
		$users = User::where('school_id', '=', $user->school_id)->lists('name','id');
		return view('group.create', compact('user','schoolyear','semesters', 'users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$user = User::findOrFail(1); //despues quitar
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();
		$request['school_id'] = $user->school_id;
		$request['schoolyear_id'] = $schoolyear->id;

		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Group::create($request->all());
		return redirect('group');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Group  $group
	 * @return Response
	 */
	public function show(Group  $group)
	{
		//$group = Group::findOrFail($id);
		return view('group.show', compact('group'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Group  $group)
	{
		$user = User::findOrFail(1);
		$school = $user->school;
		$schoolyear = Schoolyear::orderBy('id', 'DESC')->first();
		$semesters = Semester::all()->lists('nombre','id');
		$users = User::where('school_id', '=', $user->school_id)->lists('name','id');
		//$group = Group::findOrFail($id);
		return view('group.edit', compact('user','schoolyear','semesters', 'users', 'group'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Group  $group
	 * @return Response
	 */
	public function update(Group  $group, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		//$group = Group::findOrFail($id);
		$group->update($request->all());
		return redirect('group');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Group  $group
	 * @return Response
	 */
	public function destroy(Group  $group)
	{
		Group::destroy($id);
		return redirect('group');
	}

}
