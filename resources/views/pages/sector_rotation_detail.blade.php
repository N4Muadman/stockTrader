@extends('layout')
@section('content')
    <div class="sector_rotation_detail">
        <div class="container">
            <div class="chart">
                <div class="row ">
                    <div class="col-9">
                        <h1 class="w-75 m-auto text-center mb-5">Dòng tiền tiếp tục đồ vào cổ phiếu ngành {{ $sector['category'] }}</h1>
                        <div>
                            <canvas id="chart_detail" class="mt-5"></canvas>
                        </div>
                    </div>
                    <div class="col-3 share_detail">
                        <p class="fs-5 text-center">Cổ phiếu ngành
                            Ngân hàng thương mại truyền thống</p>
                        <table class="w-100">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th class="text-end">Ngành</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wave_statistics as $item)
                                    <tr>
                                        <td>{{ $item['share'] }} <span class="d-block color-grey">Giá</span></td>
                                        <td class="text-end">{{ $item['category'] }} <img src="{{ asset('assets/img/hold.png') }}" style="margin-bottom: 5px; margin-left: 7px;" width="20px" alt=""> <span class="d-block color-grey">{{ $item['price'] }} <span style="color: red">-{{ $item['percent-incre-decre'] }}</span></span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="chart_outstanding text-center">
                <p class="fs-1 m-5">Các sóng ngành nổi bật</p>
                <div class="row">
                    <div class="col-6 col-md-3">
                        <canvas id="chart_outstanding_1" class="mb-2"></canvas>
                        <a id="title_outstanding_1" class="fs-5 chart_title"></a>
                    </div>
                    <div class="col-6 col-md-3">
                        <canvas id="chart_outstanding_2" class="mb-2"></canvas>
                        <a id="title_outstanding_2" class="fs-5 chart_title"></a>
                    </div>
                    <div class="col-6 col-md-3">
                        <canvas id="chart_outstanding_3" class="mb-2"></canvas>
                        <a id="title_outstanding_3" class="fs-5 chart_title"></a>
                    </div>
                    <div class="col-6 col-md-3">
                        <canvas id="chart_outstanding_4" class="mb-2"></canvas>
                        <a id="title_outstanding_4" class="fs-5 chart_title"></a>
                    </div>
                </div>
                <a href="{{ route('sector_rotation') }}" class="btn btn-all m-5">Xem thêm</a>
            </div>
        </div>
    </div>


    <script src="{{ asset("assets/js/chart.js") }}"></script>
    <script>
        const sector = <?php echo json_encode($sector); ?>;
        const sector_outstanding = <?php echo json_encode($sectorOutstanding);?>;
        console.log();


        createChartDetail('chart_detail', sector);
        createChart('chart_outstanding_1', sector_outstanding[0], 'title_outstanding_1');
        createChart('chart_outstanding_2', sector_outstanding[1], 'title_outstanding_2');
        createChart('chart_outstanding_3', sector_outstanding[2], 'title_outstanding_3');
        createChart('chart_outstanding_4', sector_outstanding[3], 'title_outstanding_4');
    </script>
@endsection
