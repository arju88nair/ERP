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

            case "commodType":
                $response = DB::table('fin_commodity_type')->where('commodity_type_id', $id)->delete();;

                if ($response) {
                    return 1;
                }
                return 0;
                break;


            case "insuranceCompanies":
                $response = DB::table('fin_insurance_companies')->where('insurance_companies_id', $id)->delete();;

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
        $query = "SELECT commercial_tax_id,tax_name,state_id,user_financial_year,tax_rate,draw_back_available FROM
fin_commercial_tax fct JOIN fin_taxes ft ON ft.taxes_id=fct.tax_name_id ";
        $response = DB::select($query);
        return View::make('CommTax')->with('data', $response);
    }



    public static function CommodTax()
    {
        $query = "SELECT commodity_tax_id,commodity_name,state_id,state_tax_rate,centre_tax_rate,service_tax_rate FROM
fin_commodity_tax fct JOIN fin_commodity_type ft ON ft.commodity_type_id=fct.f_commodity_type_id ";
        $response = DB::select($query);
        return View::make('CommodTax')->with('data', $response);
    }




    public static function CommodTypes()
    {
        $query = "SELECT commodity_type_id,commodity_name FROM fin_commodity_type
";
        $response = DB::select($query);
        return View::make('CommodTypes')->with('data', $response);
    }




    public static function corpIncTaxSlab()
    {
        $query = "SELECT corp_income_tax_slab_id,description,finyear,income_from,income_to,tax_rate_percent FROM
fin_corp_income_tax_slab fct JOIN user_corporate_structure ucs ON fct.u_corporate_structure_id=ucs.corporate_structure_id 
JOIN user_financial_year ufy ON fct.u_financial_year_id=ufy.user_financial_year_id";
        $response = DB::select($query);
        return View::make('corpIncTaxSlab')->with('data', $response);
    }


    public static function insuranceCompanies()
    {
        $query = "SELECT insurance_companies_id,insurance_companies_name FROM fin_insurance_companies
";
        $response = DB::select($query);
        return View::make('insuranceCompanies')->with('data', $response);
    }


    public static function taxes()
    {
        $query = "SELECT taxes_id,tax_name FROM fin_taxes ";
        $response = DB::select($query);
        return View::make('taxes')->with('data', $response);
    }



    public static function voucherType()
    {
        $query = "SELECT voucher_type_id,voucher_type,vr_prefix,finyear FROM fin_voucher_type fvt JOIN user_financial_year ufy 
ON fvt.u_financial_year_id=ufy.user_financial_year_id
";
        $response = DB::select($query);
        return View::make('voucherType')->with('data', $response);
    }

    public static function govtDept(){
        $query = "SELECT fin_govt_depts_id,govt_depts_name FROM fin_govt_depts";
        $response = DB::select($query);
        return View::make('govt_dept')->with('data',$response);
    }

    public static function monthlyPayMaster(){
        $query = "SELECT monthly_payment_master_id,voucher_type,user_name,account_head,amount_payable,due_date,narration
FROM fin_monthly_payment_master fmp JOIN fin_voucher_type fvt ON fmp.voucher_types_id=fvt.voucher_type_id
JOIN users u ON fmp.name_of_payee_id=u.user_id
JOIN fin_sub_ledger_code fsl ON fmp.f_sub_ledger_code_id=fsl.sub_ledger_code_id";
        $response = DB::select($query);
        return View::make('monthly_pay_master')->with('data',$response);
    }

    public static function itAssesseType(){
        $query = "SELECT assessee_type_id,assessee_type FROM hr_it_assessee_type";
        $response = DB::select($query);
        return View::make('it_assesse_type')->with('data',$response);
    }

    public static function itHraRule(){
        $query = "SELECT it_hra_rules_id,city_name,it_exemption_limit_percent FROM hr_it_hra_rules hih JOIN user_city_master ucm ON hih.assessee_residence_city=ucm.city_master_id";
        $response = DB::select($query);
        return View::make('it_hra_rule')->with('data',$response);
    }

    public static function itDeductionLimit(){
        $query = "SELECT it_deduction_limit_id,it_deduction_header_name,financial_year,assessee_type,deduction_percent_allowed,deduction_amount_allowed
FROM hr_it_deduction_limit hid JOIN hr_it_deduction_header hidh ON hid.hfd_head_for_deduction_id=hidh.it_deduction_header_id
JOIN hr_it_assessee_type hia ON hid.at_assessee_type_id=hia.assessee_type_id
JOIN hr_it_financialyear hif ON hid.fy_financial_year_id=hif.it_financialyear_id";
        $response = DB::select($query);
        return View::make('it_deduction_limit')->with('data',$response);
    }

    public static function iTDeductionHeader(){
        $query = "SELECT it_deduction_header_id,it_deduction_header_name,ithd_it_head_for_deduction_id FROM hr_it_deduction_header ORDER BY it_deduction_header_id desc";
        $response = DB::select($query);
        return View::make('it_deduction_header')->with('data', $response);
    }

    public static function iTDeductionHeaderCap(){
        $query = "SELECT it_sectionheader_cap_id,financial_year,assessee_type,it_head_for_deduction,deduction_percentage,deduction_cap
FROM hr_it_sectionheader_cap his JOIN hr_it_financialyear hif ON his.fy_financial_year_id=hif.it_financialyear_id
JOIN hr_it_assessee_type hia ON his.at_assessee_type_id=hia.assessee_type_id
JOIN hr_it_sectionheader hish ON his.it_sectionheader_id=hish.it_sectionheader_id";
        $response = DB::select($query);
        return View::make('it_section_header_cap')->with('data',$response);
    }

    public static function iTTaxSlab(){
        $query = "SELECT hr_it_taxslab_id,assessee_type,financial_year,income_from,income_to,fixed_amount,percent_taxable_income
FROM hr_it_taxslab his JOIN hr_it_financialyear hif ON his.fy_financial_year_id=hif.it_financialyear_id
JOIN hr_it_assessee_type hia ON his.at_assessee_type_id=hia.assessee_type_id";
        $response = DB::select($query);
        return View::make('it_tax_slab')->with('data', $response);
    }

    public static function iTSectionHeader(){
        $query = "SELECT it_sectionheader_id,it_head_for_deduction FROM hr_it_sectionheader";
        $response = DB::select($query);
        return View::make('it_section_header')->with('data', $response);
    }

    public static function DocumentsReceived()
    {
        $query = "SELECT documents_recieved_id,user_name,document_name,submitted_on_date,amount_paid
FROM hr_documents_recieved hdr JOIN users u ON hdr.u_user_id=u.user_id
JOIN hr_type_of_document htd ON hdr.tod_type_of_document_id=type_of_document_id";
        $response = DB::select($query);
        return View::make('DocumentsReceived')->with('data', $response);
    }


    public static function MyItDeclaration()
    {
        $query = "SELECT it_employee_declaration_id,it_deduction_header_name,amount_declared,date_declared
FROM hr_it_employee_declaration hed JOIN hr_it_deduction_header hdh ON hed.itdh_it_deduction_header_id=hdh.it_deduction_header_id
";
        $response = DB::select($query);
        return View::make('MyItDeclaration')->with('data', $response);
    }


    public static function BranchTypeMaster()
    {
        $query = "SELECT branch_type_master_id,branch_type,STATUS FROM user_branch_type_master";
        $response = DB::select($query);
        return View::make('BranchTypeMaster')->with('data', $response);
    }

    public static function Designation()
    {
        $query = "SELECT designation_id,designation FROM user_designation";
        $response = DB::select($query);
        return View::make('Designation')->with('data', $response);
    }


    public static function UsersDisabledDependents()
    {
        $query = "SELECT it_users_disabled_dependents_id,disablity_percentage FROM hr_it_users_disabled_dependents";
        $response = DB::select($query);
        return View::make('UsersDisabledDependents')->with('data', $response);
    }


    public static function Earning()
    {
        $query = "SELECT salary_earning_id,user_name,sh_salary_head_id,amount_earned FROM hr_salary_earning hse JOIN users u ON hse.u_user_id=u.user_id";
        $response = DB::select($query);
        return View::make('Earning')->with('data', $response);
    }


    public static function EmploymentType()
    {
        $query = "SELECT employment_type_id,employment_type,STATUS FROM hr_employment_type";
        $response = DB::select($query);
        return View::make('EmploymentType')->with('data', $response);
    }

    public static function Family()
    {
        $query = "SELECT it_users_family_composition_id,Description FROM hr_it_users_family_composition";
        $response = DB::select($query);
        return View::make('Family')->with('data', $response);
    }

    public static function hRAttendenceMapping(){
        $query = "SELECT hr_attendence_mapping_id Record_No,user_name User_Name,attendence_mapping Attendence_Mapping
FROM hr_attendence_mapping ham JOIN users u ON ham.u_user_id=u.user_id";
        $response = DB::select($query);
        return View::make('hr_attendence_mapping')->with('data', $response);
    }

    public static function buyPolicy(){
        $query = "SELECT servicecentre_category_id Record_no,servicecentre_category Service_Centre_category FROM is_servicecentre_category";
        $response = DB::select($query);
        return View::make('is_service_category')->with('data', $response);
    }

    public static function serviceCategory(){
        $query = "SELECT servicecentre_category_id Record_no,servicecentre_category Service_Centre_category FROM is_servicecentre_category";
        $response = DB::select($query);
        return View::make('is_service_category')->with('data', $response)->with('title', 'Service Category');
    }

    public static function serviceCenterDeliverable(){
        $query = "SELECT servicecentre_group_id Record_No,isc.servicecentre_category Service_Centre_Category,servicecentre_group Service_Centre_Group,
insurance_company_name Insurance_Company,servicecentre_deliverable Service_Centre_Deliverable
FROM is_servicecentre_group isg JOIN is_servicecentre_category isc ON isg.servicecentre_category=isc.servicecentre_category_id
JOIN is_insurance_companies iic ON isg.ic_insurance_company_id=iic.company_id";
        $response = DB::select($query);
        return View::make('is_service_deliverable')->with('data', $response)->with('title', 'Service Deliverable');
    }

    public static function serviceCenterGroup(){
        $query = "SELECT servicecentre_group_id Record_No,isc.servicecentre_category Service_Centre_Category,insurance_company_name Insurance_Company_Name,
type_of_policy Type_Of_Policy,servicecentre_group Service_Centre_Group,servicecentre_deliverable Service_Centre_Deliverable
FROM is_servicecentre_group isg JOIN is_servicecentre_category isc ON isg.servicecentre_category=isc.servicecentre_category_id
JOIN is_insurance_companies iic ON isg.ic_insurance_company_id=iic.company_id
JOIN is_type_of_policy itp ON isg.top_type_of_policy_id=itp.type_of_policy_id ORDER BY servicecentre_group_id desc";
        $response = DB::select($query);
        return View::make('is_service_center_group')->with('data', $response)->with('title', 'Service Center Group');
    }

    public static function serviceCenter1(){
        $query = "SELECT servicecentre1_id Record_No,user_name User_Name,servicecentre_group Service_Centre_Group
FROM is_servicecentre1 isc1 JOIN users u ON isc1.user_user_id=u.user_id
JOIN is_servicecentre_group isg ON isc1.scg_servicecentre_group_id=isg.servicecentre_group_id
ORDER BY servicecentre1_id DESC";
        $response = DB::select($query);
        return View::make('is_service_center1')->with('data',$response)->with('title', 'Service Center1');
    }

    public static function serviceCenter2(){
        $query = "SELECT servicecentre2_id Record_No,user_name User_Name,servicecentre_group Service_Centre_Group
FROM is_servicecentre2 isc1 JOIN users u ON isc1.user_user_id=u.user_id
JOIN is_servicecentre_group isg ON isc1.scg_servicecentre_group_id=isg.servicecentre_group_id
ORDER BY servicecentre2_id DESC";
        $response = DB::select($query);
        return View::make('is_service_center2')->with('data',$response)->with('title', 'Service Center2');
    }

    public static function serviceCharge(){
        $query = "SELECT servicecharge_id Record_No,insurance_company_name Insurance_Company_Name,type_of_vehicle Type_Of_Vehicle,
type_of_policy Type_Of_Policy,service_charge Service_Charge
FROM is_servicecharge isc JOIN is_auto_type_of_vehicle iat ON isc.tov_type_of_vehicle_id=iat.type_of_vehicle_id
JOIN is_type_of_policy itp ON isc.top_type_of_policy_id=itp.type_of_policy_id
JOIN is_insurance_companies iic ON isc.ic_insurancecompany_id=iic.company_id
ORDER BY servicecharge_id desc";
        $response = DB::select($query);
        return View::make('is_service_charge')->with('data',$response)->with('title', 'Service Charge');
    }

    public static function paymentStatus(){
        $query = "SELECT payment_status_id Record_No,payment_status Payment_Status FROM is_payment_status";
        $response = DB::select($query);
        return View::make('is_payment_status')->with('data',$response)->with('title', 'Payment Status');
    }

    public static function delIMT21(){
        $query = "SELECT deletion_of_imt21_id Record_No,type_of_vehicle Type_Of_Vehicle,imt21_deletion_percentage IMT21_Deletion_Percentage
FROM is_auto_deletion_of_imt21 isd JOIN is_auto_type_of_vehicle iat ON isd.type_of_vehicle_id=iat.type_of_vehicle_id";
        $response = DB::select($query);
        return View::make('is_deletion_imt')->with('data',$response)->with('title', 'Deletion of IMT21');
    }

}


