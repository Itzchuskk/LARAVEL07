<?php
use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Http\Controllers\GenderController;

Route::get('/', function () {

    echo 'Hello guys! this is miy first laravel application';
    dump(Universe::all());
});

Route::get('/gender',[GenderController::class,'index']);
