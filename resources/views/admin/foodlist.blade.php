@extends('layouts.main')
@section('content')
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px "><h3>لیست غذا ها </h3></div>

    <div class="row " dir="rtl">
        <div class="col-md-12 col-sm-12 col-xs-12 pull-right"  >
            @foreach($foodtypes as $foodtype)

                <ul class="list-group" >
                    <li class="list-group-item active" ><h3>{{$foodtype->name}}</h3></li>
                    @foreach($foodtype->foods as $food)
                    <li class="list-group-item" style="padding:5%;">
                        <div class="row">
                            <div class="col-md-2"><img src="/storage/{{$food->image}}" width="100" height="100"></div>
                            <div class="col-md-10">
                            <div class="">نام:{{$food->name}}</div>
                            <div class="">قیمت:{{$food->price}}</div>
                             <div class="">توضیح:{{$food->description}}</div>
                                <div class="row">
                                    <a class="pull-right" href="{{route('admin.editfood',[$food->id])}}"><button class="btn btn-info">ویرایش</button></a>
                                   <form class="pull-right"  method="post" action="{{route('admin.deletefood',[$food->id])}}">
                                       {{ csrf_field() }}
                                       {{ method_field('delete') }}
                                    <button class="btn btn-warning"><i class=" fa fa-trash"></i></button>
                                   </form>
                                </div>
                            </div>
                        </div>
                    </li>
                        @endforeach
                </ul>
            @endforeach
        </div>
    </div>

@stop