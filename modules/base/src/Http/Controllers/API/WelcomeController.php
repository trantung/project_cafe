<?php
namespace APV\Base\Http\Controllers\API;

class WelcomeController extends ApiBaseController
{
    public function index()
    {
        return response()->json(['Welcome API']);
    }
}
