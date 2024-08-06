<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App1</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="">
        <div>Hello there {{$name}}</div>
        <div>Database change test</div>
        @foreach ($users as $user)
            <div>{{$user->email}}</div>
        @endforeach
    </body>
</html>
