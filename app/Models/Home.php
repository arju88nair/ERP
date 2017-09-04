<?php
/**
 * Created by PhpStorm.
 * User: nair
 * Date: 21/8/17
 * Time: 5:11 PM
 */

namespace App\Models;

use DB;
use Illuminate\Support\Facades\Mail;
use Redirect;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Route;


class Home extends Model
{



    public static function index()
    {

        $query="SELECT * FROM users u JOIN user_groups ug ON u.ug_group_id = ug.group_id";
        $response=DB::select($query);

        return View::make('welcome')->with('data',$response);
    }


    public static function DeleteUser()
    {
        $id=$_GET['id'];
        $action=$_GET['action'];

        switch ($action)
        {

            case "User":
                $query="Update users set user_status = 'INACTIVE' where user_id = $id";
                $response=DB::update($query);

                if($response)
                {
                    return 1;
                }
                return 0;
                break;
            case "AppConf":
                $query="Update user_appconf set is_active = 0 where appconf_id = $id";
                $response=DB::update($query);

                if($response)
                {
                    return 1;
                }
                return 0;
                break;
            case "bankMasters":
                $response=DB::table('fin_bank_master')->where('bank_id', $id)->delete();
                ;

                if($response)
                {
                    return 1;
                }
                return 0;
                break;

            case "chequebook":
                $response=DB::table('fin_cheque_book')->where('cheque_book_id', $id)->delete();
                ;

                if($response)
                {
                    return 1;
                }
                return 0;
                break;
            case "chequeleaf":
                $response=DB::table('fin_cheque_leaf')->where('cheque_leaf_id', $id)->delete();
                ;

                if($response)
                {
                    return 1;
                }
                return 0;
                break;
            case "creditdebit":
                $response=DB::table('fin_credit_debit')->where('credit_debit_id', $id)->delete();
                ;

                if($response)
                {
                    return 1;
                }
                return 0;
                break;


        }







    }


    public static function Appconf()
    {

        $query="SELECT * FROM user_appconf";
        $response=DB::select($query);
        return View::make('appconf')->with('data',$response);


    }



    public static function bankAccountMaster()
    {

        $query="SELECT * FROM fin_bank_account_master";
        $response=DB::select($query);
        return View::make('bankAccountMaster')->with('data',$response);


    }



    public static function bankAccountSignatories()
    {

        $query="SELECT * FROM fin_bank_account_signatory";
        $response=DB::select($query);
        return $response;
        return View::make('bankAccountSignatories')->with('data',$response);


    }


    public static function bankMasters()
    {

        $query="SELECT * FROM fin_bank_master";
        $response=DB::select($query);
        return View::make('bankMasters')->with('data',$response);


    }


    public static function chequeBook()
    {

        $query="SELECT * FROM fin_cheque_book fcb JOIN fin_bank_master fbm ON fcb.bank_acc_no_id=fbm.bank_id";
        $response=DB::select($query);
        return View::make('chequeBook')->with('data',$response);


    }


    public static function chequeLeaves()
    {

        $query="SELECT * FROM fin_cheque_leaf";
        $response=DB::select($query);
        return View::make('chequeLeaves')->with('data',$response);


    }


    public static function creditdebit()
    {

        $query="SELECT * FROM fin_credit_debit";
        $response=DB::select($query);
        return View::make('creditdebit')->with('data',$response);


    }



    public static function accountNature()
    {

        $query="SELECT * FROM fin_nature_of_account";
        $response=DB::select($query);
        return View::make('accountNature')->with('data',$response);


    }



}


