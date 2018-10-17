<!doctype html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="/css/mycss.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Laravel</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


</head>
<body style="background-color: rgba(229,229,229,0.93)">
<nav class="navbar navbar-light bg-primary">
    <div class="container"><h3 class="pull-right">پنل ادمین</h3></div>
</nav>

<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard fa-lg"></i> پیشخان
                </a>
            </li>

            <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                <a href="#"><i class="fa fa-gift fa-lg"></i> دسته بندی غذا <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="products">
                <li class="active"><a href="{{route('admin.foodtypelist')}}">لیست دسته ها</a></li>
                <li><a href="{{route('admin.createfoodtype')}}">ایجاد دسته جدید</a></li>
            </ul>


            <li data-toggle="collapse" data-target="#service" class="collapsed">
                <a href="#"><i class="fa fa-globe fa-lg"></i> غذاها<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="service">
                <li class="active"><a href="{{route('admin.foodlist')}}">لیست غذا ها</a></li>
                <li><a href="{{route('admin.createfood')}}">ایجاد غذای جدید</a></li>
            </ul>


            <li data-toggle="collapse" data-target="#new" class="collapsed">
                <a href="#"><i class="fa fa-car fa-lg"></i> سفارش ها <span class="arrow"></span></a>
            </li>


            <li>
                <a href="{{route('admin.comment')}}">
                    <i class="fa fa-user fa-lg"></i> نظرات
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> مشتری ها
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container text-right"  >
    <div class="col-md-8 col-xs-12 pull-right">

        @if (session('msg'))
            <div class="alert alert-info">
                <h3> {{ session('msg') }}</h3>
            </div>
        @endif
@yield('content')
    </div>
</div>
</body>
</html>
