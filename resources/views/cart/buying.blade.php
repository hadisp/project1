@extends('layouts.app')
@section('content')
    {{--<div class="card card-">--}}
        {{--<div class="card card-header">--}}
            {{--@foreach($foodorders as $order )--}}

                {{--<h3>{{$order->name}}</h3>--}}
                {{--<h3>{{$order->qty}}</h3>--}}
                {{--<h3>{{$order->total}}</h3>--}}
                {{--</h3>--}}
            {{--@endforeach--}}
            {{--<h2>hey</h2>--}}

        {{--</div>--}}

    {{--</div>--}}
    <div class="container" style="padding: 3%">
        <ul class="list-group text-right">
            <li class="list-group-item "  style="background-color:#D4AF37;color: black;"><h3>فاکتور خرید</h3></li>
            @if($foodorders==!null)
            @foreach($foodorders as $order )
            <li class="list-group-item " dir="rtl" style="background-color:whitesmoke;" >
                <div class="row">
                    <div class="col-md-4"><h3>{{$order->name}}</h3></div>
                    <div class="col-md-4"><h3>تعداد :{{$order->qty}} </h3></div>
                    <div class="col-md-4"><h3>{{$order->total}}</h3></div>
                </div>
            </li>
            @endforeach
            @else
                <li class="list-group-item " dir="rtl" style="background-color:whitesmoke;" >
                    <h3>فاکتور شما خالی است!لطفا خرید کنید.</h3>
                </li>
            @endif
        </ul>
    </div>
@stop