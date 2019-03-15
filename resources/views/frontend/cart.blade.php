@extends('layouts.master')



@section('cart')
    <div class="nav_item size_3">

        <button id="open_shopping_cart" class="open_button" data-amount="{{$count}}">
            <b class="title">My Cart</b>
            <b class="total_price"> ₹{{$total}}</b>
        </button>

        <!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

        <div class="shopping_cart dropdown">

             @foreach($cart as $carts)
            <div class="animated_item">

                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                <div class="clearfix sc_product">

                    <a href="#" class="product_thumb"><img src="{{URL::to('/')}}{{$carts->options->img }}" style="width:60px;height:60px;" alt=""></a>

                    <a href="#" class="product_name">{{$carts->name}}-></a>

                    <p>{{$carts->qty}} x {{$carts->price}}</p>

                    <button class="close"></button>

                </div><!--/ .clearfix.sc_product-->

                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

            </div><!--/ .animated_item-->
             @endforeach
            <div class="animated_item">

                <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

                <ul class="total_info">

                    <li><span class="price">Tax:</span> ₹{{$tax}}</li>

                    <li><span class="price">Discount:</span></li>

                    <li class="total"><b><span class="price">Total:</span> ₹{{$total}}</b></li>

                </ul>

                <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

            </div><!--/ .animated_item-->

            <div class="animated_item">

                <a href="#" class="button_grey">View Cart</a>

                <a href="#" class="button_blue">Checkout</a>

            </div><!--/ .animated_item-->

        </div><!--/ .shopping_cart.dropdown-->

        <!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

    </div><!--/ .nav_item-->
    @endsection

