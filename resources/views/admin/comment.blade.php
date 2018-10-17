@extends('layouts.main')
@section('content')


    <div class="jumbotron text-center" style="background-color: white;padding:5px;margin-bottom:20px "><h3>نظرات </h3></div>

    <div class="row " dir="rtl">
            <div class="col-md-12 col-sm-12 col-xs-12 pull-right"  >
              @foreach($comments as $comment)
                    <ul class="list-group" >
                        <li class="list-group-item" style="padding-right: 5%" >
                            <div class="row">
                                <a href="{{url('/menu/food')}}/{{ $comment->food_id}}}}"><h3>{{$comment->food->name}}</h3></a>
                                <p>{{$comment->food->description}}</p>
                            </div>
                        </li>
                        <li class="list-group-item" style="padding-right: 5%" >
                            <div class="row">
                                <h4>نام : {{$comment->name}} </h4>
                                <p>ایمیل : {{$comment->email}}</p>
                                <p>{{$comment->comment}}</p>
                            </div>
                            <div class="row">
                                @if($comment->deleted_at==null)
                                <form class="pull-right" method="post" action="{{ route('admin.deletecomment',[$comment->id]) }}">
                                {{ csrf_field() }}
                                <button class="btn btn-warning">حذف نظر</button>
                                </form>
                                @else
                                <form class="pull-right" method="post" action="{{ route('admin.undeletecomment',[$comment->id]) }}">
                                {{ csrf_field() }}
                                <button class="btn btn-default">تایید نظر</button>
                                </form>
                                @endif
                                <form class="pull-right" method="post" action="{{ route('admin.enforcedeletecomment',[$comment->id]) }}">
                                {{ csrf_field() }}
                                <button class="btn btn-danger">حذف همیشگی نظر</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>

        </div>
@stop