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


Route::get('/' , function ()
{
  return view( 'welcome');
});
 Auth::routes(['verify' => true]);
//Route::get('profile', function () {})->middleware('verified');
Route::get('/home', 'HomeController@index')->name('home');
//pages
Route::get('/', 'RegController@welcome')->name('welcome');
Route::get('editProfile', 'RegController@editProfile')->name('editProfile');
Route::get('about', 'RegController@about')->name('about');
Route::get('contact', 'RegController@contact')->name('contact');
Route::get('Donation', 'RegController@Donation')->name('Donation');
Route::get('impact', 'RegController@impact')->name('impact');
Route::get('partner', 'RegController@partner')->name('partner');
Route::get('whyjoin', 'RegController@whyjoin')->name('whyjoin');

//programs  page
Route::get('cash', 'RegController@cash')->name('cash');
Route::get('clothes', 'RegController@clothes')->name('clothes');
Route::get('dowry', 'RegController@dowry')->name('dowry');
Route::get('food', 'RegController@food')->name('food');
Route::get('healthcare', 'RegController@healthcare')->name('healthcare');
Route::get('tents', 'RegController@tents')->name('tents');
//contact us
Route::post('contactForm', 'RegController@contactForm')->name('contactForm');
// volunteer
Route::get('volunteer', 'RegController@volunteer')->name('volunteer');
Route::post('volunteerform', 'RegController@volunteerform')->name('volunteerform');

Route::get('/index', 'RegController@index')->name('Index');
Route::get('registration', 'RegController@registration')->name('registration');
Route::post('reg', 'RegController@reg')->name('reg');

//add user
Route::get('users', 'UserController@adduser')->name('users');
Route::post('saveUser', 'UserController@saveUser')->name('saveUser');

//manag User
Route::get('manageUser', 'UserController@manageUser')->name('manageUser');
Route::get('editUser', 'UserController@editUser')->name('editUser');
Route::post('updateUser', 'UserController@updateUser')->name('updateUser');
Route::get('deleteUser', 'UserController@deleteUser')->name('deleteUser');
//admin profile
Route::get('adminProfile', 'UserController@adminProfile')->name('adminProfile');

// donation categories
Route::get('donationItem', 'CategoriesController@donationItem')->name('donationItem');
Route::post('addItem', 'CategoriesController@addItem')->name('addItem');
Route::get('manageItem', 'CategoriesController@manageItem')->name('manageItem');
Route::get('editItem', 'CategoriesController@editItem')->name('editItem');
Route::post('updateItem', 'CategoriesController@updateItem')->name('updateItem');
Route::get('deleteItem', 'CategoriesController@deleteItem')->name('deleteItem');

//Recipient
Route::get('recipient', 'RecipientController@recipient')->name('recipient');
Route::post('r_store', 'RecipientController@r_store')->name('r_store');
Route::get('r_show', 'RecipientController@r_show')->name('r_show');
Route::get('r_edit', 'RecipientController@r_edit')->name('r_edit');
Route::post('r_update', 'RecipientController@r_update')->name('r_update');
Route::get('r_destroy', 'RecipientController@r_destroy')->name('r_destroy');
//Recipient Management
Route::get('subtract/{id}','RecipientController@subtract')->name('subtract');
Route::get('R_delete/{id}','HomeController@R_delete')->name('R_delete');

//Donor
Route::get('donor', 'DonorController@donor')->name('donor');
Route::post('d_store', 'DonorController@d_store')->name('d_store');
Route::get('d_show', 'DonorController@d_show')->name('d_show');
Route::get('d_edit', 'DonorController@d_edit')->name('d_edit');
Route::post('d_update', 'DonorController@d_update')->name('d_update');
Route::get('d_destroy', 'DonorController@d_destroy')->name('d_destroy');
//doner management
Route::get('sum/{id}','DonorController@sumDonation')->name('sum');
Route::get('delete/{id}','HomeController@delete')->name('delete');
//managment
Route::get('mstock','HomeController@mstock')->name('mstock');


//Sub Categories
Route::get('create', 'SubCategoriesController@create')->name('create');
Route::post('store', 'SubCategoriesController@store')->name('store');
Route::get('show', 'SubCategoriesController@show')->name('show');
Route::get('edit', 'SubCategoriesController@edit')->name('edit');
Route::post('update', 'SubCategoriesController@update')->name('update');
Route::get('destroy', 'SubCategoriesController@destroy')->name('destroy');
//
Route::post('find_sub_cat', 'SubCategoriesController@find_sub_cat')->name('find_sub_cat');

