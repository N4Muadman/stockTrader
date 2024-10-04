@extends('layout')

@section('content')
    <div class="sector_rotation">
        <div class="header">
            <div class="container d-flex flex-column align-items-center">
                <div class="input-container">
                    <form action="{{ route('sector_rotation') }}" method="get">
                        <span class="icon-search"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="search" class="custom-input" placeholder="Nhập tên ngành để tìm kiếm"/>
                        <button class="custom-button">Tra cứu</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <h1 class="text-center mb-5">Top 5 ngành chi phối thị trường mạnh nhất</h1>
                <div class="row mb-5 text-center text-md-start">
                    <div class="col-12 col-md-6 mb-4">
                        <h4 id="category1"></h4>
                        <canvas id="chart1"></canvas>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row flex-column">
                            <div class="col-12 d-flex mb-4 mb-md-0">
                                <div class="col-6">
                                    <h4 id="category2"></h4>
                                    <canvas id="chart2"></canvas>
                                </div>
                                <div class="col-6">
                                    <h4 id="category3"></h4>
                                    <canvas id="chart3"></canvas>
                                </div>
                            </div>
                            <div class="col-12 d-flex">
                                <div class="col-6">
                                    <h4 id="category4"></h4>
                                    <canvas id="chart4"></canvas>
                                </div>
                                <div class="col-6">
                                    <h4 id="category5"></h4>
                                    <canvas id="chart5"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 >Những ngành khác</h4>
                <div class="row" id="chart-container">
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset("assets/js/chart.js") }}"></script>
    <script>
        const sectorTop5 = <?php echo json_encode($sectorTop5)?>;
        const sectorOther = <?php echo json_encode($sectorOther)?>;
        createChart('chart1', sectorTop5[0], 'category1');
        createChart('chart2', sectorTop5[1], 'category2');
        createChart('chart3', sectorTop5[2], 'category3');
        createChart('chart4', sectorTop5[3], 'category4');
        createChart('chart5', sectorTop5[4], 'category5');
        renderCharts(sectorOther);
    </script>
@endsection
