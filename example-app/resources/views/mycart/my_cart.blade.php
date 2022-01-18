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
                        <h3>Shoping cart</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PAGE-TITLE-AREA:END -->

<!-- BREADCRUMBS -->
<div class="title-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="bred-title">
                    <h3>Shoping cart</h3>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="cart-page.html">Shoping cart</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS:END -->

<!-- SHOPING-CART-AREA   -->
<div class="shoping-cart section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="headline">
                    <h2>Shopping cart</h2>
                </div>
                <div class="table-responsive">
                    @if(Session::get('error'))
                        <p style="color: red; font-size: 2em;">{{Session::get('error')}}</p>
                    @endif

                    @if(Session::get('success'))

                            <p style="color: green; font-size: 2em;">{{Session::get('success')}}</p>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="cart-product item">Product</th>
                            <th class="cart-product-name item">Product Name</th>
                            <th class="cart-qty item">Quantity</th>
                            <th class="cart-unit item">Unit price</th>
                            <th class="cart-delivery item">Delivery info</th>
                            <th class="cart-sub-total last-item">Sub total</th>
                            <th class="cart-romove item">Remove</th>
                        </tr>
                        </thead>
                        <!-- /thead -->
                        <tfoot>
                        <tr>
                            <td colspan="7">
                                <div class="shopping-cart-btn">
                                    <a type="button" onclick="window.location.href='{{url('product-list')}}'" class="btn btn-default left-cart">Continue Shopping</a>
                                    <button type="button" class="btn btn-default right-cart right-margin">Clear shopping cart</button>
                                    <button type="button" class="btn btn-default right-cart">Update shopping cart</button>
                                </div>
                                <!-- /.shopping-cart-btn -->
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php $total=0;?>
                        @foreach($d as $v)
                        <?php $subtotal=((int) $v->qty)*((float)$v->price);$total+=$subtotal; ?>
                        <tr>
                            <td class="cart-image">
                                <a href="#" class="entry-thumbnail">
                                    <img src="{{asset('ecom')}}/images/{{$v->img}}" alt="">
                                </a>
                            </td>
                            <td class="cart-product-name-info">
                                <div class="cc-tr-inner">
                                    <h4 class="cart-product-description"><a href="#">{{$v->subtitle}}</a></h4>
                                    <div class="cart-product-info">
                                        <span class="product-color">COLOR :</span><span>Black</span>
                                        <br>
                                        <span class="product-color">Size :</span><span>Large</span>
                                    </div>
                                </div>
                            </td>
                            <td class="cart-product-quantity">
                                <div class="quant-input">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" data-id="{{$v->id}}" value="{{$v->qty}}" name="quantity[113]" max="119" min="0" step="1">
                                </div>
                            </td>
                            <td class="cart-product-price"><div class="cc-pr">${{$v->price}}</div></td>
                            <td class="cart-product-delivery"><div class="cc-pr">Free shipping</div></td>
                            <td class="cart-product-sub-total"><div class="cc-pr">${{$subtotal}}</div></td>
                            <td class="romove-item">
                                <a href="{{url('remove-cart/'.$v->id)}}"><img src="{{asset('ecom')}}/images/remove.png" alt="">
                                </a>
                            </td>
                        </tr>
                       @endforeach
                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /table -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING-CART-AREA:END   -->

<!-- SHOPING-CART-BOTTOM-AREA   -->
<div class="shoping-cart-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="theme-box">
                    <h4>Apply coupon code here</h4>
                    <p>Enter your coupon code</p>
                    <form id="discount-code">
                        <input type="text">
                    </form>
                    <button type="button" class="btn btn-default right-cart">Apply code</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="shiptax">
                    <h3>Estimate Shipping and Tax</h3>
                    <p class="form_caption">Enter your destination to get a shipping estimate.</p>
                    <div class="country-form">
                        <form>
                            <label>Country*</label>
                            <br>
                            <select>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Canada">Canada</option>
                                <option value="USA" selected="">USA</option>
                            </select>
                        </form>
                    </div>
                    <div class="state-form">
                        <form>
                            <label>State/Province</label>
                            <br>
                            <select>
                                <option value="Alabama">Please select region,state or province</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Kansas">Kansas</option>
                            </select>
                        </form>
                    </div>
                    <div class="zip-form">
                        <form>
                            <label>Zip/Postal Code</label>
                            <br>
                            <input type="text">
                        </form>
                    </div>
                    <button type="button" class="btn btn-default add-cart">Get a quote</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="checkout">
                    <p>Subtotal<span>${{$total}}</span>
                    </p>
                    <h4>Grandtotal<span>${{$total}}</span></h4>
                    <button type="button" class="btn btn-default" id="payment-now-paypal">Proceed to checkout</button>
                    <h5>Checkout  with multiple addresses</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING-CART-BOTTOM-AREA:END   -->

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

<!-- Entire FOOTER:END -->

<form method="post" action="{!! URL::to('paypal') !!}" id="paypal-pay">
    <input type="hidden" value="{{ Session::token() }}" name="_token">

</form>

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

<script>
    $('.input-text').change(function () {
        qty=$(this).val();
        id=$(this).data('id');
        window.location.href="{{url('update-cart')}}/"+id+"/"+qty;
    })

    $('#payment-now-paypal').click(function () {
        $('#paypal-pay').submit();
    })
</script>
</body>

</html>