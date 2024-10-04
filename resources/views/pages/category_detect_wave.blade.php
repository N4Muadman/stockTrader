@extends('layout')

@section('content')
    <div class="category-detect-waves">
        <div class="header">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="nav d-flex align-items-center">
                        <a href="{{ route('detect_waves') }}" class="">Tổng quan</a>
                        <span class="btn btn-all">Danh mục dò sóng</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result">
            <div class="container">
                <div class="d-flex ">
                    <img src="{{ asset('assets/img/dugout.svg') }}" class="me-md-5 me-3" alt="">
                    <div class="text ms-md-5">
                        <p>14:30 | 01/11/2023</p>
                        <p><strong>Diễn biến thị trường</strong> | VNindex 1,030.09(1.90;+0.18%). Thị trường hồi phục và chờ mua tăng tốt trong phiên hôm nay</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="meaning text-center">
            <div class="container">
                <h1 class="mb-5">Ý nghĩa danh mục dò sóng</h1>
                <p class="fs-5 mb-4 m-auto w-75">
                    Danh mục dò sóng là danh mục dùng để xác định sóng thị trường gồm 368
                    mã cổ phiếu đạt tiêu chí về thanh khoản trên 3 sàn HSX, HNX và UPCOM.
                    Lưu ý: Danh mục này không có mục đích khuyến nghị mua hay bán cổ phiếu.
                </p>
                <p class="fs-5 m-auto w-75">
                    Danh mục này có số lượng không cố định mà thay đổi theo tình hình biến
                    động của thị trường từng giai đoạn khác nhau. Số lượng cổ phiếu sẽ tự động
                    được thêm vào hoặc bị loại ra theo tiêu chí hệ thống để đảm bảo danh mục đủ
                    lớn để mô phỏng xu hướng chung toàn thị trường chuẩn xác nhất.
                </p>
            </div>
        </div>
        <div class="wave-statistics">
            <div class="table-statistics">
                <div class="container">
                    <div class="category-wave text-center m-auto w-75">
                        <ul>
                            <li>Chờ mua</li>
                            <li>Mua</li>
                            <li>Chờ bán</li>
                            <li>bán</li>
                        </ul>
                    </div>
                    <table class="text-center m-auto w-75">
                        <thead>
                            <th>Cổ phiếu</th>
                            <th>Giá</th>
                            <th>Độ tin cậy</th>
                            <th>Beta</th>
                            <th>Khối lượng</th>
                            <th>Tăng/giảm</th>
                            <th>%Tăng/giảm</th>
                        </thead>
                        <tbody>
                            @foreach ($wave_statistics as $it)
                                <tr>
                                    <td>{{ $it['share'] }}</td>
                                    <td>{{ $it['price'] }}</td>
                                    <td>{{ $it['reliability'] }}%</td>
                                    <td>{{ $it['beta'] }}</td>
                                    <td>{{ $it['volume'] }}</td>
                                    <td><span class="incre-decre">+{{ $it['incre-decre'] }}</span></td>
                                    <td><span class="incre-decre">+{{ $it['percent-incre-decre'] }}%</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="reliable_density w-75">
                        <p class="fs-5 mb-5">Tỉ trọng tin cậy</p>
                        <p class="fs-5">Biểu đồ tin cậy này chỉ có ý nghĩa tại phiên xác nhận chân sóng khi số lượng cổ phiếu
                             Mua đạt từ 25 mã trở lên. Tại phiên có từ 25 mã Mua trở lên mà độ tin cậy 100% chiếm
                              từ 70% trở lên được xác nhận là chân sóng lớn, dưới 70% là sóng hồi. Sóng hồi có 2
                              loại: Sóng hồi Uptrend và sóng hồi Downtrend.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="banner-download-app">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                        <p class="fs-1 mb-5">Tải App StockTraders và đăng ký dùng thử để xem Realtime</p>
                        <div>
                            <img src="{{ asset('assets/img/appstore.png') }}" class="mb-3 mb-md-0" width="200" alt="">
                            <img src="{{ asset('assets/img/chplay.png') }}" width="200" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-5 mt-md-0">
                        <img src="{{ asset("assets/img/gioithieu_4.png") }}" width="95%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
