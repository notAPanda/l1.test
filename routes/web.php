<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $users = App\Models\User::all();

    return view('welcome', [
        'name' => 'Maciek',
        'users' => $users,
    ]);
});
