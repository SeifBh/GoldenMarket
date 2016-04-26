<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prospect;
use App\Product;
use App\Commande;
use App\Ligne;
use DB;
use View;

use Illuminate\Http\Request;

class ProspectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AjouterProspect()
	{


        $res = DB::table('prospects')->get();
return View::make('Prospect.ajouterProspect', array('res'=>$res));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AjouterProspect_succes(Request $request)
	{

$nom = $request->input('nom');
$email = $request->input('email');
$pays = $request->input('pays');
$ville = $request->input('ville');
$emploi = $request->input('emploi');
$agex = $request->input('age');
$age = (string)$agex; 
$code_postal = $request->input('code_postal');


$cp = (string)$code_postal; 
$numero = $request->input('num_tel');
$date = $request->input('date');



$prospect = new Prospect();

		    $prospect->name_pros = $nom ;
		    $prospect->email = $email ;
		    $prospect->pays = $pays ;
		    $prospect->ville = $ville ;
		    $prospect->emploi = $emploi ;
		    $prospect->age = $age ;
		    $prospect->code_postal = $cp ;
		    $prospect->date = $date ;
		    $prospect->numero= $numero ;
		    $prospect->isWinner= false ;



    $prospect->save();
    return 'succes';
    																																																										

	}

	public function AjouterProspect_user_succes(Request $request)
	{

				$prod = Product::orderByRaw("RAND()")->get();


$id_prod_value = $request->input('xxnxx');
$nomprenom = $request->input('nomprenom');
$email = $request->input('email');
$pays = $request->input('pays');
$ville = $request->input('ville');
$code_postal = $request->input('codepostal');
$id_prod_c = $request->input('sss');


$cp = (string)$code_postal; 
$numero = $request->input('nume');
$date = $request->input('date');

$LMenu =  DB::table('menus')->get();

$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 

$prospect = new Prospect();

		    $prospect->name_pros = $nomprenom ;
		    $prospect->email = $email ;
		    $prospect->pays = $pays ;
		    $prospect->ville = $ville ;
		    $prospect->code_postal = $cp ;
		    $prospect->date = $date ;
		    $prospect->numero= $numero ;
		    $prospect->ref1= $id_prod_value ;
		    $prospect->isWinner= true ;



    $prospect->save();




return View::make('finish',array('num'=>$num,'LMenu'=>$LMenu,'prod'=>$prod));
    																																																										

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
