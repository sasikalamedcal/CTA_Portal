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


Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register' => false]);
Route::middleware(['auth'])->prefix('/')->group(function() {
Route::get('home', 'HomeController@getIndex')->name('home');

Route::get('loas/create','LoaController@create')->name('Create Loa');
Route::get('/LOA', function () {
    return view('LOA.Create');
});
//Route::post('/loas/store','LOAController@store');
Route::post('/loas/store', [LOAController::class, 'store']);

Route::get('profile', 'HomeController@getProfile')->name('profile');
Route::patch('profile/update/{id}', 'HomeController@patchUpdate')->name('update');
Route::get('password', 'HomeController@getPassword')->name('password');
Route::patch('password/update/{id}', 'HomeController@patchPassword')->name('update password');

Route::get('users','UserController@index')->name('User List');
Route::get('users/create','UserController@create')->name('Create User');
Route::post('users/store','UserController@store')->name('Add User');
Route::get('users/edit/{id}','UserController@edit')->name('Edit User');
Route::patch('users/update/{id}','UserController@update')->name('Update User');
Route::delete('users/destroy/{id}','UserController@destroy')->name('Delete User');

Route::get('cases','CaseController@index')->name('Case List');
Route::get('cases/create','CaseController@create')->name('Create Case');
Route::post('cases/store','CaseController@store')->name('Add Case');
Route::get('cases/edit/{id}','CaseController@edit')->name('Edit Case');
Route::patch('cases/update/{id}','CaseController@update')->name('Update Case');
Route::delete('cases/destroy/{id}','CaseController@destroy')->name('Delete Case');

Route::get('loas','LoaController@index')->name('Loa List');
Route::get('loas/create','LoaController@create')->name('Create Loa');
Route::post('loas/store','LoaController@store')->name('Add Loa');
Route::get('loas/download/{id}','LoaController@download')->name('Download Loa');
Route::get('loas/unzip/{id}','LoaController@unzip')->name('Unzip Loa');

Route::get('loas/vtiger/{id}','LoaController@vtiger')->name('Vtiger Loa');

Route::patch('loas/update/{id}','LoaController@update')->name('Update Loa');
Route::delete('loas/destroy/{id}','LoaController@destroy')->name('Delete Loa');

// Auto Trigger
Route::get('loas/status','LoaController@status')->name('Status');
Route::get('loas/complete','LoaController@complete')->name('complete');

Route::get('fuse','FuseController@index')->name('Fuse List');
Route::get('fuse/create','FuseController@create')->name('Create Fuse');
Route::post('fuse/store','FuseController@store')->name('Add Fuse');
Route::get('fuse/download/{id}','FuseController@download')->name('Download Fuse');
Route::get('fuse/unzip/{id}','FuseController@unzip')->name('Unzip Fuse');
Route::get('fuse/vtiger/{id}','FuseController@vtiger')->name('Vtiger Fuse');
Route::patch('fuse/update/{id}','FuseController@update')->name('Update Fuse');
Route::delete('fuse/destroy/{id}','FuseController@destroy')->name('Delete Fuse');


// Auto Trigger
Route::get('fuse/status','FuseController@status')->name('Status');
Route::get('fuse/complete','FuseController@complete')->name('complete');



Route::get('leadsources','LeadsourceController@index')->name('Leadsource List');
Route::get('leadsources/create','LeadsourceController@create')->name('Create Leadsource');
Route::post('leadsources/store','LeadsourceController@store')->name('Add Leadsource');
Route::get('leadsources/edit/{id}','LeadsourceController@edit')->name('Edit Leadsource');
Route::patch('leadsources/update/{id}','LeadsourceController@update')->name('Update Leadsource');
Route::delete('leadsources/destroy/{id}','LeadsourceController@destroy')->name('Delete Leadsource');

Route::get('lenders','LenderController@index')->name('Lender List');
Route::get('lenders/create','LenderController@create')->name('Create Lender');
Route::post('lenders/store','LenderController@store')->name('Add Lender');
Route::get('lenders/edit/{id}','LenderController@edit')->name('Edit Lender');
Route::patch('lenders/update/{id}','LenderController@update')->name('Update Lender');
Route::delete('lenders/destroy/{id}','LenderController@destroy')->name('Delete Lender');

Route::get('accounts','AccountController@index')->name('Account List');
Route::get('accounts/create','AccountController@create')->name('Create Account');
Route::post('accounts/store','AccountController@store')->name('Add Account');
Route::get('accounts/edit/{id}','AccountController@edit')->name('Edit Account');
Route::patch('accounts/update/{id}','AccountController@update')->name('Update Account');
Route::delete('accounts/destroy/{id}','AccountController@destroy')->name('Delete Account');


Route::get('whitelists','WhitelistController@index')->name('Whitelist List');
Route::get('whitelists/create','WhitelistController@create')->name('Create Whitelist');
Route::post('whitelists/store','WhitelistController@store')->name('Add Whitelist');
Route::get('whitelists/edit/{id}','WhitelistController@edit')->name('Edit Whitelist');
Route::patch('whitelists/update/{id}','WhitelistController@update')->name('Update Whitelist');
Route::delete('whitelists/destroy/{id}','WhitelistController@destroy')->name('Delete Whitelist');
Route::get('whitelists/activate','WhitelistController@activate')->name('Whitelist List');
Route::get('whitelists/deactivate','WhitelistController@deactivate')->name('Whitelist List');


Route::get('campaigns','CampaignController@index')->name('Campaign List');
Route::get('campaigns/create','CampaignController@create')->name('Create Campaign');
Route::post('campaigns/store','CampaignController@store')->name('Add Campaign');
Route::get('campaigns/edit/{id}','CampaignController@edit')->name('Edit Campaign');
Route::patch('campaigns/update/{id}','CampaignController@update')->name('Update Campaign');
Route::delete('campaigns/destroy/{id}','CampaignController@destroy')->name('Delete Campaign');
Route::get('campaigns/activate','CampaignController@activate')->name('Campaign List');
Route::get('campaigns/deactivate','CampaignController@deactivate')->name('Campaign List');

});