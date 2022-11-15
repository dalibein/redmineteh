<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('shap')
    </title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ URL::asset("css/Site.css") }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<br><br><br>
<nav id="w0" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top navbar">
<div class="container">
<a class="navbar-brand" href="/">12.11.22</a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#w0-collapse" aria-controls="w0-collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
<div id="w0-collapse" class="collapse navbar-collapse">
<ul id="w1" class="navbar-nav nav"><li class="nav-item"><a class="nav-link active" href="/">Главная</a></li>
<li class="nav-item"><a class="nav-link" href="1">1стр</a></li>
<li class="nav-item"><a class="nav-link" href="2">2стр</a></li>
<li class="nav-item"><a class="nav-link" href="3">3стр</a></li>
<li class="nav-item"><a class="nav-link" href="4">4стр</a></li>
<li class="nav-item"><a class="nav-link" href="5">5стр</a></li>
</ul></div>
</div>
</nav>
<body>

    <div class="container">
    @yield('ocnov')
    </div>
    

</body>


</html>
<style>

    .animated-button{
        --bs-body-color-rgb: 33,37,41;
    --bs-body-bg-rgb: 255,255,255;
    --bs-blue: #0d6efd;
    --bs-indigo: #6610f2;
    --bs-purple: #6f42c1;
    --bs-pink: #d63384;
    --bs-red: #dc3545;
    --bs-orange: #fd7e14;
    --bs-yellow: #ffc107;
    --bs-green: #198754;
    --bs-teal: #20c997;
    --bs-cyan: #0dcaf0;
    --bs-white: #fff;
    --bs-gray: #6c757d;
    --bs-gray-dark: #343a40;
    --bs-gray-100: #f8f9fa;
    --bs-gray-200: #e9ecef;
    --bs-gray-300: #dee2e6;
    --bs-gray-400: #ced4da;
    --bs-gray-500: #adb5bd;
    --bs-gray-600: #6c757d;
    --bs-gray-700: #495057;
    --bs-gray-800: #343a40;
    --bs-gray-900: #212529;
    --bs-primary: #0d6efd;
    --bs-secondary: #6c757d;
    --bs-success: #198754;
    --bs-info: #0dcaf0;
    --bs-warning: #ffc107;
    --bs-danger: #dc3545;
    --bs-light: #f8f9fa;
    --bs-dark: #212529;
    --bs-primary-rgb: 13,110,253;
    --bs-secondary-rgb: 108,117,125;
    --bs-success-rgb: 25,135,84;
    --bs-info-rgb: 13,202,240;
    --bs-warning-rgb: 255,193,7;
    --bs-danger-rgb: 220,53,69;
    --bs-light-rgb: 248,249,250;
    --bs-dark-rgb: 33,37,41;
    --bs-white-rgb: 255,255,255;
    --bs-black-rgb: 0,0,0;
    --bs-body-rgb: 33,37,41;
    --bs-font-sans-serif: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --bs-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --bs-body-font-family: var(--bs-font-sans-serif);
    --bs-body-font-size: 1rem;
    --bs-body-font-weight: 400;
    --bs-body-line-height: 1.5;
    --bs-body-color: #212529;
    --bs-body-bg: #fff;
    line-height: var(--bs-body-line-height);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    --bs-bg-opacity: 1;
    font-size: 1.25rem;
    text-align: center;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
    display: inline-block;
    margin: 10px 20px;
    padding: 15px 30px;
    border: 2px solid;
    border-bottom-width: 4px;
    font-family: 'Montserrat', sans-serif;
    overflow: hidden;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
    color: rgba(30, 255, 188, 1);
    background: rgba(255, 255, 255, 1);
    transition: color .3s, background .5s;}
    
</style>
