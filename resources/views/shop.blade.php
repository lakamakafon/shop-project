@extends('master')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($items as $item)
            <div class="item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img class="slider-img" src="{{$item['gallery']}}">
                    <div class="carousel-caption slider-text">
                        <h3>{{$item->name}}</h3>
                        <p>{{$item->short_description}}</p>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="sub-buttons" style="text-align:center;">
        <button type="button" class="btn btn-secondary btn-sub">Komputery</button><button type="button" class="btn btn-info btn-sub">Drukarki</button>
    </div>

    <div class="trending-wrapper">
        <h3 style="text-align: center;">Popularne produkty w naszym sklepie</h3>
        <br>
        @foreach($items as $item)
        <div class="trending-item" style="padding:100px;float:centre;width:300px;">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}} zł</td>
                </tr>
                
                <tr>
                    <td>Razem</td>
                    <td> {{$item->GPU}}</td>
                </tr>
                <tr>
                    <td>W tym podatek VAT 23%</td>
                </tr>
                <tr>
                    <td>Dostawa</td>
                    <td>10 zł</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @stop