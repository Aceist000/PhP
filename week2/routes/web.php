<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/testroute",function(){
	return view("guest.form");
});

Route::post("/testpost",function(Request $req){
	$data=[
		[
			"name"=>$req->post()["name"],
			"lastname"=>$req->post()["lastname"],
			"adress"=>$req->post()["adress"],
			"dateofbirth"=>$req->post()["dateofbirth"],
			"description"=>$req->post()["description"],

		]
	];
	return view("guest.table",["newdata"=>$data]);
})->name("testpostroute");
