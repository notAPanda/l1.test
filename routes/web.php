<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
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

Route::get('/redis/set', function() {
    Cache::set('test', 'hello');

    return response()->json([
        'status' => 'ok',
    ]);
});

Route::get('/redis', function () {
    return response()->json([
        'value_from_cache' => Cache::get('test'),
    ]);
});


Route::get('/cache', function () {
    return response()->json(DB::table('cache')->get());
});
