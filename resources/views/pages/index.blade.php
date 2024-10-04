@extends('layout')

@section('content')
    <div class="intro-home">
        <div class="container">
            <div class="row" style="padding: 70px 0">
                <div class="col-12 col-md-6">
                    <div class="text-intro-home">
                        <h1 style="max-width: 550px; padding-bottom: 40px;">BIẾN ĐẦU TƯ CHỨNG KHOÁN TRỞ NÊN ĐƠN GIẢN HƠN</h1>
                    </div>
                    <p>Giúp nhà đầu tư bận rộn vừa có thể kiếm tiền từ kênh đầu tư chứng khoán vừa vẫn có thể làm tốt công việc chuyên môn của mình.</p>
                    <button class="btn btn-register-home" data-bs-toggle="modal" data-bs-target="#register-advise">Đăng Ký Tư Vấn</button>
                    <div class="intro-home-icon">
                        <div class="img">
                            <img src="{{ asset("assets/img/home_icon1.svg") }}" alt="" srcset="">
                            <p>Danh Mục Hiệu Quả</p>
                        </div>
                        <div class="img">
                            <img src="{{ asset("assets/img/home_icon2.svg") }}" alt="" srcset="">
                            <p>Khuyến Nghị Giao Dịch Realtime</p>
                        </div>
                        <div class="img">
                            <img src="{{ asset("assets/img/home_icon3.svg") }}" alt="" srcset="">
                            <p>Chiến Lược Giải Ngân Tự Động</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <div class="home-img">
                        <img src="{{ asset('assets/img/home-top.png') }}" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ai-home">
        <div class="container">
            <div class="title text-center">
                <h1 >Công Nghệ AI</h1>
            </div>
            <div class="text text-center">
                <p>
                    Robot 4.0 được xây dựng từ năm 2010 phân tích và giúp nhà đầu tư
                    đưa ra quyết định đầu tư dựa trên Big Data tiết kiệm thời gian,
                    loại bỏ yếu tố cảm xúc
                </p>
            </div>
            <div class="icon d-flex justify-content-center">
                <div class="d-flex me-5">
                    <img src="{{ asset('assets/img/dugout.svg') }}" alt="" srcset="">
                    <div>
                        <p class="header-icon">Đã Phát Hiện Được</p>
                        <p ><span class="number">54</span> <span>Đợt Sóng Thị Trường</span></p>
                    </div>
                </div>
                <div class="d-flex me-5">
                    <img src="{{ asset('assets/img/accuracy.svg') }}" alt="" srcset="">
                    <div >
                        <p class="header-icon">Độ chính xác</p>
                        <p><span class="number">90</span> %</p>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="{{ asset('assets/img/rate.svg') }}" alt="" srcset="">
                    <div>
                        <p class="header-icon">Tỉ suất lợi nhuận</p>
                        <p><span class="number">35</span> %</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="system-waves">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 d-flex flex-column align-items-md-end justify-content-around">
                    <div class="title col-md-8 mb-5 mb-md-0">
                        <h1 class="text-md-end text-center">Hệ thống báo sóng thị trường</h1>
                    </div>
                    <div class="text mb-5 mb-md-0">
                        <p class="text-md-end">
                            StockTraders là đơn vị tiên phong trong việc xác định được chân sóng,
                             đỉnh sóng thị trường nhờ hệ thống dò sóng thị trường. Cụ thể hệ thống
                              phát hiện được khi nào thị trường sẽ bắt đầu tăng hay đi xuống trước 1-2 phiên giao dịch.
                        </p>
                    </div>
                    <div class="btn mb-5 mb-md-0">
                        <a href="#" class="btn btn-system-waves">Tìm hiểu thêm</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex mb-md-0 mb-5 justify-content-center">
                    <img src="{{ asset('assets/img/phone4.png') }}" width="230" alt="" srcset="">
                </div>
                <div class="col-12 col-md-4 system-waves-right d-flex flex-column align-items-md-start align-items-center justify-content-around">
                    <img class="mb-md-0 mb-5" src="{{ asset('assets/img/dugout_1.svg') }}" alt="" srcset="">
                    <div class="text">
                        <p class="col-md-6 text-md-start text-center mb-md-0 mb-5">
                            HỆ THỐNG ĐÃ PHÁT HIỆN
                            ĐƯỢC CHÍNH XÁC
                            SÓNG CÁC NGÀY
                        </p>
                    </div>
                    <ul class="date">
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                        <li><a href="#">01/11/2023</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="recom-system">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-md-0 mb-5 d-flex justify-content-center">
                    <img src="{{ asset('assets/img/phone3.svg') }}" alt="" >
                </div>
                <div class="col-12 col-md-4 d-flex flex-column align-items-md-start justify-content-around">
                    <div class="title col-md-8 mb-5 mb-md-0">
                        <h1 class="text-md-start text-center">Hệ thống
                            khuyến nghị giao dịch</h1>
                    </div>
                    <div class="text mb-5 mb-md-0">
                        <p class="text-md-start text-center">
                            StockTraders gửi tín hiệu giao dịch Real Time tới điện thoại của bạn,
                            giúp bạn giải quyết được câu hỏi: Nên mua cổ phiếu nào, giá bao nhiêu và
                            tỉ trọng bao nhiêu % khi có chân sóng xuất hiện.
                        </p>
                    </div>
                    <div class="btn mb-5 mb-md-0">
                        <a href="#" class="btn btn-recom-system">Xem khuyến nghị</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collaborator">
        <div class="container">
            <h1 class="text-center mb-5">Cộng tác viên</h1>
            <div class="row">
                <div class="col-12 col-md-3 collaborator-item">
                    <img src="{{ asset('assets/img/stocktraders-ctv-1.svg') }}" alt="" srcset="">
                    <p>Nguồn khách hàng</p>
                </div>
                <div class="col-12 col-md-3 collaborator-item">
                    <img src="{{ asset('assets/img/stocktraders-ctv-2.svg') }}" alt="" srcset="">
                    <p>Chăm sóc khách hàng</p>
                </div>
                <div class="col-12 col-md-3 collaborator-item">
                    <img src="{{ asset('assets/img/stocktraders-ctv-3.svg') }}" alt="" srcset="">
                    <p>Đào tạo chuyên môn</p>
                </div>
                <div class="col-12 col-md-3 collaborator-item">
                    <img src="{{ asset('assets/img/stocktraders-ctv-4.svg') }}" alt="" srcset="">
                    <p>Gia tăng thu nhập</p>
                </div>
            </div>
            <div class="btn-collaborator">
                <a href="#" class="btn">Tìm hiểu thêm</a>
            </div>
        </div>
    </div>
    <div class="investment-philosophy">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 d-flex flex-column justify-content-around">
                    <h1 class="text-center text-md-start">Triết lý đầu tư</h1>
                    <div class="text">
                        <p class="text-center text-md-start ">
                            Triết lý đầu tư được xây dựng dựa trên thuật toán độc quyền từ năm
                             2010 là cơ sở để xác định sóng thị trường và đưa ra khuyến nghị giao
                              dịch cho nhà đầu tư được tin tưởng bởi hơn 10.000 khách hàng và 20 đối tác.
                        </p>
                    </div>
                    <div class="btn-philosophy">
                        <a href="#" class="btn btn-all">Tìm hiểu thêm</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-flex justify-content-center">
                    <img src="{{ asset('assets/img/tldt.svg') }}" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <div class="development-roadmap">
        <div class="container">
            <h2 class="text-center mb-5">Lộ trình phát triền của ....</h2>
            <div class="stage d-flex justify-content-center">
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">2010</div>
                        <div class="mid">
                            <div class="number">1</div>
                            <div class="step"></div>
                        </div>
                        <div class="bottom">BẮT ĐẦU</div>
                    </div>
                </div>
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">2012</div>
                        <div class="mid">
                            <div class="number">2</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom">sản phẩm đầu tiên</div>
                </div>
                </div>
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">2010</div>
                        <div class="mid">
                            <div class="number">3</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">hệ thống báo sóng</div>
                </div>
                </div>
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">2010</div>
                        <div class="mid">
                            <div class="number">4</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">ra mắt app</div>
                </div>
                </div>
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">2010</div>
                        <div class="mid">
                            <div class="number">5</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">ra mắt ai</div>
                </div>
                </div>
                <div class="stage-parent-item d-none d-md-block">
                    <div class="stage-item">
                        <div class="top">24/03/2020</div>
                        <div class="mid">
                            <div class="number">6</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">nâng cấp ai hoàn chỉnh</div>
                </div>
                </div>
                <div class="stage-parent-item">
                    <div class="stage-item">
                        <div class="top">11/2020</div>
                        <div class="mid">
                            <div class="number">7</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">nâng cấp toàn bộ UI/UX</div>
                </div>
                </div>
                <div class="stage-parent-item">
                    <div class="stage-item">
                        <div class="top">2023</div>
                        <div class="mid">
                            <div class="number">8</div>
                            <div class="step"></div>
                        </div>
                    <div class="bottom  ">quản lý quỹ</div>
                </div>
                </div>
                <div class="stage-parent-item">
                    <div class="stage-item">
                        <div class="top">2025</div>
                        <div class="mid">
                            <div class="number">9</div>
                        </div>
                        <div class="bottom">niêm yết</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="register-advise" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl justify-content-center modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 login-left text-center text-white">
                            <div class="header-login-left">
                                <h2>Đăng Ký Tư Vấn</h2>
                            </div>
                            <div class="img">
                                <img src="{{ asset('assets/img/dang-ky-tu-van.png') }}" alt="" srcset="">
                            </div>
                            <div class="mb-5 mt-5">
                                <p>Tải App StockTranders và đăng kí dùng thử để xem Realtime</p>
                            </div>
                            <div class="footer-login-left">
                                <img src="{{ asset('assets/img/appstore.png') }}" width="180" class="me-3" alt="" srcset="">
                                <img src="{{ asset('assets/img/chplay.png') }}" width="180" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-sm-5 register-advise-right">
                            <div class="mt-5 mb-4">
                                <p>Nhập thông tin và Tư Vấn Viên sẽ liên hệ với bạn</p>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-lable">Họ và tên</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Họ và tên đầy đủ" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-lable">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone_number" placeholder="VD: 090xxxxxxxx..." required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-lable">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="info@idai.vn" required>
                            </div>
                            <div class="mb-5 d-md-flex justify-content-md-between">
                                <div class="col-12 col-md-6">
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="col-12 col-md-5">
                                    <select name="time" class="form-select">
                                        <option value="">16:00</option>
                                        <option value="">16:15</option>
                                        <option value="">16:30</option>
                                        <option value="">16:45</option>
                                        <option value="">17:00</option>
                                        <option value="">17:15</option>
                                        <option value="">17:30</option>
                                        <option value="">17:45</option>
                                        <option value="">18:00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn form-control btn-all">Đăng ký</button>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" style="float: right; margin: 12px 12px 0 0 " aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
