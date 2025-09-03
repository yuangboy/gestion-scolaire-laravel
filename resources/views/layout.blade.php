<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href={{asset("headers/styles/app.css")}}>
  <link rel="stylesheet" href={{asset("register-style/app.css")}}>
</head>

<body>
@include('header')
@yield('content')   
@include('footer') 
</body>



</html>