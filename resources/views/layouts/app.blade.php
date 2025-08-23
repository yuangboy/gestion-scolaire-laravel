
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<div style="background-color: green ; width: 100%;">
<header>
@yield('content-header')
</header>

<body style="">
    @yield('content-body')    
</body>

<footer style="background-color: blue ; width: 100%;">
    {{-- @yield('content-footer') --}}
    @include("footer")
</footer>
</div>




{{-- yield('nom de la clé')  exemple: yield('bonjour')--}}  

{{-- Son Appel dans une autre page (la page hérité)  --}}

{{-- @extends('appel chemin relative ') --}}

{{-- @section ('nom de la clé') qui fai reference à yield('bonjour') --}}