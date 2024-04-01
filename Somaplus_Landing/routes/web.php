<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Features', function(){
    return view('Features');
 });
 
 Route::get('SomaplusProposal', 'pdf@download');
 
 Route::get('/pages/Pricing', function (){
     return view('/Pages/Pricing');
 });
 
 //feature details routes
 Route::get('/Features/Admission-management',function(){
     return view('/Details/Admissions');
 });