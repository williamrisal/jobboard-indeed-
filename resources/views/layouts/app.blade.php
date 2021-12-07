<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'JobBoard') }}</title>
</head>
<header>
    <div class="flex flex-row justify-between bg-blue-400 px-4 py-4 items-center">
        <div>
            <a href="{{ route("home") }}"><img src="{{ asset('img/yesIndeed_white.svg') }}" alt="notIndeed" width="150" height="150"></a>
        </div>
        <div>
            <nav>
                <ul>
                    <a href="{{ route("home") }}"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Accueil</li></a>
                    @if(Auth::guard("web")->check())
                        <a href="{{ route("profile") }}"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Profile</li></a>
                        <a href="{{ route("monitoring") }}"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Monitoring</li></a>
                        <a href="/log_out"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Log Out</li></a></a>
                    @elseif(Auth::guard("company")->check())
                        <a href="{{ route("company.home") }}"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Home</li></a>
                        <a href="/company/logout"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Log Out</li></a></a>
                    @else
                    <a href="{{ route("login") }}"><li class="inline-block mr-4 hover:bg-blue-500 px-2 py-1 rounded-lg">Login</li></a>
                    <a href="{{ route("signUp") }}"><li class="inline-block hover:bg-blue-500 px-2 py-1 rounded-lg">Create an account</li></a>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
<body>
<div class="min-h-screen">
    <main>
        <div>
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
