<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
    public function getIndex() {
    	$users = User::all();
    	return View('users.index')->with('users', $users);
    }

    public function getCreate() {
    	return View('users.create');
    }

    public function postCreate() {
    	$user = new User();
    	$user->name = Input::get('name');
    	$user->email = Input::get('email');
    	$user->password = Input::get('password');
    	$user->save();
    	return Redirect::to('users');
    }

    function getRecord($id) {
    	$user = User::find($id);
    	return View('user.record')->with('user', $user);
    }

    function putRecord() {
    	$user = User::find(Input::get('user_id'));
    	$user->username = Input::get('username');
    	$user->emile = Input::get('email');
    	$user->save();
    	return Redirect::to('users');
    }

    function deleteRecord() {
    	$user = User::find(Input::get('user_id'))->delete();
    	return Redirect::to('users');
    }
}
