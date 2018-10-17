@extends('layouts.main')
@section('content')

    <a href="{{ route('admin.createfood') }}">add new food</a>
    <br>
    <a href="{{ route('admin.createfoodtype') }}">add new food type</a>
@stop