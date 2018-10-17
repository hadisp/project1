@extends('layouts.app')
@section('content')
    <script>

        $(document).ready(function () {
//            $("#CartMsg").hide();
            @foreach($data as $food)
            $("#upCart{{$food->id}}").on('change keyup',function () {
                var newQty=$("#upCart{{$food->id}}").val();
                var rowId=$("#rowID{{$food->id}}").val();

                $.ajax({
                    url:'{{url('/cart/update/')}}',
                    data:'rowID=' + rowId + '&newQty=' + newQty,
                    type:'get',
                    success:function(response) {
//                        $("#CartMsg").show();
//                        console.log(response);
//                        $("#CartMsg").html(response);
                    }
                });
            });
            @endforeach
        });
    </script>
{{--<div class="alert alert-info" id="CartMsg"></div>--}}

<div class="cart">
    <div class="container" dir="rtl">

        <div class=" shopping-cart ">

            <div class=" title-style  text-center" >

                <h3><i class="fa fa-shopping-cart" aria-hidden="true"></i> سبد خرید</h3>
                <span class="fa fa-chevron-down fa-2x"></span>

            </div>
          @if(Cart::count()!=='0')
<div class="">
            <div class=" align-content-center" >
                <!-- PRODUCT -->
                    @foreach($data as $food)
                        <input type="hidden" id="rowID{{$food->id}}" value="{{$food->rowId}}">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                            <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-right t col-md-6">
                            <h4 class="product-name d-flex  justify-content-center"><strong>{{$food->name}}</strong></h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-left row">
                            <div class="col-6 col-sm-3 col-md-6 text-md-left" style="padding-top: 5px">
                                <h6><strong>{{$food->price}} <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-6 col-sm-4 col-md-4">
                                <div class="quantity">

                                    <input type="number"   class="qty" min="1" name="count"  value="{{$food->qty}}" id="upCart{{$food->id}}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-2 col-md-2 text-right  d-flex  justify-content-center">

                                <a class="" href="{{url('cart/remove')}}/{{$food->rowId}}" >
                                    <button type="button" class="btn btn-outline-danger btn-xs" >
                                    <i class="fa fa-trash" aria-hidden="true">

                                    </i>
                                </button>
                                </a>

                            </div>
                        </div>
                    </div>

                    <hr>
                    @endforeach

            </div>
            <div class=" row ">
                        <div class="col-6 center-block ">
                            <a href="{{url('checkout')}}"><button type="submit" class="btn btn-outline-info" >ادامه خرید</button></a>
                            <a class="" href="{{url('cart/updatebutton')}}"><button class="btn btn-outline-success "> به روز رسانی قیمت ها </button></a>
                        </div>
                    <div class="pull-right" style="margin: 5px">
                        قیمت کل:  <b>{{Cart::total()}}</b>

                    </div>

            </div>
</div>
              @else
            <h3>cart is empty</h3>
              @endif

        </div>
    </div>
</div>


    {{--@if(isset($msg))--}}
        {{--<div class="alert alert-info">--}}
            {{--{{$msg}}--}}
        {{--</div>--}}
    {{--@endif--}}
        {{--<div class="alert alert-info" id="CartMsg"></div>--}}


 {{--@foreach($data as $food)--}}
     {{--<input type="text" id="rowID{{$food->id}}" value="{{$food->rowId}}">--}}

    {{--name:{{$food->name}}<br>--}}
    {{--price:{{$food->price}}<br>--}}
    {{--qty:<input type="number" name="count" max="100"  min="1" value="{{$food->qty}}" id="upCart{{$food->id}}"><br>--}}
     {{--qty:<div class="qty"> {{$food->qty}}</div><br>--}}
     {{--total:{{$food->price * $food->qty}}<br>--}}
     {{--<a href="{{url('cart/remove')}}/{{$food->rowId}}"><button>remove</button></a><br>--}}
 {{--@endforeach--}}

{{--total:<div class="total"> {{Cart::subtotal()}}</div><br>--}}
{{--total:<div class="subtotal">{{Cart::total()}}</div><br>--}}
 {{--<a href="{{url('checkout')}}"><button>checkout</button></a>--}}



     {{--<div class="row">--}}
     {{--@else--}}
     {{--<h1>empty</h1>--}}
 {{--@endif--}}
     {{--</div>--}}

@stop