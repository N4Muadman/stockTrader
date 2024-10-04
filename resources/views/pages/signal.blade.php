@extends('layout')

@section('content')
    <div class="signal">
        <div class="signal-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
                        <h1 class="mb-5">Hệ thống đưa ra khuyến nghị giao dịch khi
                            có sóng dự đoán
                        </h1>
                        <div>
                            <a href="{{ route('detect_waves') }}" class="btn btn-all">Xem sóng</a>
                            <a href="#" class="btn btn-all" style="background-color: #203c58" data-bs-toggle="modal" data-bs-target="#register-advise">Đăng Ký Tư Vấn</a>
                        </div>
                    </div>
                    <div class="col-12 img_phone col-md-4 d-flex flex-column align-items-center">
                        <p class="time">11:16</p>
                        <p class="fs-6">Thứ Tư, 11 tháng 11</p>
                        <div class="notification">
                            <div class="notification-header d-flex justify-content-between">
                                <div class=" d-flex ">
                                    <img width="25" class="me-2" style="border-radius: 8px" src="{{ asset('assets/img/app_ico.png') }}" alt="">
                                    <p>AI STOCKTRADERS</p>
                                </div>
                                <p class="">Bây giờ</p>
                            </div>
                            <div class="mt-1 notification-content">
                                <p>MBB khuyến nghị bán 30% giá 17.15</p>
                            </div>
                        </div>
                        <div class="notification">
                            <div class="notification-header d-flex justify-content-between">
                                <div class=" d-flex ">
                                    <img width="25" class="me-2" style="border-radius: 8px" src="{{ asset('assets/img/app_ico.png') }}" alt="">
                                    <p>AI STOCKTRADERS</p>
                                </div>
                                <p class="">Bây giờ</p>
                            </div>
                            <div class="mt-1 notification-content">
                                <p>ACB khuyến nghị bán 30% giá 21.55</p>
                            </div>
                        </div>
                        <div class="notification mb-5">
                            <div class="notification-header d-flex justify-content-between">
                                <div class=" d-flex ">
                                    <img width="25" class="me-2" style="border-radius: 8px" src="{{ asset('assets/img/app_ico.png') }}" alt="">
                                    <p>AI STOCKTRADERS</p>
                                </div>
                                <p class="">Bây giờ</p>
                            </div>
                            <div class="mt-1 notification-content">
                                <p>TCB khuyến nghị mua 30% giá 27.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 d-flex flex-column justify-content-center ps-md-5">
                        <p class="mb-4 fs-5">Các tín hiệu giao dịch
                            trong phiên ngày</p>
                        <select name="date" style="width: 75%" class="form-select mb-4">
                            <option value="">21/11/2023</option>
                            <option value="">31/03/2023</option>
                            <option value="">11/07/2023</option>
                            <option value="">19/09/2023</option>
                            <option value="">13/06/2024</option>
                            <option value="">12/05/2024</option>
                        </select>
                        <label class="form-label mb-4" for="">Bấm để chọn ngày</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="philosophy">
            <div class="container text-center">
                <p class="fs-1 w-75 m-auto mb-5">
                    Hệ thống xác nhận khuyến nghị giao dịch dựa trên triết
                    lý đầu tư StockTraders và Robot 4.0
                </p>
                <p class="fs-5 w-75 m-auto mb-5">
                    Hệ thống Robot khuyến nghị mua bán cổ phiếu phân tích khoảng
                     hơn 100 mã với tiêu chí đầu vào khắt khe hơn nhiều so với Danh mục dò sóng và số
                     lượng này có thể biến động tuỳ theo xu hướng thị trường
                    </p>
                <p class="fs-5 w-75 m-auto mb-5">
                    Tín hiệu khuyến nghị vào sự thay đổi cung cầu đang diễn ra trên thị trường diễn ra
                    trên thị trường hiện tại và hành vi giao dịch của toàn nhà đầu tư trong quá khứ.
                    Với thuật toán độc quyền và sử dụng máy học dữ liệu StockTraders có thể kiểm soát
                    được xác suất ra quyết định có cao hay không để từ đó có thể đánh giá được độ tin
                    cậy trên mỗi lệnh mua vào.
                </p>
                <a href="{{ route('investment_philosophy') }}" class="btn btn-all">Tìm hiểu thêm</a>
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
        <div class="signal-statistical">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="header-signal-statistical">Tín hiệu</div>
                        <div class="content-signal-statistical">
                            <div class="item-signal active">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span>14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span>14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal ">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span >14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span>14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal ">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span >14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span>14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal ">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span >14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span>14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                            <div class="item-signal ">
                                <img src="{{ asset('assets/img/buy.png') }}" class="ms-5" width="30px"  height="20px" alt="">
                                <div class="ms-5">
                                    <p class="fs-5 mb-3">PVS khuyến nghị mua 30% giá 33.30</p>
                                    <p><i class="fa-solid fa-clock"></i> <span >14:22 | 01/11/2023</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="header-signal-statistical">Chi tiết</div>
                        <div>
                            <div id="chart_detail_signal"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-statistics">
            <div class="table-statistics">
                <div class="container">
                    <div class="category-wave text-center m-auto w-75">
                        <ul>
                            <li>Mua</li>
                            <li>Nắm giữ</li>
                            <li>bán</li>
                        </ul>
                    </div>
                    <table class="text-center m-auto w-75">
                        <thead>
                            <th>Cổ phiếu</th>
                            <th>Tỷ trọng</th>
                            <th>Tin cậy</th>
                            <th>Giá mua</th>
                            <th>Giá bình quân</th>
                            <th>Giá hiện tại</th>
                            <th>Thay đổi</th>
                            <th>Lãi/lỗ</th>
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
                </div>
            </div>
        </div>
    </div>

    {{-- dialog-register-advise --}}
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

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var ohlcData = [
          {
            x: new Date(2023, 8, 21),  // Lưu ý: Tháng trong JavaScript bắt đầu từ 0, nên tháng 9 là 8
            y: [38.67, 38.96, 37.49, 37.69]  // Open, High, Low, Close
          },
          {
            x: new Date(2023, 8, 22),
            y: [37.79, 38.08, 35.24, 35.61]
          },
          {
            x: new Date(2023, 8, 23),
            y: [37.79, 38.08, 35.24, 36.61]
          },
          {
            x: new Date(2023, 8, 24),
            y: [37.79, 38.08, 35.24, 35.31]
          },
          {
            x: new Date(2023, 8, 20),
            y: [37.79, 38.08, 35.24, 38.31]
          },
          // Thêm các điểm dữ liệu khác...
        ];

        var volumeData = [
          {
            x: new Date(2023, 8, 21),
            y: 400
          },
          {
            x: new Date(2023, 8, 22),
            y: 500
          },
          {
            x: new Date(2023, 8, 23),
            y: 77
          },
          {
            x: new Date(2023, 8, 24),
            y: 112
          },
          {
            x: new Date(2023, 8, 20),
            y: 770
          },
          // Thêm các điểm dữ liệu khác...
        ];

        var options = {
          chart: {
            type: 'candlestick',
            height: 350,
            background: '#000000',  // Nền đen
            toolbar: {
              show: false  // Ẩn toolbar
            }
          },
          series: [{
            name: 'Candlestick',
            color: '#EF403C',
            data: ohlcData
          }, {
            name: 'Volume',
            type: 'bar',
            data: volumeData,
            yaxisIndex: 1,
          }],
          xaxis: {
            type: 'datetime',
            labels: {
              style: {
                colors: '#FFFFFF'
              }
            }
          },
          yaxis: [{
            title: {
              style: {
                color: '#FFFFFF'
              }
            },
            labels: {
              style: {
                colors: '#FFFFFF'
              }
            },
            tooltip: {
              enabled: true
            },
            min: 30

          }, {
            opposite: true,
            title: {
              style: {
                color: '#FFFFFF'
              }
            },
            labels: {
              style: {
                colors: '#FFFFFF'
              }
            },
            tooltip: {
              enabled: true
            },
            max: 2000,
            min: 0
          }],
          plotOptions: {
            candlestick: {
              colors: {
                upward: '#00B746',
                downward: '#EF403C'
              },
              wick: {
                useFillColor: true
              }
            },
            bar: {
              colors: {
                ranges: [{
                  from: 0,
                  to: 600,
                  color: '#FF0000'
                }],
              },
              columnWidth: '50%'
            }
          },
          grid: {
            borderColor: '#444444'
          }
        };

        var chart = new ApexCharts(document.querySelector("#chart_detail_signal"), options);
        chart.render();
    </script>

@endsection
