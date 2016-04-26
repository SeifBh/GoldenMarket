<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Illuminate\Http\Request;
use App\Product;
use DB;
use \Input as Input;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\AuthController;
use Auth;


class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AjouterProduit_succes(Request $request)
	{

				$sku = $request->input('sku_prod');
				$nom = $request->input('nom_prod');
				$des = $request->input('des_prod');
				$prix = $request->input('price_prod');
				$selectedcat = $request->input('cat');


			$prod = new Product();//3malna model jdid
		    $prod->sku = $sku ;
		    $prod->name_prod = $nom ;
		    $prod->price_prod = $prix ;
		    $prod->des_prod = $des ;
		    $prod->id = $selectedcat ;

			//dd($prod->id_prod);


		    $prod->save();

if(Input::hasFile('image')){

		$file = Input::file('image');
		$imageName = $prod->id_prod . '.' . 
		$request->file('image')->getClientOriginalExtension();
		$prod->path_file = $imageName ;
		$request->file('image')->move(base_path() . '/public/images/product_images/', $imageName);
				    $prod->save();

}


		        $res = DB::table('categories')->get();
return View::make('product/ajouterProd', array('res'=>$res));
    			}

	public function AjouterProduit()
	{

		        $res = DB::table('categories')->get();
return View::make('product/ajouterProd', array('res'=>$res));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		

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
