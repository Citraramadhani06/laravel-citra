<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\While_;


Route::resource('mahasiswa', mahasiswaController::class);
