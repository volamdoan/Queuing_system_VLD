


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/account.css')}}">
</head>

<body>
    <div class="d-lg-flex half ">
        <div class=" col-md-7 login-left bg order-1 order-md-2 d-flex justify-content-center align-items-center"
            style="background-image: url('');">

            <img class="Frame" src="/images/Frame.png" alt="">
            <!-- <div class="hethong row">
                <img class="img1" src="images/hethong.png" alt="">
                <img class="img2 col-md-12" src="images/content.png" alt="">
            </div> -->
        </div>
        <div class="contents col-md-5 order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-8 login-content forgot-content">
                        <div class="d-flex logo justify-content-center align-items-center">
                            <img class="" src="/images/Logoalta.png" width="100px" alt="">

                        </div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="d-flex title justify-content-center align-items-center">
                            <h4 class="">Đặt lại mật khẩu</h4>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <div class="form-group first">
                                <label for="username">Vui lòng nhập email để đặt lại mật khẩu của bạn <span
                                        class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="" autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row d-flex justify-content-center align-items-center">
                                <input type="submit" value="Hủy" class="huy btn btn-primary col-md-4">
                                <input type="submit" value="Tiếp tục" class="btn btn-primary col-md-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
