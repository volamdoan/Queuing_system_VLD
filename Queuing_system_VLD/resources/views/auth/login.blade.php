
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/account.css">
</head>

<body>
    <div class="d-lg-flex half ">
        <div class=" col-md-7 login-left bg order-1 order-md-2 d-flex justify-content-center align-items-center"
            style="background-image: url('');">
           
            <img class="login-banner" src="images/Capture.PNG" alt="">
            <!-- <div class="hethong row">
                <img class="img1" src="images/hethong.png" alt="">
                <img class="img2 col-md-12" src="images/content.png" alt="">
            </div> -->
        </div>
        <div class="contents col-md-5 order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 login-content">
                        <div class="d-flex logo justify-content-center align-items-center">                      
                            <img src="images/Logoalta.png" width="100px" alt="">                        
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Tên đăng nhập <span class="text-danger">*</span></label>
                                <input type="email"  class="form-control email" name="email" placeholder="" autocomplete="off" >
                                @error('email')
                                   <style>
                                        .email{
                                            background-color: red;
                                        }
                                   </style>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Mật khẩu <span class="text-danger">*</span></label>
                                <input name="password" type="password" class="form-control pass" placeholder="" autocomplete = "off">
                                @error('password')
                                <style>
                                    .pass{
                                        background-color: red;
                                    }
                               </style>
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                        @if (Route::has('password.request'))
                                        <span class="ml-0"><a href="{{ route('password.request') }}" class="forgot-pass text-danger">Quên mật
                                        khẩu?</a></span>
                                        @endif
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <input type="submit" value="Đăng nhập" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>