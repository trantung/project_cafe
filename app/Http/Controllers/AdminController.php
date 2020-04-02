<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();
        //dd('2131', $input);
    	if (!Auth::attempt(['username' => $input['username'], 'password' => $input['password']])) {
            return Redirect::action('AdminController@getLogin');
        }

    	return Redirect::action('AdminController@index');
    }

    public function postLogout()
    {
    	Auth::logout();
    	return Redirect::action('AdminController@getLogin');
    }

    public function getError()
    {
        return view('admin.404');
    }
    public function getBlank()
    {
        return view('admin.blank');
    }
    public function getTables()
    {
        return view('admin.tables');
    }
    public function getCharts()
    {
        return view('admin.charts');
    }
    public function getRegister()
    {
        return view('admin.register');
    }
    
    public function index()
    {
        return view('admin.index');
    }

    
}
