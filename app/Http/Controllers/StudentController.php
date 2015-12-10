<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentController extends Controller
{
	use AuthorizesRequests;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->authorize('index', new Student);

		$students = Student::latest()->get();
		return view('student.index', compact('students'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('edit', new Student);
		return view('student.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('edit', new Student);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Student::create($request->all());
		return redirect('student');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Student  $student
	 * @return Response
	 */
	public function show(Student  $student)
	{
		$this->authorize('show', new Student);
		//$student = Student::findOrFail($id);
		return view('student.show', compact('student'));
	}

	public function toJson($id){
		//$student = Student::findOrFail($id);
		$student = Student::Where('nia',$id)->first();
		$error = is_null($student);
  	$message = $error ? "No se encontró el estudiante" : "";

  	return response()->json(array (
			'error' => $error,
			'student' => $student,
			'message' => $message),
			200
		)->header('Content-Type',"application/json; charset=utf-8")->header("Access-Control-Allow-Origin", "*");
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  Student  $student
	 * @return Response
	 */
	public function edit(Student  $student)
	{
		$this->authorize('update', $student);
		//$student = Student::findOrFail($id);
		return view('student.edit', compact('student'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Student  $student
	 * @return Response
	 */
	public function update(Student  $student, Request $request)
	{
		$this->authorize('update', $student);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$student = Student::findOrFail($id);
		$student->update($request->all());
		return redirect('student');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Student  $student
	 * @return Response
	 */
	public function destroy(Student  $student)
	{
		$this->authorize('manage', new Student);
		Student::destroy($id);
		return redirect('student');
	}

}
