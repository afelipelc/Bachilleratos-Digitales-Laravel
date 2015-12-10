<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Schoolyear;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SchoolyearController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$schoolyears = Schoolyear::latest()->get();
		return view('schoolyear.index', compact('schoolyears'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('schoolyear.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Schoolyear::create($request->all());
		return redirect('schoolyear');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$schoolyear = Schoolyear::findOrFail($id);
		return view('schoolyear.show', compact('schoolyear'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$schoolyear = Schoolyear::findOrFail($id);
		return view('schoolyear.edit', compact('schoolyear'));
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
		$schoolyear = Schoolyear::findOrFail($id);
		$schoolyear->update($request->all());
		return redirect('schoolyear');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Schoolyear::destroy($id);
		return redirect('schoolyear');
	}

}
