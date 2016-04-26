<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use View;
use App\Prospect;
use App\Product;
use App\Category;
use App\Ligne;
use App\Compteur;


class GoldenController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

$compteur =  DB::table('compteur')->orderBy('created_at', 'desc')->pluck('date');

$years = date("y",strtotime($compteur));
$month = date("m",strtotime($compteur));
$day = date("d",strtotime($compteur));

$pros_winner = Prospect::where('isWinner',  true)->orderBy('updated_at','desc')->take(5)->get();
		//$pros_winner =DB::table('prospects')->where('isWinner',  true)->get();
$pros_fake = Prospect::where('isWinner',  false)->orderBy('updated_at','desc')->take(5)->get();

$LMenu =  DB::table('categories')->get();

$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 
$prod = Product::orderByRaw("RAND()")->get();
		       // $prod = DB::table('products')->get()->random(1);
return View::make('index', array('num'=>$num,'LMenu'=>$LMenu,'prod'=>$prod,'pros_winner'=>$pros_winner,'pros_fake'=>$pros_fake,'years'=>$years,'month'=>$month,'day'=>$day));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function ProductContent(Request $request, $id)
	{
$pr = DB::table('products')->get();
$prod = Product::orderByRaw("RAND()")->get();
$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');


 
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 
 



$LMenu =  DB::table('menus')->get();


$id_prod = DB::table('products')->where('id_prod','=', $id)->pluck('id_prod');
$name = DB::table('products')->where('id_prod','=', $id)->pluck('name_prod');
$des = DB::table('products')->where('id_prod','=', $id)->pluck('des_prod');
$price = DB::table('products')->where('id_prod','=', $id)->pluck('price_prod');
$path_file = DB::table('products')->where('id_prod','=', $id)->pluck('path_file');
//return $res;
return View::make('produitinfo',array('LMenu'=>$LMenu,'prod'=>$prod,'num'=>$num,'name'=>$name,'des'=>$des,'price'=>$price,'path_file'=>$path_file,'id_prod'=>$id_prod));
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function menulinks($name)
	{


$LMenu =  DB::table('categories')->get();

$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 



$listid =  DB::table('categories')->where('name_cat','=',$name)->pluck('id');

$prod = Product::orderByRaw("RAND()")->where('id','=',$listid)->get();


		       // $prod = DB::table('products')->get()->random(1);
return View::make('cat', array('name'=>$name,'num'=>$num,'LMenu'=>$LMenu,'prod'=>$prod));
		
		}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function LePrincipe()

	{
		$LMenu =  DB::table('categories')->get();

$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 
$prod = Product::orderByRaw("RAND()")->get();



//$listid =  DB::table('categories')->where('name_cat','=',$name)->pluck('id');
return View::make('principe', array('num'=>$num,'LMenu'=>$LMenu,'prod'=>$prod));
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
