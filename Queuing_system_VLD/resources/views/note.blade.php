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
                <li ><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
                <li class="active"><a class="dropdown-item" href="/note">Nhật người dùng</a></li>
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
            <span class="text-secondary">Cài đặt hệ thống</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard">Nhật kí hoạt động</span>
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
                <h3 class="text-primary" style="margin-bottom: 30px;">Nhật kí hoạt động</h3>
                <div class="row d-flex justify-content-end">
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
                    <div class="col-md-5"></div>
                    <div class="col-md-3 search">
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" class="form-label">Từ khóa</label>
                                <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>  <q></q>
                    <div class="add-device" style="top: 160px;">
                        <a href="/add-account">
                            <img src="/images/addaccount.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table id="table_id">
                                    <thead>
                                        <tr class="">
                                            <th class="text-center">Tên đăng nhập</th>
                                            <th class="text-center">Thời gian tác động</th>
                                            <th class="text-center">IP thực hiện</th>
                                            <th class="text-center">Thao tác thực hiện</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="text-center">lamdoan123</td>
                                            <td class="text-center">28/08/2022 11:12:01</td>
                                            <td class="text-center">192.168.13</td>
                                            <td class="text-center">Cập nhật thông tin dịch vụ</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-center">lamdoan123</td>
                                            <td class="text-center">28/08/2022 11:12:05</td>
                                            <td class="text-center">192.168.13</td>
                                            <td class="text-center">Cập nhật thông tin tài khoản</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-center">nguyenthia</td>
                                            <td class="text-center">28/08/2022 11:12:08</td>
                                            <td class="text-center">192.168.13</td>
                                            <td class="text-center">Cập nhật thông tin dịch vụ</td>
                                        </tr>
                                        <tr class="">
                                            <td class="text-center">lamdoan123</td>
                                            <td class="text-center">28/08/2022 11:12:48</td>
                                            <td class="text-center">192.168.13</td>
                                            <td class="text-center">Cập nhật thông tin thiết bị</td>
                                        </tr>
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