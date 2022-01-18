<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5">
                <div class="user-menu">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="value">English </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a>
                                </li>
                                <li><a href="#">French</a>
                                </li>
                                <li><a href="#">German</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="value">USD </span><i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a>
                                </li>
                                <li><a href="#">INR</a>
                                </li>
                                <li><a href="#">GBP</a>
                                </li>
                            </ul>
                        </li>
                        <li>Welcome to Ecommerce</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-7">
                <div class="header-right">
                    <ul>
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><img class="account" src="{{asset('ecom')}}/images/account.png" alt="#"><span class="value">My Account </span><i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu account-menu">
                                <li><a href="{{url('profile')}}">My account</a>
                                </li>
                                <li><a href="{{url('my-cart')}}">My Cart</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="wishlist.html"><i class="fa fa-heart-o"></i> Wishlist</a>
                        </li>

                        <?php if(isset(Auth::user()->name)){ ?>
                        <li>
                            <a href="{{url('logout')}}"><img src="{{asset('ecom')}}/images/check.png" alt="#"> Checkout</a>
                        </li>
                        <?php }else{?>
                        <li class="last-child">
                            <a class="logg" href="{{url("login")}}"><img class="login" src="{{asset('ecom')}}/images/log.png" alt="#"> Login</a>
                        </li>
                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header-area:END -->

<!-- Logo-area -->
<div class="logo_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-12">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('ecom')}}/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-sm-8 col-md-8 col-xs-12">
                <div class="search-area">
                    <form>
                        <div class="control-group">

                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown">

                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">All Categories <b class="caret"></b></a>

                                    <ul class="dropdown-menu" role="menu">

                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Fashion</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Watches</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">House Wares</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Desktop</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Smartphones</a>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                            <input class="search-field" placeholder="Search here...">
                            <a class="search-button" href="#"></a>
                        </div>
                    </form>
                </div>
                <div class="logo_right">
                    <span><i class="fa fa-phone"></i></span>
                    <a href="tel:+112345689">CALL US FREE
                        <br>+01 123 456 89</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGO-AREA:END -->