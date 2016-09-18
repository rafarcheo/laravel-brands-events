<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Brand;

class BrandsController extends Controller
{
    public function getIndex() {
    	$brands = Brand::all();

    	return View('brands.index')->with('brands', $brands);
    }

    public function getCreate() {
    	return View('brands.create');
    }

    public function postCreate() {  
    	$user = new Brand();
    	$user->name = Input::get('name');
    	$user->content = Input::get('content');
    	$user->image = Input::get('image');
    	$user->save();
    	return Redirect::to('brands');
    }

    function getRecord($id) {
    	$brand = Brand::find($id);
    	return View('brands.record')->with('brand', $brand);
    }

    function putRecord() { 
    	$user = Brand::find(Input::get('brand_id'));
    	$user->name = Input::get('name');
    	$user->content = Input::get('content');
        $user->image = Input::get('image');
    	$user->save();
    	return Redirect::to('brands');
    }

    function deleteRecord() {
    	$user = Brand::find(Input::get('brand_id'))->delete();
    	return Redirect::to('brands');
    }
}
