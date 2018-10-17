@extends('layouts.app')
@section('content')
    <div class="menu text-center " id="menu">
        <div class="title-style">
            <h2>منو </h2>
            <span class="fa fa-chevron-down fa-2x"></span>
        </div>

        <div class="justify-content-center justify-content-center">
            @foreach($foodtypes as $foodtype)
                <button class="btn btn-types foodtype"  id="{{$foodtype->id}}" name="foodtype">{{$foodtype->name}}</button>
            @endforeach
        </div>
        <div class="row col-md-12 ajax">
            @foreach($foodtype->foods as $food)
                <div class="col-md-4 jumbotron ">
                    <div class="box">
                        <a href="{{route('menu.food',[$food->id])}}"> <img class="img-thumbnail img-responsive" src="/storage/{{$food->image}}" ></a>
                        <h4>{{ $food->name }}</h4>
                        <p  class="font-weight-light">{{$food->description}}</p>
                            <button class="btn btn-shop food" id="{{$food->id}}"  > سبد خرید</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop