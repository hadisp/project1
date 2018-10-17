@extends('layouts.main')
@section('content')
    <div class="container" style="background-color: whitesmoke;padding: 5%">
            <a href="{{route('admin.createfood')}}">غذای جدید</a>
            <a href="{{route('admin.createfoodtype')}}">نوع جدید</a>
    </div>
@stop