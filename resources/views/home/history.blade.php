@extends('master.main')

@section('main')
 <!-- main-area -->


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



 <main>


    
  

    <!-- contact-area -->
    <section class="contact-area">

        <div class="contact-wrap">
            <div class="container">
               <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Order date</th>
                        <th>Status</th>
                        <th>Total Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $item)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>
                                @if ($item->status == 0)
                                <span>Unconfimred</span>
                                @elseif ($item->status == 1)
                                <span>confirmed</span>
                                @elseif ($item->status == 21)
                                <span>Completly Payment</span>
                                @else
                                <span>Cancelled</span>
                                @endif
                            </td>
                            <td>{{ number_format($item->totalPrice) }}</td>
                            <td>
                                <a href="{{ route('order.detail', $item->id) }}" class="btn btn-sm btn-primary">Detail</a>
                            </td>


                        </tr>
                    @endforeach

                </tbody>
               </table>

               <br>
               <div class="text-center">
                <a href="{{route('home.index')}}" class="btn btn-primary" id="continue_shopping">Continue Shopping</a>
                @if($carts->count())
                <a href="{{ route('cart.clear') }}" class="btn btn-danger" onclick="return confirm('Are you sure wanto delete all product?')" ><i class="fa fa-trash"></i> Clear shopping</a>
                <a href="{{ route('order.checkout') }}"" class="btn btn-success">Place Order</a>
                @endif
               </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

@stop()
