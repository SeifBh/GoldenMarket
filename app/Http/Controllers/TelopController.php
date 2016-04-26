<?php namespace App\Http\Controllers;

use App\Product;
use App\Ligne;
use App\Http\Requests;
use App\Teleoperateur;
use App\Http\Controllers\Controller;
use View;
use DB;

use Illuminate\Http\Request;

class TelopController extends GoldenController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AjouterTelop()
	{
		return View::make('teleoperateur.ajouterteleoperateur');


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AjouterTelop_succes(Request $request)
	{
	$nom_telop = $request->input('nom_telop');
	$code_telop = $request->input('code_telop');
			$telop=new Teleoperateur();

			$telop->name_telop = $nom_telop ;
			$telop->code_telop = $code_telop ;

				    $telop->save();
		return View::make('teleoperateur.ajouterteleoperateur');


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function verify(Request $request)
	{

			$id_prodx = $request->input('ProdID');
			
			$res_id = $request->input('sss');
			

		$prod = Product::orderByRaw("RAND()")->get();
$LMenu =  DB::table('menus')->get();

$num = Ligne::orderBy('created_at', 'desc')->pluck('num_ligne');
$num=wordwrap($num,2," ",1); 
 
$num=substr($num,0,strlen($num)+0); 


	$code = $request->input('code');
	$user = Teleoperateur::where('code_telop', '=', $code)->first();
	$res_nameprod = Product::where('id_prod', '=', $id_prodx)->pluck('name_prod');
	$res_des_prod = Product::where('id_prod', '=', $id_prodx)->pluck('des_prod');
	$res_price_prod = Product::where('id_prod', '=', $id_prodx)->pluck('price_prod');
	$res_path_file = Product::where('id_prod', '=', $id_prodx)->pluck('path_file');
if ($user === null) {
   // user doesn't exist
return View::make('step3error',array('num'=>$num,'LMenu'=>$LMenu,'prod'=>$prod));
}
else{

return View::make('step3',array('num'=>$num,'LMenu'=>$LMenu, 'id_prodx'=>$id_prodx,'prod'=>$prod,'res_nameprod'=>$res_nameprod,
								'res_des_prod'=>$res_des_prod,'res_price_prod'=>$res_price_prod,
								'res_path_file'=>$res_path_file,'res_id'=>$res_id));
}
	       

	    


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
