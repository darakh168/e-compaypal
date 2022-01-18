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
    <title>Ecomshop | Ecommerce HTL5 template | Home page 2</title>

    <!-- Font css  -->
    <link href='../../css.css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'>
    <link href='../../css-1.css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='../../css-2.css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('ecom')}}/fonts/fonts.css">

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


<!-- MAIN-SLIDER-AREA -->
<div class="main_slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ecom')}}/images/slider1.png" alt="darkblurbg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption black_heavy_60 skewfromleftshort tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="133" data-speed="500" data-start="1850" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Fashion for men
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="50" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="text-align:left;">That this group would somehow form a family that's the way we all became the
                            <br> Brady Bunch. Love exciting and new. Come aboard were expecting you. Love life's
                            <br> sweetest reward Let it flow it floats back to you! </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="50" data-y="290" data-speed="1000" data-start="3900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="10200" data-endspeed="1000" style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#"><img src="{{asset('ecom')}}/images/shop-btn.png" alt="#"></a>
                    </div>
                </li>
                <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ecom')}}/images/slider2.png" style='background-color:#b2c4cc' alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <div class="tp-caption light_heavy_70_shadowed_ed lfr randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="560" data-y="100" data-speed="1000" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="9000" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Girls latest trend
                    </div>
                    <div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0" data-x="560" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="text-align:left;">That this group would somehow form a family that's the way we all became the<br> Brady Bunch. Love exciting and new. Come aboard were expecting you. Love life's<br> sweetest reward Let it flow it floats back to you! </div>
                    </div>
                    <div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="560" data-y="290" data-speed="1000" data-start="3900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="10200" data-endspeed="1000" style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#"><img src="{{asset('ecom')}}/images/shop-btn.png" alt="#"></a>
                    </div>
                </li>
                <li data-transition="zoomin" data-slotamount="7" data-masterspeed="600">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('ecom')}}/images/slider3.png" alt="videobg1" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <div class="tp-caption light_heavy_70_shadowed lfr randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="300" data-y="200" data-speed="1000" data-start="2900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="9000" data-endspeed="1000" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Top fashion for men
                    </div>
                    <div class="tp-caption grey_regular_81 customin tp-resizeme rs-parallaxlevel-0" data-x="470" data-y="300" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="text-align:left;">trendy summer collections 2015</div>
                    </div>
                    <div class="tp-caption green_bold_bg_20 shop_class skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10" data-x="500" data-y="350" data-speed="1000" data-start="3900" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="10200" data-endspeed="1000" style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;"><button type="button" class="btn btn-default">Shop now</button>
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</div>
<!-- MAIN-SLIDER-AREA END -->

<!-- MAIN-FEATURED-AREA -->
<section class="main-featured-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12">
                <div class="featured-single">
                    <div class="featured-img">
                        <img src="{{asset('ecom')}}/images/fetured_prd_1.png" alt="">
                        <div class="featured-text">
                            <h3>Men watches</h3>
                            <p>Collection instore and online</p>
                        </div>
                        <div class="feat-hover">
                            <div class="feat-in"></div>
                        </div>
                        <div class="tag percent-t">
                            <span>25%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <div class="featured-single">
                    <div class="featured-img">
                        <img src="{{asset('ecom')}}/images/fetured_prd_2.png" alt="">
                        <div class="featured-text">
                            <h3>Shoes for women</h3>
                            <p>Summer collection 2015</p>
                        </div>
                        <div class="feat-hover">
                            <div class="feat-in"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-12">
                <div class="featured-single">
                    <div class="featured-img">
                        <img src="{{asset('ecom')}}/images/fetured_prd_3.png" alt="">
                        <div class="featured-last-text">
                            <h3>Men shoes</h3>
                            <p>Sale up to 50% off</p>
                        </div>
                        <div class="feat-hover">
                            <div class="feat-in"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAIN-FEATURED-AREA END -->

