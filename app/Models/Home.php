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

        $query = "SELECT * FROM users u JOIN user_groups ug ON u.ug_group_id = ug.group_id";
        $response = DB::select($query);

        return View::make('welcome')->with('data', $response);
    }


    public static function DeleteUser()
    {
        $id = $_GET['id'];
        $action = $_GET['action'];

        switch ($action) {

            case "User":
                $query = "Update users set user_status = 'INACTIVE' where user_id = $id";
                $response = DB::update($query);

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "AppConf":
                $query = "Update user_appconf set is_active = 0 where appconf_id = $id";
                $response = DB::update($query);

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "bankMasters":
                $response = DB::table('fin_bank_master')->where('bank_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;

            case "chequebook":
                $response = DB::table('fin_cheque_book')->where('cheque_book_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "chequeleaf":
                $response = DB::table('fin_cheque_leaf')->where('cheque_leaf_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "creditdebit":
                $response = DB::table('fin_credit_debit')->where('credit_debit_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "genLedg":
                $response = DB::table('fin_general_ledger_code')->where('general_ledger_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "invPre":
                $response = DB::table('fin_invoice_prefix')->where('invoice_prefix_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;
            case "invStat":
                $response = DB::table('fin_invoice_status')->where('invoice_status_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;

            case "invType":
                $response = DB::table('fin_invoice_type')->where('invoice_type_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;


        }


    }


    public static function Appconf()
    {

        $query = "SELECT * FROM user_appconf";
        $response = DB::select($query);
        return View::make('appconf')->with('data', $response);


    }


    public static function bankAccountMaster()
    {

        $query = "SELECT * FROM fin_bank_account_master";
        $response = DB::select($query);
        return View::make('bankAccountMaster')->with('data', $response);


    }


    public static function bankAccountSignatories()
    {

        $query = "SELECT * FROM fin_bank_account_signatory";
        $response = DB::select($query);
        return View::make('bankAccountSignatories')->with('data', $response);


    }


    public static function bankMasters()
    {

        $query = "SELECT * FROM fin_bank_master";
        $response = DB::select($query);
        return View::make('bankMasters')->with('data', $response);


    }


    public static function chequeBook()
    {

        $query = "SELECT * FROM fin_cheque_book fcb JOIN fin_bank_master fbm ON fcb.bank_acc_no_id=fbm.bank_id";
        $response = DB::select($query);
        return View::make('chequeBook')->with('data', $response);


    }


    public static function chequeLeaves()
    {

        $query = "SELECT * FROM fin_cheque_leaf";
        $response = DB::select($query);
        return View::make('chequeLeaves')->with('data', $response);


    }


    public static function creditdebit()
    {

        $query = "SELECT * FROM fin_credit_debit";
        $response = DB::select($query);
        return View::make('creditdebit')->with('data', $response);


    }


    public static function accountNature()
    {

        $query = "SELECT * FROM fin_nature_of_account";
        $response = DB::select($query);
        return View::make('accountNature')->with('data', $response);


    }


    public static function Asset()
    {
        $query = "SELECT asset_name_id,asset_classification,asset_name FROM fin_asset_name fan JOIN fin_asset_classification fac ON fan.f_asset_classification_id=fac.asset_classification_id";
        $response = DB::select($query);
        return View::make('asset')->with('data', $response);
    }

    public static function depreciationMaster()
    {
        $query = "SELECT depreciation_master_id,asset_classification,govt_depts_name,depreciation_percentage FROM fin_depreciation_master fdp
JOIN fin_asset_classification fan ON fdp.f_asset_classification_id=fan.asset_classification_id
JOIN fin_govt_depts fgd ON fdp.f_govt_depts_id=fgd.fin_govt_depts_id";
        $response = DB::select($query);
        return View::make('depreciation_master')->with('data', $response);
    }

    public static function assetClassification()
    {
        $query = "SELECT * FROM fin_asset_classification";
        $response = DB::select($query);
        return View::make('asset_clasification')->with('data', $response);
    }

    public static function financialYear()
    {
        $query = "SELECT * FROM fin_financialyear";
        $response = DB::select($query);
        return View::make('financial_year')->with('data', $response);
    }

    public static function fixedAssetReg()
    {
        $query = "SELECT asset_classification,asset_name,asset_unique_id,amount_paid,payment_cheque_no,payment_date,installation_date FROM fin_fixed_assets_register fdp
JOIN fin_asset_classification fan ON fdp.f_asset_classification_id=fan.asset_classification_id
JOIN fin_asset_name fgd ON fdp.f_asset_name_id=fgd.asset_name_id";
        $response = DB::select($query);
        return View::make('fixed_asset_reg')->with('data', $response);
    }

    public static function generalLedger()
    {
        $query = "SELECT * FROM fin_general_ledger_code";
        $response = DB::select($query);
        return View::make('generalLedger')->with('data', $response);
    }


    public static function invoicePrefix()
    {
        $query = "SELECT invoice_prefix_id,fit.invoice_type,invoice_prefix FROM fin_invoice_prefix fip JOIN fin_invoice_type fit ON 
fip.invoice_type=fit.invoice_type_id";
        $response = DB::select($query);
        return View::make('invoicePrefix')->with('data', $response);
    }

    public static function invoiceStatus()
    {
        $query = "SELECT invoice_status_id,invoice_status FROM fin_invoice_status";
        $response = DB::select($query);
        return View::make('invoiceStatus')->with('data', $response);
    }


    public static function invoiceType()
    {
        $query = "SELECT invoice_type_id,invoice_type FROM fin_invoice_type";
        $response = DB::select($query);
        return View::make('invoiceType')->with('data', $response);
    }



    public static function subLedger()
    {
        $query = "SELECT sub_ledger_code_id,gl_name,account_head,account_no,nature_of_account FROM fin_sub_ledger_code fsl JOIN fin_nature_of_account fna
ON fsl.fin_nature_of_account=fna.nature_of_account_id JOIN fin_general_ledger_code fgl ON fsl.f_general_ledger_id=fgl.general_ledger_id";
        $response = DB::select($query);
        return View::make('subLedger')->with('data', $response);
    }


    public static function CommTax()
    {
        $query = "SELECT sub_ledger_code_id,gl_name,account_head,account_no,nature_of_account FROM fin_sub_ledger_code fsl JOIN fin_nature_of_account fna
ON fsl.fin_nature_of_account=fna.nature_of_account_id JOIN fin_general_ledger_code fgl ON fsl.f_general_ledger_id=fgl.general_ledger_id";
        $response = DB::select($query);
        return View::make('CommTax')->with('data', $response);
    }


}


