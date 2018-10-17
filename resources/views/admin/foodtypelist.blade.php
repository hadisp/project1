@extends('layouts.main')
@section('content')
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px "><h3>لیست دسته ها </h3></div>
    <div class="row " dir="rtl">
        <div class="col-md-12 col-sm-12 col-xs-12 pull-right"  >


                <ul class="list-group" >
                    @foreach($foodtypes as $foodtype)
                        <li class="list-group-item" style="padding:5%;">
                            <div class="row">
                                <div class="pull-right">
                                    <div class="">نام:{{$foodtype->name}}</div>
                                </div>
                                <div class="pull-left">
                                    <a class="pull-right" href="{{route('admin.editfoodtype',[$foodtype->id])}}"><button class="btn btn-info">ویرایش</button></a>
                                    <form class="pull-right"  method="post" action="{{route('admin.deletefoodtype',[$foodtype->id])}}">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-warning"><i class=" fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>

@stop