@extends('layouts.main')
@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">ایجاد غذای جدید</div>--}}
        {{--<div class="panel-body">--}}
    {{--<form >--}}

        {{--نام:<input type="text" name="name"><br>--}}
        {{--قیمت:<input type="text" name="price"><br>--}}
   {{--<input type="text" name="description"><br>--}}
        {{--نوع:<select name="foodtype">--}}
            {{--@foreach($foodtypes as $foodtype)--}}
            {{--<option>{{ $foodtype->name }}</option>--}}
            {{--@endforeach--}}
        {{--</select>--}}
        {{--<br>--}}
           {{--پیشنهاد سرآشپز: <br>--}}
      {{--بله  <input type="radio" name="sign" value="y"><br>--}}
       {{--نه  <input type="radio" name="sign" value="n"><br>--}}
        {{--<input type="submit">--}}
    {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px "><h3>ایجاد غذا </h3></div>
    <div class="jumbotron" style="background-color: white;padding: 5%" >
    <form class="form-horizontal" method="post" action="{{ route('admin.storefood') }}" enctype="multipart/form-data" dir="rtl">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="name">
            </div>
            <label class="control-label col-sm-2" for="email"> نام:</label>
        </div>
        <div class="form-group">
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="price">
            </div>
            <label class="control-label col-sm-2" for="pwd"> قیمت:</label>
        </div>
        <div class="form-group">

            <div class="col-sm-10">
                <textarea  class="form-control"  name="description"></textarea>
            </div>
            <label class="control-label col-sm-2" for="pwd">   توضیح:</label>
        </div>
        <div class="form-group">
            <label>دسته بندی:</label>
            <select class="form-control" name="foodtype">
                @foreach($foodtypes as $foodtype)
                    <option>{{ $foodtype->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="checkbox-inline"> پیشنهاد سرآشپز:</label>
        <label class="checkbox-inline"><input type="radio" name="sign" value="y">بله</label>
        <label class="checkbox-inline"><input type="radio" name="sign" value="n">نه</label>
        </div>
        <div class="form-group">
            <label class="checkbox-inline"> آپلود تصویر:</label>
            <input type="file" name="file">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">ثبت</button>
            </div>
        </div>
    </form>
    </div>
@stop