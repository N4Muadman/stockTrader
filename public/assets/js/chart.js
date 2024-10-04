function createChart(canvasId, data, categoryId){
    console.log(data);

    const ctx = document.getElementById(canvasId).getContext('2d');

    const category = document.getElementById(categoryId);
    category.href = `chi-tiet-song-nganh/${data.id}`;
    category.innerText = data.category;

    const gradient = ctx.createLinearGradient(0, 200, 0, 300);
    gradient.addColorStop(0, '#E3BA3C'); // Màu vàng
    gradient.addColorStop(1, '#ffffff'); // Màu xanh lá nhạt

    const chart= new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.data.map(item => item.date),
            datasets: [{
                label: '',
                data: data.data.map(item => item.value), // Dữ liệu giá trị
                borderColor: '#E3BA3C',
                backgroundColor: gradient, // Màu nền cho đổ bóng
                fill: true, // Kích hoạt đổ bóng
                borderWidth: 1, // Độ dày của đường
                pointRadius: 0 // Ẩn các điểm dữ liệu
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false // Bắt đầu từ giá trị thực tế
                },
                x: {
                    ticks: {
                        display: false // Ẩn các nhãn trên trục X
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                    // position: 'top', // Vị trí legend
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

}


function createChartDetail(canvasId, data_source){
    const ctx = document.getElementById(canvasId).getContext('2d');

    const gradient = ctx.createLinearGradient(0, 200, 0, 300);
    gradient.addColorStop(0, '#E3BA3C');
    gradient.addColorStop(1, '#f1e0aa');

    const data = data_source.data;

    const pointBackgroundColors = data.map((point, index) => {
        if (index === 0) {
            return 'green';
        }
        return point.value > data[index - 1].value ? 'green' : 'red';
    });

    const chart= new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.map(item => item.date),
            datasets: [{
                label: '',
                data: data.map(item => item.value), // Dữ liệu giá trị
                borderColor: '#E3BA3C',
                backgroundColor: gradient, // Màu nền cho đổ bóng
                fill: true, // Kích hoạt đổ bóng
                borderWidth: 2, // Độ dày của đường
                pointRadius: 8,
                pointBackgroundColor: pointBackgroundColors,
                pointBorderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: false // Bắt đầu từ giá trị thực tế
                },
                x: {
                    ticks: {
                        display: false // Ẩn các nhãn trên trục X
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                    // position: 'top', // Vị trí legend
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
}

function renderCharts(data){
    const chartContainer = document.getElementById("chart-container");

    data.forEach((chart, index) => {
        const div = document.createElement("div");
        div.classList.add("col-6","col-md-2", "mb-4","text-center");
        // Tạo phần tử canvas cho mỗi biểu đồ
        const canvas = document.createElement("canvas");
        canvas.id = `chart-${index}`;

        // Tạo phần tiêu đề cho mỗi biểu đồ
        const title = document.createElement("a");
        title.classList.add("fs-5", "chart_title");
        title.id = `chartTitle-${index}`;

        // Thêm tiêu đề và canvas vào container
        div.appendChild(canvas);
        div.appendChild(title);

        chartContainer.append(div);

        // Tạo biểu đồ với dữ liệu của từng chart
        createChart(canvas.id, chart, title.id);
      });
}
