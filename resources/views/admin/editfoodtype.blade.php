@extends('layouts.main')
@section('content')
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px ">
        <h3>ویرایش غذا </h3>
        <a href="{{route('admin.foodtypelist')}}"><button class="btn btn-info">بازگشت به لیست</button></a>
    </div>
    <div class="jumbotron" style="background-color: white;padding: 5%" >
        <form class="form-horizontal" method="post" action="{{route('admin.updatefoodtype',[$foodtype->id])}}"   enctype="multipart/form-data" dir="rtl">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="name" value="{{$foodtype->name}}" >
                </div>
                <label class="control-label col-sm-2" for="email"> نام:</label>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">ثبت</button>
                </div>
            </div>
        </form>
    </div>
@stop
