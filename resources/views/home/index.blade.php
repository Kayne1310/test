  @extends('master.main')
  @section('title','Home')
  @section('main')
                               
                                  
                                   
           <div class="header-middle">
               <div class="container">
                   <div class="row">
                       <div class="hidden-xs col-sm-4 col-lg-4 d-none d-md-block">
                           <div class="opening-time">
                               <div class="icon"><i class="fa fa-clock-o"></i></div>
                               <p><span class="opentime">OPENING TIME</span> <span class="time-top"> 8.00 AM - 10.00 PM</span></p>
                           </div>
                       </div>
                       <div class="col-xs-12 col-md-4 col-lg-4" >
                           <div class="logo">
                               <a href="{{route('home.index')}}"><img src="img/icon/Kayne.png" alt=""></a>
                           </div>
                       </div>
                       <div class="col-xs-12 col-md-4 col-lg-4" >
                            <div class=" cart-area cart-style-two">
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
           </div>
           <div class="main-menu-area">
               <div class="container">
                   <div class="row">
                        <div class=" d-none d-lg-block col-md-9">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#">home </a>
                                         
                                        </li>
                                        <li><a href="{{route('home.product')}}">clothing </a>
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
                                        <li><a href="{{route('home.contact')}}">contact us</a></li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                       <div class="col-sm-12 col-lg-3">
                            <div class="input-group form-search" id="search">
                              <input type="text" class="form-control" placeholder="search">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default button-search" type="button"><i class="fa fa-search"></i></button>
                                  </span>
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
        <!--SLIDER AREA START-->
        <section class="slider-wrap">
            <div class="slider-area">
                <div class="bend niceties preview-2">
                    <div id="ensign-nivoslider" class="slides">	
                        <img src="img/slider1.jpg" alt="" title="#slider-direction-1"  />
                        <img src="img/slider2.jpg" alt="" title="#slider-direction-2"  />
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="t-cn slider-direction">
                        <div class="slider-progress"></div>
                        <div class="slider-content t-cn s-tb slider-1">
                            <div class="title-container s-tb-c title-compress">
                                <h3 class="title1"><span>Create by Kayne(Khanh)</span></h3>
                                <h2 class="title2" ><span>- 2024 COLLECTION -</span></h2>
                            </div>
                        </div>	
                    </div>
                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction">
                        <div class="slider-progress"></div>
                        <div class="slider-content t-cn s-tb slider-1">
                            <div class="title-container s-tb-c title-compress">
                                <h3 class="title1"><span>Create by Kayne(Khanh)</span></h3>
                                <h2 class="title2" ><span>- 2024 COLLECTION -</span></h2>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
        </section>
        <!--SLIDER AREA END-->
        <!--BANNER AREA START-->
        <div class="banner-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="single-banner">
                            <p><a href="#"><img alt="" src="img/banner/h3banner1.png"></a></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="single-banner">
                            <a href="#"><img src="img/banner/h3banner2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="single-banner">
                            <p><a href="#"><img alt="" src="img/banner/h3banner3.png"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BANNER AREA END-->
        <!--PRODUCT AREA START-->
        <div class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-button">   
                            <div class="list-group tab-top" id="list-tab" role="tablist">
                              <a class="list-item active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">latest</a>
                              <a class="list-item" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">bestseller</a>
                              <a class="list-item" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">sale</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                          
                        <div class="tab-carousel-start owl-carousel">
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/e1.jpg" alt="">
                                                <img class="image2" src="img/product/e2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/f1.jpg" alt="">
                                                <img class="image2" src="img/product/f2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/g1.jpg" alt="">
                                                <img class="image2" src="img/product/g2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/h1.jpg" alt="">
                                                <img class="image2" src="img/product/h2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/i1.jpg" alt="">
                                                <img class="image2" src="img/product/i2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/j1.jpg" alt="">
                                                <img class="image2" src="img/product/j2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/k1.jpg" alt="">
                                                <img class="image2" src="img/product/k2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/l1.jpg" alt="">
                                                <img class="image2" src="img/product/l2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/m1.jpg" alt="">
                                                <img class="image2" src="img/product/m2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price"> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                      </div>
                      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                          
                        <div class="tab-carousel-start owl-carousel">
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/e1.jpg" alt="">
                                                <img class="image2" src="img/product/e2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/f1.jpg" alt="">
                                                <img class="image2" src="img/product/f2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/g1.jpg" alt="">
                                                <img class="image2" src="img/product/g2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/h1.jpg" alt="">
                                                <img class="image2" src="img/product/h2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/i1.jpg" alt="">
                                                <img class="image2" src="img/product/i2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/j1.jpg" alt="">
                                                <img class="image2" src="img/product/j2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/k1.jpg" alt="">
                                                <img class="image2" src="img/product/k2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/l1.jpg" alt="">
                                                <img class="image2" src="img/product/l2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/m1.jpg" alt="">
                                                <img class="image2" src="img/product/m2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price"> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                      </div>
                      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                          
                        <div class="tab-carousel-start owl-carousel">
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/e1.jpg" alt="">
                                                <img class="image2" src="img/product/e2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/f1.jpg" alt="">
                                                <img class="image2" src="img/product/f2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/g1.jpg" alt="">
                                                <img class="image2" src="img/product/g2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/h1.jpg" alt="">
                                                <img class="image2" src="img/product/h2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/i1.jpg" alt="">
                                                <img class="image2" src="img/product/i2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/j1.jpg" alt="">
                                                <img class="image2" src="img/product/j2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/k1.jpg" alt="">
                                                <img class="image2" src="img/product/k2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/l1.jpg" alt="">
                                                <img class="image2" src="img/product/l2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_sale"><span>sale</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price">
                                        <span class="price-old">$242.00</span> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            <!--single product-->
                                <div class="sin-product">
                                    <div class="product-top">
                                        <div class="pro-img">
                                            <a href="#">
                                                <img class="image1" src="img/product/m1.jpg" alt="">
                                                <img class="image2" src="img/product/m2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="label_new"><span>new</span></div>
                                        <div class="name"><a href="#">Deliver Wide</a></div>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price"> 
                                        <span class="price-new">$218.00</span>
                                        </div>
                                        <div class="button-group1">
                                            <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                            <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                        </div>
                                        <div class="pro-bottom">
                                            <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                            <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!--PRODUCT AREA END-->
        <!--BANNER AREA START-->
        <div class="banner-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="single-banner">
                            <p><a href="#"><img alt="" src="img/banner/h3banner4.png"></a></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="single-banner mar-b-thirty">
                            <p><a href="#"><img alt="" src="img/banner/h3banner5.png"></a></p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6 ">
                                <div class="single-banner">
                                <p><a href="#"><img alt="" src="img/banner/h3banner6.png"></a></p>
                                </div>

                            </div>
                            <div class="col-xs-12 col-md-6 ">
                                <div class="single-banner">
                                <p><a href="#"><img alt="" src="img/banner/h3banner7.png"></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BANNER AREA END-->
        <!--PRODUCT AREA START-->
        <div class="product-area double-pro small-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-button">   
                            <div class="list-group tab-top" id="list-tab" role="tablist">
                                <a class="list-item active" id="list-home-list" data-bs-toggle="list" href="#cloth" role="tab" aria-controls="list-home">clothing</a>
                                <a class="list-item" id="list-profile-list" data-bs-toggle="list" href="#equipment" role="tab" aria-controls="list-profile">equipments</a>
                                <a class="list-item" id="list-messages-list" data-bs-toggle="list" href="#jewellery" role="tab" aria-controls="list-messages">jewellery</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="cloth" role="tabpanel" aria-labelledby="list-home-list">
                            <div class="tab-carousel-start owl-carousel">
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$142.00</span> 
                                            <span class="price-new">$118.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                           <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$42.00</span> 
                                            <span class="price-new">$38.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/j1.jpg" alt="">
                                                    <img class="image2" src="img/product/j2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                     <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/m1.jpg" alt="">
                                                    <img class="image2" src="img/product/m2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$100.00</span> 
                                            <span class="price-new">$90.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/a1.jpg" alt="">
                                                    <img class="image2" src="img/product/a2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/b1.jpg" alt="">
                                                    <img class="image2" src="img/product/b2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/d1.jpg" alt="">
                                                    <img class="image2" src="img/product/d2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                             <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/c1.jpg" alt="">
                                                    <img class="image2" src="img/product/c2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$342.00</span> 
                                            <span class="price-new">$318.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="equipment" role="tabpanel" aria-labelledby="list-profile-list">
                            <div class="tab-carousel-start owl-carousel">
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$142.00</span> 
                                            <span class="price-new">$118.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                           <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$42.00</span> 
                                            <span class="price-new">$38.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/j1.jpg" alt="">
                                                    <img class="image2" src="img/product/j2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                     <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/m1.jpg" alt="">
                                                    <img class="image2" src="img/product/m2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$100.00</span> 
                                            <span class="price-new">$90.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/a1.jpg" alt="">
                                                    <img class="image2" src="img/product/a2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/b1.jpg" alt="">
                                                    <img class="image2" src="img/product/b2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/d1.jpg" alt="">
                                                    <img class="image2" src="img/product/d2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                             <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/c1.jpg" alt="">
                                                    <img class="image2" src="img/product/c2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$342.00</span> 
                                            <span class="price-new">$318.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="jewellery" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="tab-carousel-start owl-carousel">
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$142.00</span> 
                                            <span class="price-new">$118.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                           <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$42.00</span> 
                                            <span class="price-new">$38.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/j1.jpg" alt="">
                                                    <img class="image2" src="img/product/j2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                     <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                                <span class="price-old">$242.00</span> 
                                                <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/m1.jpg" alt="">
                                                    <img class="image2" src="img/product/m2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$100.00</span> 
                                            <span class="price-new">$90.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/a1.jpg" alt="">
                                                    <img class="image2" src="img/product/a2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/b1.jpg" alt="">
                                                    <img class="image2" src="img/product/b2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/d1.jpg" alt="">
                                                    <img class="image2" src="img/product/d2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/f1.jpg" alt="">
                                                    <img class="image2" src="img/product/f2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>

                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                            </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                       
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/g1.jpg" alt="">
                                                    <img class="image2" src="img/product/g2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                             <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/c1.jpg" alt="">
                                                    <img class="image2" src="img/product/c2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/h1.jpg" alt="">
                                                    <img class="image2" src="img/product/h2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_sale"><span>sale</span></div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/k1.jpg" alt="">
                                                    <img class="image2" src="img/product/k2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$342.00</span> 
                                            <span class="price-new">$318.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!--single carousel-->
                                <div class="col-md-12">
                                   <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                           <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/i1.jpg" alt="">
                                                    <img class="image2" src="img/product/i2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                            </div>
                                       </div>
                                    </div>
                                    <!--single product-->
                                    <div class="sin-product">
                                       <div class="product-top">
                                            <div class="pro-img">
                                                <a href="#">
                                                    <img class="image1" src="img/product/l1.jpg" alt="">
                                                    <img class="image2" src="img/product/l2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="label_new"><span>new</span></div>
                                            <div class="name"><a href="#">Deliver Wide</a></div>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="price">
                                            <span class="price-old">$242.00</span> 
                                            <span class="price-new">$218.00</span>
                                            </div>
                                            <div class="pro-bottom">
                                               <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                               <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                           </div>
                                           <div class="button-group1">
                                                <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
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
        <!--PRODUCT AREA END-->
        <!--ORDER AREA START-->
        <div class="order-area order-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-phone-square"></i></span>
                            <div class="order-right">
                                <p class="title">ORDER ONLINE NOW</p>
                                <p class="subline"> Call Us: <span>(0123) 456 789</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-plane"></i></span>
                            <div class="order-right">
                                <p class="title">FREE WORLDWIDE SHIPPING</p>
                                <p class="subline">On Order Over $100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
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
        <!--ORDER AREA END-->
        <!--CLIENT AREA START-->
        
       

        
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
		<script src="/custom-slider/home.js" type="text/javascript"></script>
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
    </body>



@endsection