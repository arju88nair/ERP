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

    public function DeleteUser(Request $request)
    {
        return Home::DeleteUser($request->all());
    }

    public function Appconf(Request $request)
    {

        return Home::Appconf($request->all());
    }

    public function bankAccountMaster(Request $request)
    {

        return Home::bankAccountMaster($request->all());
    }

    public function bankAccountSignatories(Request $request)
    {

        return Home::bankAccountSignatories($request->all());
    }

    public function bankMasters(Request $request)
    {

        return Home::bankMasters($request->all());
    }

    public function chequeBook(Request $request)
    {

        return Home::chequeBook($request->all());
    }

    public function chequeLeaves(Request $request)
    {

        return Home::chequeLeaves($request->all());
    }

    public function creditdebit(Request $request)
    {

        return Home::creditdebit($request->all());
    }

    public function accountNature(Request $request)
    {

        return Home::accountNature($request->all());
    }

}