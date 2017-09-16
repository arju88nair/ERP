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

    public function GovtDept(Request $request){
        return Home::govtDept($request->all());
    }

    public function MonthlyPayMaster(Request $request){
        return Home::monthlyPayMaster($request->all());
    }

    public function ItAssesseType(Request $request){
        return Home::itAssesseType($request->all());
    }

    public function ItHraRule(Request $request){
        return Home::itHraRule($request->all());
    }

    public function ITDeductionLimit(Request $request){
        return Home::itDeductionLimit($request->all());
    }

    public function ITDeductionHeader(Request $request){
        return Home::iTDeductionHeader($request->all());
    }

    public function ITDeductionHeaderCap(Request $request){
        return Home::iTDeductionHeaderCap($request->all());
    }

    public function ITTaxSlab(Request $request){
        return Home::iTTaxSlab($request->all());
    }

    public function ITSectionHeader(Request $request){
        return Home::iTSectionHeader($request->all());
    }

    public function DocumentsReceived(Request $request){
        return Home::DocumentsReceived($request->all());
    }


    public function MyItDeclaration(Request $request){

        return Home::MyItDeclaration($request->all());
    }


    public function BranchTypeMaster(Request $request){

        return Home::BranchTypeMaster($request->all());
    }


    public function Designation(Request $request){

        return Home::Designation($request->all());
    }


    public function UsersDisabledDependents(Request $request){

        return Home::UsersDisabledDependents($request->all());
    }


    public function Earning(Request $request){

        return Home::Earning($request->all());
    }


    public function EmploymentType(Request $request){

        return Home::EmploymentType($request->all());
    }

    public function Family(Request $request){

        return Home::Family($request->all());
    }

    public function HRAttendenceMapping(Request $request){
        return Home::hRAttendenceMapping($request->all());
    }

    public function BuyPolicy(Request $request){
        return Home::buyPolicy($request->all());
    }

    public function ServiceCategory(Request $request){
        return Home::serviceCategory($request->all());
    }

    public function ServiceCenterDeliverable(Request $request){
        return Home::serviceCenterDeliverable($request->all());
    }

    public function ServiceCenterGroup(Request $request){
        return Home::serviceCenterGroup($request->all());
    }

    public function ServiceCenter1(Request $request){
        return Home::serviceCenter1($request->all());
    }

    public function ServiceCenter2(Request $request){
        return Home::serviceCenter2($request->all());
    }

    public function ServiceCharge(Request $request){
        return Home::serviceCharge($request->all());
    }

    public function PaymentStatus(Request $request){
        return Home::paymentStatus($request->all());
    }

    public function DelIMT21(Request $request){
        return Home::delIMT21($request->all());
    }
}