
<!DOCTYPE html>
<html lang="zxx">
<head>
    
    <title>Kayne Login Form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <link type="text/css" rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/fonts/flaticon/font/flaticon.css">
    <script src="https://kit.fontawesome.com/35e003e337.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../../../../../css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">
    <link href="../../../../../css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="/assets/css/skins/default.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" />
</head>
<body id="top">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<div class="page_loader"></div>

<div class="login-3 tab-box">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 bg-img">
                <div class="informeson">
                    <div class="typing">
                        <h1>Welcome To Kayne Shop </h1>
                    </div>
                    <p>
                        Kanye Shop là một cửa hàng thời trang nổi tiếng với sự đa dạng và phong cách độc đáo trong việc cung cấp các sản phẩm thời trang chất lượng cao. Với một tầm nhìn đậm chất sáng tạo và cá nhân, Kanye Shop không chỉ là một địa chỉ mua sắm, mà còn là một trải nghiệm về phong cách và cá nhân hóa.</p>

                    <div class="social-list">
                        <div class="buttons">
                            <a href="https://facebook.com/ysbalaba" class="facebook-bg"><i class="fa fa-facebook"></i></a>

                            <a href="https://github.com/Kayne1310" class="github-bg">
                                <i class="fab fa-github"></i>
                            </a>
                            
                            <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 form-section">
                <div class="login-inner-form">
                    <div class="details">
                        <a href="{{route('home.index')}}" style="font-size: 70px; color: rgb(123,28,51);">
                            Kayne Shop
                        </a>
                        <h3>Sign Into Your Account</h3>
                        <form action="" method="POST">
                            
                            {{-- lay token --}}
                            @csrf 

                            <div class="form-group form-box">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                {{-- thong bao loi --}}
                                {{-- @error('email')
                                 <small class="help-block">{{ $message }}</small>
                                @enderror --}}
                                {{-- end thong bao loi --}}

                            </div>
                            <div class="form-group form-box">
                                <input type="password" name="password" class="form-control" autocomplete="off" placeholder="Password" aria-label="Password" required=true>
                            </div>

                            <div class="form-group form-box checkbox clearfix">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="{{route('account.forgot_password')}}">Forgot Password</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-md btn-theme w-100">Login</button>
                            </div>
                            <p>Don't have an account?<a href="{{route('account.register')}}"> Register here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>


<script>
	
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

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
</html>