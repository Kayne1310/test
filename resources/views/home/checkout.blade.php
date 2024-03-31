@extends('master.main')
@section('title','Check Out')
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

<div class="bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('home.index')}}">Home</a></li>
                    <li><a href="#">Check Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <!-- main-area -->
    <main>
        
        
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact-area">

            <div class="contact-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" value="{{ $auth->name }}" type="text" class="form-control" placeholder="Your Name *" required>
                                    @error('name')
                                        <small class="help-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" value="{{ $auth->email }}"  type="email" class="form-control" placeholder="Your Email *" required readonly>
                                    @error('email')
                                        <small class="help-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input name="phone" type="text" value="{{ $auth->phone }}"  class="form-control" placeholder="Your phone *" required>
                                    @error('phone')
                                        <small class="help-block">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input name="address" type="text" value="{{ $auth->address }}"  class="form-control" placeholder="Your address *" required>
                                    @error('address')
                                        <small class="help-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <br>
                                <button type="submit" id="PlaceOrder">Place Order</button>
                            </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($carts as $item)
                                        <tr>
                                            <td scope="row">{{ $loop->index + 1 }}</td>
                                            <td>
                                                <img src="/uploads/product/{{ $item->prod->image }}" width="40">
                                            </td>
                                            <td>{{ $item->prod->name }}</td>
                                            <td>${{ $item->price }}</td>
                                            <td>
                                                {{ $item->quantity }}
                                            </td>
                                            <td>${{($item->quantity*$item->price)}}</td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>


                            {{-- test --}}
                            <table class="table table-bordered table-hover">
                                
                                <tbody>
                                 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                        <td class="text-right">${{$totalPrice}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                        <td class="text-right">${{$totalPrice}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                            
                            {{-- end test --}}
                        </div>

                        
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->
    
@stop()
