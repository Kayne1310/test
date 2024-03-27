@extends('master.main')
@section('title','Home')
@section('main')
                  

        
        <!--BREADCRUMB AREA START-->
        <div class="bread-crumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li>cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--BREADCRUMB AREA END-->
        <!--SINGLE PRODUCT AREA START-->
        <section class="cart-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-9">
                       <div class="cart-wrapper">
                           <h3>Shopping Cart(1.00kg) </h3>
                           <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Image</td>
                                        <td>Product Name</td>
                                        <td>Model</td>
                                        <td>Quantity</td>
                                        <td>Unit Price</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart-page-img">
                                            <a href="#"><img src="img/product/cart-1.jpg" alt=""></a>
                                        </td>
                                        <td><a href="#" class="cart-pro-name">blandit blandit</a></td>
                                        <td>Product 5</td>
                                        <td>
                                            <div class="input-group btn-block">
                                                <input type="text" class="form-control" size="1" value="2" name="quantity[170]">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" title="" data-bs-toggle="tooltip" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                                <button onclick="cart.remove('170');" class="btn btn-danger" title="" data-bs-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="cart-price">$80.00</td>
                                        <td class="cart-price">$80.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="accordion-title mb-30px">
                                <h2>What would you like to do next?</h2>
                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                            </div>
                            <div class="accordion mb-30px" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Use Coupon Code <i class="fa fa-caret-down"></i> 
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <label  class="control-label">Enter your coupon here</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter your coupon here" value="" name="coupon">
                                            <span class="input-group-btn">
                                            <input type="button" class="btn btn-primary" data-loading-text="Loading..."  value="Apply Coupon">
                                            </span>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Use Gift Voucher <i class="fa fa-caret-down"></i>
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <label  class="control-label">Enter your gift voucher code here</label>
                                          <div class="input-group">
                                              <input type="text" class="form-control"  placeholder="Enter your coupon here" value="" name="coupon">
                                              <span class="input-group-btn">
                                              <input type="button" class="btn btn-primary"   value="Apply Voucher">
                                              </span>
                                          </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Estimate Shipping & Taxes <i class="fa fa-caret-down"></i>
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <label  class="control-label"><span class="required">*</span>Country</label>
                                        <select class="form-control">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Aaland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                        </select>
                                       <label  class="control-label"><span class="required">*</span>Region / State</label>
                                        <select class="form-control">
                                            <option value=""> --- Please Select --- </option>
                                            <option value="244">Aaland Islands</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                            <option>American Samoa</option>
                                            <option>Andorra</option>
                                        </select>
                                        <label class="control-label"><span class="required">*</span>Post Code</label>
                                        <input type="text" class="form-control mb-30px"  placeholder="Enter your coupon here" value="" name="coupon">
                                        <p class="form-submit">
                                            <input type="submit" name="submit"  class="btn btn-primary submit" value="Post Comment">
                                        </p>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="cart-bottom-total">
                                <div class="table-total  col-md-4 offset-md-8 no-padding">
                                   <table class=" table table-bordered">
                                    <tbody>
                                        <tr>
                                          <td class="text-right"><strong>Sub-Total:</strong></td>
                                          <td class="text-right">$100.00</td>
                                        </tr>
                                        <tr>
                                          <td class="text-right"><strong>Total:</strong></td>
                                          <td class="text-right">$100.00</td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    
                                </div>
                                <p class="form-submit">
								    <input type="submit"   class="btn btn-primary submit pull-right" value="Checkout">
								</p>
                                <p class="form-submit">
                                    <input type="submit" class="btn btn-primary continue-shopping pull-left" value="Continue Shoping">
                                </p>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
        </section>
        <!--SINGLE PRODUCT AREA END-->

@endsection