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

    public function Asset(Request $request){
        return Home::Asset($request->all());
    }

    public function DepMaster(Request $request){
        return Home::depreciationMaster($request->all());
    }

    public function AssetClassification(Request $request){
        return Home::assetClassification($request->all());
    }

    public function FinancialYear(Request $request){
        return Home::financialYear($request->all());
    }

    public function FixedAssetRegister(Request $request){
        return Home::fixedAssetReg($request->all());
    }

    public function generalLedger(Request $request){
        return Home::generalLedger($request->all());
    }

    public function invoicePrefix(Request $request){
        return Home::invoicePrefix($request->all());
    }

    public function invoiceStatus(Request $request){
        return Home::invoiceStatus($request->all());
    }

    public function invoiceType(Request $request){
        return Home::invoiceType($request->all());
    }

    public function subLedger(Request $request){
        return Home::subLedger($request->all());
    }

    public function CommTax(Request $request){
        return Home::CommTax($request->all());
    }

    public function CommodTax(Request $request){
        return Home::CommodTax($request->all());
    }

    public function CommodTypes(Request $request){
        return Home::CommodTypes($request->all());
    }

    public function corpIncTaxSlab(Request $request){
        return Home::corpIncTaxSlab($request->all());
    }

    public function insuranceCompanies(Request $request){
        return Home::insuranceCompanies($request->all());
    }

    public function taxes(Request $request){
        return Home::taxes($request->all());
    }


    public function voucherType(Request $request){
        return Home::voucherType($request->all());
    }


}