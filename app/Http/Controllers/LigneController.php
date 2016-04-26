<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ligne;
use DB;
use View;
use Illuminate\Http\Request;

class LigneController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AjouterLigne()
	{
		return View::make('ligne.ajouterligne');


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AjouterLigne_succes(Request $request)
	{
	$num_ligne = $request->input('ligne');
			$ligne=new Ligne();

				    $ligne->num_ligne = $num_ligne ;

				    $ligne->save();
				    return View::make('ligne');


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
