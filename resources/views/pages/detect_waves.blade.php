@extends('layout')

@section('content')
    <div class="detect-waves">
        <div class="header">
            <div class="container">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="nav d-flex align-items-center">
                        <span class="btn btn-all">Tổng quan</span>
                        <a href="{{ route('category_detect_waves') }}" class="">Danh mục dò sóng</a>
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
                        <p><strong>Phân tích ngành</strong> | Dòng tiền tiếp tục đồ vào cổ phiếu ngành Sản xuất gạch ốp lát & Vật liệu lát</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-result-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-2 d-flex flex-column align-items-md-end align-items-center">
                        <img src="{{ asset('assets/img/icon_msg.svg') }}" alt="">
                        <p class="text-center text-md-end fw-bold fs-6">
                            Thông báo được gửi tới điện thoại
                        </p>
                    </div>
                    <div class="col-12 col-md-4 img_phone d-flex flex-column align-items-center">
                        <p class="fs-1 time">11:16</p>
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
                                <p>Thị trường có dấu hiệu tạo đáy tại 1.021,43</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-6 col-md-2 d-flex flex-column align-items-md-start align-items-center">
                        <img src="{{ asset('assets/img/group-9.svg') }}" alt="">
                        <p class="text-center text-md-start fw-bold fs-6">
                            Sóng ngày 01/11/2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="forecast">
            <div class="container">
                <div class="text-center">
                    <img src="{{ asset('assets/img/may-tinh.svg') }}" class="mb-5" alt="">
                    <p class="fs-1 m-auto" style="max-width: 850px">Hệ thống đưa ra khuyến nghị giao dịch khi có sóng dự đoán</p>
                    <div class="mt-5">
                        <a href="{{ route('signal') }}" class="btn btn-all mb-3 mb-md-0 me-md-4">Xem khuyến nghị</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#register-advise" class="btn btn-all" style="background-color: #233a4f">Đăng kí tư vấn</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="define_waves">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <p class="fs-1 fw-500">Cơ sở xác định sóng</p>
                        <p class="fs-3">1/11/2023</p>
                        <div class="mt-5">
                            <canvas id="myDonutChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 fs-5">
                        <p class="fw-bold mb-4">Hệ thống xác định chân sóng dựa trên triết lý đầu tư của StockTraders</p>
                        <p class="mb-4">Hệ thống StockTraders đã chinh phục được giả định cơ sở đầu tiên của Phân
                            tích kỹ thuật : “Giá dịch chuyển theo xu hướng” mà trước đó chưa có tổ chức
                            nào có thể chỉ ra được xu hướng bắt đầu khi nào và khi nào kết thúc.</p>
                        <p class="mb-4">Hệ thống có thể dự đoán chính xác ngay trong phiên giao dịch các sóng sau:</p>
                        <div class="row text-center justify-content-around mb-4">
                            <div class="col-12 col-md-5 define_waves-profitable">
                                <p class="fw-bold mb-3">1. Chân sóng lớn:</p>
                                <p class=" mb-3">Sóng có thời gian tăng giá kéo dài từ 2-3 tháng hoặc có khi là 6 tháng - 1 năm.</p>
                                <p>Suất sinh lời <span style="color: #E3BA3C" class="fs-1 d-block">40%-50%</span> /Sóng</p>
                            </div>
                            <div class="col-12 col-md-5 define_waves-profitable">
                                <p class="fw-bold mb-3">2. Sóng hồi</p>
                                <p class=" mb-3">Sóng tăng ngắn thời gian tính bằng T+ vài phiên, hoặc từ 2-3 tuần.</p>
                                <p >Suất sinh lời <span style="color: #E3BA3C" class="fs-1 d-block">7-10%</span> /Mỗi nhịp sóng</p>
                            </div>
                        </div>
                        <p>Việc xác định độ mạnh yếu của từng sóng là yếu tố quyết định bạn có đạt được mức lợi nhuận tối đa hay không.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-statistics">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div>
                            <canvas id="myLineChart" width="400" height="200"></canvas>
                        </div>
                        <div class="table-statistics">
                            <div class="category-wave text-center">
                                <ul>
                                    <li>Chờ mua</li>
                                    <li>Mua</li>
                                    <li>Chờ bán</li>
                                    <li>bán</li>
                                </ul>
                            </div>
                            <table class="text-center">
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
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <p class="fs-1 mb-4">Sóng Covid-19</p>
                        <p class="mb-4">
                            Giai đoạn gần cuối tháng 03/2020 tình trạng Covid-19 diễn ra nghiêm trọng và
                            chỉ số VNindex rơi về mốc 650 phiên 24/03 (Biều đồ 1).
                        </p>
                        <p class="mb-4">
                            Nhưng vào lúc 09h31 phút phiên 24/03 hệ thống đã gửi tín hiệu cảnh báo số lượng
                            cổ phiếu Chờ mua tăng lên 117 cảnh báo sắp vào sóng mới (Biểu đồ 2).
                        </p>
                        <p>
                            Sau đó 1 phiên tức vào lúc 10h09 phút ngày 25/03 hệ thống chính thức đưa ra tín
                             hiệu chân sóng lớn được xác nhận. Sóng này chỉ số VNindex tăng từ 650 lên mốc
                             905 ngày 08/06 tăng 255 điểm.
                        </p>
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
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const data = {
          datasets: [{
            label: 'Stock Prices',
            data: [
              { x: '2023-09-28', o: 1200, h: 1220, l: 1150, c: 1180 },
              { x: '2023-09-29', o: 1180, h: 1200, l: 1130, c: 1160 },
              { x: '2023-09-30', o: 1160, h: 1170, l: 1100, c: 1110 },
              // Add more data points
            ],
            type: 'candlestick',
            borderColor: 'black',
            borderWidth: 1,
          },
          {
            label: 'Volume',
            data: [
              { x: '2023-09-28', y: 3000 },
              { x: '2023-09-29', y: 2500 },
              { x: '2023-09-30', y: 4000 },
              // Add more volume data
            ],
            type: 'bar',
            backgroundColor: function(context) {
              const index = context.dataIndex;
              const candle = data.datasets[0].data[index];
              return candle.o > candle.c ? 'red' : 'green';
            }
          }]
        };

        const options = {
          scales: {
            x: {
              type: 'timeseries',
              time: {
                unit: 'day',
                tooltipFormat: 'MMM DD',
              },
              grid: {
                display: false
              }
            },
            y: {
              beginAtZero: false
            }
          }
        };

        const myChart = new Chart(ctx, {
          data: data,
          options: options
        });

        const myDonutChartId = document.getElementById('myDonutChart').getContext('2d');
        const myDonutChart = new Chart(myDonutChartId, {
            type: 'doughnut',
            data: {
                labels: ['Chờ mua', 'Mua', 'Chờ bán', 'Bán'],
                datasets: [{
                    label: 'Data',
                    data: [17, 12, 3, 234],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)', // Chờ mua
                        'rgba(255, 206, 86, 0.6)', // Mua
                        'rgba(255, 99, 132, 0.6)', // Chờ bán
                        'rgba(54, 162, 235, 0.6)', // Bán
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                    ],
                    borderWidth: 1

                }]
            },
            options: {
                responsive: true,
                cutout: '70%',
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    datalabels: {
                        color: '#fff',
                        anchor: 'center',
                        align: 'center',
                        formatter: (value, context) => {
                            return value;
                        }
                    }
                }
            },
            plugins: [ChartDataLabels]
        });

        const myLineChartId = document.getElementById('myLineChart').getContext('2d');
        const gradient = ctx.createLinearGradient(0, 200, 0, 300);
        gradient.addColorStop(0, '#E3BA3C'); // Màu vàng
        gradient.addColorStop(1, '#ffffff'); // Màu xanh lá nhạt

        const myLineChart = new Chart(myLineChartId, {
            type: 'line',
            data: {
                labels: ['7 Jun', '11 Jul', '18 Jul', '8 Aug', '15 Aug', '29 Aug', '12 Sep', '26 Sep', '10 Oct', '24 Oct'],
                datasets: [{
                    label: 'VNIndex',
                    data: [1200, 1250, 1220, 1300, 1280, 1250, 1211.81, 1150, 1100, 1050], // Dữ liệu giá trị
                    borderColor: '#E3BA3C',
                    backgroundColor: gradient, // Màu nền cho đổ bóng
                    fill: true, // Kích hoạt đổ bóng
                    tension: false, // Độ cong của đường
                    borderWidth: 1, // Độ dày của đường
                    pointRadius: 0 // Ẩn các điểm dữ liệu
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: false // Bắt đầu từ giá trị thực tế
                    }
                },
                plugins: {
                    legend: {
                        position: 'top', // Vị trí legend
                    },
                    tooltip: {
                        intersect: false, // Không yêu cầu phải di chuột vào điểm cụ thể
                        mode: 'index', // Lấy giá trị theo chỉ số
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.label}: ${tooltipItem.raw}`; // Hiển thị ngày và giá trị
                            }
                        }
                    }
                },
                hover: {
                    mode: 'index', // Cảm ứng cho tất cả các điểm trên cùng một chỉ số
                    intersect: false // Không cần phải chạm vào điểm
                }
            }
        });
    </script>
@endsection
