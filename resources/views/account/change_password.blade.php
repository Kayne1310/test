@extends('master.main')
@section('title','Change Password')
@section('main')




    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--HEADER AREA START-->
        
        <!--HEADER AREA END-->
        <!--BREADCRUMB AREA START-->
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-lg-4 d-none d-md-block">
                        <div class="opening-time">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <p><span class="opentime">OPENING TIME</span> <span class="time-top"> 8.00 AM - 10.00 PM</span></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="logo">
                            <a href="{{route('home.index')}}"><img src="/img/icon/Kayne.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 col-lg-4">
                        <div class="input-group form-search" id="search">
                           <input type="text" class="form-control" placeholder="search">
                               <span class="input-group-btn">
                                 <button class="btn btn-default button-search" type="button"><i class="fa fa-search"></i></button>
                               </span>
                         </div>
                     </div>
                </div>
            </div>
        </div>

        <div class="bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="{{route('home.index')}}">Home</a></li>
                            <li><a href="#">Change Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--BREADCRUMB AREA END-->
        <!--SINGLE PRODUCT AREA START-->
        <section class=" account-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                       <div class="sidebar-menu">
                           <ul class="list-unstyled">
                               <li><a href="{{route('account.profile')}}">My Account</a></li>
                               <li><a href="#">My Favorite</a></li>
                               <li><a href="{{route('cart.index')}}">My Order</a></li>
                               <li><a href="#">Logout</a></li>
                               <li><a href="#">Change Password</a></li>
                              
                           </ul>
                       </div>
                        
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        
                            <div class="col-sm-12">
                                <div class="well">
                                <h2>
                                    Change Password
                                </h2>
                               
                                <form action="" method="POST">
                                    @csrf
                                  <div class="form-group">
                                    <label for="input-email" class="control-label">Enter Old Password </label>
                                    <input type="password" class="form-control" id="input-email" placeholder="" name="old_password" required>
                                  </div>
                                  <div class="form-group">
                                    <label for="password" class="control-label">Enter New Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="" name="password" autocomplete="off" required>
                                </div>
                                
                                  <div class="form-group">
                                    <label for="input-password" class="control-label">Enter Confirm Password</label>
                                    <input type="password" class="form-control" id="input-password" placeholder="" value="" name="confirm_password" required>
                                    <a href="{{route('account.forgot_password')}}">Forgotten Password</a></div>
                                  <input type="submit" class="btn btn-primary" value="Change">
                                                <input type="hidden" value="http://demo.towerthemes.com/tt_accessories/index.php?route=account/account" name="redirect">
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--SINGLE PRODUCT AREA END-->
        <!--ORDER AREA START-->
        <div class="order-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-phone-square"></i></span>
                            <div class="order-right">
                                <p class="title">ORDER ONLINE NOW</p>
                                <p class="subline"> Call Us: <span>0868431077</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-plane"></i></span>
                            <div class="order-right">
                                <p class="title">FREE WORLDWIDE SHIPPING</p>
                                <p class="subline">On Order Over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-money"></i></span>
                            <div class="order-right">
                                <p class="title">30 DAYS MONEY BACK 100%</p>
                                <p class="subline">Satisfaction Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       


@endsection