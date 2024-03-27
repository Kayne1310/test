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
                    <li><a href="#">Change Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--BREADCRUMB AREA END-->
<!--SINGLE PRODUCT AREA START-->

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="" method="POST">
                        {{-- token csrf --}}
                        @csrf
                        <!-- Form Group (username)-->
                        
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-12">
                                <label class="small mb-1" for="inputFirstName">Name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="" value="{{$auth->name}}" name="name">
                                @error('name')
                                        <div class="help-block">{{ $message }}</div>
                                    @enderror
                            </div>
                            <!-- Form Group (last name)-->
                            
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername" >Address  </label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="" value="{{$auth->address}}" name="address">
                            @error('address')
                                        <div class="help-block">{{ $message }}</div>
                                    @enderror
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="" value="{{$auth->email}}" name="email" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="" value="{{$auth->phone}}" name="phone">
                                @error('phone')
                                        <div class="help-block">{{ $message }}</div>
                                    @enderror
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputGender">Gender</label>
                                <select name="gender" id="inputGender" class="form-control select-gender">
                                    <option value="">Gender</option>
                                    <option value="1"{{ $auth->gender == 1 ? 'selected' : ''}}>Male</option>
                                    <option value="0"{{ $auth->gender == 0 ? 'selected' : ''}}>Female</option>
                                </select>
                                @error('gender')
                                        <div class="help-block">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



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
@endsection