<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $users = App\Models\User::all();

    return view('welcome', [
        'name' => 'Maciek',
        'users' => $users,
    ]);
});

Route::get('/seed', function () {
    return App\Models\User::factory()->create();
});
