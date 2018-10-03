@extends('pengguna.master')

@section('title', 'Detail Produk')

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
<!--================Product Details Area =================-->
<section class="product_details_area" style="padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="product_details_slider">
                    <div id="product_slider" class="rev_slider" data-version="5.3.1.6">
                        {{ Html::image('user_assets/img/product/product-details/p-details-big-1.jpg', 'nama produk') }}
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product_details_text">
                    <h3>Nike Flex Run Tracksuit</h3>
                    <ul class="p_rating">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <div class="add_review">
                        <a href="#">5 Reviews</a>
                        <a href="#">Add your review</a>
                    </div>
                    <h6>Available In <span>Stock</span></h6>
                    <h4>$45.05</h4>
                    <p>Curabitur semper varius lectus sed consequat. Nam accumsan dapibus sem, sed lobortis nisi porta vitae. Ut quam tortor, facilisis nec laoreet consequat, malesuada a massa. Proin pretium tristique leo et imperdiet.</p>
                    <div class="p_color">
                        <h4 class="p_d_title">color <span>*</span></h4>
                        <ul class="color_list">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="p_color">
                        <h4 class="p_d_title">size <span>*</span></h4>
                        <select class="selectpicker">
                            <option>Select your size</option>
                            <option>Select your size M</option>
                            <option>Select your size XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <div class="custom">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                            <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                        </div>
                        <a class="add_cart_btn" href="#">add to cart</a>
                    </div>
                    <div class="shareing_icon">
                        <h5>share :</h5>
                        <ul>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <nav class="tab_menu">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (1)</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a>
                <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">additional information</a>
                <a class="nav-item nav-link" id="nav-gur-tab" data-toggle="tab" href="#nav-gur" role="tab" aria-controls="nav-gur" aria-selected="false">gurantees</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <h4>Rocky Ahmed</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-gur" role="tabpanel" aria-labelledby="nav-gur-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->
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