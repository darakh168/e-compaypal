<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 6 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecomshop | Ecommerce HTL5 template | Product List page</title>

    <!-- Font css  -->
    <link href='../../css.css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <link href='../../css-1.css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='../../css-2.css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/fonts.css">

    <!-- Fontawesome css      -->
    <link rel="stylesheet" href="{{asset('ecom')}}/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('ecom')}}/css/normalize.css">

    <!-- Bootstrap css      -->
    <link rel="stylesheet" href="{{asset('ecom')}}/css/bootstrap.css">

    <!-- Owncarousel css      -->
    <link rel="stylesheet" href="{{asset('ecom')}}/css/owl.carousel.css">

    <!-- image zoom -->
    <link rel="stylesheet" href="{{asset('ecom')}}/css/glasscase.css">
    <link rel="stylesheet" href="{{asset('ecom')}}/css/glasscase.minf195.css">

    <!-- CSS STYLE-->
    <link rel="stylesheet" type="text/css" href="{{asset('ecom')}}/css/style.css" media="screen">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('ecom')}}/css/extralayers.css" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('ecom')}}/rs-plugin/css/settings.css" media="screen">

    <!-- Main css   -->
    <link rel="stylesheet" href="{{asset('ecom')}}/style.css">
    <link rel="stylesheet" href="{{asset('ecom')}}/css/responsive.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('ecom')}}/images/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" type="image/png" href="{{asset('ecom')}}/images/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--  HEADER-AREA  -->
<header class="entire_header">
    @include('ecom.header')

    <!-- MENU-AREA -->
    @include('ecom.nav')
    <!-- MENU-AREA:END -->
</header>
<!-- Header-AREA END -->

<!-- PAGE-TITLE-AREA -->
<section class="page-title-area">
    <div class="page-title-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="page-title">
                        <h3>Product list</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PAGE-TITLE-AREA:END -->

<!-- BREADCRUMBS  -->
<div class="title-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bred-title">
                    <h3>Product list</h3>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="about-us.html">Product list</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS:END  -->

<!-- PRODUCT-LIST-AREA  -->
<div class="product-list-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="brands">
                    <h3>Brands <i class="fa fa-bars"></i></h3>
                    <ul>
                        <li> <input type="checkbox" name="vehicle" value="Bike"> Awesome <span>(03)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike"> Beauty <span>(05)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike"> Elegant <span>(11)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike"> Fantastic <span>(01)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike"> Wonderful <span>(06)</span>
                        </li>
                    </ul>
                </div>
                <div class="filter">
                    <h3>Filter by price</h3>
                    <div class="filter_inner">
                        <div id="slider-range"></div>
                        <div class="f_price">
                            <div class="filter_a">
                                <a href="">Filter</a>
                            </div>
                            <div class="cat_filter_box">
                                <p>
                                    <input type="text" id="amount" readonly="" style="border:0; color:#000; font-weight:bold;">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="colours">
                    <h3>Colours <i class="fa fa-bars"></i></h3>
                    <ul>
                        <li> <input type="checkbox" name="vehicle" value="Bike">  White <span>(03)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike">  Black <span>(05)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike">  Blue <span>(11)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike">  Yellow <span>(01)</span>
                        </li>
                        <li> <input type="checkbox" name="vehicle" value="Bike">  Red <span>(06)</span>
                        </li>
                    </ul>
                </div>
                <div class="best-sell">
                    <h3>Best seller</h3>

                    <div id="plCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell1.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Canon mini model</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell2.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Nexus</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell3.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Pink women bag</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell4.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Trendy Watch</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell1.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Canon mini model</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell2.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Nexus</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell3.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Pink women bag</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                                <div class="single-wid-product sel-pd">
                                    <a href="#"><img src="{{asset('ecom')}}/images/sell4.png" alt="" class="product-thumb">
                                    </a>
                                    <h2><a href="single-product.html">Trendy Watch</a></h2>
                                    <div class="product-wid-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-wid-price">
                                        <ins>$250.00</ins>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#plCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#plCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="row">
                    @foreach($product as $v)

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="product-single">
                            <a href="{{url('add-to-cart/'.$v->id)}}"><img src="{{asset('ecom')}}/images/{{$v->img}}" alt="#">
                            </a>
                            {!! $v->title !!}
                            <div class="hot-wid-rating">
                                <h4><a href="single-product.html">{{$v->subtitle}}</a></h4>
                                @for($i=1;$i<=$v->star;$i++)
                                <i class="fa fa-star"></i>
                                @endfor
                                <div class="product-wid-price">
                                    <ins>${{$v->price}}</ins>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT-LIST:END -->

