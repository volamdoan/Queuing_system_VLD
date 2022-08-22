@extends('layouts.app')
@section('title')
Chỉnh sửa vài trò
@endsection
@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
        <span class="logo_name"><img src="images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
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
                <span class="links_name">Cài đặt hệ thống  <i class='bx bx-dots-vertical-rounded'></i>
                </span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/role">Quản lý vai trò</a></li>
                <li><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
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
            <span class="text-secondary">Vai trò</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard text-secondary">Danh sách vai trò</span><i
                class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Chỉnh sửa vi trò</span>
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
        <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 15px;">Quản lý vai trò</h3>
        <form action="/save" method="post">
            <div class="form-box">
                <div class="col-md-12">
                    <h5 class="text-primary" style="padding-left: 12px;">Thông tin vai trò</h5>
                    <div class="row">
                        <div class="col-md-12">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên vai trò: <span
                                                    class="text-danger">*</span> </label>
                                            <input name="role_name" type="text" class="form-control"
                                                placeholder="Nhập tên thiết bị" value="Kế toán">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả: <span class="text-danger">*</span>
                                            </label>
                                            <textarea class="service-content" name="role_content" id=""
                                                placeholder="Mô tả dịch vụ" style="padding: 10px;">Thống kê số liệu</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="exampleInputEmail1">Phân quyền chức năng:<span class="text-danger">*</span> </label>
                                        <div class="col-md-12 form-add-role">
                                            <div class="col-md-6">
                                                <ul class="list-group">
                                                    <h5 class="text-primary">Nhóm chức năng A</h5>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1" checked name="role_id_detail" type="checkbox" value="1"
                                                            aria-label="...">
                                                        Tất cả
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="2"
                                                            aria-label="...">
                                                       Chức năng x
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="3"
                                                            aria-label="...">
                                                            Chức năng y
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="4"
                                                            aria-label="...">
                                                            Chức năng z
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-group">
                                                    <h5 class="text-primary">Nhóm chức năng B</h5>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="5"
                                                            aria-label="...">
                                                        Tất cả
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="6"
                                                            aria-label="...">
                                                       Chức năng x
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="7"
                                                            aria-label="...">
                                                            Chức năng y
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input class="form-check-input me-1"  name="role_id_detail" type="checkbox" value="8"
                                                            aria-label="...">
                                                            Chức năng z
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <button class="btn-huy btn-add-device  ">Hủy bỏ</button>
                <button class="btn-add btn-add-device  btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>
</section>

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