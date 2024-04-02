@extends('master.main')
@section('title','Blog')
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

<div class="main-menu-area">
    <div class="container">
           <div class="row">
               <div class=" d-none d-lg-block col-md-9">
                <div class="main-menu" id="main-menu-blog">
                    <nav>
                        <ul>
                            <li><a href="{{route('home.index')}}l">home </a>
                               
                            </li>
                            <li><a href="{{route('home.product')}}">clothing </a>
                               
                            </li>
                            <li><a href="{{route('home.product')}}">Equipments</a>
                                

                            </li>
                            <li class="active"><a href="#">blog</a>
                                
                            </li>
                        
                            <li><a href="{{route('home.contact')}}">contact us</a></li>
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
                                    <li><a href="{{route('home.index')}}">Home</a>
                                        <ul>
                                           
                                        </ul>
                                    </li>
                                    <li><a href="#">clothing </a>
                                        
                                    </li>
                                    <li><a href="shop.html">Equipments</a>
                                       
                                    </li>
                                    <li><a href="#">blog</a>
                                        <ul>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="single-post.html">single post</a></li>
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
                            <li><a href="{{route('home.index')}}">Home</a></li>
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--BREADCRUMB AREA END-->
        <!--BLOG AREA START-->
        <section class="blog-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="title-with-bg style-three">
                            <span>Accessories</span>
                        </div>
                        <div class="sidebar-product owl-carousel">
                           <!--single product-->
                            <div class="sin-product">
                               <div class="product-top">
                                   <div class="pro-img">
                                        <a href="#">
                                            <img alt="" src="img/product/h1.jpg">
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
                               </div>
                            </div>
                            <!--single product-->
                            <div class="sin-product">
                               <div class="product-top">
                                   <div class="pro-img">
                                        <a href="#">
                                            <img alt="" src="img/product/m1.jpg">
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
                               </div>
                            </div>
                            <!--single product-->
                            <div class="sin-product">
                               <div class="product-top">
                                   <div class="pro-img">
                                        <a href="#">
                                            <img alt="" src="img/product/k1.jpg">
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
                               </div>
                            </div>
                            <!--single product-->
                            <div class="sin-product">
                               <div class="product-top">
                                   <div class="pro-img">
                                        <a href="#">
                                            <img alt="" src="img/product/e1.jpg">
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
                               </div>
                            </div>
                            <!--single product-->
                            <div class="sin-product">
                               <div class="product-top">
                                   <div class="pro-img">
                                        <a href="#">
                                            <img alt="" src="img/product/c1.jpg">
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
                               </div>
                            </div>
                        </div>
                        <!--banner-->
                        <div class="sing-banner">
                            <a href="#"><img alt="" src="img/banner/banner10.jpg"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                       <h3>Blog</h3>
                       <div class="shop-short-wrapper justify-content-end">
                            <div class="sort ">
                                <select class="form-control show-sort">
                                    <option selected="">12</option>
                                    <option value="">15</option>
                                    <option value="">25</option>
                                    <option value="">35</option>
                                </select>
                                <label>Show:</label>
                            </div>
	                    </div>
                        <div class="blog-wrapper">
                           <div class="single-blog">
                            <div class="row">
                               <div class="col-lg-5">
                                   <img src="img/blog3.jpg" alt="">
                               </div>
                               <div class="col-lg-7">
                                  <div class="blog-detail">
                                   <h3 class="blog-heading"><a href="#">THE SAMPLE HEADING TITLE</a></h3>
                                   <div class="blog-meta">
                                        <span class="author-link">By <a rel="author" title="Posts by admin" href="#">admin</a></span>

                                        <span class="published"><i class="fa fa-clock-o"></i>Apr 01, 2014</span>
                                        <span class="comment-count">
                                        <i class="fa fa-comment-o"></i>
                                        <a title="Comment on Gallery Post Type" href="#"> 4 comments</a>	
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Kanye Shop offers cutting-edge fashion with a blend of urban flair and high-end sophistication. Our curated collections feature avant-garde designs, premium fabrics, and timeless style. From streetwear essentials to statement pieces, Kanye Shop caters to individuals seeking bold, fashion-forward looks that make a statement wherever they go.
                                    </div>
                                    <a class="read-more" href="#">Read More</a>
                                   </div>
                               </div>
                           </div>
                        </div>
                           <!--SINGLE BLOG-->
                           <div class="single-blog">
                            <div class="row">
                               <div class="col-lg-5">
                                   <img src="img/blog1.jpg" alt="">
                               </div>
                               <div class="col-lg-7">
                                  <div class="blog-detail">
                                   <h3 class="blog-heading"><a href="#">THE SAMPLE HEADING TITLE</a></h3>
                                   <div class="blog-meta">
                                        <span class="author-link">By <a rel="author" title="Posts by admin" href="#">admin</a></span>

                                        <span class="published"><i class="fa fa-clock-o"></i>Apr 01, 2014</span>
                                        <span class="comment-count">
                                        <i class="fa fa-comment-o"></i>
                                        <a title="Comment on Gallery Post Type" href="#"> 4 comments</a>	
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Kanye Shop offers cutting-edge fashion with a blend of urban flair and high-end sophistication. Our curated collections feature avant-garde designs, premium fabrics, and timeless style. From streetwear essentials to statement pieces, Kanye Shop caters to individuals seeking bold, fashion-forward looks that make a statement wherever they go.
                                    </div>
                                    <a class="read-more" href="#">Read More</a>
                                   </div>
                               </div>
                           </div>
                        </div>
                           <!--SINGLE BLOG-->
                           <div class="single-blog">
                            <div class="row">
                               <div class="col-lg-5">
                                   <img src="img/blog3.jpg" alt="">
                               </div>
                               <div class="col-lg-7">
                                  <div class="blog-detail">
                                   <h3 class="blog-heading"><a href="#">THE SAMPLE HEADING TITLE</a></h3>
                                   <div class="blog-meta">
                                        <span class="author-link">By <a rel="author" title="Posts by admin" href="#">admin</a></span>

                                        <span class="published"><i class="fa fa-clock-o"></i>Apr 01, 2014</span>
                                        <span class="comment-count">
                                        <i class="fa fa-comment-o"></i>
                                        <a title="Comment on Gallery Post Type" href="#"> 4 comments</a>	
                                        </span>
                                    </div>
                                    <div class="blog-content">
                                    Kanye Shop offers cutting-edge fashion with a blend of urban flair and high-end sophistication. Our curated collections feature avant-garde designs, premium fabrics, and timeless style. From streetwear essentials to statement pieces, Kanye Shop caters to individuals seeking bold, fashion-forward looks that make a statement wherever they go.
                                    </div>
                                    <a class="read-more" href="#">Read More</a>
                                   </div>
                               </div>
                           </div>
                        </div>
                           <!--SINGLE BLOG-->
                           <div class="single-blog">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <img src="img/blog2.jpg" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="blog-detail">
                                        <h3 class="blog-heading"><a href="#">THE SAMPLE HEADING TITLE</a></h3>
                                        <div class="blog-meta">
                                                <span class="author-link">By <a rel="author" title="Posts by admin" href="#">admin</a></span>

                                                <span class="published"><i class="fa fa-clock-o"></i>Apr 01, 2014</span>
                                                <span class="comment-count">
                                                <i class="fa fa-comment-o"></i>
                                                <a title="Comment on Gallery Post Type" href="#"> 4 comments</a>	
                                                </span>
                                            </div>
                                            <div class="blog-content">
                                            Kanye Shop offers cutting-edge fashion with a blend of urban flair and high-end sophistication. Our curated collections feature avant-garde designs, premium fabrics, and timeless style. From streetwear essentials to statement pieces, Kanye Shop caters to individuals seeking bold, fashion-forward looks that make a statement wherever they go.
                                            </div>
                                            <a class="read-more" href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-pagination">
                             <div class=" text-right"> <div class="product-results">Showing 1 to 12 of 15 (2 Pages)</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--BLOG AREA END-->
       

@endsection