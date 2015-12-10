<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Partial;
use App\Schoolyear;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PartialController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$partials = Partial::latest()->get();
		return view('partial.index', compact('partials'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$schoolyears = Schoolyear::latest()->lists('titulo','id');
		return view('partial.create',compact('schoolyears'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		Partial::create($request->all());
		return redirect('partial');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$partial = Partial::findOrFail($id);
		return view('partial.show', compact('partial'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$schoolyears = Schoolyear::latest()->lists('titulo','id');
		$partial = Partial::findOrFail($id);
		return view('partial.edit', compact('partial','schoolyears'));
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
		$partial = Partial::findOrFail($id);
		$partial->update($request->all());
		return redirect('partial');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Partial::destroy($id);
		return redirect('partial');
	}

}
