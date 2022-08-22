@extends('layouts.app')
@section('title')
Chi tiết dịch vụ
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
            <a href="/thiet-bi">
                <i class='bx bx-laptop'></i>
                <span class="links_name">Thiết bị</span>
            </a>
        </li>
        <li class="active">
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
        <li>
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
            <span class="text-secondary">Dịch vụ</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard text-secondary">Danh sách dịch vụ</span><i
                class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Chi tiết dịch vụ</span>
        </div>
        <div class="profile-details d-flex justify-content-end align-items-center">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="/images/avt.jpg" alt="">
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
        <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 20px;">Quản lý dịch vụ
        </h3>


        <div class="row" style="margin-left: 15px;">
            <div class="box-detail col-md-3">
                <div class="col-md-12" style="    margin-left: -30px;
        ">
                    <h5 class="text-primary" style="padding: 15px;">Thông tin dịch vụ</h5>
                    <div class="row detail">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <th class="title-detail">Mã dịch vụ:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="title-detail">Tên dịch vụ:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="title-detail">Mô tả:</th>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="text-left">
                                <tr>
                                    <th class="">{{$data->service_code}}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="">{{$data->service_name}}</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="">{{$data->service_content}}</th>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-12" style="margin-top: 10px;">
                            <span></span>
                        </div>
                    </div>
                    <h5 class="text-primary" style="padding: 15px;">Quy tắc cấp số</h5>
                    <div class="row detail">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-service service-item-detail">Tăng tự động từ:
                                <input name="service_min" value="000{{$data->service_min}}"
                                    class="form-control form-control-service1" type="text"> <span
                                    style="margin-left: 70px;">đến</span> <input name="service_max"
                                    value="{{$data->service_max}}" class="form-control form-control-service2"
                                    type="text"></li>
                            <li class="list-group-item list-group-item-service service-item-detail">Prefix: <input
                                    value="{{$data->service_Prefix}}" name="service_Prefix"
                                    class="form-control form-control-service1" type="text"> </li>
                            <li class="list-group-item list-group-item-service service-item-detail">Surfix: <input
                                    value="{{$data->service_Surfix}}" name="service_Surfix"
                                    class="form-control form-control-service1" type="text"> </li>
                            <li class="list-group-item list-group-item-service service-item-detail">Reset mỗi ngày
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-detail col-md-7">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputEmail4" class="form-label">Trạng thái HĐ</label>
                                <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tất cả
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/dich-vu">tất cả</a></li>
                                    <li><a class="dropdown-item" href="/service-active">đang hoạt động</a></li>
                                    <li><a class="dropdown-item" href="/service-shut-dow">ngưng hoạt động</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="inputEmail4" class="form-label col-md-12">Chọn thời gian</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input style="border: 1px solid #ced4da !important;" type="date"
                                            class="form-control date" placeholder="Nhập từ khóa">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input style="border: 1px solid #ced4da !important;" type="date"
                                            class="form-control date" placeholder="Nhập từ khóa">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 search">
                            <div class="form-group">
                                <form action="" method="get">
                                    @csrf
                                    <label for="inputEmail4" class="form-label">Từ khóa</label>
                                    <input style="border: 1px solid #ced4da !important;" type="text" name="key"
                                        class="form-control" placeholder="Nhập từ khóa">
                                    <button type="submit" name="submit"><i style="    top: 40px;
                            left: 145px;" class='bx bx-search'></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="add-service">
                            <a href="/them-dich-vu">
                                <img src="/images/Component 3.png" alt="">
                            </a>
                        </div>
                        <div class="back-device">
                            <a href="/dich-vu">
                                <img src="/images/Frame 111.png" alt="">
                            </a>
                        </div>

                        <div class="col-md-12">
                            <div class="table100 ver1 m-b-110">
                                <div class="table100-body js-pscroll ps ">
                                    <table>
                                        <thead>
                                            <tr class="">
                                                <th class="text-center">Số thứ tự</th>
                                                <th class="text-center">Trạng thái hoạt động</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-success'> Đã hoàn
                                                        thành</td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-success'></i>Đã
                                                    hoàn thành</td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-success'></i>Đã
                                                    hoàn thành</td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-info'></i>Vắng
                                                </td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-success'></i>Đã
                                                    hoàn thành</td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-info'></i>Vắng
                                                </td>

                                            </tr>
                                            <tr class="row100 body">
                                                <td class="text-center">20120001</td>
                                                <td class="text-left"><i class='bx bxs-circle text-success'></i>Đã
                                                    hoàn thành</td>

                                            </tr>



                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end" style="margin-top:10px ;">



                            <!-- <li class="nav-item">
                            <a class="nav-link" href="#"><i class='bx bxs-left-arrow text-secondary'></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary" href="#">1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">4</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">...</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="#">10</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class='bx bxs-right-arrow text-secondary'></i></a>
                        </li> -->


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>



@endsection