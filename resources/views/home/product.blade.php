@extends('master.main')
@section('title','Home')
@section('main')
           


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
        <!--BREADCRUMB AREA START-->
        <div class="bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>Clothing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--BREADCRUMB AREA END-->
        <div class="shop-area-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                        <div class="shop-product">
                            <h2>Clothing </h2>
                            <div class="shop-short-wrapper">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#grid" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-th" aria-hidden="true"></i></button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#list" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-list" aria-hidden="true"></i></button>
                                </div>
                                <div class="sort">
                                   <label>Show:</label>
                                   <select class="form-control show-sort">
                                        <option selected="">12</option>
                                        <option value="">15</option>
                                        <option value="">25</option>
                                        <option value="">35</option>
                                    </select>
                                </div>
                                <div class="sort sort-by">
                                   <label >Sort By:</label>
                                   <select class="form-control " id="input-sort">
                                        <option selected="">Default</option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                    </select>
                                </div>
	                        </div>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                              <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img src="img/product/h1.jpg" alt="">
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
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                              <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img src="img/product/c1.jpg" alt="">
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
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                              <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/a1.jpg" alt="">
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
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/m1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/b1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/d1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/e1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/f1.jpg" alt="">
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
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/j1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/k1.jpg" alt="">
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
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/l1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/m1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/b1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/c1.jpg" alt="">
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
                                         </div>
                                         <!--single product-->
                                         <div class="col-sm-6 col-md-4">
                                             <div class="sin-product">
                                                <div class="product-top">
                                                    <div class="pro-img">
                                                         <a href="#">
                                                             <img  src="img/product/g1.jpg" alt="">
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
                                         </div>
                                     </div>
                                </div>
                                <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="single-list-product">
                                       <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/f1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_sale"><span>sale</span></div>
                                                    <div class="label_new"><span>new</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                        <span class="price-old">$242.00</span> 
                                                    </div>
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/m1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_sale"><span>sale</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                        <span class="price-old">$242.00</span> 
                                                    </div>
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/g1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_new"><span>new</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/h1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_new"><span>new</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/j1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_sale"><span>sale</span></div>
                                                    <div class="label_new"><span>new</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                        <span class="price-old">$242.00</span> 
                                                    </div>
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/k1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_sale"><span>sale</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                        <span class="price-old">$242.00</span> 
                                                    </div>
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
                                                    <div class="pro-bottom">
                                                   <button type="button" class="btn-add-card"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span></button>
                                                    <button type="button" class="btn-quickview" data-bs-target="#productModal" data-bs-toggle="modal" ><i class="fa fa-search-plus"></i>Quick View</button>
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <!--SINGLE PRODUCT-->
                                        <div class="row mb-30px">
                                            <div class="col-xs-12 col-md-4">
                                               <div class="product-top">
                                                   <div class="pro-img">
                                                        <a href="#">
                                                            <img  src="img/product/l1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="label_new"><span>new</span></div>
                                                    <div class="button-group1">
                                                        <button title="Add to Wish List" data-bs-toggle="tooltip" type="button" class="btn-wishlist" ><i class="fa fa-heart"></i></button>
                                                        <button title="Compare this Product" data-bs-toggle="tooltip" type="button" class="btn-compare"><i class="fa fa-exchange"></i></button>
                                                    </div>
                                               </div>
                                            </div>
                                            <div class="col-xs-12 col-md-8">
                                               <div class="list-detail">
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
                                                    <p class="description">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nul..</p>
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
                        <!--pagination-->
                         <div class="product-pagination d-flex">
                              <div class="col-sm-6 col-xs-12 text-left">
                                <ul class="pagination">
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">&gt;</a></li>
                                    <li><a href="#">&gt;|</a></li>
                                </ul>
                              </div>
                             <div class="text-end w-100"> <div class="product-results">Showing 1 to 12 of 15 (2 Pages)</div></div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-first col-md-12 order-md-last">
                        <div class="filter-area">
                            <div class="title-with-bg">
                                <span>Filters product</span>
                            </div>
                            <div class="price-range">
                                <p class="sub-title">price</p>
                                <div id="slider-range"></div>
                                <span>range</span>
                                <input type="text" id="amount"  >
                            </div>
                            <div class="color-filter">
                               <p class="sub-title">color</p>
                               <div class="color-filter">
                                    <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">Black(2)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">blue (2)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">brown (3)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">green (2)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">orange (2)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">pink (2)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">red (6)</span>
                                   </div>
                                   <div class="sin-color">
                                       <span class="circle"></span>
                                       <span class="filter-name">yellow (3)</span>
                                   </div>
                               </div>
                            </div>
                            <div class="sub-filter-wrapper">
                               <p class="sub-title">compositionr</p>
                               <div class="filter-wrapper">
                                    <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">cotton  (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">polyester  (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">viscose  (0)</span>
                                   </div>
                               </div>
                            </div>
                            <div class="sub-filter-wrapper">
                               <p class="sub-title">manufacture</p>
                               <div class="filter-wrapper">
                                    <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">chanel (2)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">christian dior (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">ermenegildo zegna (0)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">ferragamo (0)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">hermes (2)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">louis vuitton (3)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">prada (1))</span>
                                   </div>
                               </div>
                            </div>
                            <div class="sub-filter-wrapper">
                               <p class="sub-title">size</p>
                               <div class="filter-wrapper">
                                    <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">l (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">m (5)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">s (5)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">xl (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">xxl (2)</span>
                                   </div>
                               </div>
                            </div>
                            <div class="sub-filter-wrapper">
                               <p class="sub-title">style</p>
                               <div class="filter-wrapper">
                                    <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">casual (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">dressy (1)</span>
                                   </div>
                                   <div class="sin-circle">
                                       <span class="circle-style-two"></span>
                                       <span class="filter-name">girly (2)</span>
                                   </div>
                               </div>
                            </div>
                            <div class="sing-banner">
                            <a href="#"><img alt="" src="img/banner/banner10.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ORDER AREA START-->
        <div class="order-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        <div class="sin-order">
                            <span><i class="fa fa-phone-square"></i></span>
                            <div class="order-right">
                                <p class="title">ORDER ONLINE NOW</p>
                                <p class="subline"> Call Us: <span>(0123) 456 789</span></p>
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
        <!--ORDER AREA END-->
       
        
        
@endsection  