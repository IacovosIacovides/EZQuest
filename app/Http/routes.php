<?php

//===================================
// STATIC PAGES =====================
//===================================

//shows a static view from the home page (app / resources / Home.blade.php )
Route::get('/', function()
{
    return view ('Home');
});