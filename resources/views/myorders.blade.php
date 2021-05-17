@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Twóje zamówienia</h4>
            @foreach($orders as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h2>Nazwa: {{$item->name}}</h2><br>
                            <h5>Nr faktury: {{$item->invoice_nr}}</h5>
                            <h5>Status wysyłki: {{$item->status}}</h5>
                            
                            <h5>Status płatności: {{$item->payment_status}}</h5>
                            <h5>Metoda płatności: {{$item->payment_method}}</h5>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop