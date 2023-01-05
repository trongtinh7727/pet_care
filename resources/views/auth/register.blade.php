@extends('layouts.app')

@section('content')
    <div id="container" class="container")>
        <!-- container-->

        <div class="d-flex justify-content-center h-100">

            <div id="card" class="card-signIn">
                <!--card-->

                <div id="card-header" class="card-header">
                    <!--card-header-->
                    <h3>Đăng ký</h3>
                    <div class="d-flex justify-content-end social_icon"></div>
                </div> <!-- end card-header-->

                <div id="card-body" class="card-body">
                    <!--card-body-->
                    <form>
                        <div id="fullname" class="input-fullname">
                            <!--fullname-->
                            <div class="input-group-prepend-signIn--head">
                                <span class="input-group-text"><i class="fa fa-user-plus"></i></span>
                                <input type="text" name="firstName" id="firstName" class="form-control"
                                    placeholder="Họ và tên" required>
                            </div>
                        </div>

                        <div id="sec-infor" class="input-sec-infor">
                            <!--sec-infor-->
                            <div class="input-group-prepend-signIn">
                                <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                <input type="text" name="sdt" id="sdt" class="form-control"
                                    placeholder="Số điện thoại" required>
                            </div>

                            <div class="input-group-prepend-signIn">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Nhập Email" required>
                            </div>
                        </div>

                        <div id="user-infor" class="input-user-infor">
                            <!--user-infor-->
                            <div class="input-group-prepend-signIn">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Tên đăng nhập" required>
                            </div>

                            <div class="input-group-prepend-signIn">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Mật khẩu" required>
                            </div>

                            <div class="input-group-prepend-signIn">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" name="password-confirm" id="password-confirm" class="form-control "
                                    placeholder="Xác nhận mật khẩu" required>
                            </div>
                        </div>


                        <div id="body__btn" class="form-group">
                            <input type="submit" value="Xác nhận" class="btn signIn_btn">
                        </div> <!-- body__btn -->

                    </form>
                </div> <!-- end card-body -->

                <footer id="card-footer" class="card-footer">
                    <!-- card-footer -->
                    <div class="d-flex justify-content-center links">
                        Đã có tài khoản?<a href="login.html" class="footer--color">Đăng nhập</a>
                    </div> <!-- Login-->

                    <div class="d-flex justify-content-center">
                        <a href="forgot.html" class="footer--color">Quên mật khẩu?</a>
                    </div> <!-- forgot pass-->
                </footer> <!-- end card-footer-->
            </div>
        </div>
    </div>
@endsection
