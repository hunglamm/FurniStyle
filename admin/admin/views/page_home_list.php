<!-- Main Content Section -->
<div class="p-5 vh-100">
    <!-- Summary Cards -->
    <div class="row mb-4">
        <!-- Tài khoản Card -->
        <div class="col-md-3">
            <div class="card gradient-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        <h5 class="card-title">Tài khoản</h5>
                        <p class="card-text"><?php echo $count_user; ?></p>
                    </div>
                    <div class="text-right">
                        <i class="fas fa-users fa-3x icon"></i>
                    </div>
                </div>
                <div class="additional-info">
                    <a href="?mod=user&act=list">
                        <div class="dark-bg">
                            <p class="text-white px-2">Chi tiết</p>
                            <i class="fa-solid fa-circle-arrow-right text-white"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Loại hàng Card -->
        <div class="col-md-3">
            <div class="card gradient-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        <h5 class="card-title">Loại hàng</h5>
                        <p class="card-text"><?php echo $count_cate; ?></p>
                    </div>
                    <div class="text-right">
                        <i class="fa-brands fa-dropbox fa-3x icon"></i>

                    </div>
                </div>
                <div class="additional-info">
                    <a href="?mod=category&act=list">
                        <div class="dark-bg">
                            <p class="text-white px-2">Chi tiết</p>
                                      <i class="fa-solid fa-circle-arrow-right text-white"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Bình luận Card -->
        <div class="col-md-3">
            <div class="card gradient-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        <h5 class="card-title">Bình luận</h5>
                        <p class="card-text"><?php echo $count_cmt; ?></p>
                    </div>
                    <div class="text-right">
                        <i class="fa-solid fa-comments fa-3x icon"></i>

                    </div>
                </div>
                <div class="additional-info">
                    <a href="?mod=feedback&act=list">
                        <div class="dark-bg">
                            <p class="text-white px-2">Chi tiết</p>
                                      <i class="fa-solid fa-circle-arrow-right text-white"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Đơn hàng Card -->
        <div class="col-md-3">
            <div class="card gradient-card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        <h5 class="card-title">Đơn hàng</h5>
                        <p class="card-text"><?php echo $count_order; ?></p>
                    </div>
                    <div class="text-right">
                        <i class="fa-solid fa-truck-fast fa-3x icon"></i>
                    </div>
                </div>
                <div class="additional-info">
                    <a href="?mod=order&act=list">
                        <div class="dark-bg">
                            <p class="text-white px-2">Chi tiết</p>
                                      <i class="fa-solid fa-circle-arrow-right text-white"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Containers for Product Ratio and Top Selling Products -->
    <div class="row">
        <!-- Product Ratio by Category -->
        <div class="col-md-6">
            <div class="card  background-chart-table">
                <div class="card-body">
                    <h5 class="card-title">Tỷ lệ hàng hóa</h5>
                    <canvas id="productRatioChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Top Selling Products -->
        <div class="col-md-6">
            <div class="card background-chart-table">
                <div class="card-body">
                    <h4 class="card-title text-end"><i class="fa-solid fa-ranking-star"></i> Top sản phẩm bán chạy nhất</h5>
                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-white">STT</th>
                                <th class="text-white">Tên sản phẩm</th>
                                <th class="text-white">Bán được</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $count = 0;
                            foreach ($top_selling as $product) : ?>
                                <tr>
                                <td><?php $count++; ?></td>
                                    <td class="text-white"><?php echo $product['tensanpham']; ?></td>
                                    <td class="text-white"><?php echo $product['totalSold']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('productRatioChart').getContext('2d');
    var productRatioChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode(array_column($ratio_product, 'tendanhmuc')); ?>,
            datasets: [{
                data: <?php echo json_encode(array_column($ratio_product, 'productCount')); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                ],
            }],
        },
        options: {
            plugins: {
                legend: {
                    labels: {
                        color: 'white',
                    }
                }
            }
        }
    });
</script>
<style>
    .gradient-card{
        background-image: linear-gradient(to right top, #e56415, #ec7c07, #f09400, #f2ac00, #f2c30b);
        color: white;
        min-height: 150px;
    }
    .additional-info a{
        text-decoration: none;
    }
    .dark-bg{
        background-color: rgba(0, 0, 0, 0.2);
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .dark-bg p{
        margin: 0;
    }
    #productRatioChart{
    max-height: 300px; 
    background-color: transparent;
    
}
.background-chart-table{
    background-image: linear-gradient(to right, #e90b55, #b80655, #870d4d, #59103e, #2f0c28);
    color: white;
    min-height: 400px;
}
    .dark-bg i{
        font-size: 20px;
    }
</style>