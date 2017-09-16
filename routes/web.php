<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/','HomeController@index');


Route::get('/DeleteUser','HomeController@DeleteUser');


Route::get('/Application-Configuration','HomeController@Appconf');


Route::get('/bankAccountMaster','HomeController@bankAccountMaster');


Route::get('/bankAccountSignatories','HomeController@bankAccountSignatories');


Route::get('/bankMasters','HomeController@bankMasters');


Route::get('/chequeBook','HomeController@chequeBook');


Route::get('/chequeLeaves','HomeController@chequeLeaves');


Route::get('/creditdebit','HomeController@creditdebit');


Route::get('/accountNature','HomeController@accountNature');


Route::get('/Asset','HomeController@Asset');


Route::get('/Depreciation-Master','HomeController@DepMaster');


Route::get('/Asset-Classification','HomeController@AssetClassification');


Route::get('/Financial-Year','HomeController@FinancialYear');


Route::get('/Fixed-Asset-Register','HomeController@FixedAssetRegister');


Route::get('/General-ledger','HomeController@generalLedger');


Route::get('/Invoice-Prefix','HomeController@invoicePrefix');


Route::get('/Invoice-Status','HomeController@invoiceStatus');


Route::get('/Invoice-Type','HomeController@invoiceType');


Route::get('/Sub-Ledger-Code','HomeController@subLedger');


Route::get('/Commercial-Tax','HomeController@CommTax');


Route::get('/Commodity-Taxes','HomeController@CommodTax');


Route::get('/Commodity-Types','HomeController@CommodTypes');


Route::get('/Corp-Income-TaxSlab','HomeController@corpIncTaxSlab');


Route::get('/Insurance-Companies','HomeController@insuranceCompanies');


Route::get('/Taxes','HomeController@taxes');


Route::get('/Voucher-Type','HomeController@voucherType');


Route::get('/Govt-Dept','HomeController@GovtDept');


Route::get('/Monthly-Payment-Master','HomeController@MonthlyPayMaster');


Route::get('/IT-Assesee-Type','HomeController@ItAssesseType');


Route::get('/IT-Hra-Rule','HomeController@ItHraRule');


Route::get('/IT-Deduction-Limit','HomeController@ITDeductionLimit');


Route::get('/IT-Deduction-Header','HomeController@ITDeductionHeader');


Route::get('/IT-Deduction-Header-Cap','HomeController@ITDeductionHeaderCap');


Route::get('/IT-Tax-Slab','HomeController@ITTaxSlab');


Route::get('/IT-Section-Header','HomeController@ITSectionHeader');


Route::get('/Documents-Recieved','HomeController@DocumentsReceived');


Route::get('/My-It-Declaration','HomeController@MyItDeclaration');


Route::get('/Branch-Type-Master','HomeController@BranchTypeMaster');


Route::get('/Designation','HomeController@Designation');


Route::get('/Users-Disabled-Dependents','HomeController@UsersDisabledDependents');


Route::get('/Earning','HomeController@Earning');


Route::get('/Employment-Type','HomeController@EmploymentType');


Route::get('/Family','HomeController@Family');


Route::get('/HR-Attendence-Mapping','HomeController@HRAttendenceMapping');


Route::get('/Buy-Policy','HomeController@BuyPolicy');


Route::get('/Service-Category','HomeController@ServiceCategory');


Route::get('/Service-Center-Deliverable','HomeController@ServiceCenterDeliverable');


Route::get('/Service-Center-Group','HomeController@ServiceCenterGroup');


Route::get('/Service-Center1','HomeController@ServiceCenter1');


Route::get('/Service-Center2','HomeController@ServiceCenter2');


Route::get('/Service-Charge','HomeController@ServiceCharge');


Route::get('/Payment-Status','HomeController@PaymentStatus');


Route::get('/Deletion-IMT21','HomeController@DelIMT21');