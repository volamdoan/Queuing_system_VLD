<x-guest-layout>
</x-guest-layout>
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
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('password.update') }}">
                                 @csrf
                            <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <!--Email-->
                                <div class="form-group first">
                                <x-label for="email" :value="__('Địa chỉ email')"></x-label>
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>
                            <!--mật khẩu-->
                            <div class="form-group first">
                                <x-label for="password" :value="__('Mật khẩu')"></x-label>
                                 <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
                            </div>
                            <!--Nhập lại mật khẩu-->
                            <div class="form-group last mb-3">
                            <x-label for="password_confirmation" :value="__('Nhập lại mật khẩu')"></x-label>
                             <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                            </div>             
                            <div class="d-flex mb-5 justify-content-center align-items-center">
                            <button class="btn btn-primary">{{ __('Đặt lại mật khẩu') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
