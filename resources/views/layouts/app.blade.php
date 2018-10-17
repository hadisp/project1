<!doctype html>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/mycss.css">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <title>Untitled Document</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light white " dir="rtl" >
    <div class="container">

                <a class="navbar-brand " href="#"><img class="img-responsive"  ></a>
        <button class="navbar-toggler col-xs-12" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active border-left">
                            <a class="nav-link white" id="scroll" href="{{ route('home') }}"><i class="fa fa-home"></i> خانه </a>
                        </li>
                        <li class="nav-item border-left">
                            <a class="nav-link white" id="scroll" href="{{ route('menu.show') }}"><span class="fa fa-list"></span> منو </a>
                        </li>
                        <li class="nav-item border-left">
                            <a class="nav-link white" id="scroll" href="#about"><span class="fa fa-question-circle"></span> درباره ی ما  </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link white" id="scroll" href="#contact"><span class="fa fa-envelope"></span> ارتباط با ما</a>
                        </li>
                        </li>
                    </ul>
                </div>
        <a href="{{ route('cart.index') }}" class="nav-link ">  <i class="fa fa-shopping-cart gold "></i><span class="white">(<i class="shop">{{Cart::count()}}</i>) </span></a>
        &ensp;
                @guest
                    /
            <a href="{{ route('register') }}" class="nav-link ">  <span class=" fa fa-user gold"></span><span class="white">{{ __(' ثبت نام') }}</span></a>
            /

            <a href="{{ route('login') }}"  class="nav-link"  ><span class="fa fa-sign-in gold"></span> <span class="white"> {{ __('ورود') }}</span> </a>

                    @else
                /
                <sp class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </sp>
                    @endguest

    </div>
</nav>
<!-- end navbar -->
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img  src="/image/1.jpg" alt="Los Angeles" >
        </div>
        <div class="carousel-item">
            <img src="/image/2.jpg" alt="Chicago" >
        </div>
        <div class="carousel-item">
            <img src="/image/3.jpg" alt="New York" >
        </div>
    </div>

    <!-- Left and right controls -->
</div>
<!-- end slider -->

{{--<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header text-center">--}}
                {{--<h4 class="modal-title w-100 font-weight-bold ">عضو شوید</h4>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
            {{--@csrf--}}
            {{--<div class="modal-body mx-3">--}}
                {{--<div class="md-form mb-5">--}}
                    {{--<i class="fa fa-user prefix grey-text"></i>--}}
                    {{--<input type="text" id="orangeForm-name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} validate" placeholder="نام" required>--}}

                {{--</div>--}}
                {{--<div class="md-form mb-5">--}}
                    {{--<i class="fa fa-phone prefix grey-text"></i>--}}
                    {{--<input type="number" id="orangeForm-phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} validate " placeholder="تلفن" required>--}}

                {{--</div>--}}
                {{--<div class="md-form mb-5">--}}
                    {{--<i class="fa fa-address-card prefix grey-text"></i>--}}
                    {{--<input type="text" id="orangeForm-address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }} validate" placeholder="آدرس" required>--}}

                {{--</div>--}}

                {{--<div class="md-form mb-4">--}}
                    {{--<i class="fa fa-lock prefix grey-text"></i>--}}
                    {{--<input type="password" id="orangeForm-pass" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }} validate" name="password" required placeholder="رمز عبور">--}}

                {{--</div>--}}

            {{--</div>--}}

            {{--<div class="modal-footer d-flex justify-content-center">--}}
                {{--<button class="btn btn-deep-orange">ثبت نام</button>--}}
            {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- -->

<!-- -->
@if (session('msg'))
    <div class="-align-center">
    <div class="alert alert-info col-4">
        <h3> {{ session('msg') }}</h3>
    </div>
    </div>
@endif
@yield('content')
<!-- about us -->
<div class="about-us text-center" id="about">
    <div class="container">
        <div class="title-style" style="color: white">
            <h2 >درباره ی ما</h2>
            <span class="fa fa-chevron-down fa-2x"></span>
        </div>
        <div class="col-md-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text text-right">
                    <p>.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست استاین نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است</p>

                    <p>این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12"><img class="img-responsive" src="/image/pic.jpg" ></div>
            </div>
        </div>
    </div>
</div>
<div class="footer" id="contact">
    <div class="container text-center">

            <div class="title-style">
                <h2>ارتباط با ما</h2>
                <span class="fa fa-chevron-down fa-2x"></span>
            </div>
            <div class="row">
                <div class="col-md-6 jumbotron align-content-center">
                    <div class="inner">
                        <h4>شبکه های اجتماعی</h4>
                        <p>در شبکه های اجتماعی پیام دهید.</p>
                        <a href="#"><i class="fa fa-telegram fa-2x"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="#"><i class="fa fa-whatsapp fa-2x"></i></a>
                    </div>

                </div>
                <div class="col-md-6 jumbotron align-content-center">
                    <div class="inner">
                        <h4>آدرس و تلفن </h4>
                        <p>آدرس :این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است </p>
                        <p>تلفن  : 2345678</p>
                        <p>تلفن همراه : 0911111111</p>
                    </div>
                </div>
            </div>
            <hr style="background-color: white">
            <p>این نوشته برای تست است.</p>

    </div>
</div>
</body>
</html>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    $('.tree-toggle').click(function () {	$(this).parent().children('ul.tree').toggle(200);
 });
 $(function(){
 $('.tree-toggle').parent().children('ul.tree').toggle(200);
 })

 $(document).ready(function(){
 		$(window).scroll(function() {
 			var top=$(this).scrollTop();
 			var widthsize=$(this).width();

 			if(top>300){
 				$("nav").addClass('position-fixed');
                $("nav").addClass('navbar-custom');
      			$("#scroll").addClass('scroll');
				$(".white").css('color','white');
// 				$("#logo").css('display','none');
// 				$(".menu-style").css('margin-top','0px');
 			}
 			else{
 				$("nav").removeClass('position-fixed');
                $("nav").removeClass('navbar-custom');

                $("#scroll").addClass('nav-link');
                $("#scroll").removeClass('scroll');
                $(".white").css('color','black');
// 				$(".navbar-custom").css('background-color','#800040');
// 				$(".navbar-custom").css('color','white');
// 				$("#logo").css('display','block');
// 				$(".menu-style").css('margin-top','25px');
 				}


 			});
 	});

    $(document).on("click", ".foodtype", function () {
        var foodtype_id = $(this).attr('id');

        $.ajax({
            type: 'GET',
            dataType: 'html',
            async: 'false',
            url: "{{ route('menu.getajax') }}",
            data: {id: foodtype_id}
        })

            .done(function (data) {
                //console.debug(data);
                console.log(data);

                $('.ajax').html(data);

            });
    });
    $(document).on("click", ".food", function () {
        var food_id = $(this).attr('id');

        $.ajax({
            type: 'GET',
            dataType: 'html',
            async: 'false',
            url: "{{ route('cart.getajax') }}",
            data: {id: food_id}
        })

            .done(function (data) {
                //console.debug(data);
                console.log(data);
                $('.shop').html(data);
            });
    });

</script>

