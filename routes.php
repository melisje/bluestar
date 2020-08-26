<?php

/**
 * Your package routes would go here
 */

Route::namespace('Melit\Utils')
     ->prefix('utils')
     ->as('utils.')
     ->group(function ()
     {
         Route::resource('/setting', 'SettingsController');
     })
;

Route::get('utils/admin', function ()
{
    return view('utils::admin');
});
