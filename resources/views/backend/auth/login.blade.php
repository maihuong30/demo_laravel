<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.includes.head')
</head>

<body class="login-bg">

<div class="container">
    <div class="row">
        <div class="col-xl-12 d-lg-flex align-items-center">
            <!--login form-->
            <div class="login-form">
                <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>
                @if (session('flash_message_error'))
                    <div class="alert alert-danger">
                        {{ session('flash_message_error') }}
                    </div>
                @endif
                <form method="POST" action="{{ url('/' . LINK_BACKEND .'/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input placeholder="Enter username or email" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                    </div>
                    <div class="form-group mb-4">
                        <input placeholder="Enter Password" id="password" type="password" class="form-control" name="password" required>
                    </div>

                    <div class="form-group clearfix">
                        <a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>
                        <button type="submit" class="btn btn-purple float-right">LOGIN</button>
                    </div>
                </form>
            </div>
            <!--/login form-->
        </div>
    </div>
</div>


</body>
</html>

