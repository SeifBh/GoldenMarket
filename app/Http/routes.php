<?php


/*Route::get('/Admin/{mn}', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
Route::get('/AjouterProduit', ['middleware' => ['auth', 'admin'],  'ProductController@AjouterProduit']);
Route::get('/AjouterProduit', ['middleware'=>['auth', 'admin'], 'uses'=>'ProductController@AjouterProduit']);
*/

//----------------------Front office---------------------
Route::get('/', 'GoldenController@index');
Route::get('/{name}', 'GoldenController@menulinks');


//Route::get('/contenue/principe', 'GoldenController@LePrincipe');


Route::get('Produit/{id}', 'GoldenController@ProductContent');

	Route::get('/succes/finishsteps/seif','ProspectController@AjouterProspect_user_succes');




Route::post('verify', 'TelopController@verify');
Route::get('ver','ProductController@ver');



//----------------------Front end---------------------
	//----------------------Gestion prospects---------------------
	//Ajouter prospect
	Route::get('/Admin/AjouterProspect', ['middleware'=>['auth', 'admin'], 'uses'=>'ProspectController@AjouterProspect']);
	Route::get('/Admin/AjouterProspect_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'ProspectController@AjouterProspect_succes']);
	//Modifier prospect
	//Supprimer prospect


	//----------------------Gestion produits---------------------
	//Ajouter Produit
	Route::get('/Admin/AjouterProduit', ['middleware'=>['auth', 'admin'], 'uses'=>'ProductController@AjouterProduit']);
	Route::post('/Admin/AjouterProduit_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'ProductController@AjouterProduit_succes']);
	//Modifier Produit
	//Supprimer Produit

	//----------------------Gestion Catégories---------------------
	//Ajouter Catégories	
	Route::get('/Admin/AjouterMenu', ['middleware'=>['auth', 'admin'], 'uses'=>'CategoryController@ajouter']);
	Route::get('/Admin/AjouterMenu_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'CategoryController@ajouter_succes']);
	//Modifier Catégories
	//Supprimer Catégories

	//----------------------Gestion teleoperateurs---------------------
	//Ajouter teleoperateur
		Route::get('/Admin/AjouterTelop', ['middleware'=>['auth', 'admin'], 'uses'=>'TelopController@AjouterTelop']);
		Route::get('/Admin/AjouterTelop_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'TelopController@AjouterTelop_succes']);
	//Modifier teleoperateur
	//Supprimer teleoperateur

/*

	//----------------------Gestion menus---------------------
		Route::get('/Admin/AjouterMenu', ['middleware'=>['auth', 'admin'], 'uses'=>'MenuController@AjouterMenu']);
		Route::get('/Admin/AjouterMenu_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'MenuController@AjouterMenu_succes']);

*/

	//Modifier Compteur à rebours
		Route::get('/Admin/Compteur', ['middleware'=>['auth', 'admin'], 'uses'=>'CompteurController@index']);
		Route::get('/Admin/CompteurAjout', ['middleware'=>['auth', 'admin'], 'uses'=>'CompteurController@Ajout']);

	//Ajouter Ligne
		Route::get('/Admin/AjouterLigne', ['middleware'=>['auth', 'admin'], 'uses'=>'LigneController@AjouterLigne']);
		Route::get('/Admin/AjouterLigne_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'LigneController@AjouterLigne_succes']);



	//Ajouter teleoperateur
		Route::get('/Admin/AjouterTelop', ['middleware'=>['auth', 'admin'], 'uses'=>'TelopController@AjouterTelop']);
		Route::get('/Admin/AjouterTelop_succes', ['middleware'=>['auth', 'admin'], 'uses'=>'TelopController@AjouterTelop_succes']);





Route::get('/Admin/dashboard', ['middleware'=>['auth', 'admin'], 'uses'=>'DashboardController@index']);




//----------------------Laravel 5 Authentification---------------------
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);