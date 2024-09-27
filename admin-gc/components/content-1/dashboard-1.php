<div class="sub-content-1 orverview-1 active-1">
    <h1>Orverview</h1>
    <div class="detail-container">
        <div>
            <h3>Active Orders</h3>
            <h2><?php echo count($order->displayAllperporder()) ?></h2>
        </div>
        <span>
            <i class="fa-solid fa-arrow-trend-up"></i>
            <h6>16%</h6>
        </span>
    </div>
    <div class="detail-container">
        <div>
            <h3>Total Orders</h3>
            <h2><?php echo $order->totalOrders() ?></h2>
        </div>
        <span>
            <i class="fa-solid fa-arrow-trend-up"></i>
            <h6>16%</h6>
        </span>
    </div>
    <div class="detail-container">
        <div>
            <h3>Today MMR</h3>
            <h2>LKR <?php echo $order->totalOrderToday() ?></h2>
        </div>
        <span>
            <i class="fa-solid fa-arrow-trend-up"></i>
            <h6>16%</h6>
        </span>
    </div>
    <div class="chart-container">
        <h1>Analysis</h1>
        <canvas id="pieChart" style="width:100%;max-width:600px"></canvas>
    </div>
</div>