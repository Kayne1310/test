@extends('master.main')
@section('title','Home')
@section('main')

<header class="header-area">
    
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
                        <a href="{{route('home.index')}}"><img src="img/icon/Kayne.png" alt=""></a>
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
    <div class="main-menu-area">
     <div class="container">
         <div class="row">
             <div class=" d-none d-lg-block col-md-9">
                 <div class="main-menu">
                     <nav>
                         <ul>
                             <li><a href="{{route('home.index')}}">home </a>
                                
                             </li>
                             <li><a href="shop.html">clothing </a>
                                 <div class="mega-menu">
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>handbags</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Blouses And Shirts</span></a>
                                             <a href="#"><span>Clutches</span></a>
                                             <a href="#"><span>Cross Body</span></a>
                                             <a href="#"><span>Satchels</span></a>
                                             <a href="#"><span>Shoulder</span></a>
                                             <a href="#"><span>Toter</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>tops</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Evening</span></a>
                                             <a href="#"><span>Long Sleeved</span></a>
                                             <a href="#"><span>Shrot Sleeved</span></a>
                                             <a href="#"><span>Sleeveless</span></a>
                                             <a href="#"><span>T-Shirts</span></a>
                                             <a href="#"><span>Tanks And Camis</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>dresses</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Belts</span></a>
                                             <a href="#"><span>Cocktail</span></a>
                                             <a href="#"><span>Day</span></a>
                                             <a href="#"><span>Evening</span></a>
                                             <a href="#"><span>Sundresses</span></a>
                                             <a href="#"><span>Sweater</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>accessories</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Bras</span></a>
                                             <a href="#"><span>Hair Accessories</span></a>
                                             <a href="#"><span>Hats And Gloves</span></a>
                                             <a href="#"><span>Lifestyle</span></a>
                                             <a href="#"><span>Scarves</span></a>
                                             <a href="#"><span>Small Leathers</span></a>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li><a href="shop.html">Equipments</a>
                                 <div class="mega-menu">
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>bags</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Blazers</span></a>
                                             <a href="#"><span>Bootees Bags</span></a>
                                             <a href="#"><span>Jackets</span></a>
                                             <a href="#"><span>Shoes</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>clothing</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Blazers</span></a>
                                             <a href="#"><span>Coats & Jackets </span></a>
                                             <a href="#"><span>Jackets</span></a>
                                             <a href="#"><span>Raincoats</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>Lingerie</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Briefs</span></a>
                                             <a href="#"><span>Cocktail</span></a>
                                             <a href="#"><span>Day</span></a>
                                             <a href="#"><span>Evening</span></a>
                                             <a href="#"><span>Sundresses</span></a>
                                         </div>
                                     </div>
                                     <div class="mega-catagory">
                                         <h4><a href="#"><span>shoes</span></a></h4>
                                         <div class="mega-button">
                                             <a href="#"><span>Ankle Boots </span></a>
                                             <a href="#"><span>Clog sandals </span></a>
                                             <a href="#"><span>Hats And Gloves</span></a>
                                             <a href="#"><span>Footwear</span></a>
                                             <a href="#"><span>Scarves</span></a>
                                         </div>
                                     </div>
                                 </div>
                             
                             </li>
                             <li><a href="#">blog</a>
                                 <ul class="sub-menu">
                                     <li><a href="blog.html">blog</a></li>
                                     <li><a href="single-post.html">single post</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">pages</a> 
                                 <ul class="sub-menu">
                                     <li><a href="about.html">about us</a></li>
                                     <li><a href="account.html">account</a></li>
                                     <li><a href="blog.html">blog</a></li>
                                     <li><a href="cart.html">cart</a></li>
                                     <li><a href="checkout.html">checkout</a></li>
                                     <li><a href="contact.html">contact us</a></li>
                                     <li><a href="shop.html">shop grid</a></li>
                                     <li><a href="shop-list.html">shop list</a></li>
                                     <li><a href="product.html">single product</a></li>
                                     <li><a href="single-post.html">single post</a></li>
                                     <li><a href="wishlist.html">wishlist</a></li>
                                 </ul>
                             </li>
                             <li class="active"><a href="contact.html">contact us</a></li>
                         </ul>
                     </nav>
                 </div>  
            </div>
                <div class="col-sm-12 col-lg-3">
                     <div class=" cart-area">
                         <button class="btn dropdown-toggle" type="button" ><span id="cart-total"> <span><i class="fa fa-shopping-cart"></i> My Cart</span>2 item(s) - $244.00</span></button>
                         
                         <div class="cart-drop">
                             <div class="single-cart">
                                 <div class="cart-img">
                                    <img alt="" src="img/product/cart-1.jpg">
                                 </div>
                                 <div class="cart-title">
                                     <p><a href="#">Aliquam Consequat</a></p>
                                 </div>
                                 <div class="cart-price">
                                    <p>1 x $<span>500</span></p> 
                                 </div>
                                 <a href="#"><i class="fa fa-times"></i></a>
                             </div>
                             <div class="single-cart">
                                 <div class="cart-img">
                                    <img alt="" src="img/product/cart-2.jpg">
                                    
                                 </div>
                                 <div class="cart-title">
                                     <p><a href="#">Quisque In Arcuc</a></p>
                                 </div>
                                 <div class="cart-price">
                                    <p>1 x $<span>200</span></p> 
                                 </div>
                                 <a href="#"><i class="fa fa-times"></i></a>
                             </div>
                             <div class="cart-bottom">
                                 <div class="cart-sub-total">
                                     <p>Sub-Total <span>$700</span></p>
                                 </div>
                                 <div class="cart-sub-total">
                                     <p>Eco Tax (-2.00)<span>$7.00</span></p>
                                 </div>
                                 <div class="cart-sub-total">
                                     <p>VAT (20%) <span>$40.00</span></p>
                                 </div>
                                 <div class="cart-sub-total">
                                     <p>Total <span>$244.00</span></p>
                                 </div>
                                 <div class="cart-checkout">
                                     <a href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>
                                 </div>
                                 <div class="cart-share">
                                     <a href="checkout.html"><i class="fa fa-share"></i>Checkout</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
     <!--MOBILE MENU START-->
     <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 d-lg-none ">
                 <div class="mobile-menu">
                     <nav class="mobile-menu-start">
                         <ul>
                             <li><a href="#">Home</a>
                                 <ul>
                                     <li><a href="index.html">Home page 1</a></li>
                                     <li><a href="index-2.html">Home page 2</a></li>
                                     <li><a href="index-3.html">Home page 3</a></li>
                                     <li><a href="index-4.html">Home page 4</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">clothing </a>
                                 <ul>
                                     <li><a href="#">handbags</a>
                                         <ul>
                                             <li><a href="#">Blouses And Shirts</a></li>
                                             <li><a href="#">Clutches</a></li>
                                             <li><a href="#">Cross Body</a></li>
                                             <li><a href="#">Satchels</a></li>
                                             <li><a href="#">Shoulder</a></li>
                                             <li><a href="#">Toter</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">tops</a>
                                         <ul>
                                             <li><a href="#">Evening</a></li>
                                             <li><a href="#">Long Sleeved</a></li>
                                             <li><a href="#">Shrot Sleeved</a></li>
                                             <li><a href="#">Sleeveless</a></li>
                                             <li><a href="#">T-Shirts</a></li>
                                             <li><a href="#">Tanks And Camis</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">dresses</a>
                                         <ul>
                                             <li><a href="#">Belts</a></li>
                                             <li><a href="#">Cocktail</a></li>
                                             <li><a href="#">Day</a></li>
                                             <li><a href="#">kids</a></li>
                                             <li><a href="#">Evening</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">accessories</a>
                                         <ul>
                                             <li><a href="#">Bras</a></li>
                                             <li><a href="#">Hair Accessories</a></li>
                                             <li><a href="#">Hats And Gloves</a></li>
                                             <li><a href="#">Lifestyle</a></li>
                                             <li><a href="#">Scarves</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                             <li><a href="shop.html">Equipments</a>
                                 <ul>
                                     <li><a href="#">bags</a>
                                         <ul>
                                             <li><a href="#">Blazers</a></li>
                                             <li><a href="#">Bootees Bags</a></li>
                                             <li><a href="#">Jackets</a></li>
                                             <li><a href="#">Shoes</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">clothing</a>
                                         <ul>
                                             <li><a href="#">Blazers</a></li>
                                             <li><a href="#">Coats & Jackets </a></li>
                                             <li><a href="#">Jackets</a></li>
                                             <li><a href="#">Raincoats</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">Lingerie</a>
                                         <ul>
                                             <li><a href="#">Briefs</a></li>
                                             <li><a href="#">Cocktail</a></li>
                                             <li><a href="#">Day</a></li>
                                             <li><a href="#">Evening</a></li>
                                             <li><a href="#">Sundresses</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">shoes</a>
                                         <ul>
                                             <li><a href="#">Ankle Boots </a></li>
                                             <li><a href="#">Clog sandals </a></li>
                                             <li><a href="#">Hats And Gloves</a></li>
                                             <li><a href="#">Footwear</a></li>
                                             <li><a href="#">Scarves</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                             <li><a href="#">blog</a>
                                 <ul>
                                     <li><a href="blog.html">blog</a></li>
                                     <li><a href="single-post.html">single post</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">pages</a>
                                 <ul>
                                     <li><a href="about.html">about us</a></li>
                                     <li><a href="account.html">account</a></li>
                                     <li><a href="blog.html">blog</a></li>
                                     <li><a href="cart.html">cart</a></li>
                                     <li><a href="checkout.html">checkout</a></li>
                                     <li><a href="contact.html">contact us</a></li>
                                     <li><a href="shop.html">shop grid</a></li>
                                     <li><a href="shop-list.html">shop list</a></li>
                                     <li><a href="product.html">single product</a></li>
                                     <li><a href="single-post.html">single post</a></li>
                                     <li><a href="wishlist.html">wishlist</a></li>
                                 </ul>
                             </li>
                             <li><a href="contact.html">contact us</a></li>
                         </ul>
                     </nav>
                 </div>
             </div>
          </div>
     </div>
     <!--MOBILE MENU END-->
    </div>
 </header>

        <!--HEADER AREA END-->
        <section class="contact-top-area">
           <div class="container">
               <div class="row">
                  <div class="col-md-6">
                       <div class="page-heading">
                            <h2><strong>CONTACT US</strong></h2>
                        </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="contact-info-area">
                        <div class="contact-info">
                            <p><span><strong>Contact info</strong></span></p>
                            <p>Phone:0868431077</p>
                            <p>Mail:khanhdjkl@gmail.com</p>
                            <p>Github: <a href="https://github.com/Kayne1310">https://github.com/Kayne1310</a> </p>
                            <p>Address : Son Dong Hoai Duc Ha Noi</p>
                        </div>
                    </div>
                  </div> 
               </div>
           </div>
        </section>
    <!--CONTACT TOP AREA END-->
    <!--CONTACT BOTTOM AREA START-->
        <div class="contact-bottom-area">
            <div class="container">
                <div class="row contact-wrapper">
                    <div class="col-xs-12 col-sm-12 col-lg-6">
                        <div class="contact-map">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe id="gmap_canvas"
                                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=21.044554, 105.695031&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                                        
                                    <a href="https://sites.google.com/view/maps-api-v2/mapv2"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-lg-6 no-padding">
                        <form class="contact-form" id="contact-form" action="" >
                            <span class="con-subject">
                                <input type="text" placeholder="Name" name="con_subject">  
                            </span>
                            
                            <span class="con-subject">
                                <input type="text" placeholder="Email" name="con_subject">  
                            </span>
                            
                            <span class="con-subject">
                                <input type="text" placeholder="Subject" name="con_subject">  
                            </span>
                            <span class="con-subject">
                                <textarea rows="10" cols="60"  placeholder="Message" name="con_message" ></textarea>
                            </span>
                            <input type="submit" class="submit-btn button-link pull-right" value="send ">
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    <!--CONTACT BOTTOM AREA END-->
        
  @endsection  