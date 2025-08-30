<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front/land');
});

//authentication
Route::get('/admin/login',[admin::class,'login'])->name("login");
Route::post('/admin/lc',[admin::class,'lc']);
Route::get('/logout',[admin::class,'logout']);
//end of authentication

// admin
Route::get('/admin/dash',[admin::class,'adminDash'])->middleware("auth");
Route::get('/admin/addCamp',[admin::class,'addCamp'])->middleware("auth");
Route::post('/admin/insCamp',[admin::class,'insCamp'])->middleware("auth");
Route::get('/admin/listCamp',[admin::class,'listCamp'])->middleware("auth");
Route::get('/admin/delCamp/{id}',[admin::class,'delCamp'])->middleware("auth");
Route::get('/admin/editCamp/{id}',[admin::class,'editCamp'])->middleware("auth");
Route::post('/admin/updCamp',[admin::class,'updCamp'])->middleware("auth");

Route::get('/admin/addNews',[admin::class,'addNews'])->middleware("auth");
Route::post('/admin/insNews',[admin::class,'insNews'])->middleware("auth");
Route::get('/admin/listNews',[admin::class,'listNews'])->middleware("auth");
Route::get('/admin/delNews/{id}',[admin::class,'delNews'])->middleware("auth");
Route::get('/admin/editNews/{id}',[admin::class,'editNews'])->middleware("auth");
Route::post('/admin/updNews',[admin::class,'updNews'])->middleware("auth");

Route::get('/admin/addImage',[admin::class,'addImage'])->middleware("auth");
Route::post('/admin/insImage',[admin::class,'insImage'])->middleware("auth");
Route::get('/admin/listImage',[admin::class,'listImage'])->middleware("auth");
Route::get('/admin/delImage/{id}',[admin::class,'delImage'])->middleware("auth");

Route::get('/admin/addVideo',[admin::class,'addVideo'])->middleware("auth");
Route::post('/admin/insVideo',[admin::class,'insVideo'])->middleware("auth");
Route::get('/admin/listVideo',[admin::class,'listVideo'])->middleware("auth");
Route::get('/admin/delVideo/{id}',[admin::class,'delVideo'])->middleware("auth");


Route::get('/admin/allDonation',[admin::class,'alllDonation'])->middleware("auth");
Route::get('/admin/verify/{id}',[admin::class,'verify'])->middleware("auth");
Route::get('/admin/editRemarks/{id}',[admin::class,'editRemarks'])->middleware("auth");
Route::post('/admin/updRemarks',[admin::class,'updRemarks'])->middleware("auth");

Route::get('/admin/penDonation',[admin::class,'penDonation'])->middleware("auth");
Route::get('/admin/verDonation',[admin::class,'verDonation'])->middleware("auth");
Route::get('/admin/donDonation',[admin::class,'donDonation'])->middleware("auth");
Route::get('/admin/viewDonHis/{id}',[admin::class,'viewDonHis'])->middleware("auth");

Route::get('/admin/allAdmin',[admin::class,'allAdmin'])->middleware("auth");
Route::get('/admin/addAdmin',[admin::class,'addAdmin'])->middleware("auth");
Route::get('/admin/delAdmin/{id}',[admin::class,'delAdmin'])->middleware("auth");
Route::post('/admin/insAdmin',[admin::class,'insAdmin'])->middleware("auth");

Route::get('/admin/allMsg',[admin::class,'allMsg'])->middleware("auth");
Route::get('/admin/unreadMsg',[admin::class,'unreadMsg'])->middleware("auth");
Route::get('/admin/readMsg',[admin::class,'readMsg'])->middleware("auth");
Route::get('/admin/viewMsg/{id}',[admin::class,'viewMsg'])->middleware("auth");
Route::get('/admin/markMsg/{id}',[admin::class,'markMsg'])->middleware("auth");
Route::get('/admin/delMsg/{id}',[admin::class,'delMsg'])->middleware("auth");
Route::get('/admin/changePass',[admin::class,'changePass'])->middleware("auth");
Route::post('/admin/updPass',[admin::class,'updPass'])->middleware("auth");
// end admin

// user
Route::get('/allCamp',[admin::class,'allCamp']);
Route::get('/about',[admin::class,'about']);
Route::get('/blog',[admin::class,'blog']);
Route::get('/gallery',[admin::class,'gallery']);
Route::get('/contact',[admin::class,'contact']);
Route::get('/donation/{camp_id}',[admin::class,'donation']);
Route::post('/donate',[admin::class,'donateReg']);
Route::post('/insDonation',[admin::class,'insDonation']);
Route::get('/blogDetails/{news_id}',[admin::class,'blogDetails']);
Route::get('/listDonation',[admin::class,'listDonation']);
Route::post('/allDonation',[admin::class,'allDonation']);
Route::get('/printPDF/{history_id}',[admin::class,'printPDF']);
Route::post('/sendMsg',[admin::class,'sendMsg']);
