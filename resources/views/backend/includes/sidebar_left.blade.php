<!--navigation : sidebar & header-->
<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

    <!--brand name-->
    <a class="navbar-brand" href="#" data-jq-dropdown="#jq-dropdown-1">
        <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
        <div class="float-left">
            <div>mario</div>
        </div>
    </a>
    <!--/brand name-->

    <!--responsive nav toggle-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--/responsive nav toggle-->

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!--left side nav-->
        <ul class="navbar-nav left-side-nav" id="accordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link nav-link-collapse" data-toggle="collapse" data-target="#dashboard">
                    <i class="vl_dashboard"></i>
                    <span class="nav-link-text">Quản lý Admin</span>
                </a>
                <ul class="sidenav-second-level collapse show" id="dashboard" data-parent="#accordion">
                    <li> <a href="<?php echo \URL::route('users.index') ?>">Danh sách</a></li>
                    <li> <a href="dashboard-3.html">Thêm mới</a></li>
                </ul>
            </li>
            <!--khach hang-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#customer-list">
                    <i class="vl_slider-h-range"></i>
                    <span class="nav-link-text">Quản lý khách hàng</span>
                </a>
                <ul class="sidenav-second-level collapse" id="customer-list" data-parent="#accordion">
                    <li> <a href="<?php echo \URL::route('customer.index') ?>">Danh sách </a> </li>
                    <li> <a href="<?php echo \URL::route('customer.add') ?>">Thêm mới </a></li>

                </ul>
            </li>
            <!--./khach hang-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#project">
                    <i class="vl_slider-h-range"></i>
                    <span class="nav-link-text">Quản lý project</span>
                </a>
                <ul class="sidenav-second-level collapse" id="project" data-parent="#accordion">
                    <li> <a href="alert.html">Danh sách </a> </li>
                    <li> <a href="buttons.html">Thêm mới </a></li>

                </ul>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#cost">
                    <i class="vl_slider-h-range"></i>
                    <span class="nav-link-text">Quản lý chi tiêu</span>
                </a>
                <ul class="sidenav-second-level collapse" id="cost" data-parent="#accordion">
                    <li> <a href="alert.html">Danh sách </a> </li>
                    <li> <a href="buttons.html">Thêm mới </a></li>

                </ul>
            </li>
        </ul>
        <!--/left side nav-->

        <!--nav push link-->
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="left-nav-toggler">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <!--/nav push link-->

        <!--header rightside links-->
        <ul class="navbar-nav header-links ml-auto hide-arrow">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <a class="dropdown-item" href="#">My Profile</a>
                    <a class="dropdown-item" href="#">Account Settings</a>
                    <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                    <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{URL::to('/' . LINK_BACKEND . '/logout')}}">Sign Out</a>
                </div>
            </li>
        </ul>
        <!--/header rightside links-->

    </div>
</nav>
<!--/navigation : sidebar & header-->