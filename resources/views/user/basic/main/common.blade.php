<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta meta name="format-detection" content="telephone=no, email=no, adress=no">
    <title>定泰翫花同 BRILLIANT LIFE</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <meta property="og:title" content="">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="zh_TW" />
    <meta property="og:description" content="">
    <meta property="fb:admins" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body class="index">
<div class="container">

    @yield('main')

    <footer class="footer">
        @include('user.basic.footer.common')
    </footer>
</div>
@yield('js')
</body>
</html>
