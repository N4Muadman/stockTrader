@extends('layout')
@section('content')
    <div class="investment_philosophy">
        <div class="container">
            <h1 class="text-center">Triết Lý Đầu Tư StockTraders</h1>
            <div class="row justify-content-end">
                <div class="col-12 col-md-7">
                    <p class="title">Sóng thị trường</p>
                    <div class="philosophy-content">
                        <p>
                            Quy luật vận động của thị trường có 3 giai đoạn
                            chính: Uptrend, Downtrend và Sideways. Theo thống
                             kê từ hệ thống nhận thấy nếu giao dịch tất cả các giai
                              đoạn này xác suất thành công cao nhất chỉ 50%, 50% còn
                               lại sẽ rơi vào 2 giai đoạn Downtrend Sideways.
                        </p>
                        <p class="quote">
                            &#10077;Do đó, việc tập trung giao dịch khi thị trường tăng giá sẽ
                             giúp cải thiện được xác suất thành công và hạn chế tối đa việc phải
                              cắt lỗ. &#10078;
                        </p>
                        <p>
                            Khi thị trường vào Uptrend thì có đến trên 80% lượng cổ phiếu tăng giá
                             và ngược lại. Tuy nhiên, xác định đâu là thời điểm thị trường vào Uptrend
                              và thời điểm bắt đầu rơi vào Downtrend sẽ được hệ thống StockTraders cảnh
                               báo trước 1 vài phiên.
                        </p>
                    </div>
                    <p class="title">Chọn cổ phiếu</p>
                    <div class="philosophy-content">
                        <p>
                            Khi thị trường xuất hiện sóng nhà đầu tư không biết lựa chọn mã cổ phiếu nào để
                             mua vào vì có hơn 1,500 mã trên 3 sàn HSX, HNX và UPCOM. Nếu chọn phải cổ phiếu
                              không tốt sẽ bị lỗ hoặc lãi không nhiều trong khi thị trường tăng mạnh.
                        </p>
                        <p class="quote">
                            &#10077;StockTraders sở hữu thuật toán tìm kiếm mã cổ phiếu tiềm năng push notification
                             cho nhà đầu tư realtime. &#10078;
                        </p>
                    </div>
                    <p class="title">Chiến lược giải ngân</p>
                    <div class="philosophy-content">
                        <p>
                            Nếu nắm chắc được 2 yếu tố trên sẽ tự tin giao dịch full tài khoản khi thị trường vào Uptrend
                             để tối ưu lợi nhuận và giao dịch thận trọng khi thị trường yếu. Trường hợp không xác định
                              cường độ sóng thị trường có thể giải ngân hạn chế sẽ đạt lợi nhuận thấp khi thị trường tăng
                               mạnh. Ngoài ra, hệ thống còn push noti cảnh báo về tỉ trọng mua cổ phiếu theo từng thời điểm
                                để tối ưu được giá vốn. Chiến lược mua được chia ra 3 lần theo tỉ trọng: 30%, 50% và 20%.
                                 Việc phân bổ tỉ trọng danh mục như thế nào là vấn đề khá nan giải với các bộ phận ra chiến
                                  lược đầu tư trên thị trường hiện nay nhưng StockTraders đã phát triển nó thành thuật toán
                                   tự động cảnh báo qua app cho nhà đầu tư.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <img src="{{ asset('assets/img/trietlydautu.png') }}" style="margin: 4em 0" width="95%" alt="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stock-card">
                                <div class="stock-code">HPG</div>
                                <div class="d-flex align-items-center " style="height: 35px">
                                    <div class="stock-exchange">HSX</div>
                                    <div class="stock-price">26.20 <span class="stock-change">(+1.35%)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stock-card">
                                <div class="stock-code">STB</div>
                                <div class="d-flex align-items-center " style="height: 35px">
                                    <div class="stock-exchange">HSX</div>
                                    <div class="stock-price">32.70 <span class="stock-change">(+2.67%)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stock-card">
                                <div class="stock-code">VPB</div>
                                <div class="d-flex align-items-center " style="height: 35px">
                                    <div class="stock-exchange text-center">HSX</div>
                                    <div class="stock-price text-center">26.20 <span class="stock-change">(+1.35%)</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stock-card">
                                <div class="stock-code">MBB</div>
                                <div class="d-flex align-items-center " style="height: 35px">
                                    <div class="stock-exchange">HSX</div>
                                    <div class="stock-price">26.20 <span class="stock-change">(+1.35%)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
