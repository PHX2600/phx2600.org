<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link href="{{ mix('css/app.css', 'assets/build') }}" rel="stylesheet">
<script src="{{ mix('js/app.js', 'assets/build') }}" defer></script>

<title>PHX2600 • The Phoenix, Arizona Network of Hackers</title>

<div id="app">
    @yield('content')
</div>
