@extends('layouts.master')

@section('content')


{{--

    <div class="page_wrapper">

        <div class="container">

            <div class="row">

                <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                <aside class="col-md-3 col-sm-4 has_mega_menu">

                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="widget_title">Today's Deals</h3>

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_1.jpg" alt="">

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

                                    <p><a href="#">Lorem Body Wash, Original 24 fl oz</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_2.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>25%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ipsum with Ultra Dolor, Size 4 Diapers 29 ea</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_3.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>40%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ut  Tellus Dolor, Dapibus Eget, 1000mg, Tablets, 120 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_4.jpg" alt="">

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

                                    <p><a href="#">Nulla  Facilisi Aenean Nec Eros Vestibulum, Deep Cleansing 1 each</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_5.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>50%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nam  Elit Agna Endrerit Sit Amet, Chocolate Milk 4 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Categories</h3>

                        <ul class="theme_menu cats">

                            <li class="has_megamenu">

                                <a href="#">Medicine &amp; Health (1375)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#">Children's Healthcare</a></li>
                                            <li><a href="#">Cough, Cold &amp; Flu</a></li>
                                            <li><a href="#">Diabetes Management</a></li>
                                            <li><a href="#">Digestion &amp; Nausea</a></li>
                                            <li><a href="#">Eye Care</a></li>
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#">Health Clearance</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Home Health Care</a></li>
                                            <li><a href="#">Home Tests</a></li>
                                            <li><a href="#">Incontinence Aids</a></li>
                                            <li><a href="#">Natural &amp; Homeopathic</a></li>
                                            <li><a href="#">Pain &amp; Fever Relief</a></li>
                                            <li><a href="#">Skin Condition Treatments</a></li>
                                            <li><a href="#">Sleep &amp; Snoring aids</a></li>
                                            <li><a href="#">Stop Smoking Aids</a></li>
                                            <li><a href="#">Support &amp; Braces</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Beauty (1687)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_2 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Category</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Bath &amp; Spa</a></li>
                                            <li><a href="#">Beauty Clearance</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Hair Care</a></li>
                                            <li><a href="#">Makeup &amp; Accessories</a></li>
                                            <li><a href="#">Skin Care</a></li>
                                            <li><a href="#">Tools &amp; Accessories</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Brand</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Abibas</a></li>
                                            <li><a href="#">Agedir</a></li>
                                            <li><a href="#">Aldan</a></li>
                                            <li><a href="#">Biomask</a></li>
                                            <li><a href="#">Gamman</a></li>
                                            <li><a href="#">Pallona</a></li>
                                            <li><a href="#">Pure Care</a></li>
                                            <li><a href="#" class="all">View All Brands</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <a href="#">
                                            <img src="images/mega_menu_img_1.jpg" alt="">
                                        </a>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Personal Care (1036)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_3 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Oral Care</a></li>
                                            <li><a href="#">Shaving &amp; Hair Removal</a></li>
                                            <li><a href="#">Men's</a></li>
                                            <li><a href="#">Sun Care</a></li>
                                            <li><a href="#">Clearance</a></li>
                                            <li><a href="#">Feminine Care</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Soaps &amp; Bodywash</a></li>
                                            <li><a href="#">Massage &amp; Relaxation</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item -->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item products_in_mega_menu">

                                        <h6 class="widget_title"><b>Today's Deals</b></h6>

                                        <div class="row">

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_11.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>30%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Ivory Body Wash, Original 24 fl oz</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_12.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>25%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Luvs with Leakguards, Size 4 Diapers 29 ea</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_13.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>40%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Doctor's Best Curcumin C3 Complex with...</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                        </div><!--/ .row-->

                                        <hr>

                                        <a href="#" class="button_grey">View All Deals</a>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Vitamins &amp; Supplements (202)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_4 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Condition</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aches &amp; Pains</a></li>
                                            <li><a href="#">Acne Solutions</a></li>
                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Multivitamins</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">50+ Multivitamins</a></li>
                                            <li><a href="#">Children's Multivitamins</a></li>
                                            <li><a href="#">Men's Multivitamins</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Herbs</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aloe Vera</a></li>
                                            <li><a href="#">Ashwagandha</a></li>
                                            <li><a href="#">Astragalus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_banner">

                                        <a href="#">
                                            <img src="images/mega_menu_img_2.jpg" alt="">
                                        </a>

                                    </div><!--/ .mega_menu_banner-->

                                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu"><a href="#">Baby Needs (525)</a></li>
                            <li class="has_megamenu"><a href="#">Diet &amp; Fitness (135)</a></li>
                            <li class="has_megamenu"><a href="#">Sexuall Well-being (298)</a></li>
                            <li class="has_megamenu"><a href="#" class="all"><b>All Categories</b></a></li>

                        </ul>

                    </section><!--/ .animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Testimonials</h3>

                        <!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Alan, Los Angeles</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Tracy, New York</b></div>

                                <p>Donec sit amet eros. Lorem ipsum dolor sit amet elit. Mauris amet fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Nikki, Boston</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Testimonials</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Bestseller Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce  Euismod Consequat Ante...</a>

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

                                    <img src="images/product_thumb_5.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem  Ipsum Dolor Sit Amet...</a>

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

                                    <img src="images/product_thumb_6.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Ut Tellus  Dolor Dapibus Eget...</a>

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

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_11.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - On Sale Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>On Sale Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_10.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce Euismod Consequat Ante...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_11.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_12.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of On Sale Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Sign Up to Our Newsletter</h3>

                        <div class="theme_box">

                            <p class="form_caption">Sing up to our newsletter and get exclusive deals you wont find any- where else straight to your inbox!</p>

                            <form class="newsletter subscribe clearfix" novalidate>

                                <input type="email" name="sc_email" placeholder="Enter your email address">

                                <button class="button_blue def_icon_btn"></button>

                            </form>

                        </div><!--/ .theme_box-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

                <main class="col-md-9 col-sm-8">

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

                        <div class="revolution_slider">

                            <div class="rev_slider">

                                <ul>

                                    <!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7">

                                        <img src="images/home_slide_4.jpg" alt="">

                                        <div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90" data-easing="easeOutBack" data-speed="600" data-start="900">Best Quality</div>

                                        <div class="caption sfl stl layer_2" data-x="left" data-y="138" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1000">Medications</div>

                                        <div class="caption sfl stl layer_3" data-x="left" data-y="190" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">at Low Prices</div>

                                        <div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
                                            <a href="#" class="button_blue big_btn">Shop Now!</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Slide 2 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7" class="align_center">

                                        <img src="images/home_slide_5.jpg" alt="">

                                        <div class="caption sfl stl layer_5" data-x="center" data-y="77" data-easing="easeOutBack" data-speed="600" data-start="900">Have A Question?</div>

                                        <div class="caption sfl stl layer_6" data-x="center" data-y="135" data-easing="easeOutBack" data-speed="600" data-start="1050"><small>Our</small> Pharmacists<br><small>Are</small> Ready <small>to</small> Help You!</div>

                                        <div class="caption sfb stb" data-x="center" data-y="260" data-easing="easeOutBack" data-speed="700" data-start="1150">
                                            <a href="#" class="button_blue big_btn">Contact Us Now!</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 2 - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Slide 3 - - - - - - - - - - - - - - - - -->

                                    <li data-transition="papercut" data-slotamount="7">

                                        <img src="images/home_slide_6.jpg" alt="">

                                        <div class="caption sfl stl layer_8" data-x="right" data-y="73" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="900">Get 10% Off</div>

                                        <div class="caption sfl stl layer_9" data-x="right" data-y="122" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1000">For Reorders</div>

                                        <div class="caption sfl stl layer_10" data-x="right" data-y="178" data-hoffset="-60" data-easing="easeOutBack" data-speed="600" data-start="1100">Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</div>

                                        <div class="caption sfb stb" data-x="right" data-hoffset="-60" data-y="262" data-easing="easeOutBack" data-speed="700" data-start="1150">
                                            <a href="#" class="button_blue big_btn">Read More</a>
                                        </div>

                                    </li>

                                    <!-- - - - - - - - - - - - - - End of Slide 3 - - - - - - - - - - - - - - - - -->

                                </ul>

                            </div><!--/ .rev_slider-->

                        </div><!--/ .revolution_slider-->

                        <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

                    </div><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <div class="row">

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown">

                                    <img src="images/banner_img_1.jpg" alt="">

                                </a>

                            </div><!--/ [col]-->

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                                    <img src="images/banner_img_2.jpg" alt="">

                                </a>

                            </div><!--/ [col]-->

                        </div><!--/ .row-->

                    </div><!--/ .section_offset-->

                    <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Medicine &amp; Health</h3>

                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                        <div class="tabs type_2 products">

                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                            <ul class="tabs_nav clearfix">

                                <li><a href="#tab-1">Allergy &amp; Sinus</a></li>
                                <li><a href="#tab-2">Cough, Cold &amp; Flu</a></li>
                                <li><a href="#tab-3">Diabets Management</a></li>
                                <li><a href="#tab-4">First Aid</a></li>
                                <li><a href="#tab-5">Skin Treatments</a></li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                            <div class="tab_containers_wrap">

                                <div id="tab-1" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>

                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-1-->

                                <div id="tab-2" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-2-->

                                <div id="tab-3" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 180</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-3-->

                                <div id="tab-4" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 100 af</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-4-->

                                <div id="tab-5" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem Quia 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-5-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                        </div><!--/ .tabs.section_offset-->

                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Beauty - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="offset_title">Beauty</h3>

                        <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_7.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris Fermentum Dictum Magna, Liqui-gels 24 capsules</a>

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

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_8.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_bestseller">Bestseller</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer, Ipsum &amp; Amet 4.25 fl oz (126ml)</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$8.99</b></p>

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

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_9.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Mauris Fermentum Dictum Magna, 2mg, White Ice Mint 160 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$76.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/tabs_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Nam Elit Agna Endrerit Sit Amet 750mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .sh_container-->

                        <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Products</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Beauty - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Personal Care - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Personal Care</h3>

                        <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                        <div class="tabs type_2 products">

                            <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                            <ul class="tabs_nav clearfix">

                                <li><a href="#tab-6">Oral Care</a></li>
                                <li><a href="#tab-7">Hair Care</a></li>
                                <li><a href="#tab-8">Men's</a></li>
                                <li><a href="#tab-9">Soap &amp; Bodywash</a></li>
                                <li><a href="#tab-10">Sun Care</a></li>
                                <li><a href="#tab-11">Feminine Care</a></li>
                                <li><a href="#tab-12">Foot Care</a></li>

                            </ul>

                            <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                            <div class="tab_containers_wrap">

                                <div id="tab-6" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nam Elit Agna Endrerit Sit Amet 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem, Caramel Chocolate Crunch 5 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$9.59</b></p>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/product_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Nemo Enim Ipsam Voluptatem, Lemon 4 fl oz (120ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$8.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-6-->

                                <div id="tab-7" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Aenean Auctor Wisi Et Urna 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 15, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-7-->

                                <div id="tab-8" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Mauris Fermentum Dictum Magna Lorem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of hot products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-8-->

                                <div id="tab-9" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">NMauris Fermentum Dictum Magna 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 30, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget Lorem 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-9-->

                                <div id="tab-10" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ut Tellus Dolor Dapibus Eget 30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_4.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of sale products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-10-->

                                <div id="tab-11" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Sit Amet Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_2.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing 15, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Sit Amet Consectetuer 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of bestsellers - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-11-->

                                <div id="tab-12" class="tab_container">

                                    <!-- - - - - - - - - - - - - - Carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <div class="owl_carousel carousel_in_tabs">

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_5.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Adipiscing 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_3.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Dolor Sit Amet Consectetuer Adipiscing  30</a>

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

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/deals_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_hot">Hot</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Lorem Ipsum Dolor Sit Amet Consectetuer Adipiscing, middle_btn 2.5 fl oz (75ml)</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                        <div class="product_item type_2">

                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                            <div class="image_wrap">

                                                <img src="images/tabs_img_1.jpg" alt="">

                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                <div class="actions_wrap">

                                                    <div class="centered_buttons">

                                                        <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    </div><!--/ .centered_buttons -->

                                                </div><!--/ .actions_wrap-->

                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                            </div><!--/. image_wrap-->

                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                            <div class="label_new">New</div>

                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                            <div class="description">

                                                <a href="#">Ipsum Dolor Consectetuer Adipiscing 750mg, Softgels 120 ea</a>

                                                <div class="clearfix product_info">

                                                    <p class="product_price alignleft"><b>$44.99</b></p>

                                                </div>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                            <div class="buttons_row">

                                                <button class="button_blue middle_btn">Add to Cart</button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                            </div>

                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/ .product_item-->

                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .sh_container-->

                                    <!-- - - - - - - - - - - - - - End of carousel of top rated products - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                    <footer class="bottom_box">

                                        <a href="#" class="button_grey middle_btn">View All Products</a>

                                    </footer>

                                    <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                </div><!--/ #tab-12-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                        </div><!--/ .tabs.section_offset-->

                        <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Personal Care - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Vitamins & Supplements - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="offset_title">Vitamins &amp; Supplements</h3>

                        <!-- - - - - - - - - - - - - - Carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel carousel_in_tabs">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_6.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor, 100mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_14.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Adipiscing, Vcaps 60 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$79.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/product_img_15.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Sit Amet Consectetuer, Peanut Butter Fudge 12 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$24.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item type_2">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/tabs_img_1.jpg" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                        </div><!--/ .centered_buttons -->

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#">Lorem Ipsum Dolor Sit Amet Adipiscing 750mg, Softgels 120 ea</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$44.99</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                <div class="buttons_row">

                                    <button class="button_blue middle_btn">Add to Cart</button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>
                                    <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                </div>

                                <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .sh_container-->

                        <!-- - - - - - - - - - - - - - End of carousel of beauty products - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Products</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of Vitamins & Supplements - - - - - - - - - - - - - - - - -->

                </main><!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->
--}}

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <div class="row" >



                <aside class="col-lg-3 col-sm-3 has_mega_menu">

                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

       {{--             <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="widget_title">Today's Deals</h3>

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_1.jpg" alt="">

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

                                    <p><a href="#">Lorem Body Wash, Original 24 fl oz</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_2.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>25%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ipsum with Ultra Dolor, Size 4 Diapers 29 ea</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_3.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>40%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="2" data-day="9" data-hours="10" data-minutes="30" data-seconds="30"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Ut  Tellus Dolor, Dapibus Eget, 1000mg, Tablets, 120 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_4.jpg" alt="">

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

                                    <p><a href="#">Nulla  Facilisi Aenean Nec Eros Vestibulum, Deep Cleansing 1 each</a></p>

                                    <div class="clearfix product_info">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="images/deals_img_5.jpg" alt="">

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

                                <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_offer percentage">

                                    <div>50%</div>OFF

                                </div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                <div class="countdown" data-year="2016" data-month="3" data-day="16" data-hours="11" data-minutes="10" data-seconds="10"></div>

                                <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <p><a href="#">Nam  Elit Agna Endrerit Sit Amet, Chocolate Milk 4 ea</a></p>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div><!--/ .clearfix.product_info-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->
--}}
                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Categories</h3>

                        <ul class="theme_menu cats">

                            <li class="has_megamenu">

                                <a href="#">Medicine &amp; Health (1375)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#">Children's Healthcare</a></li>
                                            <li><a href="#">Cough, Cold &amp; Flu</a></li>
                                            <li><a href="#">Diabetes Management</a></li>
                                            <li><a href="#">Digestion &amp; Nausea</a></li>
                                            <li><a href="#">Eye Care</a></li>
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#">Health Clearance</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Home Health Care</a></li>
                                            <li><a href="#">Home Tests</a></li>
                                            <li><a href="#">Incontinence Aids</a></li>
                                            <li><a href="#">Natural &amp; Homeopathic</a></li>
                                            <li><a href="#">Pain &amp; Fever Relief</a></li>
                                            <li><a href="#">Skin Condition Treatments</a></li>
                                            <li><a href="#">Sleep &amp; Snoring aids</a></li>
                                            <li><a href="#">Stop Smoking Aids</a></li>
                                            <li><a href="#">Support &amp; Braces</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Beauty (1687)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_2 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Category</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Bath &amp; Spa</a></li>
                                            <li><a href="#">Beauty Clearance</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Hair Care</a></li>
                                            <li><a href="#">Makeup &amp; Accessories</a></li>
                                            <li><a href="#">Skin Care</a></li>
                                            <li><a href="#">Tools &amp; Accessories</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Brand</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Abibas</a></li>
                                            <li><a href="#">Agedir</a></li>
                                            <li><a href="#">Aldan</a></li>
                                            <li><a href="#">Biomask</a></li>
                                            <li><a href="#">Gamman</a></li>
                                            <li><a href="#">Pallona</a></li>
                                            <li><a href="#">Pure Care</a></li>
                                            <li><a href="#" class="all">View All Brands</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <a href="#">
                                            <img src="images/mega_menu_img_1.jpg" alt="">
                                        </a>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Personal Care (1036)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_3 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <ul class="list_of_links">

                                            <li><a href="#">Oral Care</a></li>
                                            <li><a href="#">Shaving &amp; Hair Removal</a></li>
                                            <li><a href="#">Men's</a></li>
                                            <li><a href="#">Sun Care</a></li>
                                            <li><a href="#">Clearance</a></li>
                                            <li><a href="#">Feminine Care</a></li>
                                            <li><a href="#">Gift Sets</a></li>
                                            <li><a href="#">Soaps &amp; Bodywash</a></li>
                                            <li><a href="#">Massage &amp; Relaxation</a></li>
                                            <li><a href="#">Foot Care</a></li>
                                            <li><a href="#" class="all">View All Categories</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item -->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item products_in_mega_menu">

                                        <h6 class="widget_title"><b>Today's Deals</b></h6>

                                        <div class="row">

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_11.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>30%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Ivory Body Wash, Original 24 fl oz</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$9.99</s> <b>$5.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_12.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>25%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Luvs with Leakguards, Size 4 Diapers 29 ea</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$16.99</s> <b>$14.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                            <div class="col-sm-4">

                                                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                <div class="product_item">

                                                    <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                                    <div class="image_wrap">

                                                        <img src="images/product_img_13.jpg" alt="">

                                                    </div><!--/. image_wrap-->

                                                    <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                    <div class="label_offer percentage">

                                                        <div>40%</div>OFF

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                    <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                                    <div class="description">

                                                        <p><a href="#">Doctor's Best Curcumin C3 Complex with...</a></p>

                                                        <div class="clearfix product_info">

                                                            <p class="product_price alignleft"><s>$103.99</s> <b>$73.99</b></p>

                                                        </div><!--/ .clearfix.product_info-->

                                                    </div>

                                                    <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                                </div><!--/ .product_item-->

                                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                                            </div><!--/ [col]-->

                                        </div><!--/ .row-->

                                        <hr>

                                        <a href="#" class="button_grey">View All Deals</a>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu">

                                <a href="#">Vitamins &amp; Supplements (202)</a>

                                <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                <div class="mega_menu type_4 clearfix">

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>By Condition</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aches &amp; Pains</a></li>
                                            <li><a href="#">Acne Solutions</a></li>
                                            <li><a href="#">Allergy &amp; Sinus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Multivitamins</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">50+ Multivitamins</a></li>
                                            <li><a href="#">Children's Multivitamins</a></li>
                                            <li><a href="#">Men's Multivitamins</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_item">

                                        <h6><b>Herbs</b></h6>

                                        <ul class="list_of_links">

                                            <li><a href="#">Aloe Vera</a></li>
                                            <li><a href="#">Ashwagandha</a></li>
                                            <li><a href="#">Astragalus</a></li>
                                            <li><a href="#" class="all">View All</a></li>

                                        </ul>

                                    </div><!--/ .mega_menu_item-->

                                    <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu_banner">

                                        <a href="#">
                                            <img src="images/mega_menu_img_2.jpg" alt="">
                                        </a>

                                    </div><!--/ .mega_menu_banner-->

                                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                                </div><!--/ .mega_menu-->

                                <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                            </li>
                            <li class="has_megamenu"><a href="#">Baby Needs (525)</a></li>
                            <li class="has_megamenu"><a href="#">Diet &amp; Fitness (135)</a></li>
                            <li class="has_megamenu"><a href="#">Sexuall Well-being (298)</a></li>
                            <li class="has_megamenu"><a href="#" class="all"><b>All Categories</b></a></li>

                        </ul>

                    </section><!--/ .animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Testimonials</h3>

                        <!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Alan, Los Angeles</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Tracy, New York</b></div>

                                <p>Donec sit amet eros. Lorem ipsum dolor sit amet elit. Mauris amet fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->

                            <blockquote>

                                <div class="author_info"><b>Nikki, Boston</b></div>

                                <p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.</p>

                            </blockquote>

                            <!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->

                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box" >

                            <a href="#" class="button_grey middle_btn">View All Testimonials</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Bestseller Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce  Euismod Consequat Ante...</a>

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

                                    <img src="images/product_thumb_5.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem  Ipsum Dolor Sit Amet...</a>

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

                                    <img src="images/product_thumb_6.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Ut Tellus  Dolor Dapibus Eget...</a>

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

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <a href="#">

                            <img src="images/banner_img_11.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - On Sale Products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>On Sale Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_10.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Fusce Euismod Consequat Ante...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_11.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_12.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                        <!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All</a>

                        </footer>

                        <!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - End of On Sale Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Sign Up to Our Newsletter</h3>

                        <div class="theme_box">

                            <p class="form_caption">Sing up to our newsletter and get exclusive deals you wont find any- where else straight to your inbox!</p>

                            <form class="newsletter subscribe clearfix" novalidate>

                                <input type="email" name="sc_email" placeholder="Enter your email address">

                                <button class="button_blue def_icon_btn"></button>

                            </form>

                        </div><!--/ .theme_box-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->
                <main class="col-lg-9">


                  {{--front page banner will be here please bring it here--}}
                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="widget_title">Today's Deals</h3>



                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            @foreach($products as $product)
                                @if($product->today_deal)


                                    <div class="product_item">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="image_wrap">

                                            <img src="{{$product->photo->file}}" alt="">

                                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                            <div class="actions_wrap">

                                                <div class="centered_buttons">

                                                    <button><a href="#" class="button_dark_grey middle_btn quick_view" data-toggle="modal" data-target="#quickview" data-modal-url="proassets/modals/quick_view.html">Quick View</a></button>

                                                    <a href="#" class=" button_blue middle_btn add_to_cart name=addtocart">Add to Cart</a>
                                                    <div class="modal fade" id="quickview" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Modal Header</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div><!--/ .centered_buttons -->

                                                <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                            </div><!--/ .actions_wrap-->

                                            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->



                                        </div><!--/. image_wrap-->

                                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                        <div class="label_offer percentage">

                                            <div>{{$product->P_discount_id}}%</div>OFF

                                        </div>

                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                        <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                        <div class="description">

                                            <p><a href="#">{{$product->P_specification}}</a></p>

                                            <div class="clearfix product_info">

                                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                <ul class="rating alignright">

                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li></li>

                                                </ul>

                                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                <p class="product_price alignleft"><s>{{$product->P_mrp}}</s> <b>{{$product->P_total_retail_price}}</b></p>

                                            </div><!--/ .clearfix.product_info-->

                                        </div>

                                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .product_item-->

                            @endif

                        @endforeach
                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->



                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->


                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->






                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section>

                    <ul class="breadcrumbs">

                        <li><a href="index.html">Home</a></li>
                        <li>Beauty</li>

                    </ul>

                    <!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Category description - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">
                        @foreach($categoryrelatedproducts as $categories)
                            <h1>{{$categories->name}}</h1>
                        @endforeach
                        <div class="row">

                            <div class="col-sm-4">

                                <img src="{{URL::to('/')}}/images/banner1.jpg" alt="">

                            </div>

                            <div class="col-sm-8">

                                <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis sit voluptatem accusantium doloremque laudantium. Vestibulum iaculis lacinia est. Proin dictum elementum velit. Fusce euismod consequat ante. </p>

                                <p>Lorem ipsum dolor sit amet, consectetuer adipisMauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in,auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. </p>

                            </div>

                        </div>

                    </section>

                    <!-- - - - - - - - - - - - - - End of category description - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Filter</h3>

                        <form class="type_2">

                            <div class="table_layout filter_row">

                                <div class="table_row">

                                    <!-- - - - - - - - - - - - - - Category filter - - - - - - - - - - - - - - - - -->

                                    <div class="table_cell">

                                        <label>Category</label>

                                        <div class="custom_select">

                                            <select name="">

                                                <option value="Beauty">Beauty</option>
                                                <option value="Personal Care">Personal Care</option>
                                                <option value="Diet &amp; Fitness">Diet &amp; Fitness</option>
                                                <option value="Baby Needs">Baby Needs</option>

                                            </select>

                                        </div>

                                    </div><!--/ .table_cell -->

                                    <!-- - - - - - - - - - - - - - End of category filter - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Manufacturer - - - - - - - - - - - - - - - - -->

                                    <div class="table_cell">

                                        <fieldset>

                                            <legend>Manufacturer</legend>

                                            <ul class="checkboxes_list">

                                                <li>

                                                    <input type="checkbox" checked name="manufacturer" id="manufacturer_1">
                                                    <label for="manufacturer_1">Manufacturer 1</label>

                                                </li>

                                                <li>

                                                    <input type="checkbox" name="manufacturer" id="manufacturer_2">
                                                    <label for="manufacturer_2">Manufacturer 2</label>

                                                </li>

                                                <li>

                                                    <input type="checkbox" name="manufacturer" id="manufacturer_3">
                                                    <label for="manufacturer_3">Manufacturer 3</label>

                                                </li>

                                            </ul>

                                        </fieldset>

                                    </div><!--/ .table_cell -->

                                    <!-- - - - - - - - - - - - - - End manufacturer - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                                    <div class="table_cell">

                                        <fieldset>

                                            <legend>Price</legend>

                                            <div class="range">

                                                Range :

                                                <span class="min_val"></span> -
                                                <span class="max_val"></span>

                                                <input type="hidden" name="" class="min_value">

                                                <input type="hidden" name="" class="max_value">

                                            </div>

                                            <div id="slider"></div>

                                        </fieldset>

                                    </div><!--/ .table_cell -->

                                    <!-- - - - - - - - - - - - - - End price - - - - - - - - - - - - - - - - -->

                                    <!-- - - - - - - - - - - - - - Color - - - - - - - - - - - - - - - - -->

                                    <div class="table_cell">

                                        <fieldset>

                                            <legend>Color</legend>

                                            <div class="row">

                                                <div class="col-sm-6">

                                                    <ul class="simple_vertical_list">

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_1">
                                                            <label for="color_btn_1" class="color_btn green">Green</label>

                                                        </li>

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_2">
                                                            <label for="color_btn_2" class="color_btn yellow">Yellow</label>

                                                        </li>

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_3">
                                                            <label for="color_btn_3" class="color_btn red">Red</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                <div class="col-sm-6">

                                                    <ul class="simple_vertical_list">

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_4">
                                                            <label for="color_btn_4" class="color_btn blue">Blue</label>

                                                        </li>

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_5">
                                                            <label for="color_btn_5" class="color_btn grey">Grey</label>

                                                        </li>

                                                        <li>

                                                            <input type="checkbox" name="" id="color_btn_6">
                                                            <label for="color_btn_6" class="color_btn orange">Orange</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </fieldset>

                                    </div><!--/ .table_cell -->

                                    <!-- - - - - - - - - - - - - - End color - - - - - - - - - - - - - - - - -->

                                </div><!--/ .table_row -->

                            </div><!--/ .table_layout -->

                            <footer class="bottom_box">

                                <div class="buttons_row">

                                    <button type="submit" class="button_blue middle_btn">Search</button>

                                    <button type="reset" class="button_grey middle_btn filter_reset">Reset</button>

                                </div>

                            </footer>

                        </form>

                    </section>

                    <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <header class="top_box on_the_sides">

                            <div class="left_side clearfix v_centered">

                                <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                                <div class="v_centered">

                                    <span>Sort by:</span>

                                    <div class="custom_select sort_select">

                                        <select name="">

                                            <option value="Default">Default</option>
                                            <option value="Price">Price</option>
                                            <option value="Name">Name</option>
                                            <option value="Date">Date</option>

                                        </select>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

                                <div class="v_centered">

                                    <span>Show:</span>

                                    <div class="custom_select">

                                        <select name="">

                                            <option value="15">15</option>
                                            <option value="12">12</option>
                                            <option value="9">9</option>
                                            <option value="6">6</option>
                                            <option value="3">3</option>

                                        </select>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

                            </div>

                            <div class="right_side">

                                <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->

                                <div class="layout_type buttons_row" data-table-container="#products_container">

                                    <a href="#" data-table-layout="grid_view" class="button_grey middle_btn icon_btn active tooltip_container"><i class="icon-th"></i><span class="tooltip top">Grid View</span></a>

                                    <a href="#" data-table-layout="list_view list_view_products" class="button_grey middle_btn icon_btn tooltip_container"><i class="icon-th-list"></i><span class="tooltip top">List View</span></a>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                            </div>

                        </header>

                        <div class="table_layout" id="products_container">

                            <div class="container-fluid">

                                <div class="table_row">


                                    @foreach($categoryrelatedproducts as $catpro)
                                        @foreach($catpro->products as $pro1)
                                            <div class="col-md-4">
                                                <br>
                                                <div class="table_cell">

                                                    <div class="product_item">

                                                        <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                        <div class="image_wrap">

                                                            <img src="{{URL::to('/')}}{{$pro1->photo->file}}" style="width:282px;height:200px">

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

                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                            <div class="label_hot">Hot</div>

                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                        </div><!--/. image_wrap-->

                                                        <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                        <div class="description">

                                                            <a href="{{route('product.details',$pro1->id)}}">{{$pro1->P_name}}</a>

                                                            <div class="clearfix product_info">

                                                                <p class="product_price alignleft"><b>₹{{$pro1->P_cost_price}}</b></p>

                                                            </div>

                                                        </div>

                                                        <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

                                                        <div class="full_description">

                                                            <a href="#" class="product_title">Consectetuer adipiscing elitlorem ipsum dolor sit amet, 2.5 fl oz (75ml)</a>

                                                            <a href="#" class="product_category">Makeup &amp; Accessories</a>

                                                            <div class="v_centered product_reviews">

                                                                <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

                                                                <ul class="topbar">

                                                                    <li>5 Review(s)</li>
                                                                    <li><a href="#">Add Your Review</a></li>

                                                                </ul>

                                                                <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                                                            </div>

                                                            <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

                                                            <a href="#" class="learn_more">Learn More</a>

                                                        </div>

                                                        <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

                                                        <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                                        <div class="actions">

                                                            <p class="product_price bold">₹44.99</p>

                                                            <ul class="seller_stats">

                                                                <li>Shipping: <span class="success">Free Shipping</span></li>
                                                                <li>Availability: <span class="success">in stock</span></li>
                                                                <li class="seller_info_wrap">

                                                                    Seller: <span class="seller_name">johnsmith</span>

                                                                    <div class="seller_info_dropdown">

                                                                        <ul class="seller_stats">

                                                                            <li>

                                                                                <ul class="topbar">

                                                                                    <li>China (Mainland)</li>

                                                                                    <li><a href="#">Contact Details</a></li>

                                                                                </ul>

                                                                            </li>

                                                                            <li><span class="bold">99.8%</span> Positive Feedback</li>

                                                                        </ul>

                                                                        <div class="v_centered">

                                                                            <a href="#" class="button_blue mini_btn">Contact Seller</a>

                                                                            <a href="#" class="small_link">Chat Now</a>

                                                                        </div>

                                                                    </div>

                                                                </li>

                                                            </ul>

                                                            <ul class="buttons_col">

                                                                <li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                                                <li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                                            </ul>

                                                        </div>

                                                        <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                                    </div><!--/ .product_item-->

                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach

                                </div>



                            </div>
                        </div><!--/ .table_layout -->

                        <footer class="bottom_box on_the_sides" style="
    margin-top: 20px;
" >

                            <div class="left_side">

                                <p>Showing 1 to 3 of 45 (15 Pages)</p>

                            </div>

                            <div class="right_side">

                                <ul class="pags">

                                    <li><a href="#"></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"></a></li>

                                </ul>

                            </div>

                        </footer>

                    </div>

                    <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->



                </main>
                <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->




            </div>

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->



        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->




@endsection