<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BaseController;



Route::get('/',[BaseController::class,'dashboard'])->name('backend.dashboard');
