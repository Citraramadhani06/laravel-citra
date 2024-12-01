<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\While_;

Route::get('/', function () {
   return view('index');
});

Route::get('about',function(){
    return view('about');
});

Route::get('mahasiswa',function(){
    $nim =  [123,124,125,126];
    $nama = ['cici','caca','cia','cece'];
    $jumlah = count($nim);
    return view('mahasiswa', compact('nim', 'jumlah','nama'));
});

Route::get('profile',function(){
    $nama = 'Citra';
    // return view('profile', compact('nama')); 
    return view('profile')->with('nama', $nama);
});

