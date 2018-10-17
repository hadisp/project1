@extends('layouts.app')
@section('content')

    <div class="main text-center ">
        <div class="title-style">
            <h2 >پیشنهاد سر آشپز </h2>
            <span class="fa fa-chevron-down fa-2x"></span>
        </div>
        <div class="row col-md-12">
            @foreach($foods as $food)
            @if($food->sign=='y')

                    <div class="col-md-4 jumbotron ">
                        <div class="box">
                            <img class="img-thumbnail img-responsive" src="/image/images.jpg">
                            <h4>{{ $food->name }}</h4>
                            <p  class="font-weight-light">.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است. این نوشته برای تست است</p>
                            <button class="btn btn-shop food" id="{{$food->id}}">
                                <a
                                        {{--href="{{url('/cart/add')}}/{{$food->id}}"--}}
                                > سبد خرید</a></button>
                        </div>
                    </div>
                @endif
                @endforeach
        </div>
    </div>
    {{--<div class="menu text-center " id="menu">--}}
        {{--<div class="title-style">--}}
            {{--<h2>منو </h2>--}}
            {{--<span class="fa fa-chevron-down fa-2x"></span>--}}
        {{--</div>--}}

        {{--<div class="justify-content-center justify-content-center">--}}
        {{--@foreach($foodtypes as $foodtype)--}}
                {{--<button class="btn btn-types foodtype"  id="{{$foodtype->id}}" name="foodtype">{{$foodtype->name}}</button>--}}
         {{--@endforeach--}}
        {{--</div>--}}
        {{--<div class="row col-md-12 ajax">--}}
            {{--@foreach($foodtype->foods as $food)--}}
                {{--<div class="col-md-4 jumbotron ajax">--}}
                    {{--<div class="box">--}}
                        {{--<img class="img-thumbnail img-responsive" src="/image/images.jpg">--}}
                        {{--<h4>{{ $food->name }}</h4>--}}
                        {{--<p  class="font-weight-light">.این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است. این نوشته برای تست است</p>--}}
                        {{--<button class="btn btn-shop"> سبد خرید</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
        {{--</div>--}}
    {{--</div>--}}

@stop
