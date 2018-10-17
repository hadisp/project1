@extends('layouts.main')
@section('content')
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px ">
        <h3>ویرایش غذا </h3>
        <a href="{{route('admin.foodlist')}}"><button class="btn btn-info">بازگشت به لیست</button></a>
    </div>
    <div class="jumbotron" style="background-color: white;padding: 5%" >
        <form class="form-horizontal" method="post" action="{{route('admin.updatefood',[$food->id])}}"   enctype="multipart/form-data" dir="rtl">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="name" value="{{$food->name}}" >
                </div>
                <label class="control-label col-sm-2" for="email"> نام:</label>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="price" value="{{$food->price}}">
                </div>
                <label class="control-label col-sm-2" for="pwd"> قیمت:</label>
            </div>
            <div class="form-group">

                <div class="col-sm-10">
                    <textarea  class="form-control"  name="description" >{{$food->description}}</textarea>
                </div>
                <label class="control-label col-sm-2" for="pwd">   توضیح:</label>
            </div>
            <div class="form-group">
                <label>دسته بندی:</label>
                <select class="form-control" name="foodtype"  >
                    {{$db_selected_value=$food->type_id}}
                    @foreach($foodtypes as $foodtype)
                        <option value="{{$foodtype->id}}" {{ $db_selected_value == $foodtype->id ? 'selected' : ''}}>{{ $foodtype->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline"> پیشنهاد سرآشپز:</label>
                <label class="checkbox-inline"><input type="radio" name="sign" value="y" {{ $food->sign == 'y' ? 'checked' : ''}}>بله</label>
                <label class="checkbox-inline"><input type="radio" name="sign" value="n" {{ $food->sign == 'n' ? 'checked' : ''}}>نه</label>
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