@section('content')

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>Shopping Cart</li>

            </ul>

            <section class="section_offset">

                <h1>Shopping Cart</h1>

                <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->

                <div class="table_wrap">

                    <table class="table_type_1 shopping_cart_table">

                        <thead>

                        <tr>
                            <th class="product_image_col">Product Image</th>
                            <th class="product_title_col">Product Name</th>
                            {{--<th>SKU</th>--}}
                            <th>Price</th>
                            <th class="product_qty_col">Quantity</th>
                            <th>Total</th>
                            <th class="product_actions_col">Action</th>
                        </tr>

                        </thead>

                        <tbody>

                        @foreach($cart as $carts)

                        <tr class="product" data-id="{{$carts->id}}" >

                            <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->

                            <td class="product_image_col" data-title="Product Image">

                                <a href="#"><img src="{{$carts->options->img}}" style="width:94px;height:70.41px;" alt=""></a>

                            </td>

                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->

                            <td data-title="Product Name" data-id="{{$carts->id}}">

                                <a href="#" class="product_title">{{$carts->name}}</a>


                            </td>

                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - SKU - - - - - - - - - - - - - - - - -->


                            <!-- - - - - - - - - - - - - - End of SKU - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                            <td class="subtotal" data-title="Price">
                                {{$carts->price}}


                            </td>

                            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

                            <td data-title="Quantity">

                                <div class="qty min clearfix">

                                    <a style="height:25px;" href="/removeitem/{{$carts->rowId}}/{{$carts->qty}}">
                                        <button class="theme_button" data-direction="minus">&#45;</button>
                                    </a>

                                    <input style="height:25px;width:28px;" class="quantity" type="text" id="quantity" value="{{$carts->qty}}">

                                    <a style="height:25px;" href="/additem/{{$carts->rowId}}/{{$carts->qty}}">

                                        <button  href="/additem/{{$carts->rowId}}/{{$carts->qty}}" class="plusbutton theme_button" data-direction="plus">&#43;</button>

                                    </a>


                                </div><!--/ .qty.min.clearfix-->

                            </td>

                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->

                            <td class="total" data-title="Total">

                                {{$carts->total}}

                            </td>

                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->

                            <td data-title="Action">


                                <a href="/deleteitem/{{$carts->rowId}}" class="button_dark_grey icon_btn remove_product"><i class="icon-cancel-2"></i></a>

                            </td>

                            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->

                        </tr>


                            @endforeach



                        </tbody>

                    </table>

                </div><!--/ .table_wrap -->

                <footer class="bottom_box on_the_sides">

                    <div class="left_side">

                        <a href="/" class="button_blue middle_btn">Continue Shopping</a>

                    </div>

                    <div class="right_side">

                        <a href="/destroycart" class="button_grey middle_btn">Clear Shopping Cart</a>

                    </div>

                </footer><!--/ .bottom_box -->

                <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->

            </section><!--/ .section_offset -->

            <div class="section_offset">

                <div class="row">

                    <section class="col-sm-4">

                        <h3>Discount Codes</h3>

                        <div class="theme_box">

                            <p class="form_caption">Enter your coupon code if you have one.</p>

                            <form id="discount_code">

                                <ul>

                                    <li class="row">

                                        <div class="col-xs-12">

                                            <input type="text" name="">

                                        </div>

                                    </li>

                                </ul>

                            </form>

                        </div><!--/ .theme_box -->

                        <footer class="bottom_box">

                            <button type="submit" form="discount_code" class="button_grey middle_btn">Apply Coupon</button>

                        </footer>

                    </section><!--/ [col] -->

                    <section class="col-sm-4">

                        <h3>Estimate Shipping and Tax</h3>

                        <div class="theme_box">

                            <p class="form_caption">Enter your destination to get a shipping estimate.</p>

                            <form id="estimate_shipping" class="type_2">

                                <ul>

                                    <li class="row">

                                        <div class="col-xs-12">

                                            <label>Country</label>

                                            <div class="custom_select">

                                                <select>

                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Canada">Canada</option>
                                                    <option selected value="USA">USA</option>

                                                </select>

                                            </div>

                                        </div>

                                    </li>

                                    <li class="row">

                                        <div class="col-lg-7 col-md-6">

                                            <label>State/Province</label>

                                            <div class="custom_select">

                                                <select>

                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Kansas">Kansas</option>

                                                </select>

                                            </div>

                                        </div><!--/ [col] -->

                                        <div class="col-lg-5 col-md-6">

                                            <label for="postal_code">Zip/Postal Code</label>
                                            <input type="text" name="" id="postal_code">

                                        </div><!--/ [col] -->

                                    </li>

                                </ul>

                            </form>

                        </div><!--/ .theme_box -->

                        <footer class="bottom_box">

                            <button type="submit" form="estimate_shipping" class="button_grey middle_btn">Get a Quote</button>

                        </footer><!--/ .bottom_box -->

                    </section><!--/ [col] -->

                    <section class="col-sm-4">

                        <h3>Total</h3>

                        <div class="table_wrap">

                            <table class="zebra">

                                <tfoot>

                                <tr>

                                    <td>Subtotal</td>
                                    <td>{{$subtotal}}</td>

                                </tr>

                                <tr class="total">

                                    <td>Total</td>
                                    <td>{{$total}}</td>

                                </tr>

                                </tfoot>

                            </table>

                        </div>

                        <footer class="bottom_box">

                            <a class="button_blue middle_btn" href="#">Proceed to Checkout</a>

                            <div class="single_link_wrap">

                                <a href="#">Checkout with Multiple Addresses</a>

                            </div>

                        </footer>

                    </section><!-- / [col] -->

                </div><!--/ .row -->

            </div><!--/ .section_offset -->

            <section class="section_offset">

                <h3 class="offset_title">You Might Also Like</h3>

                <!-- - - - - - - - - - - - - - Carousel of you might also like - - - - - - - - - - - - - - - - -->

                <div class="owl_carousel six_items">

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_18.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_offer percentage">

                            <div>30%</div>OFF

                        </div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                        <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><s>$9.99</s> <b>$5.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_19.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$14.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_20.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_new">New</div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Lorem ipsum dolor sit amet...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$73.99</b></p>

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_21.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_offer percentage">

                            <div>15%</div>OFF

                        </div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                        <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><s>$5.99</s> <b>$2.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_22.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Ut pharetra augue nec augue...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price alignleft"><b>$13.99</b></p>

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_23.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_hot">Hot</div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$21.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_18.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_offer percentage">

                            <div>30%</div>OFF

                        </div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                        <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><s>$9.99</s> <b>$5.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_19.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$14.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_20.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_new">New</div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Lorem ipsum dolor sit amet...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$73.99</b></p>

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_21.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_offer percentage">

                            <div>15%</div>OFF

                        </div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                        <div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><s>$5.99</s> <b>$2.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_22.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Ut pharetra augue nec augue...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price alignleft"><b>$13.99</b></p>

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                    <div class="product_item">

                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                        <div class="image_wrap">

                            <img src="images/product_img_23.jpg" alt="">

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

                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                        <div class="label_hot">Hot</div>

                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                        <div class="description">

                            <p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>

                            <div class="clearfix product_info">

                                <p class="product_price"><b>$21.99</b></p>

                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                <ul class="rating">

                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li class="active"></li>
                                    <li></li>

                                </ul>

                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                            </div><!--/ .clearfix.product_info-->

                        </div>

                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                    </div><!--/ .product_item-->

                    <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                </div><!--/ .owl_carousel-->

                <!-- - - - - - - - - - - - - - End of you might also like - - - - - - - - - - - - - - - - -->

            </section>

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
    <script type="text/javascript" >

        jQuery(document).ready(function(){
            $('.plusbutton').on('click',function() {
                $.ajax({
                    url:'cart/'+id,
                    method:'GET',
                    success:function(){
                      var temp = parseInt($('.quantity').val()) ; //return value in string format so we have to convert i into integer
                      temp=temp+1;
                      $('.quantity').val(temp);

                }

                })



            });
        });
    </script>


    {{--<script type="text/javascript" >--}}

        {{--jQuery(document).ready(function(){--}}
            {{--$('.minus').on('click',function() {--}}
                {{--var id= $(this).data('id');--}}
                {{--var rowid = $(this).data('rowid');--}}
                {{--console.log(id);--}}

                {{--//we have to write an update function so as--}}
                {{--$.ajax({--}}
                    {{--url:'removeitem/'+$(this).data('rowid') +$(this).data('qty'),--}}
                    {{--method:'GET',--}}
                    {{--success:function(response)--}}
                    {{--{--}}
                        {{--console.log(response);--}}


                    {{--},--}}
                    {{--error:function (response) {--}}
                        {{--console.log(response)--}}

                    {{--}--}}

                {{--})--}}



            {{--});--}}
        {{--});--}}
    {{--</script>--}}

@endsection