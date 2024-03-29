@extends('layouts.master')

@section('content')

    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="/product">Home</a></li>
                <li><a href="#">Product details</a></li>


            </ul>

            <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

            <div class="row">

                <main class="col-md-9 col-sm-8">

                    <!-- - - - - - - - - - - - - - Product images & description - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <div class="clearfix">

                            <!-- - - - - - - - - - - - - - Product image column - - - - - - - - - - - - - - - - -->

                            <div class="single_product">

                                <!-- - - - - - - - - - - - - - Image preview container - - - - - - - - - - - - - - - - -->

                                <div class="image_preview_container">

                                    <img id="img_zoom" data-zoom-image="images/qv_large_1.JPG" src="{{URL::to('/')}}{{$productdetails->photo->file}}" alt="">

                                    <button class="button_grey_2 icon_btn middle_btn open_qv"><i class="icon-resize-full-6"></i></button>

                                </div><!--/ .image_preview_container-->

                                <!-- - - - - - - - - - - - - - End of image preview container - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

                                <div class="product_preview">

                                    <div class="owl_carousel" id="thumbnails">

                                        <a href="#" data-image="images/qv_img_1.jpg" data-zoom-image="images/qv_large_1.JPG">

                                            <img src="{{URL::to('/')}}/proassets/images/qv_thumb_1.jpg" data-large-image="images/qv_img_1.jpg" alt="">

                                        </a>

                                        <a href="#" data-image="images/qv_img_2.jpg" data-zoom-image="images/qv_large_2.jpg">

                                            <img src="{{URL::to('/')}}/proassets/images/qv_thumb_2.jpg" data-large-image="images/qv_img_2.jpg" alt="">

                                        </a>

                                        <a href="#" data-image="images/qv_img_3.jpg" data-zoom-image="images/qv_large_3.jpg">

                                            <img src="{{URL::to('/')}}/proassets/images/qv_thumb_3.jpg" data-large-image="images/qv_img_3.jpg" alt="">

                                        </a>

                                        <a href="#" data-image="images/qv_img_4.jpg" data-zoom-image="images/qv_large_4.JPG">

                                            <img src="{{URL::to('/')}}/proassets/images/qv_thumb_4.jpg" data-large-image="images/qv_img_4.jpg" alt="">

                                        </a>

                                    </div><!--/ .owl-carousel-->

                                </div><!--/ .product_preview-->

                                <!-- - - - - - - - - - - - - - End of prodcut thumbs carousel - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Share - - - - - - - - - - - - - - - - -->

                                <div class="v_centered">

                                    <span class="title">Share this:</span>

                                    <div class="addthis_widget_container">
                                        <!-- AddThis Button BEGIN -->
                                        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                                            <a class="addthis_button_preferred_1"></a>
                                            <a class="addthis_button_preferred_2"></a>
                                            <a class="addthis_button_preferred_3"></a>
                                            <a class="addthis_button_preferred_4"></a>
                                            <a class="addthis_button_compact"></a>
                                            <a class="addthis_counter addthis_bubble_style"></a>
                                        </div>
                                        <!-- AddThis Button END -->
                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of share - - - - - - - - - - - - - - - - -->

                            </div>

                            <!-- - - - - - - - - - - - - - End of product image column - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product description column - - - - - - - - - - - - - - - - -->

                            <div class="single_product_description">

                                <h3 class="offset_title"><a href="#">{{$productdetails->P_name}}</a></h3>

                                <!-- - - - - - - - - - - - - - Page navigation - - - - - - - - - - - - - - - - -->

                                <div class="page-nav">

                                    <a href="#" class="page-prev"></a>
                                    <a href="#" class="page-next"></a>

                                </div>

                                <!-- - - - - - - - - - - - - - End of page navigation - - - - - - - - - - - - - - - - -->

                                <div class="description_section v_centered">

                                    <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                    <ul class="rating">

                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>

                                    </ul>

                                    <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

                                    <ul class="topbar">

                                        <li><a href="#">3 Review(s)</a></li>
                                        <li><a href="#">Add Your Review</a></li>

                                    </ul>

                                    <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                                </div>

                                <div class="description_section">

                                    <table class="product_info">

                                        <tbody>

                                        <tr>

                                            <td>Manufacturer: </td>
                                            <td><a href="#">Chanel</a></td>

                                        </tr>

                                        <tr>

                                            <td>Availability: </td>
                                            <td>{{$productdetails->availability}}</td>

                                        </tr>


                                        </tbody>

                                    </table>

                                </div>

                                <p class="product_price"><s>{{$productdetails->P_MRP}}</s> <b class="theme_color">₹{{$productdetails->P_total_retail_price}}</b></p>

                                <!-- - - - - - - - - - - - - - Product size - - - - - - - - - - - - - - - - -->

                                <div class="description_section_2 v_centered">

                                    <span class="title">Size:</span>

                                    <div class="custom_select min">

                                        <select>

                                            <option value="Small">Small</option>
                                            <option value="Middle">Middle</option>
                                            <option value="Big">Big</option>

                                        </select>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product size - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

                                <div class="description_section_2 v_centered">

                                    <span class="title">Qty:</span>

                                    <div class="qty min clearfix">

                                        <button class="theme_button" data-direction="minus">&#45;</button>
                                        <input type="text" name="" value="1">
                                        <button class="theme_button" data-direction="plus">&#43;</button>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>

                                    <button class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                                    <button class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                            </div>

                            <!-- - - - - - - - - - - - - - End of product description column - - - - - - - - - - - - - - - - -->

                        </div>

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of product images & description - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <div class="tabs type_2">

                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                            <ul class="tabs_nav clearfix">

                                <li><a href="#tab-1">Description</a></li>
                                <li><a href="#tab-2">Specifications</a></li>
                                <li><a href="#tab-3">Reviews (3)</a></li>
                                <li><a href="#tab-4">Custom Tab</a></li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                            <div class="tab_containers_wrap">

                                <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

                                <div id="tab-1" class="tab_container">

                                    <p>{{$productdetails->P_description}}</p>


                                </div><!--/ #tab-1-->

                                <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

                                <div id="tab-2" class="tab_container">

                                    <ul class="specifications">

                                        {{--<li><span>Weight:</span>0.3 Kg</li>--}}
                                        {{--<li><span>Dimensions:</span>20x10x30 Cm</li>--}}
                                        {{--<li><span>Material:</span>Plastic</li>--}}
                                        {{--<li><span>Manufacture:</span>G&amp;D</li>--}}
                                        {{--<li><span>Guarantee:</span>2 Years</li>--}}
                                        <p>{{$productdetails->P_specification}}</p>

                                    </ul>

                                </div><!--/ #tab-2-->

                                <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

                                <div id="tab-3" class="tab_container">

                                    <section class="section_offset">

                                        <h3>Customer Reviews</h3>

                                        <ul class="reviews">

                                            <li>

                                                <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->

                                                <article class="review">

                                                    <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->

                                                    <ul class="review-rates">

                                                        <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Price</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Value</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Quality</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->

                                                    <div class="review-body">

                                                        <div class="review-meta">

                                                            <h5 class="bold">Good Quality</h5>

                                                            Review by <a href="#" class="bold">Ivana Wrong</a> on 12/4/2014

                                                        </div>

                                                        <p>Aliquam Erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo.</p>

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->

                                                </article>

                                                <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->

                                            </li>

                                            <li>

                                                <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->

                                                <article class="review">

                                                    <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->

                                                    <ul class="review-rates">

                                                        <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Price</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Value</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Quality</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->

                                                    <div class="review-body">

                                                        <div class="review-meta">

                                                            <h5 class="bold">Excelent</h5>

                                                            Review by <a href="#" class="bold">Bradley Grosh</a> on 26/3/2014

                                                        </div>

                                                        <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.</p>

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->

                                                </article>

                                                <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->

                                            </li>

                                            <li>

                                                <!-- - - - - - - - - - - - - - Review - - - - - - - - - - - - - - - - -->

                                                <article class="review">

                                                    <!-- - - - - - - - - - - - - - Rates - - - - - - - - - - - - - - - - -->

                                                    <ul class="review-rates">

                                                        <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Price</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of price - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Value - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Value</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of value - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Quality - - - - - - - - - - - - - - - - -->

                                                        <li class="v_centered">

                                                            <span class="name">Quality</span>

                                                            <ul class="rating">

                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li class="active"></li>
                                                                <li></li>

                                                            </ul>

                                                        </li>

                                                        <!-- - - - - - - - - - - - - - End of quality - - - - - - - - - - - - - - - - -->

                                                    </ul>

                                                    <!-- - - - - - - - - - - - - - End of rates - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Review body - - - - - - - - - - - - - - - - -->

                                                    <div class="review-body">

                                                        <div class="review-meta">

                                                            <h5 class="bold">Fast Shipping</h5>

                                                            Review by <a href="#" class="bold">Alan Smith</a> on 4/3/2014

                                                        </div>

                                                        <p>Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of review body - - - - - - - - - - - - - - - - -->

                                                </article>

                                                <!-- - - - - - - - - - - - - - End of review - - - - - - - - - - - - - - - - -->

                                            </li>

                                        </ul>

                                        <a href="#" class="button_grey middle_btn">Show All</a>

                                    </section><!--/ .section_offset -->

                                    <section class="section_offset">

                                        <h3>Write Your Own Review</h3>

                                        <div class="row">

                                            <div class="col-lg-6">

                                                <p>You're reviewing: <a href="#">Metus nulla facilisi, Original 24 fl oz</a><br>How do you rate this product? *</p>

                                                <!-- - - - - - - - - - - - - - Rate the - - - - - - - - - - - - - - - - -->

                                                <div class="table_wrap rate_table">

                                                    <table>

                                                        <thead>

                                                        <tr>

                                                            <th></th>
                                                            <th>1 Star</th>
                                                            <th>2 Stars</th>
                                                            <th>3 Stars</th>
                                                            <th>4 Stars</th>
                                                            <th>5 Stars</th>

                                                        </tr>

                                                        </thead>

                                                        <tbody>

                                                        <tr>

                                                            <td>Price</td>

                                                            <td>

                                                                <input checked type="radio" name="price_rate" id="rate_1">
                                                                <label for="rate_1"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="price_rate" id="rate_2">
                                                                <label for="rate_2"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="price_rate" id="rate_3">
                                                                <label for="rate_3"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="price_rate" id="rate_4">
                                                                <label for="rate_4"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="price_rate" id="rate_5">
                                                                <label for="rate_5"></label>

                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td>Value</td>

                                                            <td>

                                                                <input checked type="radio" name="value_rate" id="rate_6">
                                                                <label for="rate_6"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="value_rate" id="rate_7">
                                                                <label for="rate_7"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="value_rate" id="rate_8">
                                                                <label for="rate_8"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="value_rate" id="rate_9">
                                                                <label for="rate_9"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="value_rate" id="rate_10">
                                                                <label for="rate_10"></label>

                                                            </td>

                                                        </tr>

                                                        <tr>

                                                            <td>Quality</td>

                                                            <td>

                                                                <input checked type="radio" name="quality_rate" id="rate_11">
                                                                <label for="rate_11"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="quality_rate" id="rate_12">
                                                                <label for="rate_12"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="quality_rate" id="rate_13">
                                                                <label for="rate_13"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="quality_rate" id="rate_14">
                                                                <label for="rate_14"></label>

                                                            </td>

                                                            <td>

                                                                <input type="radio" name="quality_rate" id="rate_15">
                                                                <label for="rate_15"></label>

                                                            </td>

                                                        </tr>

                                                        </tbody>

                                                    </table>

                                                </div>

                                                <!-- - - - - - - - - - - - - - End of rate the - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                            <div class="col-lg-6">

                                                <p class="subcaption">All fields are required.</p>

                                                <!-- - - - - - - - - - - - - - Review form - - - - - - - - - - - - - - - - -->

                                                <form class="type_2">

                                                    <ul>

                                                        <li class="row">

                                                            <div class="col-sm-6">

                                                                <label for="nickname">Nickname</label>
                                                                <input type="text" name="" id="nickname">

                                                            </div>

                                                            <div class="col-sm-6">

                                                                <label for="summary">Summary of Your Review</label>
                                                                <input type="text" name="" id="summary">

                                                            </div>

                                                        </li>

                                                        <li class="row">

                                                            <div class="col-xs-12">

                                                                <label for="review_message">Review</label>

                                                                <textarea rows="5" id="review_message"></textarea>

                                                            </div>

                                                        </li>

                                                        <li class="row">

                                                            <div class="col-xs-12">

                                                                <button class="button_dark_grey middle_btn">Submit Review</button>

                                                            </div>

                                                        </li>

                                                    </ul>

                                                </form>

                                                <!-- - - - - - - - - - - - - - End of review form - - - - - - - - - - - - - - - - -->

                                            </div>

                                        </div><!--/ .row -->

                                    </section><!--/ .section_offset -->

                                </div><!--/ #tab-3-->

                                <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Tab - - - - - - - - - - - - - - - - -->

                                <div id="tab-4" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Youtube video - - - - - - - - - - - - - - - - -->

                                    <div class="video_wrap">

                                        <iframe src="http://www.youtube.com/embed/-BrDlrytgm8?controls=1&amp;autohide=0&amp;wmode=transparent"></iframe>

                                    </div><!--/ .video_wrap -->

                                    <!-- - - - - - - - - - - - - - End of youtube video - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-4-->

                                <!-- - - - - - - - - - - - - - End tab - - - - - - - - - - - - - - - - -->

                            </div><!--/ .tab_containers_wrap -->

                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                        </div><!--/ .tabs-->

                    </div><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3 class="offset_title">Related Products</h3>

                        <div class="owl_carousel related_products">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_30.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Leo vel metus nulla facilisi etiam cursus 750mg...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_31.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Ut pharetra augue nec augue, 200 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$4.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_32.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_bestseller">Bestseller</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris fermentum dictum magna sed laoreet ...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$17.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_33.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Vestibulum libero nisl porta vel scelerisque eget...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$12.59</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_30.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Leo vel metus nulla facilisi etiam cursus 750mg...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_31.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Ut pharetra augue nec augue, 200 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$4.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_32.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_bestseller">Bestseller</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris fermentum dictum magna sed laoreet ...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$17.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_33.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Vestibulum libero nisl porta vel scelerisque eget...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$12.59</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel -->

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3 class="offset_title">Other Products From This Seller</h3>

                        <div class="owl_carousel other_products">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_6.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Enzymatic Therapy CoQ10, 100mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$75.39</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_14.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Nisl porta vel scelerisque eget libero, Vcaps 60 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$79.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/product_img_15.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_hot">Hot</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem ipsum dolor sit amet consectetuer adipis mauris 12 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$24.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/tabs_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Leo vel metus nulla facilisi etiam cursus 750mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/tabs_img_2.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view pb" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart pb">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .centered_btns-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Vestibulum libero nisl, porta vel 30</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}/proassets/images/tabs_img_3.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view pb" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart pb">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .centered_btns-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_hot">Hot</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Amet consectetuer adipis mauris lorem ipsum dolor sit  fl oz (75ml)</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .owl_carousel -->

                    </section><!--/ .section_offset -->

                </main><!--/ [col]-->

                <aside class="col-md-3 col-sm-4">

                    <!-- - - - - - - - - - - - - - Seller Information - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Seller Information</h3>

                        <div class="theme_box">

                            <div class="seller_info clearfix">

                                <a href="#" class="alignleft photo">

                                    <img src="{{URL::to('/')}}/proassets/images/seller_photo_1.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#"><b>John Smith</b></a>

                                    <p class="seller_category">Member since Mar 2013</p>

                                </div>

                            </div><!--/ .seller_info-->

                            <ul class="seller_stats">

                                <li>

                                    <ul class="topbar">

                                        <li>China (Mainland)</li>

                                        <li><a href="#">Contact Details</a></li>

                                    </ul>

                                </li>

                                <li><span class="bold">99.8%</span> Positive Feedback</li>

                                <li><span class="bold">7606</span> Transactions</li>

                            </ul>

                            <div class="v_centered">

                                <a href="#" class="button_blue mini_btn">Contact Seller</a>

                                <a href="#" class="small_link">Chat Now</a>

                            </div>

                        </div><!--/ .theme_box -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View This Seller's Products</a>

                        </footer>

                    </section>

                    <!-- - - - - - - - - - - - - - End of seller information - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <section class="infoblock type_2">

                            <i class="icon-money"></i>

                            <h4 class="caption"><b>100% Money Back Guaranteed</b></h4>

                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.</p>

                            <a href="#" class="button_dark_grey middle_btn">Read More</a>

                        </section><!--/ .infoblock.type_2-->

                    </div>

                    <!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - You might also like - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3 class="offset_title">You Might Also Like</h3>

                        <div class="owl_carousel widgets_carousel">

                            <ul class="products_list_widget">

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_4.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Adipiscing aliquet sed in lacus...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$5.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_5.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Adipis mauris lorem ipsum dolor...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$8.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_6.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Donec porta diam eu massa quisque...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$76.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            </ul><!--/ .list_of_products-->

                            <ul class="products_list_widget">

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_7.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Diam eu massa quisque donec...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$5.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_8.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Ut pharetra augue nec augue...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$8.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <li>

                                    <a href="#" class="product_thumb">

                                        <img src="{{URL::to('/')}}/proassets/images/product_thumb_9.jpg" alt="">

                                    </a>

                                    <div class="wrapper">

                                        <a href="#" class="product_title">Donec porta diam eu massa...</a>

                                        <div class="clearfix product_info">

                                            <p class="product_price alignleft"><b>$76.99</b></p>

                                            <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                            <ul class="rating alignright">

                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>
                                                <li class="active"></li>

                                            </ul>

                                            <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        </div>

                                    </div>

                                </li>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            </ul><!--/ .list_of_products-->

                        </div>

                    </section>

                    <!-- - - - - - - - - - - - - - End of you might also like - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Infoblock - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <section class="infoblock type_2">

                            <i class="icon-lock"></i>

                            <h4 class="caption"><b>Safe &amp; Secure Payment</b></h4>

                            <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.</p>

                            <a href="#" class="button_dark_grey middle_btn">Read More</a>

                        </section><!--/ .infoblock.type_2-->

                    </div>

                    <!-- - - - - - - - - - - - - - End infoblock - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Already Viewed Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="{{URL::to('/')}}/proassets/images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Adipiscing aliquet sed in lacus...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="{{URL::to('/')}}/proassets/images/product_thumb_11.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Ut pharetra augue nec augue,...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->


    @endsection