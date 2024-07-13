<?php

use App\Models\User;
use App\Models\Companies;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    //Factor(\APP\User::class,3)->create();
    //    User::factory(3)->create();
    Companies::create([
        'user_id' => 1,
        'country' => "India"
    ]);

    Companies::create([
        'user_id' => 2,
        'country' => "USA"
    ]);

    Companies::create([
        'user_id' => 3,
        'country' => "UK"
    ]);
});