<!-- Entire FOOTER:START -->
<footer class="entire_footer">
    <!-- FOOTER-TOP-AREA -->
    <div class="footer_top_area  footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-4 col-xs-12">
                    <div class="footer_top_single">
                        <i class="fa fa-plane"></i>
                        <h4>Free Shipping on order over $1000</h4>
                        <p>It's time to meet the Muppets on the Muppet Show tonight. And we know Flipper.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-4 col-xs-12">
                    <div class="footer_top_single">
                        <i class="fa fa-gift"></i>
                        <h4>unlimited gifts on every order</h4>
                        <p>It's time to meet the Muppets on the Muppet Show tonight. And we know Flipper.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-4 col-xs-12">
                    <div class="footer_top_single">
                        <i class="fa fa-exchange"></i>
                        <h4>100% money back guarantee</h4>
                        <p>It's time to meet the Muppets on the Muppet Show tonight. And we know Flipper.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER-TOP-AREA:END -->

    <!-- FOOTER-WIDGET-AREA -->
    <div class="footer-widget">
        <div class="ovelay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-4 col-xs-12">
                        <div class="widget_logo">
                            <a href="index.html"><img src="{{asset('ecom')}}/images/logo_footer.png" alt="logo"></a>
                            <ul>
                                <li>
                                    <div class="wl_left">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="wl_right">
                                        <a href="#"><span>Address :</span> 09 Ecommerceshop, Design Street,  Victoria, Australia</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="wl_left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="wl_right">
                                        <a href="#"><span>E-mail :</span> Info@Ecommerceshop.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="wl_left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="wl_right">
                                        <a href="#"><span>phone :</span> +01 123 456 78</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-2 col-xs-12">
                        <div class="widget_single">
                            <h4><a href="#">My Account</a></h4>
                            <ul>
                                <li><a href="profile.html">My Account</a>
                                </li>
                                <li><a href="wishlist.html">Wishlist</a>
                                </li>
                                <li><a href="cart-page.html">Shopping Cart</a>
                                </li>
                                <li><a href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-2 col-xs-12">
                        <div class="widget_single">
                            <h4><a href="#">Information</a></h4>
                            <ul>
                                <li><a href="#">About Our Shop</a>
                                </li>
                                <li><a href="#">Top Seller</a>
                                </li>
                                <li><a href="#">Special Products</a>
                                </li>
                                <li><a href="#">Manufacturers</a>
                                </li>
                                <li><a href="#">Secure Shopping</a>
                                </li>
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Delivery Information</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-2 col-xs-12">
                        <div class="widget_single">
                            <h4><a href="#">Our Support</a></h4>
                            <ul>
                                <li><a href="contact-us.html">Contact Us</a>
                                </li>
                                <li><a href="#">Shipping & Taxes</a>
                                </li>
                                <li><a href="#">Return Policy</a>
                                </li>
                                <li><a href="#">Careers</a>
                                </li>
                                <li><a href="#">Affiliates</a>
                                </li>
                                <li><a href="#">Gift Vouchers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-2 col-xs-12">
                        <div class="widget_single">
                            <h4><a href="#">Our Services</a></h4>
                            <ul>
                                <li><a href="#">Shipping & Returns</a>
                                </li>
                                <li><a href="#">International Shopping</a>
                                </li>
                                <li><a href="#">Best Customer Support</a>
                                </li>
                                <li><a href="#">Easy Replacement</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER-WIDGET-AREA:END -->

    <!-- FOOTER-AREA -->
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_text">
                        <p>&copy;2015 <a href="index.html">E-Comshop</a>. All rights reserved</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_right">
                        <ul>
                            <li><a href="#"><img src="{{asset('ecom')}}/images/mc.png" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('ecom')}}/images/visa.png" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('ecom')}}/images/crr.png" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('ecom')}}/images/disco.png" alt=""></a></li>
                            <li><a href="#"><img src="{{asset('ecom')}}/images/bank.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER-AREA:END -->
</footer>
<!-- Entire FOOTER:END -->

<!-- jQuery latest -->
<script type="text/javascript" src="{{asset('ecom')}}/js/jQuery.2.1.4.js"></script>

<!-- js Modernizr -->
<script src="{{asset('ecom')}}/js/modernizr-2.6.2.min.js"></script>

<!-- Revolution slider -->
<script type="text/javascript" src="rs-plugin/{{asset('ecom')}}/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/{{asset('ecom')}}/js/jquery.themepunch.revolution.min.js"></script>

<!-- Range js -->
<script src="../../ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 150,
            max: 1400,
            values: [ 520, 1100 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
            " - $" + $( "#slider-range" ).slider( "values", 1 ) );
    });
</script>

<!-- Bootsrap js -->
<script src="{{asset('ecom')}}/js/bootstrap.min.js"></script>

<!-- Plugins js -->
<script src="{{asset('ecom')}}/js/plugins.js"></script>

<!-- Owl js -->
<script src="{{asset('ecom')}}/js/owl.carousel.min.js"></script>

<!-- Custom js -->
<script src="{{asset('ecom')}}/js/main.js"></script>

</body>

</html>