<?php

use App\Http\Controllers\WellController;

Route::get('/', function () {
    return redirect('/wells');
});

Route::resource('wells', WellController::class);

