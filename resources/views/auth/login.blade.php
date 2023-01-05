@extends('layouts.app')

@section('content')
    <div id="container" class="container">
        <!-- container-->
        <div class="d-flex justify-content-center h-100">

            <div id="card" class="card">
                <!--card-->

                <div id="card-header" class="card-header">
                    <!--card-header-->
                    <h3>Đăng nhập</h3>
                    <div class="d-flex justify-content-end social_icon"></div>
                </div> <!-- end card-header-->

                <div id="card-body" class="card-body">
                    <!--card-body-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div id="body__group-username" class="input-group form-group">
                            <!--body__group-username-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Tên đăng nhập" required>
                        </div> <!-- username-->

                        <div id="body__group-password" class="input-group form-group">
                            <!--body__group-password-->
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Mật khẩu" required>
                        </div> <!-- password-->

                        <div id="body__remember" class="row align-items-center remember">
                            <input type="checkbox">Nhớ tài khoản
                        </div> <!-- body__remember -->

                        <div id="body__btn" class="form-group">
                            <input type="submit" class="btn float-right login_btn">
                        </div> <!-- body__btn -->
                    </form>
                </div> <!-- end card-body -->

                <div id="card-footer" class="card-footer">
                    <!-- card-footer -->
                    <div class="d-flex justify-content-center links">
                        Chưa có tài khoản?<a href="signIn.html" class="footer--color">Đăng kí</a>
                    </div> <!-- sign in-->

                    <div class="d-flex justify-content-center">
                        <a href="forgot.html" class="footer--color">Quên mật khẩu?</a>
                    </div> <!-- forgot pass-->
                </div> <!-- end card-footer-->
            </div>
        </div>
    </div>
@endsection
