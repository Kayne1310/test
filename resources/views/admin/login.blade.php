
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login V1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="/loginadmin/images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="/loginadmin/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/loginadmin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="/loginadmin/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="/loginadmin/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="/loginadmin/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="/loginadmin/css/util.css">
        <link rel="stylesheet" type="text/css" href="/loginadmin/css/main.css">

        <meta name="robots" content="noindex, follow">
   
</head>
<body>
        <div class="limiter">
          <div class="container-login100">
              <div class="wrap-login100">
                  <div class="login100-pic js-tilt" data-tilt>
                      <img src="/loginadmin/images/img-01.png" alt="IMG">
                  </div>
                  <form class="login100-form validate-form" action="" method="POST">
                        
                   @csrf
                  
                      <span class="login100-form-title">
                          Admin  Login
                      </span>
                      @if (Session::has('no'))
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('no') }}
                      </div>
                    @endif
                      <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                          <input class="input100" type="email" name="email" placeholder="Email" required>
                          <span class="focus-input100"></span>
                          <span class="symbol-input100">
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                          </span>
                      </div>
                      <div class="wrap-input100 validate-input" data-validate="Password is required">
                          <input class="input100" type="password" name="password" placeholder="Password">
                          <span class="focus-input100"></span>
                          <span class="symbol-input100">
                              <i class="fa fa-lock" aria-hidden="true"></i>
                          </span>
                      </div>
                      <div class="container-login100-form-btn">
                          <button type="submit" class="login100-form-btn">
                              Login
                          </button>
                         
                      </div>
                  </form>
              </div>
          </div>
      </div>

    <script src="/loginadmin/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="/loginadmin/vendor/bootstrap/js/popper.js"></script>
    <script src="/loginadmin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/loginadmin/vendor/select2/select2.min.js"></script>

    <script src="/loginadmin/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
          scale: 1.1
        })
      </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>

    <script src="/loginadmin/js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"86a09c778f722ea4","b":1,"version":"2024.3.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>


</html>
