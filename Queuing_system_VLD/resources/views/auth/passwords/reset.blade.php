


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đạt lại mật khẩu</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
</head>

<body>
    <div class="d-lg-flex half ">
        <div class=" col-md-7 login-left bg order-1 order-md-2 d-flex justify-content-center align-items-center"
            style="background-image: url('');">
           
            <img class="login-banner" src="/images/Capture.PNG" alt="">
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
                            <img src="/images/Logoalta.png" width="100px" alt="">                        
                        </div>
                        <div class="d-flex title justify-content-center align-items-center">
                            <h4 class="">Đặt lại mật khẩu mới</h4>
                        </div>
                        <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group first">
                                <label for="">Mật khẩu<span class="text-danger">*</span></label>
                                <input id="email" type="hidden" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                <input type="password" class="form-control" placeholder="" autocomplete="off" name="password" required autocomplete="new-password" >
                            </div>
                            <div class="form-group last mb-3">
                                <label for="">Nhập lại mật khẩu<span class="text-danger">*</span></label>
                                <input type="password" class="form-control" placeholder="" autocomplete = "off" name="password_confirmation" required autocomplete="new-password">
                            </div>             
                            <div class="d-flex mb-5 justify-content-center align-items-center">
                                <input type="submit" value="Đổi mật khẩu" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
