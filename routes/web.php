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
    $test_user = [
        'name' => 'Maciek',
        'email' => 'test@test.pl',
        'password' => bcrypt('password'),
    ];

    $user = App\Models\User::where('email', $test_user['email'])->first();

    if (!$user) {
        return App\Models\User::create($test_user);
    }

    return 'ok';
});
