@extends('layouts.app')
@section('title')
Lập báo cáo
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
        <li class="active">
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
            <span class="text-secondary">Báo cáo</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard">Danh sách báo cáo</span>
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
                <h3 class="text-primary" style="margin-bottom: 30px;">Danh sách báo cóa</h3>
                <div class="row">
                    <div class="col-md-4" style="padding-bottom: 15px;">
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
                    <div class="add-device" style="top: 160px;">
                        <a href="/add-number">
                            <img src="/images/Component 1 (3).png" alt="">
                        </a>
                    </div>

                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table>
                                    <thead>

                                        <tr class="">
                                            <th style="position: relative;" class="text-center">Số thứ tự <button
                                                    type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                    aria-expanded="false" class="row button-fillter dropdown-toggle"><i
                                                        class='col-md-12 bx bxs-up-arrow text-white'></i><i
                                                        class='col-md-12 bx bxs-down-arrow text-white'></i></button>
                                            </th>

                                            <th style="position: relative;" class="text-center">Tên dịch vụ <button
                                                    class="row button-fillter"><i
                                                        class='col-md-12 bx bxs-up-arrow text-white'></i><i
                                                        class='col-md-12 bx bxs-down-arrow text-white'></i></button>
                                            </th>
                                            <th style="position: relative;" class="text-center">Thời gian cấp <button
                                                    class="row button-fillter"><i
                                                        class='col-md-12 bx bxs-up-arrow text-white'></i><i
                                                        class='col-md-12 bx bxs-down-arrow text-white'></i></button>
                                            </th>
                                            <th style="position: relative;" class="text-center">Tình trạng <button
                                                    class="row button-fillter"><i
                                                        class='col-md-12 bx bxs-up-arrow text-white'></i><i
                                                        class='col-md-12 bx bxs-down-arrow text-white'></i></button>
                                            </th>
                                            <th style="position: relative;" class="text-center">Nguồn cấp <button
                                                    class="row button-fillter"><i
                                                        class='col-md-12 bx bxs-up-arrow text-white'></i><i
                                                        class='col-md-12 bx bxs-down-arrow text-white'></i></button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="">
                                            <td class="text-center">{{$item->number}}{{$item->id}}</td>
                                            <td class="text-center">{{$item->number_service}}</td>
                                            <td class="text-center">{{$item->created_at}}</td>
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

@endsection