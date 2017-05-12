<!DOCTYPE html>
<html>
<head>
<title>Perpustakaan Online dengan Framework Laravel</title>
<link rel="stylesheet" href="{{ asset('packages/uikit/css/uikit.almost-flat.min.css')}}" />
<script src="{{ asset('components/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('packages/uikit/js/uikit.min.js')}}"></script>
</head>
<body>
<div class="uk-container uk-container-center uk-margin-top">
<nav class="uk-navbar">
<a href="#" class="uk-navbar-brand uk-hidden-small">LaraPus</a>
<div class="uk-navbar-flip uk-navbar-content">
<a class="" href="#">Login</a> |
<a class="" href="#">Daftar</a>
</div>
<div class="uk-navbar-brand uk-navbar-center uk-visible-small">LaraPus</div>
</nav>
<div class="uk-container-center uk-margin-top">
@yield('content')
</div>
</div>
</body>
</html>