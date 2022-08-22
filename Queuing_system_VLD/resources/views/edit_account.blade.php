@extends('layouts.app')
@section('title')
Chỉnh sủa tài khoản
@endsection
@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
        <span class="logo_name"><img src="/images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li >
            <a href="/thiet-bi" class="">
                <i class='bx bx-laptop'></i>
                <span class="links_name">Thiết bị</span>
            </a>
        </li>
        <li>
            <a href="/dich-vu" class="">
                <i class='bx bx-conversation'></i>
                <span class="links_name">Dịch vụ</span>
            </a>
        </li>
        <li>
            <a href="/number" class="">
                <i class='bx bx-layer'></i>
                <span class="links_name">Cấp số</span>
            </a>
        </li>
        <li>
            <a href="/report" class="">
                <i class='bx bx-trending-up'></i>
                <span class="links_name">Báo cáo</span>
            </a>
        </li>
        <li class="active">
            <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-cog'></i>
                <span class="links_name">Cài đặt hệ thống <i class='bx bx-dots-vertical-rounded'></i>
                </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/role">Quản lý vai trò</a></li>
                <li class="active"><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
                <li><a class="dropdown-item" href="#">Nhật người dùng</a></li>
            </ul>
        </li>
        @guest
        @if (Route::has('login'))

        @endif

        @if (Route::has('register'))

        @endif
        @else
        <li class="log_out">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class='bx bx-log-in'></i>
                <span class="links_name">Đăng xuất</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
        @endguest
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <span class="text-secondary">Tài khoản</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard text-secondary">Danh sách tài khoản</span><i
                class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Chỉnh sửa</span>
        </div>
        <div class="profile-details d-flex justify-content-end align-items-center">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/avt.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="admin_hello col-md-12">
                                <span>Xin chào</span>
                            </div>
                            <div class="admin_name col-md-12">
                                <span>Võ Lâm Đoan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-content" id="device">
        <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 15px;">Quản lý tài khoản
        </h3>
        <form action="/luu-thiet-bi" method="post" id="formclear">
            <div class="form-box">
                <div class="col-md-12">
                    <h5 class="text-primary">Thông tin tài khoản</h5>
                    <div class="row" style="padding: 5px;">
                    <div class="col-md-12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @csrf
                            <div class="row form-group-account">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Họ tên: <span class="text-danger">*</span>
                                    </label>
                                    <input id="name" value="{{ $data->name }}" name="name" type="text" class="form-control"
                                        placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Tên đăng nhập: <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{ $data->account_username }}" name="account_username" type="text"
                                        class="form-control" placeholder="Nhập tên đăng nhập">
                                </div>
                            </div>
                            <div class="row form-group-account">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Số điện thoại: <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{ $data->account_number }}" name="account_number" type="text"
                                        class="form-control" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Mật khẩu: <span
                                            class="text-danger">*</span></label>
                                    <input value="" name="password" type="password" class="form-control"
                                        placeholder="Nhập mật khẩu">
                                </div>
                            </div>
                            <div class="row form-group-account">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email: <span class="text-danger">*</span>
                                    </label>
                                    <input value="{{$data->email}}" name="email" type="text" class="form-control"
                                        placeholder="Nhập Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Nhập lại mật khẩu: <span
                                            class="text-danger">*</span></label>
                                    <input value="" name="password_confirmation" type="password" class="form-control"
                                        placeholder="Nhập lại mật khẩu">
                                </div>
                            </div>
                            <div class="row form-group-account">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Vai trò: <span class="text-danger">*</span>
                                    </label>
                                    <select name="account_role" class="form-control" id="">
                                        @foreach($role as $item)
                                        <option  value="{{$item->id}}" {{($data->account_role==$item->id)?'selected':''}} >{{$item->role_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Tình trạng: <span
                                            class="text-danger">*</span></label>
                                    <select name="account_status" class="form-control" id="">
                                        <option value="1" {{($data->account_status==1)?'selected':''}} >Hoạt động</option>
                                        <option value="2" {{($data->account_status==2)?'selected':''}} >Ngưng hoạt động</option>
                                    </select>
                                </div>
                                <div>
                                    <span class="text-danger">*</span> Là thông tin trường băt
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <button onclick="newFunction()" type="button" class="btn-huy btn-add-device  ">Hủy bỏ</button>
                <button class="btn-add btn-add-device  btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
</section>
<script type="text/javascript">
    function newFunction(){
        document.getElementById("formclear").reset();
    }
</script>
<!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script> -->

@endsection