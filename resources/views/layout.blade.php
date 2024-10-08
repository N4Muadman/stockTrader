<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ thống đầu tư số 1 Việt Nam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

</head>
<body>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <header>
        <div class="header d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="120" height="60" srcset="">
                    </div>
                    <div class="col-sm-6 d-flex align-items-center justify-content-center">
                        <div class="menu">
                            <ul class="d-flex">
                                <li><a href="#" onclick="clickMenu(this)" class="menu-item" id="company">Công ty <i class="fa-solid fa-chevron-right"></i></a></li>
                                <li><a href="#" onclick="clickMenu(this)" class="menu-item" id="tool">Công cụ <i class="fa-solid fa-chevron-right"></i></a></li>
                                <li><a href="#" onclick="clickMenu(this)" class="menu-item" id="collabrate">Cộng tác <i class="fa-solid fa-chevron-right"></i></a></li>
                                <li><a href="">Mua dịch vụ <i class="fa-solid fa-chevron-right"></i></a></li>
                                <li><a href="{{ route('news') }}">Tin Tức</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 d-flex flex-column align-items-end">
                        <div class="contact"><i class="fa-solid fa-headphones me-3"></i>Hotline: 0983868386</div>
                        @auth()
                            <div class="d-flex" >
                                <div class="me-3 text-end">
                                    <p style="font-size: 14px;">{{ Auth::user()->email }}</p>
                                    <a style="font-size: 14px; color: #000" class="a-hover" href="{{ route('logout') }}">Đăng xuất</a>
                                </div>
                                <a href="">
                                    <img src="{{ asset('assets/img') .'/' .Auth::user()->img }}" width="40px" style="border-radius: 20px" height="40px" alt="">
                                </a>
                            </div>
                        @else
                            <div class="login mt-2">
                                <a href="#" class="btn me-3 btn-login" onclick="dialogformlogin(this)" data-id="login" data-bs-toggle="modal" data-bs-target="#Login">Đăng nhập</a>
                                <a href="#" data-id="register" onclick="dialogformlogin(this)" data-bs-toggle="modal" data-bs-target="#Login" class="btn btn-register">Đăng ký</a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown-menu-content col-sm-12 d-flex align-items-center justify-content-center" >
            <ul class="submenu" id="submenu-company">
                <li><a href="{{ route('introduce') }}">Giới thiệu</a></li>
                <li><a href="{{ route('investment_philosophy') }}">Triết lý đầu tư</a></li>
                <li><a href="{{ route('faqs') }}">Giải đáp thắc mắc</a></li>
            </ul>
        </div>
        <div class="dropdown-menu-content col-sm-12 d-flex align-items-center justify-content-center" >
            <ul class="submenu" id="submenu-tool">
                <li><a href="{{ route('detect_waves') }}">Dòng sóng</a></li>
                <li><a href="{{ route('signal') }}">Tín hiệu</a></li>
                <li><a href="{{ route('sector_rotation') }}">Tổng quan sóng ngành</a></li>
                {{-- <li><a href="">Nhận định</a></li>
                <li><a href="">Biểu đồ</a></li> --}}
            </ul>
        </div>
        <div class="dropdown-menu-content col-sm-12 d-flex align-items-center justify-content-center" >
            <ul class="submenu" id="submenu-collabrate">
                <li><a href="">Cộng tác</a></li>
                <li><a href="">Cộng tác viên</a></li>
                <li><a href="">CTCK</a></li>
            </ul>
        </div>
        <div class="header-mobile d-md-none">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="" width="120" height="60" srcset="">
                    <div class="toggle-btn">
                        <a href="#" onclick="toggleSidebar()"><i class="fa-solid fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="dropdown-menu-mobile d-none" id="dropdown-menu-mobile">
            <ul>
                <li>
                    <a href="#" class="" onclick="dialogformlogin(this)" data-id="login" data-bs-toggle="modal" data-bs-target="#Login">Đăng nhập</a>
                </li>
                <li>
                    <a href="#" data-id="register" onclick="dialogformlogin(this)" data-bs-toggle="modal" data-bs-target="#Login">Đăng ký</a>
                </li>
                <li>
                    <a href="#" id="company-mobile" onclick="clickMenu(this)">Công ty</a> <i class="fa-solid fa-chevron-up icon text-end" id="icon-company-mobile"></i>
                    <div class="submenu" id="submenu-company-mobile">
                        <ul>
                            <li><a href="{{ route('introduce') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('investment_philosophy') }}">Triết lý đầu tư</a></li>
                            <li><a href="{{ route('faqs') }}">Giải đáp thắc mắc</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" id="tool-mobile" onclick="clickMenu(this)">Công cụ</a> <i class="fa-solid fa-chevron-up icon text-end" id="icon-tool-mobile"></i>
                    <div class="submenu" id="submenu-tool-mobile">
                        <ul>
                            <li><a href="{{ route('detect_waves') }}">Dòng sóng</a></li>
                            <li><a href="{{ route('signal') }}">Tín hiệu</a></li>
                            <li><a href="{{ route('sector_rotation') }}">Tổng quan sóng ngành</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('news') }}">Tin tức</a>
                </li>
            </ul>
        </div>
        @yield('content')
    </div>
    <footer>
        <div class="footer-top">
            <div class="container ">
                <div class="col-12 d-flex align-items-center justify-content-around">
                    <p>Nhập bản tin qua Email</p>
                    <div class="input-container">
                        <form action="" method="post">
                                <input type="text" class="custom-input" placeholder=""/>
                                <button class="custom-button">Đăng ký</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <img src="{{ asset('assets/img/logo.jpg') }}" width="250" height="180" alt="Logo">
                        </div>
                    </div>
                    <div class="col-md-1" style="width: 145px">
                        <h5>Công ty</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Triết lý đầu tư</a></li>
                            <li><a href="#">Giải đáp thắc mắc</a></li>
                        </ul>
                    </div>
                    <div class="col-md-1" style="width: 105px">
                        <h5>Công cụ</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Dò sóng</a></li>
                            <li><a href="#">Tín hiệu</a></li>
                            <li><a href="#">Nhận định</a></li>
                        </ul>
                    </div>
                    <div class="col-md-1" style="width: 125px">
                        <h5>Công tác</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Cộng tác viên</a></li>
                            <li><a href="#">CTCK</a></li>
                        </ul>
                    </div>
                    <div class="col-md-1" style="width: 155px">
                        <h5>Mua dịch vụ</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Gói mặc định</a></li>
                            <li><a href="#">Gói tùy chọn</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <h5>Liên hệ</h5>
                        <p><i class="fas fa-phone"></i> 0966 939 986</p>
                        <p><i class="fas fa-globe"></i> stocktraders.vn</p>
                        <p><i class="fas fa-envelope"></i> info@stocktraders.vn</p>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <h6>Kết nối</h6>
                                <a href="#">
                                    <i class="fa-brands fa-facebook me-3" style="color:blue; font-size: 24px"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-youtube" style="color:red; font-size: 24px"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <h5>Tải về ứng dụng</h5>
                        <div class="app-buttons">
                            <a href="#">
                                <img src="{{ asset('assets/img/appstore.png') }}" class="mb-2" width="120" alt="App Store">
                            </a>
                            <a href="#">
                                <img src="{{ asset('assets/img/chplay.png') }}" width="120" alt="App Store">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-3 text-end">
                        <p>ĐC. Lầu 5, IMC Tower số 62 Trần Quang Khải, P. Tân Định, Quận 1, TPHCM</p>
                    </div>
                    <div class="col-md-6">
                        <p>© 2009 - Bản quyền của Công Ty Cổ Phần Nghiên Cứu Đầu Tư StockTraders - StockTraders.vn</p>
                        <p>Giấy chứng nhận Đăng ký Kinh doanh số 0312364789 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh cấp ngày 10/07/2013</p>
                    </div>

                </div>
            </div>
        </div>

    </footer>

    <!-- Modal login -->
    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl justify-content-center modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-head d-md-none">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="float: right; margin: 12px 12px 0 0 " aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 d-md-block d-none login-left text-center text-white">
                            <div class="header-login-left">
                                <p>StockTraders Tự Hào Là Đơn Vị Tiên Phong</p>
                                <p>Xác Định Được Sóng Thị Trường Trước 1</p>
                                <p>Đến 2 Phiên Giao Dịch</p>
                            </div>
                            <div class="img">
                                <img src="{{ asset('assets/img/login.png') }}" width="200" alt="" srcset="">
                            </div>
                            <div class="text-intro">
                                <p>1 Gói Dịch Vụ</p>
                                <p>2 Nền Tảng</p>
                            </div>
                            <div class="footer-login-left">
                                <p>Cập nhật tín hiệu đầu tư 24/7</p>
                            </div>
                        </div>
                        <div class="col-sm-5 login-right">
                            <div class="form-login p-4">
                                <div class="header-login-right mb-5">
                                    <a href="#" class="me-3 login-active" id="title-login" onclick="dialogformlogin(this)" data-id="login">ĐĂNG NHẬP TÀI KHOẢN</a>
                                    <a href="#" data-id="register" id="title-register" onclick="dialogformlogin(this)">TẠO TÀI KHOẢN MỚI</a>
                                </div>
                                <div class="form-login-content" id="form-login">
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <label class="form-label">Tên Đăng Nhập</label>
                                            <input type="email" autocomplete="email" value="{{ old('email') }}" class="form-control" name="email" placeholder="Tên đăng nhập hoặc Email" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="" class="form-label">Mật khẩu</label>
                                            <input type="password" autocomplete="current-password" class="form-control @if (session()->has('errorLogin')) is-invalid @endif" name="password" placeholder="********" required>
                                            @if (session()->has('errorLogin'))
                                                <p class="text-danger text-center mt-2">{{ session('errorLogin') }}</p>
                                            @endif
                                        </div>
                                        <div class="mb-4">
                                            <input type="checkbox" class="remember" autocomplete="remember" name="remember" >
                                            <label for="" class="form-label ">Ghi Nhớ mật khẩu</label>
                                        </div>
                                        <div class="mb-5">
                                            <a href="">Quên mật khẩu? Bấm vào đây</a>
                                        </div>
                                        <div>
                                            <input type="submit" class="form-control btn btn-login-submit" value="Đăng nhập">
                                        </div>
                                    </form>
                                </div>
                                <div class="form-register-content" id="form-register">
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Họ tên</label>
                                            <input type="text" autocomplete="name" class="form-control" name="full_name" placeholder="Họ và tên đầy đủ" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email của quý khách có thể dùng đăng nhập" required>
                                            @error('email')
                                                <p class="text-danger text-center mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Số điện thoại</label>
                                            <input type="tel" autocomplete="tel" class="form-control" name="phone_number" placeholder="Số điện thoại" required>
                                        </div>
                                        <div class="mb-3">
                                            <div class="">
                                                <label for="" class="form-label">Mật khẩu *</label>
                                                <input type="password" autocomplete="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="*********"required>
                                            </div>
                                            <div class="">
                                                <label for="" class="form-label">Xác nhân mật khẩu </label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" name="password_confirmation" placeholder="*********" required>
                                                @error('password')
                                                    <p class="text-danger text-center mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">ID tư vấn viên</label>
                                            <input type="text" class="form-control" name="employee_id" placeholder="ID tư vấn viên cho bạn. không bắt buộc">
                                        </div>
                                        <div>
                                            <input type="submit" class="form-control btn btn-login-submit mb-3" value="Tạo tài khoản">
                                        </div>
                                    </form>
                                    <p>Khi nhấn vào nút Tạo tài khoản bạn sẽ chính thức trở thành thành viên của hệ thống StockTraders</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 d-none d-md-block">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" style="float: right; margin: 12px 12px 0 0 " aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    @if (session()->has('errorLogin') || session()->has('successRegister'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var loginButton = document.querySelector('.btn-login');

                var modalId = loginButton.getAttribute('data-bs-target');
                var modal = document.querySelector(modalId);

                if (modal) {
                    var bootstrapModal = new bootstrap.Modal(modal);
                    bootstrapModal.show();
                }
                dialogformlogin(loginButton);
            });
        </script>
    @endif
    @error('password')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var loginButton = document.querySelector('.btn-register');

                var modalId = loginButton.getAttribute('data-bs-target');
                var modal = document.querySelector(modalId);

                if (modal) {
                    var bootstrapModal = new bootstrap.Modal(modal);
                    bootstrapModal.show();
                }
                dialogformlogin(loginButton);
            });
        </script>
    @enderror
</body>
</html>
