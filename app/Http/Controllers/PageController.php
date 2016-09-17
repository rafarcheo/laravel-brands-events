<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class PageController extends Controller
{
    function index() {
    	$atributes = User::all()->first();
    	echo '<pre>';
    	var_dump($atributes);
    	echo '<pre>';
    }
}
