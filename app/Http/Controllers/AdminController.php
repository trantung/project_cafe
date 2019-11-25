<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use APV\Base\Services\ApiAuth;
use APV\User\Services\UserService;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function __construct(ApiAuth $apiAuth, UserService $userService)
    {
        $this->apiAuth = $apiAuth;
        $this->userService = $userService;
    }

    public function getLogin()
    {
    	return view('admin.login');
    }

    public function postLogin(Request $request)
    {
    	$input = $request->all();
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
    
    public function index()
    {
        return view('admin.index');
    }
    
}
