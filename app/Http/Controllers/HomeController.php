<?php

namespace App\Http\Controllers;

use App\Models\Home;
use View;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    //


    public function index(Request $request)
    {
        return Home::index($request->all());
    }

}