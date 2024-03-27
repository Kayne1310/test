<!doctype html>
<html class="no-js" lang="">
    

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="/img/icon/favicon.ico">
        <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">

        <link rel="stylesheet" href="/css/fontawesome-all.min.css">
		
		<!-- Google Fonts
		============================================ -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic' rel='stylesheet' type='text/css'>	
       
	   {{-- icon  --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-s4FPviWj+ynFW6rYjsaW8GJH2ytLweEJF+U5ECNM6mey+WsbTgeurKKSmN32kHwNbh0JWCOmKTA3R/zCiMvCgA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="/css/bootstrap.min.css">
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="/css/owl.carousel.css">
        <link rel="stylesheet" href="/css/owl.theme.css">
        <link rel="stylesheet" href="/css/owl.transitions.css">
        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="/custom-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="/custom-slider/css/preview.css" type="text/css" media="screen" />
		<!-- jquery-ui CSS
		============================================ -->
    

        <link rel="stylesheet" href="/css/jquery-ui.css">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="/css/meanmenu.min.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="/css/animate.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="/css/normalize.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="/css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="/css/responsive.css">
		<!-- modernizr JS
		============================================ -->		
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />

        {{-- text menu profile --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


        
    
    </head>
    <body>
         <!-- preloader -->
      

		<!-- Scroll-top -->
        
        <!-- preloader-end -->
    
    <div class="home-three-wrapper">
       <!--HEADER AREA START-->
        <header class="header-area">
           <div class="header-top">
               <div class="container">
                   <div class="row">
                       <div class="col-md-3">
                             @if(auth('cus')->check())
                            <div class="hi-guest">  Welcome {{ auth('cus')->user()->name }} !</div> 
                            @else
                            <div class="hi-guest">  Welcome to Kayne Shop</div> 
                            @endif
                       </div>
                       <div class="col-md-9">
                            <div class="top-bar-menu">
                                <ul>
                                
                                  <!--SINGLE MENU WITH DROPDOWN-->
                                    <li class="header-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                       Son Dong Hoai Duc Ha Noi
                                    </li>
                                    <li class="header-a" >
                                        <i class="fas fa-envelope"></i>
                                        <a  href="mailto:khanhdjkl@gmail.com">khanhdjkl@gmail.com</a>
                                    </li>
                                   
                                  
                                    
                                    <!--SINGLE MENU WITH DROPDOWN-->
                                    {{-- <li class="dropdown">
                                        <a data-bs-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                                            @if(auth('cus')->check())
                                            <li class="header-a"><a href="{{ route('account.profile') }}">ProFile</a></li>
                                                <li class="header-a"><a href="{{route("account.change_password")}}">Change Password</a></li>
                                                <li class="header-a"><a href="#">Favorites</a></li>
                                                <li class="header-a" ><a href="#">My Orders</a></li>
                                                <li class="header-a"><a href="{{route("account.login")}}">Logout</a></li>
                                            @else
                                            <span><a href="{{route("account.login")}}"><i class="fa fa-user"></i> Login </a></span>
                                            
                                            @endif  
                                        
                                    
                                           
                                    </li> --}}
                                    <li> 
                                        
                                        @if(auth('cus')->check())
                                            <div class="nav-item dropdown">
                                                
                                                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><i class="fa fa-user"></i> Profile <b class="caret"></b></a>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('account.profile') }}" class="dropdown-item"> Profile</a></a>
                                                    <a href="{{route("account.change_password")}}" class="dropdown-item"> Change Password</a></a>
                                                    <a href="#" class="dropdown-item"> Favorite</a></a>
                                                    <a href="{{route('cart.index')}}" class="dropdown-item"> My Orders</a></a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="{{route("account.login")}}" class="dropdown-item"> Logout</a></a>
                                                </div>
                                            </div>
                                         @else
                                            <span><a href="{{route("account.login")}}"><i class="fa fa-user"></i> Login </a></span>
                                            
                                         @endif  
                                        
                                    </li>
                                  
                                   
                                   
                                     
                                    
                                </ul>
                            </div>
                       </div>
                   </div>
               </div>
           </div>


           @yield('main')
           {{-- Footer area --}}

           <footer class="footer-area">
            <div class="footer-top">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6 col-lg-3">
                             <div class="sin-footer">
                                 <h5>Accessories</h5>
                                 <div class="footer-conten">
                                     <p>Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed do eiusmod tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris</p>
                                 </div>
                                 <div class="social-link ">
                                     <div class="single-social">
                                         <a href="#"><i class="fa fa-facebook"></i>
                                         <span>facebook </span></a> 
                                     </div>
                                     <div class="single-social">
                                         <a href="#"><i class="fa fa-twitter"></i>
                                         <span>twitter </span></a> 
                                     </div>
                                     <div class="single-social">
                                         <a href="#"><i class="fa fa-rss"></i>
                                         <span>rss </span></a>
                                     </div>
                                     <div class="single-social">
                                         <a href="#"><i class="fa fa-skype"></i>
                                         <span>skype </span></a>
                                     </div>
                                     <div class="single-social">
                                         <a href="#"><i class="fa fa-dribbble"></i>
                                         <span>dribble</span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-2">
                             <div class="sin-footer">
                                 <h5>My Account</h5>
                                 <ul class="list-unstyled">
                                   <li><a href="#">My Account</a></li>
                                   <li><a href="#">Order History</a></li>
                                   <li><a href="#">Wish List</a></li>
                                   <li><a href="#">Newsletter</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-2">
                             <div class="sin-footer">
                                 <h5>information</h5>
                                 <ul class="list-unstyled">
                                   <li><a href="#">About Us</a></li>
                                   <li><a href="#">Delivery Information</a></li>
                                   <li><a href="#">Privacy Policy</a></li>
                                   <li><a href="#">Terms & Conditions</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-2">
                             <div class="sin-footer">
                                 <h5>extras</h5>
                                 <ul class="list-unstyled">
                                   <li><a href="#">Brands</a></li>
                                   <li><a href="#">Gift Vouchers</a></li>
                                   <li><a href="#">Affiliates</a></li>
                                   <li><a href="#">Specials</a></li>
                                 </ul>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                             <div class="sin-footer m-0">
                                 <h5>about us</h5>
                                 <div class="footer-static-content">
                                     <p class="adress"><i class="fa fa-map-marker"></i>
                                     <span>Son Dong Hoai Duc Ha Noi </span>
                                     </p>
                                     <p class="phone"><i class="fa fa-phone"></i>
                                     <span>0868431077</span>
                                     </p>
                                     <p class="email"><i class="fa fa-envelope"></i>
                                     <span>khanhdjkl@gmail.com</span>	
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="footer-bottom">
                 <div class="container">
                     <div class="row">
                         <div class="col-xs-12 col-md-6 col-lg-6">
                             <p>Copyright &copy; 2024 Kayne</p>
                         </div>
                         <div class="col-xs-12 col-md-6 col-lg-6">
                            <div class="footer-payment">
                                 <img src="img/icon/payment.png" alt="">
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </footer>
         <!--FOOTER AREA END-->
        <!-- QUICKVIEW PRODUCT -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="img/product/d1.jpg">
                                    </div>
                                </div><!-- .product-images -->
                                <div class="product-info">
                                    <h1>Diam quis cursus</h1>
                                    <div class="price-box">
                                        <p class="modal-price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="shop.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart-qv">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div><!-- .modal-product -->
                        </div><!-- .modal-body -->
                    </div><!-- .modal-content -->
                </div><!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
	    <!-- END QUICKVIEW PRODUCT -->
         </div>   
            <!-- jquery
                ============================================ -->		
                <script src="/js/vendor/jquery-1.12.4.min.js"></script>
                <!-- bootstrap JS
                ============================================ -->		
                <script src="/js/bootstrap.min.js"></script>
                <!-- wow JS
                ============================================ -->		
                <script src="/js/wow.min.js"></script>
                <!-- price-slider JS
                ============================================ -->		
                <script src="/js/jquery-price-slider.js"></script>		
                <!-- meanmenu JS
                ============================================ -->		
                <script src="/js/jquery.meanmenu.js"></script>
                <!-- owl.carousel JS
                ============================================ -->		
                <script src="/js/owl.carousel.min.js"></script>
                <!-- Nivo slider js
                ============================================ --> 		
                <script src="/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
                <script src="/ustom-slider/home.js" type="text/javascript"></script>
                <!-- scrollUp JS
                ============================================ -->		
                <script src="/js/jquery.scrollUp.min.js"></script>
                <!-- plugins JS
                ============================================ -->		
                <script src="/js/plugins.js"></script>
                <!--zoom plugin
                ============================================ --> 
                <script src='/js/jquery.elevatezoom.js'></script>
                <!-- main JS
                ============================================ -->		
                <script src="/js/main.js"></script>  
                
                    
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
        
         
         
         @yield('js')
        @if(Session::has('ok'))
        <script>
            $.toast({
                heading: 'Thông báo',
                text: "{{ Session::get('ok') }}",
                showHideTransition: 'slide',
                icon: 'success',
                position: 'top-center', // Thêm lớp toast-middle vào đây
                hideAfter: 3000
            })
        </script>
        
        @endif

        @if(Session::has('no'))
        <script>
            $.toast({
                heading: 'Thông báo',
                text: "{{ Session::get('no') }}",
                showHideTransition: 'slide',
                icon: 'error',
                position: 'top-center',
                hideAfter: 10000
            })
        </script>
        @endif
    </body>
    <</html>