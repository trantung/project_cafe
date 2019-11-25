<?php
namespace APV\Base\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
}
