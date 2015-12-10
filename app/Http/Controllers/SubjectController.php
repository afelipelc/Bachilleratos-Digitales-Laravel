<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Subject;
use App\Semester;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SubjectController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjects = Subject::orderBy('semester_id')->get();
		return view('subject.index', compact('subjects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$semesters = Semester::all()->lists('nombre','id');
		return view('subject.create',compact('semesters'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Subject::create($request->all());
		return redirect('subject');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$subject = Subject::findOrFail($id);
		return view('subject.show', compact('subject'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$semesters = Semester::all()->lists('nombre','id');
		$subject = Subject::findOrFail($id);
		return view('subject.edit', compact('subject','semesters'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$subject = Subject::findOrFail($id);
		$subject->update($request->all());
		return redirect('subject');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Subject::destroy($id);
		return redirect('subject');
	}

}
