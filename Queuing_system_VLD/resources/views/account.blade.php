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
                <li class="active"><a class="dropdown-item" href="/account">Quản lý tài khoản</a></li>
                <li><a class="dropdown-item" href="/note">Nhật kí hoạt động</a></li>
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
            <a href="/account"><span class="text-secondary">Tài khoản</span></a> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard">Danh sách tài khoản</span>
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
                <h3 class="text-primary" style="margin-bottom: 30px;">Danh sách tài khoản</h3>
                <div class="row d-flex justify-content-end">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Tên vai trò</label>
                            <div class="dropdown">
                                <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tất cả
                                </button>
                                <ul style="width: 305px !important;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/number">tất cả</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3 search">
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" class="form-label">Từ khóa</label>
                                <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
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
                                            <th class="text-center">Họ và tên</th>
                                            <th class="text-center">Số điện thoại</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Vai trò</th>
                                            <th class="text-center">Trạng thái hoạt động</th>
                                            <th class="text-center"><a href=""></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="">
                                            <td class="text-center">{{$item->account_username}}</td>
                                            <td class="text-center">{{$item->name}}</td>
                                            <td class="text-center">{{$item->account_number}}</td>
                                            <td class="text-center">{{$item->email}}</td>
                                            <td class="text-center">{{$item->role_name}}</td>
                                            @if($item->account_status ==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang hoạt động</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Ngưng hoạt động</td>
                                            @endif
                                            <td class="text-center"><a class="text-info" href="/edit-account/{{$item->id}}">Cập nhật</a></td>
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