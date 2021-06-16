@extends('master')
@section("content")
<div class="sub-buttons" style="text-align:center;">
    <a type="button" class="btn btn-secondary btn-sub" href="/shop/computers">Laptopy</a>
</div>

<div class="trending-wrapper">
    <h3 style="text-align: center;">Popularne produkty w naszym sklepie</h3>
    <br>
    @foreach($items as $item)
    <div class="trending-item" style="padding:100px;float:centre;width:320px;">
        <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}"></a>
            <div class="">
            <a href="/detail/{{$item['id']}}"><h5>{{$item->name}}</h5></a>
            </div>
    </div>
    @endforeach
</div>
@stop
