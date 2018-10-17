@extends('layouts.main')
@section('content')

        <div class="container-fluid">
            <div class="row">


                <div class="col-md-4 col-sm-6 jumbotron text-center">
                    <a href="#">
                    <div class="ad-profile">
                        <span class="fa fa-user-circle-o"></span>
                        <h3>پروفایل ادمین</h3>
                    </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 jumbotron text-center">
                    <a href="{{route('admin.menu')}}">
                        <div class="ad-menu">
                            <span class="fa fa-list"></span>
                            <h3>منو </h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4  col-sm-6 jumbotron text-center">
                    <a href="#">
                    <div class="ad-client">
                        <span class="fa fa-users"></span>
                        <h3>مشتری </h3>

                    </div>
                    </a>
                </div>
                <div class="col-md-4  col-sm-6 jumbotron text-center">
                    <a href="#">
                    <div class="ad-order">
                        <span class="fa fa-shopping-cart"></span>
                        <h3>سفارش </h3>
                           </div>
                    </a>
                </div>
                <div class="col-md-4  col-sm-6 jumbotron text-center">
                    <a href="{{route('admin.comment')}}">
                    <div class="ad-comments">
                        <span class="fa fa-comment"></span>
                        <h3>نظرات </h3>
                          </div>
                    </a>
                </div>
            </div>
        </div>
@stop