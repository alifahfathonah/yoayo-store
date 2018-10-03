@extends('pengguna.master')

@section('title', 'Beranda')
    
@section('extra_css')

    <!-- Rev slider css -->
    {{ Html::style('user_assets/vendors/revolution/css/settings.css') }}
    {{ Html::style('user_assets/vendors/revolution/css/layers.css') }}
    {{ Html::style('user_assets/vendors/revolution/css/navigation.css') }}

    <!-- Extra plugin css -->
    {{ Html::style('user_assets/vendors/owl-carousel/owl.carousel.min.css') }}
    {{ Html::style('user_assets/vendors/bootstrap-selector/css/bootstrap-select.min.css') }}
    {{ Html::style('user_assets/vendors/vertical-slider/css/jQuery.verticalCarousel.css') }}

@endsection

@section('content')

<div class="container">
    <div class="row row_disable">
        <div class="col-lg-9 float-md-right">
            <div class="sidebar_main_content_area">       
                    <div class="main_slider_area">
                            <div id="home_box_slider" class="rev_slider" data-version="5.3.1.6">
                                <ul>
                                    <li data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" >
                                    <!-- MAIN IMAGE -->
                                    {{ Html::image('user_assets/img/home-slider/slider-2.jpg', 'Banner', [
                                        'class' => 'rev-slidebg',
                                        'data-bgposition' => 'center center',
                                        'data-bgfit' => 'cover',
                                        'data-bgrepeat' => 'no-repeat',
                                        'data-bgparallax' => '5'
                                    ]) }}

                                        <!-- LAYER NR. 1 -->
                                        <div class="slider_text_box first_text">
                                            <div class="tp-caption tp-resizeme first_text" 
                                            data-x="['left','left','left','left','left','left']" 
                                            data-hoffset="['60','60','60','60','20','0']" 
                                            data-y="['top','top','top','top','top','top']" 
                                            data-voffset="['70','70','70','70','70','70']" 
                                            data-fontsize="['48','48','48','48','48','48']"
                                            data-lineheight="['56','56','56','56','56','48']"
                                            data-width="['none','none','none','none','none']"
                                            data-height="none"
                                            data-whitespace="nowrap"
                                            data-type="text" 
                                            data-responsive_offset="on" 
                                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                            data-textAlign="['left','left','left','left','left','left']"
                                            >Best Winter <br> Collection</div>

                                            <div class="tp-caption tp-resizeme secand_text" 
                                                data-x="['left','left','left','left','left','left']" 
                                                data-hoffset="['60','60','60','60','20','0']" 
                                                data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"  
                                                data-fontsize="['14','14','14','14','14','14']"
                                                data-lineheight="['24','24','24','24','24']"
                                                data-width="['300','300','300','300','300']"
                                                data-height="none"
                                                data-whitespace="normal"
                                                data-type="text" 
                                                data-responsive_offset="on"
                                                data-transform_idle="o:1;"
                                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                data-textAlign="['left','left','left','left','left','left']"
                                                >There is no one who loves to be bread, who looks after it and wants to have it, simply because it is pain. 
                                            </div>

                                            <div class="tp-caption tp-resizeme third_btn" 
                                                data-x="['left','left','left','left','left','left']" 
                                                data-hoffset="['60','60','60','60','20','0']" 
                                                data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']" 
                                                data-width="none"
                                                data-height="none"
                                                data-whitespace="nowrap"
                                                data-type="text" 
                                                data-responsive_offset="on" 
                                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                                                data-textAlign="['left','left','left','left','left','left']">
                                                <a class="checkout_btn" href="#">shop now</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>         
                <div class="promotion_area">
                    <div class="feature_inner row m0">
                        <div class="left_promotion">
                            <div class="f_add_item">
                                <div class="f_add_img"><img class="img-fluid" src="user_assets/img/feature-add/f-add-6.jpg" alt=""></div>
                                <div class="f_add_hover">
                                    <div class="sale">Sale</div>
                                    <h4>Best Summer <br />Collection</h4>
                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="right_promotion">
                            <div class="f_add_item right_dir">
                                <div class="f_add_img"><img class="img-fluid" src="user_assets/img/feature-add/f-add-7.jpg" alt=""></div>
                                <div class="f_add_hover">
                                    <div class="off">10% off</div>
                                    <h4>Best Summer <br />Collection</h4>
                                    <a class="add_btn" href="#">Shop Now <i class="arrow_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fillter_home_sidebar">
                    <ul class="portfolio_filter">
                        <li class="active" data-filter="*"><a href="#">men's</a></li>
                        <li data-filter=".woman"><a href="#">Woman</a></li>
                        <li data-filter=".shoes"><a href="#">Shoes</a></li>
                        <li data-filter=".bags"><a href="#">Bags</a></li>
                    </ul>
                    <div class="home_l_product_slider owl-carousel">
                        <div class="item woman shoes">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-8.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Womens Libero</h4>
                                    <h5><del>$45.50</del>  $40</h5>
                                </div>
                            </div>
                            <div class="l_product_item woman bags">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-11.jpg" alt="">
                                    <h5 class="new">New</h5>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Oxford Shirt</h4>
                                    <h5>$85.50</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item woman bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-9.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Travel Bags</h4>
                                    <h5><del>$45.50</del>  $40</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-12.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>High Heel</h4>
                                    <h5><del>$130.50</del>  $110</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item shoes bags">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-10.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Summer Dress</h4>
                                    <h5>$45.05</h5>
                                </div>
                            </div>
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="user_assets/img/product/fillter-product/f-product-13.jpg" alt="">
                                    <h5 class="sale">Sale</h5>
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <h4>Fossil Watch</h4>
                                    <h5>$250.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="home_sidebar_blog">
                    <h3 class="single_title">From The Blog</h3>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="user_assets/img/blog/from-blog/f-blog-4.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="user_assets/img/blog/from-blog/f-blog-5.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="from_blog_item">
                                <img class="img-fluid" src="user_assets/img/blog/from-blog/f-blog-6.jpg" alt="">
                                <div class="f_blog_text">
                                    <h5>fashion</h5>
                                    <p>Neque porro quisquam est qui dolorem ipsum</p>
                                    <h6>21.09.2017</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-3 float-md-right">
            <div class="left_sidebar_area">
                <aside class="l_widget l_categories_widget">
                    <div class="l_title">
                        <h3>Kategori</h3>
                    </div>
                    <ul>
                        <li><a href="#">Smart TV</a></li>
                        <li><a href="#">Smartphone/Tablet</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Printer</a></li>
                        <li><a href="#">AC</a></li>
                        <li><a href="#">Kulkas</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </aside>
                <aside class="l_widget l_supper_widget">
                    <img class="img-fluid" src="user_assets/img/supper-add-1.jpg" alt="">
                    <h4>Super Summer Collection</h4>
                </aside>
                <aside class="l_widget l_feature_widget">
                    <div class="verticalCarousel">
                        <div class="verticalCarouselHeader">
                            <div class="float-md-left">
                                <h3>Featured Products</h3>
                            </div>
                            <div class="float-md-right">
                                <a href="#" class="vc_goUp"><i class="arrow_carrot-left"></i></a>
                                <a href="#" class="vc_goDown"><i class="arrow_carrot-right"></i></a>
                            </div>
                        </div>
                        <ul class="verticalCarouselGroup vc_list">
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Oxford Shirt</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Puffer Jacket</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Leather Bag</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Casual Shoes</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Oxford Shirt</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Puffer Jacket</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Leather Bag</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="user_assets/img/product/featured-product/f-p-4.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Casual Shoes</h4>
                                        <h5>$45.05</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
                <aside class="l_widget l_news_widget">
                    <h3>newsletter</h3>
                    <p>Sign up for our Newsletter !</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="yourmail@domain.com" aria-label="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary subs_btn" type="button">Subscribe</button>
                        </span>
                    </div>
                </aside>
                <aside class="l_widget l_hot_widget">
                    <h3>Summer Hot Sale</h3>
                    <p>Premium 700 Product , Titles and Content Ideas</p>
                    <a class="discover_btn" href="#">shop now</a>
                </aside>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('extra_js')
    
    <!-- Rev slider js -->
    {{ Html::script('user_assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}
    {{ Html::script('user_assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}

    <!-- Extra plugin css -->
    {{ Html::script('user_assets/vendors/counterup/jquery.waypoints.min.js') }}
    {{ Html::script('user_assets/vendors/counterup/jquery.counterup.min.js') }}
    {{ Html::script('user_assets/vendors/owl-carousel/owl.carousel.min.js') }}
    {{ Html::script('user_assets/vendors/image-dropdown/jquery.dd.min.js') }}
    {{ Html::script('user_assets/js/smoothscroll.js') }}
    {{ Html::script('user_assets/vendors/isotope/imagesloaded.pkgd.min.js') }}
    {{ Html::script('user_assets/vendors/isotope/isotope.pkgd.min.js') }}
    {{ Html::script('user_assets/vendors/magnify-popup/jquery.magnific-popup.min.js') }}
    {{ Html::script('user_assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js') }}
    
@endsection