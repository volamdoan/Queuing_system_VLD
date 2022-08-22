@extends('layouts.app')
@section('title')
Quản lý cấp số
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
        <li>
            <a href="/thiet-bi">
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
        <li class="active">
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
            <span class="text-secondary">Cấp số</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard">Danh sách cấp số</span>
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
        <div class="number">
            <div class="col-md-12 ">
                <h3 class="text-primary" style="margin-bottom: 30px;">Danh sách cấp số</h3>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Tên dịch vụ</label>
                            <div class="dropdown">
                                <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tất cả
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/number">Tất cả</a></li>
                                    @foreach($service as $item)
                                    <li><a class="dropdown-item" href="/ten-dich-vu/<?php echo str_replace(" ","
                                            -",$item->service_name) ?>">{{$item->service_name}}</a></li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Tình trạng</label>
                            <button style="text-align: left;padding: 3px;" class="form-control dropdown-toggle"
                                type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item" href="/number">Tất cả</a></li>
                                <li><a class="dropdown-item" href="/trang-thai/dang-cho">Đang chờ</a></li>
                                <li><a class="dropdown-item" href="/trang-thai/da-su-dung">Đã sử dụng</a></li>
                                <li><a class="dropdown-item" href="/trang-thai/da-huy">Đã hủy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Nguồn cấp</label>
                            <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/thiet-bi">Tất cả</a></li>
                                <li><a class="dropdown-item" href="/device-connecting">Đang kết nối</a></li>
                                <li><a class="dropdown-item" href="/device-disconnect">Ngưng kết nối</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <label for="inputEmail4" class="form-label col-md-12">Chọn thời gian</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control date" placeholder="Nhập từ khóa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control date" placeholder="Nhập từ khóa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 search">
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" class="form-label">Từ khóa</label>
                                <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="add-device add-number" style="top: 160px;">
                        <a href="/add-number">
                            <img src="/images/number.png" alt="">
                        </a>
                    </div>

                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table id="table_id">
                                    <thead>
                                        <tr class="">
                                            <th class="text-center">STT</th>
                                            <th class="text-center">Tên khách hàng</th>
                                            <th class="text-center">Tên dịch vụ</th>
                                            <th class="text-center">Thời gian cấp</th>
                                            <th class="text-center">Hạn sử dụng</th>
                                            <th class="text-center">Trạng thái</th>
                                            <th class="text-center">Nguồn cấp</th>
                                            <th class="text-center"><a href=""></a></th>
                                            <th class="text-center"><a href=""></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="">
                                            <td class="text-center">{{$item->number}}{{$item->id}}</td>
                                            <td class="text-center">{{$item->number_name}}</td>
                                            <td class="text-center">{{$item->number_service}}</td>
                                            <td class="text-center">{{$item->created_at}}</td>
                                            <td class="text-center">{{$item->updated_at}}</td>
                                            @if($item->number_status ==1)
                                            <td class="text-left"><i class='bx bxs-circle text-info'></i>Đang chờ</td>
                                            @endif
                                            @if($item->number_status ==2)
                                            <td class="text-left"><i class='bx bxs-circle text-secondary'></i>Đã sử
                                                dụng</td>
                                            @endif
                                            @if($item->number_status ==3)
                                            <td class="text-left"><i class='bx bxs-circle text-danger'></i>Đã hủy</td>
                                            @endif
                                            <td class="text-center">{{$item->number_source}}</td>
                                            <td class="text-center"><a class="text-info" href="">Chi tiết</a></td>
                                            <td class="text-center"><a class="text-info" href="">Cập nhật</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="" style="position: fixed;top: 750px;right: 139px;">
    {{ $data->links() }}
</div>
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
<script>< script >
        $(document).ready(function () {
            $('#table_id').DataTable();
        });</script>
@endsection