<!-- MEN-CLOTHING-AREA -->
<section class="men_clothingcurosel_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Men clothing</h2>
                </div>
                <div class="menclothing-carousel">
                    <div class="men-single">
                        <a href="#"><img src="{{asset('ecom')}}/images/menthr1.png" alt="#">
                        </a>
                        <div class="tag new">
                            <span>new</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="#">Formal Suit for men</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <div class="product-wid-price">
                                <ins>$260.00</ins> <del>$280.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="men-single">
                        <a href="#"><img src="{{asset('ecom')}}/images/menthr2.png" alt="">
                        </a>

                        <div class="hot-wid-rating">
                            <h4><a href="#">Modern  shirt</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <div class="product-wid-price">
                                <ins>$3000.00</ins>
                            </div>
                        </div>
                    </div>
                    <div class="men-single">
                        <a href="#"><img src="{{asset('ecom')}}/images/menthr3.png" alt="">
                        </a>
                        <div class="tag percent">
                            <span>20%</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="#">Formal Suit for men</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <div class="product-wid-price">
                                <ins>$180.00</ins> <del>$200.00</del>
                            </div>
                        </div>
                    </div>
                    <div class="men-single">
                        <a href="#"><img src="{{asset('ecom')}}/images/menthr4.png" alt="">
                        </a>
                        <div class="tag new">
                            <span>new</span>
                        </div>
                        <div class="hot-wid-rating">
                            <h4><a href="#">Trendy t-shirt for men</a></h4>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <div class="product-wid-price">
                                <ins>$250.00</ins>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MEN-CLOTHING-AREA END -->

<!-- FEATURED-PROMO-AREA -->
<section class="features-promo-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-xs-12">
                <div class="features-promo-single">
                    <div class="features-promo-img">
                        <img src="{{asset('ecom')}}/images/main-prd1.png" alt="">
                        <div class="features-promo-text">
                            <h3>Top collection</h3>
                            <p>New collection for men</p>
                        </div>
                        <div class="promo-hover">
                            <div class="promo-in"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xs-12">
                <div class="features-promo-single">
                    <div class="features-promo-img">
                        <img src="{{asset('ecom')}}/images/main-prd2.png" alt="">
                        <div class="features-promo-text">
                            <h3>Trends for girls</h3>
                            <p>Accessories collection</p>
                        </div>
                        <div class="promo-hover">
                            <div class="promo-in"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURED-PROMO-AREA END -->

<!-- WOMEN-ACCESSORIES-AREA -->
<section class="women-accessories-area2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Women accessories</h2>
                </div>
                <div class="product-tab">
                    <ul class="nav nav-tabs women-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New Products</a>
                        </li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Popular Products</a>
                        </li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Best seller</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access1.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access2.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access3.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access4.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access5.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access6.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access7.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access8.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access4.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access5.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access6.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access1.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access2.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access3.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access7.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access8.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access7.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access8.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access1.png" alt="">
                                        </a>
                                        <div class="tag new">
                                            <span>new</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access2.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access3.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Leather Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$180.00</ins> <del>$200.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access4.png" alt="">
                                        </a>

                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Trendy Shoes For Women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$250.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access5.png" alt="">
                                        </a>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">Best Handbags For girls</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$260.00</ins> <del>$280.00</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="women-single">
                                        <a href="#"><img src="{{asset('ecom')}}/images/women_access6.png" alt="">
                                        </a>
                                        <div class="tag percent">
                                            <span>15%</span>
                                        </div>
                                        <div class="hot-wid-rating">
                                            <h4><a href="single-product.html">stylish dress for women</a></h4>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <div class="product-wid-price">
                                                <ins>$3000.00</ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- WOMEN-ACCESSORIES-AREA END -->

<!--  TESTIMONIAL-AREA  -->
<section id="testimonial" class="section-padding">
    <div class="testimonial-overlay">
        <div class="testimonial">
            <div class="container">
                <div class="testimonial-slide">
                    <div id="carousel-testimonial" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-testimonial" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-testimonial" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-testimonial" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <div class="item_quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="content">
                                    <p> Till the one day when the lady met this fellow and they knew it was much more than a hunch. These Happy Days are yours and mine Happy Days. Its mission to explore strange new worlds to seek out new man has gone before.</p>
                                </div>
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('ecom')}}/images/customer.png" alt="#">
                                    </div>
                                    <div class="c_text_inner">
                                        <h4>Micheal Clerk</h4>
                                        <h5>Customer Sydney</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item active left">
                                <div class="item_quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="content">
                                    <p> Till the one day when the lady met this fellow and they knew it was much more than a hunch. These Happy Days are yours and mine Happy Days. Its mission to explore strange new worlds to seek out new man has gone before.</p>
                                </div>
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('ecom')}}/images/customer.png" alt="#">
                                    </div>
                                    <div class="c_text_inner">
                                        <h4>Micheal Clerk</h4>
                                        <h5>Customer Sydney</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="item next left">
                                <div class="item_quote">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="content">
                                    <p> Till the one day when the lady met this fellow and they knew it was much more than a hunch. These Happy Days are yours and mine Happy Days. Its mission to explore strange new worlds to seek out new man has gone before.</p>
                                </div>
                                <div class="client">
                                    <div class="image">
                                        <img src="{{asset('ecom')}}/images/customer.png" alt="#">
                                    </div>
                                    <div class="c_text_inner">
                                        <h4>Micheal Clerk</h4>
                                        <h5>Customer Sydney</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  TESTIMONIAL-AREA END  -->

