@extends('layouts.main')
@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-heading">ایجاد دسته جدید</div>--}}
        {{--<div class="panel-body">--}}
            {{--<form method="post" action="{{ route('admin.storefoodtype') }}">--}}
                {{--{{ csrf_field() }}--}}
                {{--{{ method_field('post') }}--}}
                {{--name:<input type="text" name="name">--}}
                {{--<input type="submit">--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px "><h3>ایجاد دسته غذا </h3></div>
    <div class="jumbotron" style="background-color: white;padding: 5%" >
        <form class="form-horizontal"method="post" action="{{ route('admin.storefoodtype') }}" dir="rtl">
            {{ csrf_field() }}
            {{ method_field('post') }}
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="name">
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