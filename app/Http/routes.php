<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['namespace' => 'App\Http\Controllers', 'prefix' => 'api'], function($group){

	//Account
	$group->get('account','AccountController@index');
	 
	$group->get('account/{id}','AccountController@getAccount');
	 
	$group->post('account','AccountController@saveAccount');
	 
	$group->put('account/{id}','AccountController@updateAccount');
	 
	$group->delete('account/{id}','AccountController@deleteAccount');

	//Cost
	$group->get('cost','CostController@index');
	 
	$group->get('cost/{id}','CostController@getCost');
	 
	$group->post('cost','CostController@saveCost');
	 
	$group->put('cost/{id}','CostController@updateCost');
	 
	$group->delete('cost/{id}','CostController@deleteCost');	

	//Recharge
	$group->get('recharge','RechargeController@index');
	 
	$group->get('recharge/{id}','RechargeController@getRecharge');
	 
	$group->post('recharge','RechargeController@saveRecharge');
	 
	$group->put('recharge/{id}','RechargeController@updateRecharge');
	 
	$group->delete('recharge/{id}','RechargeController@deleteRecharge');	

	//Usage
	$group->get('usage','UsageController@index');
	 
	$group->get('usage/{id}','UsageController@getUsage');
	 
	$group->post('usage','UsageController@saveUsage');
	 
	$group->put('usage/{id}','UsageController@updateUsage');
	 
	$group->delete('usage/{id}','UsageController@deleteUsage');			

});