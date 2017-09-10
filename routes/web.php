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

