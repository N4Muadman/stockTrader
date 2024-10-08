@extends('layout')

@section('content')
    <div class="introduce-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 d-flex flex-column align-items-start justify-content-around">
                    <p class="title">Về chúng tôi</p>
                    <h1 class="mb-5 mb-md-0">Biến đầu từ chứng khoán trở nên đơn giản hơn</h1>
                    <p class="mb-5 mb-md-0">
                        Được thành lập từ năm 2013, StockTraders là đơn vị tiên phong trong
                         lĩnh vực cung cấp hệ thống chiến lược đầu tư cổ phiếu tại Việt nam,
                          với triết lý áp dụng công nghệ 4.0, các thuật toán độc quyền vào phân
                           tích đầu tư, đưa ra các khuyến nghị giúp khách hàng giải quyết được bài toán nan giải.
                    </p>
                    <a href="{{ route('investment_philosophy') }}" class="mb-5 mb-md-0 btn btn-all">Đầu tư thế nào để đem lại lời nhuận</a>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('assets/img/login.png') }}" class="w-75" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>

    <div class="service-products text-center">
        <div class="container">
            <p class="fw-bold mb-5">Sản phẩm dịch vụ</p>
            <h1 class="m-auto" style="max-width: 600px">Cung cấp hệ thống tín hiệu khuyến nghị mua bán cổ phiếu Việt Nam</h1>
            <div class="row icon-list justify-content-evenly">
                <div class="col-10 col-md-3 icon-service-products mb-5 mb-md-0 ">
                    <div class="img">
                        <img src="{{ asset('assets/img/gioithieu_icon1.svg') }}" alt="" srcset="">
                    </div>
                    <p>Giúp nhà đầu đưa ra quyết định giao dịch trên thị trường đúng thời điểm</p>
                </div>
                <div class="col-10 col-md-3 icon-service-products mb-5 mb-md-0 ">
                    <div class="img">
                        <img src="{{ asset('assets/img/gioithieu_icon2.svg') }}" alt="" srcset="">
                    </div>
                    <p>Tư vấn chiến lược chọn mã cổ phiếu tiềm năng</p>
                </div>
                <div class="col-10 col-md-3 icon-service-products mb-5 mb-md-0 ">
                    <div class="img">
                        <img src="{{ asset('assets/img/gioithieu_icon3.svg') }}" alt="" srcset="">
                    </div>
                    <p>Kiểm soát rủi ro bằng cách phân bổ vốn đầu tư hợp lý</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 d-flex justify-content-center mb-5 mb-md-0 ">
                    <img src="{{ asset('assets/img/gioithieu_2.svg') }}" width="90%" alt="" srcset="">
                </div>
                <div class="col-12 col-md-5 d-flex align-items-center">
                    <h1 class="text-start">Hỗ trợ đa nền tảng, giúp cập nhật khuyến nghị một cách nhanh chóng</h1>
                </div>
            </div>
            <div class="row icon-list-bottom">
                <div class="col-12 col-md-2 p-4">
                    <div class="icon-bottom">
                        <i class="fa-solid fa-arrow-up"></i>
                        <span>7 - 10%</span>
                    </div>
                    <p>Lợi nhuận sóng hồi trên 1 sóng</p>
                </div>
                <div class="col-12 col-md-2 p-4">
                    <div class="icon-bottom">
                        <i class="fa-solid fa-arrow-up"></i>
                        <span>30%</span>
                    </div>
                    <p>Lợi nhuận sóng lớn trên 1 sóng</p>
                </div>
                <div class="col-12 col-md-2 p-4">
                    <div class="icon-bottom">
                        <i class="fa-solid fa-arrow-up"></i>
                        <span>90%</span>
                    </div>
                    <p>Tỉ lệ chính xác</p>
                </div>
                <div class="col-12 col-md-2 p-4">
                    <div class="icon-bottom">
                        <i class="fa-solid fa-arrow-up"></i>
                        <span>11</span>
                    </div>
                    <p>Năm hoạt động</p>
                </div>
                <div class="col-12 col-md-2 p-4">
                    <div class="icon-bottom">
                        <i class="fa-solid fa-arrow-up"></i>
                        <span>80%</span>
                    </div>
                    <p>Tỉ lệ khách hàng gia hạn</p>
                </div>
            </div>
        </div>
    </div>

    <div class="philosophy-introduce">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-5 d-flex flex-column align-md-items-end align-items-center justify-content-around">
                    <h1 class="text-center mb-3 text-md-end w-md-75">Triết lý đầu tư của chúng tôi</h1>
                    <p class="text-md-end mb-3 w-md-75 text-center">StockTraders chú trọng giao dịch lướt sóng hơn là đầu tư cổ phiếu cơ bản trung dài hạn</p>
                    <a href="{{ route('investment_philosophy') }}" class="btn text-center text-md-start btn-all">Tìm hiểu thêm</a>
                </div>
                <div class="col-12 col-md-5">
                    <div class="philosophy-introduce-icon-item d-flex ">
                        <img src="{{ asset('assets/img/muavao.svg') }}" alt="">
                        <div>Mua vào tại chân sóng</div>
                    </div>
                    <div class="philosophy-introduce-icon-item d-flex ">
                        <img src="{{ asset('assets/img/gioithieu_icon5.svg') }}" alt="">
                        <div>Mua vào tại chân sóng</div>
                    </div>
                    <div class="philosophy-introduce-icon-item d-flex ">
                        <img src="{{ asset('assets/img/gioithieu_icon6.svg') }}" alt="">
                        <div>Mua vào tại chân sóng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="difference-introduce">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 p-5" >
                    <img src="{{ asset("assets/img/gioithieu_3.svg") }}" width="90%" alt="">
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                    <h1 class="mb-4">StockTraders tạo sự khác biệt</h1>
                    <p  class="mb-4">StockTraders Tự hòa là hệ thống đầu tiền ở Việt Nam xác định được chân sóng và đỉnh sóng của thị
                        trường và khuyến nghị mua bán cổ phiếu tự động bằng Robot.
                    </p>
                    <div  class="mb-4">
                        <a href="{{ route('investment_philosophy') }}" class="btn btn-all">Tìm hiểu thêm</a>
                    </div>
                    <p  class="mb-4">Hệ thống phân tích ứng dụng bằng công nghệ AI, phân tích kỹ thuật kết hợp với Big Data.</p>
                    <p>Chiến lược giản ngân tự động, nhà đầu tư không cần mất nhiều thời gian để theo dõi thị trường</p>
                    {{-- <div>
                        <button></button>
                        <button></button>
                        <button></button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="customer">
        <div class="container">
            <h1 class="text-center mb-5">Khách hàng và StockTraders</h1>
            <div class="row">
                <div class="col-12 col-md-6 d-md-flex mb-5 mb-md-0">
                    <img src="{{ asset('assets/img/customer.png') }}" class="img-customer" alt="">
                    <div class="text-customer">
                        Đã sử dụng StockTraders thời gian dài nhận thấy hệ thống giúp
                         nhìn thấy được ý đồ của nhà tạo lập thị trường. Hệ thống đã
                          hiệu quả hơn cách đây vài năm, cảnh báo cụ thể hơn, sớm hơn
                          cho nhà đầu tư và giúp việc đầu tư mình nhịp nhàng hơn và
                          tâm lý tốt hơn rất nhiều
                    </div>
                </div>
                <div class="col-12 col-md-6 d-md-flex">
                    <img src="{{ asset('assets/img/customer2.png') }}"  class="img-customer" alt="">
                    <div class="text-customer">
                        Sau khi cắt lỗ bởi các sự kiện HD981, Đại Án Ngân Hàng,...
                        Tôi bắt đầu sử dụng StockTraders từ đó tôi thay đổi hoàn toàn
                         chiến lược đầu tư và quyết định gắn bó lâu dài với StockTraders.
                         Đã kiểm chứng qua nhiều chân sóng, tài sản tăng trên 300%. Tôi tin
                         StockTraders sẽ là công cụ thay đổi phương thức đầu tư cả cá nhân
                         và giới đầu tư tài chính chuyên nghiệp.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="statistical-introduce">
        <div class="container">
            <h1 class="m-auto text-center mb-5" style="max-width: 700px">
                Theo thống kê từ StockTraders, giao dịch tại chân sóng có xác suất thắng trên 80%
            </h1>
            <div class="text-center mb-5">
                <a href="{{ route('investment_philosophy') }}" class="btn btn-all">Tìm hiểu thêm</a>
            </div>
            <p  class="text-center mb-5">Sản phẩm khuyến nghị không dừng lại ở mức độ tham khảo mà cần phải tuân thủ tín hiệu để đạt được hiệu quả đầu tư tốt nhất</p>
        </div>
    </div>
@endsection
