<?php
namespace APV\Base\Http\Controllers;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('modules.base::welcome');
    }
}
