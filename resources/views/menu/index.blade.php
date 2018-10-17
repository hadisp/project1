
    {{--@foreach($foodtypes as $foodtype)--}}
        {{--<div class=" container ">--}}
    {{--<div class=" main1 text-center col-md-12 ">--}}
        {{--<h3>{{ $foodtype->name }}</h3>--}}
            {{--@foreach($foodtype->foods as $food)--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="thumbnail">--}}
                            {{--<img src="/image/SEO-Company.jpg" width="100%" >--}}
                            {{--<span class="four"> 10000000000</span>--}}
                            {{--<h4>{{ $food->name }}</h4>--}}
                            {{--<p>این نوشته برای تست است.این نوشته برای تست است.این نوشته برای تست است.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
            {{--@endforeach--}}
    {{--</div>--}}
        {{--</div>--}}
    {{--@endforeach--}}

    @foreach($foods as $food)
        <div class="col-md-4 jumbotron">
            <div class="box" >
                <a href="{{route('menu.food',[$food->id])}}"><img class="img-thumbnail img-responsive" src="/storage/{{$food->image}}"></a>
                <h4>{{ $food->name }}</h4>
                <p  class="font-weight-light">{{$food->description}}</p>
                <button class="btn btn-shop  food" id="{{$food->id}}"  > سبد خرید</button>
            </div>
        </div>
        {{--href="{{url('/cart/add')}}/{{$food->id}}"--}}
    @endforeach

