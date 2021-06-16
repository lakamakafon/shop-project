@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Twóje zamówienia</h4><br><br>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3"><br>
                    <a href="detail/{{$item->id}}">
                        <img  style="width:220px; height:220px;" class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-7">
                    <div class="">
                        <a href="detail/{{$item->id}}"><h4>Nazwa: {{$item->name}}</h4></a><br>
                        <h5>Nr faktury: {{$item->invoice_nr}}</h5>
                        <h5>Status wysyłki: {{$item->status}}</h5>

                        <h5>Status płatności: {{$item->payment_status}}</h5>
                        <h5>Metoda płatności: {{$item->payment_method}}</h5>
                    <br>
                    </div>
                </div>
                <div style="float:left">
                        <button class="btn btn-primary"><a href="/pdf/faktura/{{$item->invoice_nr}}" style="color: black !important;">Wygeneruj fakturę</a></button>
                    </div>
            </div>
            <div>

                @endforeach
            </div>
        </div>
    </div>
    @stop