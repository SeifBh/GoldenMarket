<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;


use App\Prospect;
use App\Product;
use App\Commande;
use View;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


$listusers = DB::table('users')->get();
$nb_users = DB::table('users')->count();
$nb_tel = DB::table('teleoperateurs')->count();



$listprod = Product::orderBy('updated_at','desc')->take(8)->get();

$listperso = Prospect::orderBy('updated_at','desc')->take(5)->get();


$res = DB::table('prospects')->get();
$nbre_commande = DB::table('prospects')->count();
$nbre_nv_prospect = DB::table('prospects')->whereDate('created_at','= ',date('Y-m-d'))->count();

return View::make('admin.dashboard', array('nbre_nv_prospect'=>$nbre_nv_prospect,'res'=>$res,'nbre_commande'=>$nbre_commande
											,'nb_tel'=>$nb_tel,'nb_users'=>$nb_users,'listprod'=>$listprod,'listusers'=>$listusers,'listperso'=>$listperso));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
