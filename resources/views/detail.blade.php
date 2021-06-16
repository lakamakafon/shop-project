@extends('master')
@section("content")
<div class="super_container">
    <div class="single_product">
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                <div class="row">
                    <div class="col-lg-4 order-lg-2 order-1">
                        <div class="image_selected"><img src="{{$product->gallery}}"></div>
                    </div>
                    <div class="col-lg-6 order-3" style="margin-top: 120px;">
                        <div class="product_description">
                            <div class="product_name">
                                <h1>{{$product->name}}</h1>
                            </div>
                            <div> <span class="product_price">{{number_format($product->price, 2, '.', ' ')}} zł</span></div>
                            <div> {{$product->description}}</div>
                            <hr class="singleline">
                            <div class="order_info d-flex flex-row">
                                <form action="#">
                            </div>
                            <div class="row">
                                <div class="col-xs-6" style="margin-left: 13px;">
                                </div>
                                <div class="col-xs-6"> <button class="btn btn-primary shop-button">Dodaj do koszyka</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row row-underline">
        <div class="col-md-6"> <span class=" deal-text">Specyfikacja</span> </div>
        <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="col-md-12">
                <tbody>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Producent</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->manufacturer}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Model</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li> {{$product->model}} </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Rodzina procesora</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->CPU_family}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Model procesora</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->CPU_model}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification">Taktowanie procesora</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->CPU_Hz}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Rdzenie/wątki</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->cores_threads}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Typ pamięci RAM</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->RAM_type}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Wielkość pamięci RAM</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->RAM_size}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Rodzina karty graficznej</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->GPU}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Model karty graficznej</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->GPU_model}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Typ dysku twardego</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->disk_type}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Wielkość pamięci dysku twardego</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->disk_size}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Rodzaj matrycy</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->screen_type}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Rozmiar ekranu</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->screen_size}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Porty</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->ports}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Bateria</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->battery}} </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> System operacyjny</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->OS}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Język systemu operacyjnego</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->OS_lang}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row mt-10">
                        <td class="col-md-4"><span class="p_specification"> Rozmiar</span> </td>
                        <td class="col-md-8">
                            <ul>
                                <li>{{$product->size}}</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop