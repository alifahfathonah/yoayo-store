<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="user_assets/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>YoAyoStore | @yield('title')</title>

        <!-- Icon css link -->
        {{ Html::style('user_assets/css/font-awesome.min.css') }}
        {{ Html::style('user_assets/vendors/line-icon/css/simple-line-icons.css') }}
        {{ Html::style('user_assets/vendors/elegant-icon/style.css') }}

        <!-- Bootstrap -->
        {{ Html::style('user_assets/css/bootstrap.min.css') }}
        
        @yield('extra_css')
        
        {{-- Custom style & responsive --}}
        {{ Html::style('user_assets/css/style.css') }}
        {{ Html::style('user_assets/css/responsive.css') }}

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home_sidebar">
                
        <div class="home_box">
            
            @include('pengguna.elemen.navbar')        

            <!--================Main Content Area =================-->
            <section class="home_sidebar_area">
                @yield('content')
            </section>
            <!--================End Main Content Area =================-->
            
            <!--================World Wide Service Area =================-->
            <section class="world_service">
                <div class="container">
                    <div class="world_service_inner">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4>{{ Html::image('user_assets/img/icon/world-icon-1.png', 'Worldwide Service') }} National Service</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4>{{ Html::image('user_assets/img/icon/world-icon-2.png', '24/7 Help Center') }} 24/7 Help Center</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4>{{ Html::image('user_assets/img/icon/world-icon-3.png', 'Safe Payment') }} Safe Payment</h4>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="world_service_item">
                                    <h4>{{ Html::image('user_assets/img/icon/world-icon-4.png', 'Quick Delivery By JNE') }} Quick Delivery By JNE</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================End World Wide Service Area =================-->
            
            
            <!--================Footer Area =================-->
            <div class="container mt-3">
                <h5 class="text-center pb-1">Delivery Support By</h5>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        {{ Html::image('user_assets/img/jne.jpg', 'Jne Support', [
                            'class' => 'img-fluid mx-auto',
                        ]) }}
                    </div>
                    <div class="col-md-4"></div>
                </div>
                
            </div>
            
            <footer class="footer_area border_none">
                <div class="container">
                    <div class="footer_widgets">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6">
                                <aside class="f_widget f_about_widget">
                                    {{ Html::image('user_assets/img/new-logo.png', 'YoAyoStore') }}
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum facilis aliquam expedita rem qui necessitatibus rerum tenetur praesentium et, porro nulla distinctio. Vero distinctio voluptatum nulla eos repellat dolorem atque?</p>
                                    <h6>Social:</h6>
                                    <ul>
                                        <li><a href="#"><i class="social_facebook"></i></a></li>
                                        <li><a href="#"><i class="social_twitter"></i></a></li>
                                        <li><a href="#"><i class="social_pinterest"></i></a></li>
                                        <li><a href="#"><i class="social_instagram"></i></a></li>
                                        <li><a href="#"><i class="social_youtube"></i></a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_info_widget">
                                    <div class="f_w_title">
                                        <h3>Information</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery information</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Returns & Refunds</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_service_widget">
                                    <div class="f_w_title">
                                        <h3>Customer Service</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">Ordr History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_extra_widget">
                                    <div class="f_w_title">
                                        <h3>Extras</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Vouchers</a></li>
                                        <li><a href="#">Affiliates</a></li>
                                        <li><a href="#">Specials</a></li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6">
                                <aside class="f_widget link_widget f_account_widget">
                                    <div class="f_w_title">
                                        <h3>My Account</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">Ordr History</a></li>
                                        <li><a href="#">Wish List</a></li>
                                        <li><a href="#">Newsletter</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="footer_copyright">
                        <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</h5>
                    </div>
                </div>
            </footer>
            <!--================End Footer Area =================-->
        
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{ Html::script('user_assets/js/jquery-3.2.1.min.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ Html::script('user_assets/js/popper.min.js') }}
        {{ Html::script('user_assets/js/bootstrap.min.js') }}

        @yield('extra_js')
        
        {{ Html::script('user_assets/js/theme.js') }}
    </body>
</html>