@extends('layouts.app')
@section('content')
    <div class="container food-page">
        <div class="row" dir="rtl">
            <div class="col-md-5 "><img style="width: 100% ;height: 100%"  src="/storage/{{$food->image}}"></div>
            <div class="col-md-7 text-right" style="padding-right:5%;">

                    <div class="row justify-content-between">
                        <div class="col-4">
                        <h1>{{$food->name}}</h1>
                        </div>
                        <div class="col-4">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link  " href="#"><i style="font-size:25px;margin-right: -15px;" class="fa fa-telegram "></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i style="font-size:25px;margin-right: -15px;" class="fa fa-instagram fa-2x"></i></a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    <h5 style="color: rgba(14,12,5,0.65)">دسته : دسر</h5>
                <p style="color: rgba(38,36,12,0.65);line-height: 50px;">این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.</p>
                <hr>
                <a><button class="btn"  style="background-color:#D4AF37;border-radius: 10px;color: black ">اضافه به سبد خرید</button></a>
            </div>
        </div>
    </div>
    <div class="comment-section">
        <div class="container">
            <div class="row justify-content-md-center">
            <form class="col-md-6 text-right" dir="rtl" method="post" action="{{route('comment.store',[$food->id])}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <h3>نظرات خود را به اشتراک بگذارید!</h3>
                </div>
                <div class="form-group">
                    <label >نام</label>
                    <input type="text" name="name" class="form-control" >
                </div>
                <div class="form-group">
                    <label >آدرس ایمیل</label>
                    <input type="email" name="email" class="form-control" >
                </div>
                <div class="form-group">
                    <label >نظر</label>
                    <textarea name="comment" class="form-control"  rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="ثبت نظر" name="sub">
                </div>
            </form>
            </div>
        </div>
        <div class="container">
            <div class="row " dir="rtl">
                <div class="col-md-8 col-sm-8 pull-right"  >
                    @foreach($comments as$comment)
                    <div class="panel panel-white post panel-shadow text-right">
                        <div class="post-heading">
                            <div class="pull-right image ">
                                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                            </div>
                            <div class="pull-right meta">
                                <div class="title h5">
                                    <a href="#"><b>{{$comment->name}}</b></a>
                                    made a post.
                                </div>
                                <h6 class="text-muted time">1 minute ago</h6>
                            </div>
                        </div>
                        <div class="post-description">
                            <p>{{$comment->comment}}</p>
                            <div class="stats">
                                <a href="#" class="btn btn-default stat-item">
                                    <i class="fa fa-thumbs-up icon"></i>2
                                </a>
                                <a href="#" class="btn btn-default stat-item">
                                    <i class="fa fa-thumbs-down icon"></i>12
                                </a>
                            </div>
                        </div>

                    </div>
                        @endforeach
                </div>

            </div>
        </div>
    </div>
@stop
