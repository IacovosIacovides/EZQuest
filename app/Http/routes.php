<?php

//===================================
// STATIC PAGES =====================
//===================================

//shows a static view from the home page (app / resources / home.blade.php )
Route::get('/', function()
{
    return view('home')
});