<!-- LATEST-PRODUCT-AREA-AREA -->
<section class="latest-product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Latest product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest1.png" alt="#">
                    </a>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Canon printer</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$3000.00</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest2.png" alt="">
                    </a>
                    <div class="tag new">
                        <span>new</span>
                    </div>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Computer Speakers</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$280.00</ins> <del>$320.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest3.png" alt="">
                    </a>
                    <div class="tag percent">
                        <span>15%</span>
                    </div>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Samsung Microwave Oven</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$450.00</ins> <del>$570.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest4.png" alt="">
                    </a>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">New Washing Machine</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$300.00</ins> <del>$320.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest5.png" alt="">
                    </a>
                    <div class="tag new">
                        <span>new</span>
                    </div>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Canon Camera</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$420.00</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest6.png" alt="">
                    </a>
                    <div class="tag percent">
                        <span>25%</span>
                    </div>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Bread Toasters</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$280.00</ins> <del>$320.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest7.png" alt="">
                    </a>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Trimmer For Men</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$120.00</ins>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="latest-single">
                    <a href="#"><img src="{{asset('ecom')}}/images/latest8.png" alt="">
                    </a>
                    <div class="tag percent">
                        <span>10%</span>
                    </div>
                    <div class="hot-wid-rating">
                        <h4><a href="single-product.html">Coffee Maker</a></h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <div class="product-wid-price">
                            <ins>$250.00</ins> <del>$320.00</del>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- LATEST-PRODUCT-AREA END -->

<!-- OUR-BRAND-AREA -->
<div id="brand-bg">
    <div class="brand-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners_list">

                        <div class="partners_list_carousel">
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner3.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner4.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner5.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner3.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner4.png" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('ecom')}}/images/partner5.png" alt="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OUR-BRAND-AREA END -->

<!-- LATEST-BLOG-AREA -->
<section class="laest-blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headline">
                    <h2>Latest from our blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('ecom')}}/images/blog1.png" alt="">
                        <div class="blog-icon">
                            <img src="{{asset('ecom')}}/images/blog-icon.png" alt="#">
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="single-post.html">Said Californ'y is the place</a></h3>
                        <hr class="blog-text-h3">
                        <p>Like Robinson Crusoe it's primitive as can be. Sunny Days sweepin' the clouds away. On my way to where the air is sweet Crusoe it's primitive. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('ecom')}}/images/blog2.png" alt="">
                        <div class="blog-icon">
                            <img src="{{asset('ecom')}}/images/blog-icon.png" alt="#">
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="single-post.html">Your name black gold Goodbye</a></h3>
                        <hr class="blog-text-h3">
                        <p>I have always wanted to have a neighbor just like you. I've always wanted to live in a neighborhood with you here's the story of a lovely.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="blog-single">
                    <div class="blog-image">
                        <img src="{{asset('ecom')}}/images/blog3.png" alt="">
                        <div class="blog-icon">
                            <img src="{{asset('ecom')}}/images/blog-icon.png" alt="#">
                        </div>
                    </div>
                    <div class="blog-text">
                        <h3><a href="single-post.html">Flying away on a wing and a prayer</a></h3>
                        <hr class="blog-text-h3">
                        <p> Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship said Californ.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST-BLOG-AREA END -->

<!-- Entire FOOTER START -->
<footer class="entire_footer">
    <!-- FOOTER-TOP-AREA -->
    <div class="footer_top_area  footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="top-border"></div>
                </div>
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
<!-- Entire FOOTER END -->


<!-- jQuery latest -->
<script type="text/javascript" src="{{asset('ecom')}}/js/jQuery.2.1.4.js"></script>

<!-- js Modernizr -->
<script src="{{asset('ecom')}}/js/modernizr-2.6.2.min.js"></script>

<!-- js Modernizr -->

<script src="{{asset('ecom')}}/js/jquery.counterup.min.js"></script>

<!-- Revolution slider -->
<script type="text/javascript" src="{{asset('ecom')}}/rs-plugin//js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{asset('ecom')}}/rs-plugin//js/jquery.themepunch.revolution.min.js"></script>

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