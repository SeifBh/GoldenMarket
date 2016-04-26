<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use View;
use App\Menu;

class MenuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function AjouterMenu()
	{
				        $res = DB::table('categories')->get();

		return View::make('menu.AjouterMenu', array('res'=>$res));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function AjouterMenu_succes(Request $request)
	{
						$selectedcat = $request->input('cat');

	$nommenu = $request->input('nommenu');
			$menu=new Menu();

				    $menu->menu_name = $nommenu ;
		    $menu->id = $selectedcat ;

				    $menu->save();
				    		        $res = DB::table('categories')->get();

		return View::make('menu.AjouterMenu', array('res'=>$res));

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
