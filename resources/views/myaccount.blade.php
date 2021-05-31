@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Twóje zamówienia</h4>
            @foreach($data as $item)
            <div class="row searched-item cart-list-devider">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-4">
                        <div class="">
                            <h2>Nazwa: {{$item->name}}</h2><br>
                            <h5>Nr faktury: {{$item->tel_nr}}</h5>
                            <h5>Status wysyłki: {{$item->firstname}}</h5>
                            
                            <h5>Status płatności: {{$item->street}}</h5>
                            <h5>Metoda płatności: {{$item->apart_nr}}</h5>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop