<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

use App\School;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SchoolController extends Controller
{

	use AuthorizesRequests;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//if admin, show all
		$this->authorize('manage', new School);
		$schools = School::latest()->get();
		return view('school.index', compact('schools'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->authorize('manage', new School);
		$directors = User::where('role','=','director')->lists('name','id');
		return view('school.create', compact('directors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->authorize('manage', new School);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		School::create($request->all());
		return redirect('school');
	}

	/**
	 * Display the specified resource.
	 * @param  School  $school
	 * @return Response
	 */
	public function show(School $school)
	{
			$this->authorize('edit', $school);

			//$school = School::findOrFail($id);
			return view('school.show', compact('school'));
		/*}else
			return redirect('/');*/
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  School $school
	 * @return Response
	 */
	public function edit(School $school)
	{
		$this->authorize('edit', $school);
		$directors = User::where('role','=','director')->lists('name','id');
		return view('school.edit', compact('school','directors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  School $school
	 * @return Response
	 */
	public function update(School $school, Request $request)
	{
		$this->authorize('edit', $school);
		//$this->validate($request, ['name' => 'required']); // Uncomment and modify if you need to validate any input.
		$school->update($request->all());
		return redirect()->route('school.show', [$school->id]);
	}

	/**
	 * Remove the specified res, new Schoolource from storage.
	 *
	 * @param  School $school
	 * @return Response
	 */
	public function destroy(School $school)
	{
		$this->authorize('manage', new School);
		School::destroy($school->id);
		return redirect('school');
	}

}
