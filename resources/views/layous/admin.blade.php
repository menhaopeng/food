<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('admin/lib/html5.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/lib/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/lib/PIE_IE678.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/static/h-ui/css/H-ui.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/static/h-ui.admin/css/H-ui.admin.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/lib/Hui-iconfont/1.0.7/iconfont.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/lib/icheck/icheck.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/static/h-ui.admin/skin/default/skin.css')}}" id="skin"/>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/static/h-ui.admin/css/style.css')}}"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>H-ui.admin v2.5</title>
    <meta name="keywords" content="H-ui.admin v2.5,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v2.5，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
@yield('content')


<script type="text/javascript" src="{{asset('admin/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/layer/2.1/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/static/h-ui/js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/static/h-ui.admin/js/H-ui.admin.js')}}"></script>
@yield('script')
</body>
</html>