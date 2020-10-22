<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
    	$cooks=[
		[
			"id"=>$cooks = DB::table('cooks')->get("id"),
			"cook_name"=>$cooks = DB::table('cooks')->get("cook_name"),
			"category_id"=>$cooks = DB::table('cooks')->get("category_id"),
			"recipt"=>$cooks = DB::table('cooks')->get("recipt"),
		]
	];
    	return view("guest.table",["cooks"=>$cooks]);
    }
    public function category($post)
    {
    	$cooks=[
		[
			"id"=>$cooks = DB::table('cooks')->get("id"),
			"cook_name"=>$cooks = DB::table('cooks')->get("cook_name"),
			"category_id"=>$cooks = DB::table('cooks')->get("category_id"),
			"recipt"=>$cooks = DB::table('cooks')->get("recipt"),
		]
    	return view("guest.table");
    }
}
