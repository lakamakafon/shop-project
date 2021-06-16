@extends('master')
@section("content")
<style>
.text-gray {
    color: #aaa
}
img {
    height: 170px;
    width: 200px
}
</style>

<div class="container">
    <div class="row text-center text-white mb-5">
        <div class="col-lg-10 mx-auto">
            <h1 class="display-4">Product List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- List group-->
            <h1><center>LAPTOPY W NASZYM SKLEPIE </center></h1>
            <ul class="list-group shadow">
                <!-- list group item-->
                @foreach($items as $item)
                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1" style="margin-left: 30px;">
                            <a href="/detail/{{$item['id']}}"><h5 class="mt-0 font-weight-bold mb-2">{{$item->name}}</h5></a>
                            <p class="font-italic text-muted mb-0">{{$item->short_description}}</p>
                            <div class="d-flex align-items-center justify-content-between mt-1">
                                <h6 class="font-weight-bold my-2">{{number_format($item->price, 2, '.', ' ')}} zł</h6>
                                <ul class="list-inline small">
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                    <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                </ul>
                            </div>
                        </div>
                        <a href="/detail/{{$item['id']}}">
                        <img src="{{$item->gallery}}" class="ml-lg-5 order-1 order-lg-2"></a>
                    </div> <!-- End -->
                </li><br> <!-- End -->
                @endforeach
            </ul> <!-- End -->
        </div>
    </div>
</div>
@stop