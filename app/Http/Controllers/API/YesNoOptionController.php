<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\YesNoOption;

class YesNoOptionController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth:api');
	// }
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$yno = YesNoOption::get();
		return response()->json($yno);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(YesNoOption $yesnooption)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, YesNoOption $yesnooption)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(YesNoOption $yesnooption)
	{
		//
	}
}
