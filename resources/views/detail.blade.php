@extends('master')
@section("content")
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">

        </div>
        <div class="col-sm-6">
            <a href="/">Powrót</a>
            <h2>{{$product['name']}}</h2>
            <h3>Cena: {{$product['price']}}zł</h3>
            <h4>{{$product['description']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button class="btn btn-primary">Do koszyka</button>
            </form>
            <br><br>
            <a href="/ordernow" class="btn btn-success">Kup teraz</a>
            <br><br>

        </div>
    </div>

</div>
@stop