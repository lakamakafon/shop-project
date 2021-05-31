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
            <br>
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <label for="amount">Ilość</label><br>
            <input type="number" class="form-control" name="amount" min="1" max="100" style="width:70px;"><br><br>
            <button class="btn btn-primary">Do koszyka</button><a style="margin-left: 30px;" href="/ordernow" class="btn btn-success">Kup teraz</a>
            </form>
            <br><br>

        </div>
    </div>

</div>

<div class="super_container">
    <header class="header" style="display: none;">
        <div class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list"> <span class="custom_dropdown_placeholder clc">All Categories</span> <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="single_product">
        <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
            <div class="row">
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="https://i.imgur.com/21EYMGD.jpg"><img src="https://i.imgur.com/21EYMGD.jpg" alt=""></li>
                        <li data-image="https://i.imgur.com/DPWSNWd.jpg"><img src="https://i.imgur.com/DPWSNWd.jpg" alt=""></li>
                        <li data-image="https://i.imgur.com/HkEiXfn.jpg"><img src="https://i.imgur.com/HkEiXfn.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-2 order-1">
                    <div class="image_selected"><img src="https://i.imgur.com/qEwct2O.jpg" alt=""></div>
                </div>
                <div class="col-lg-6 order-3">
                    <div class="product_description">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                <li class="breadcrumb-item active">Accessories</li>
                            </ol>
                        </nav>
                        <div class="product_name">Acer Aspire 3 Celeron Dual Core - (2 GB/500 GB HDD/Windows 10 Home) A315-33 Laptop (15.6 inch, Black, 2.1 kg)</div>
                        <div class="product-rating"><span class="badge badge-success"><i class="fa fa-star"></i> 4.5 Star</span> <span class="rating-review">35 Ratings & 45 Reviews</span></div>
                        <div> <span class="product_price">₹ 29,000</span> <strike class="product_discount"> <span style='color:black'>₹ 2,000<span> </strike> </div>
                        <div> <span class="product_saved">You Saved:</span> <span style='color:black'>₹ 2,000<span> </div>
                        <hr class="singleline">
                        <div> <span class="product_info">EMI starts at ₹ 2,000. No Cost EMI Available<span><br> <span class="product_info">Warranty: 6 months warranty<span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">7 Days easy return policy<span><br> <span class="product_info">In Stock: 25 units sold this week<span> </div>
                        <div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="br-dashed">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-3"> <img src="https://img.icons8.com/color/48/000000/price-tag.png"> </div>
                                            <div class="col-md-9 col-xs-9">
                                                <div class="pr-info"> <span class="break-all">Get 5% instant discount + 10X rewards @ RENTOPC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7"> </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">RAM Options</span><br> <button class="btn btn-primary btn-sm">4 GB</button> <button class="btn btn-primary btn-sm">8 GB</button> <button class="btn btn-primary btn-sm">16 GB</button> </div>
                                <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Storage Options</span><br> <button class="btn btn-primary btn-sm">500 GB</button> <button class="btn btn-primary btn-sm">1 TB</button> </div>
                            </div>
                        </div>
                        <hr class="singleline">
                        <div class="order_info d-flex flex-row">
                            <form action="#">
                        </div>
                        <div class="row">
                            <div class="col-xs-6" style="margin-left: 13px;">
                                <div class="product_quantity"> <span>QTY: </span> <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> <button type="button" class="btn btn-success shop-button">Buy Now</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Combo Offers</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="row padding-2">
                        <div class="col-md-5 padding-0">
                            <div class="bbb_combo">
                                <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                        <div class="col-md-5 padding-0">
                            <div class="bbb_combo">
                                <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-left: 36px;">
                            <div class="boxo-pricing-items">
                                <div class="combo-pricing-item"> <span class="items_text">1 Item</span> <span class="combo_item_price">₹13,200</span> </div>
                                <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span> <span class="combo_item_price">₹500</span> </div>
                                <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                <div class="combo-pricing-item"> <span class="items_text">Total</span> <span class="combo_item_price">₹13,700</span> </div>
                                <div class="add-both-cart-button"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center"> <span class="vertical-line"></span> </div>
                <div class="col-md-5" style=" margin-left: -27px;">
                    <div class="row padding-2">
                        <div class="col-md-5 padding-0">
                            <div class="bbb_combo">
                                <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center"> <span class="step">+</span> </div>
                        <div class="col-md-5 padding-0">
                            <div class="bbb_combo">
                                <div class="bbb_combo_image"><img class="bbb_combo_image" src="https://i.imgur.com/K4b71NV.jpg" alt=""></div>
                                <div class="d-flex flex-row justify-content-start"> <strike style="color:red;"> <span class="fs-10" style="color:black;">₹ 32,000<span> </span></span></strike> <span class="ml-auto"><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i><i class="fa fa-star p-rating"></i></span> </div>
                                <div class="d-flex flex-row justify-content-start" style=" margin-bottom: 13px; "> <span style="margin-top: -4px;">₹30,000</span> <span class="ml-auto fs-10">23 Reviews</span> </div> <span>Acer laptop with 10GB RAM + 500 GB Hard Disk</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-left: 36px;">
                            <div class="boxo-pricing-items">
                                <div class="combo-pricing-item"> <span class="items_text">1 Item</span> <span class="combo_item_price">₹13,200</span> </div>
                                <div class="combo-plus"> <span class="plus-sign">+</span> </div>
                                <div class="combo-pricing-item"> <span class="items_text">1 Add-on</span> <span class="combo_item_price">₹500</span> </div>
                                <div class="combo-plus"> <span class="plus-sign">=</span> </div>
                                <div class="combo-pricing-item"> <span class="items_text">Total</span> <span class="combo_item_price">₹13,700</span> </div>
                                <div class="add-both-cart-button"> <button type="button" class="btn btn-primary shop-button">Add to Cart</button> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-underline">
                <div class="col-md-6"> <span class=" deal-text">Specifications</span> </div>
                <div class="col-md-6"> <a href="#" data-abc="true"> <span class="ml-auto view-all"></span> </a> </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="col-md-12">
                        <tbody>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Sales Package :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>2 in 1 Laptop, Power Adaptor, Active Stylus Pen, User Guide, Warranty Documents</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Model Number :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li> 14-dh0107TU </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Part Number :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>7AL87PA</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Color :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Black</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Suitable for :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Processing & Multitasking</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr class="row mt-10">
                                <td class="col-md-4"><span class="p_specification">Processor Brand :</span> </td>
                                <td class="col-md-8">
                                    <ul>
                                        <li>Intel</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop