<html>
<head>
    @include('backend.includes.head')
</head>
<body class="fixed-nav">
    @include('backend.includes.sidebar_left')


<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">
        <!--sales report & active user-->
        @yield('content')

    </div>

    <!--footer-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; <a href="http://webviet.vn" title="Web Việt" target="_blank">Web Việt</a> 2018</small>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!--/main content wrapper-->

    @include('backend.includes.footer')
</body>
</html>