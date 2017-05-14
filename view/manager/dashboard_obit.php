<form method="get" action="<?php echo ROOT;?>/manager/obit/">
<section class="content row">
    <div class="col-sm-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Rata-Rata Penanaman Pohon Tiap Tahun</h3>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="avg-per-year-per-sector" style="max-height:200px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Rata-Rata Penanaman Pohon Tiap Event</h3>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="avg-per-year-per-event" style="max-height:200px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Jumlah Penanaman Pohon Tiap Kegiatan Pada Tahun <?php echo $year; ?></h3>
                <div class="form-inline">
                    <div class="form-group">
                        <select class="form-control" name="year">
                            <?php foreach($years as $y): ?>
                                <option value="<?php echo $y; ?>" <?php echo ($y == $year ? "selected" : "") ?>><?php echo $y; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Tampilkan</button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="avg-per-event-by-year" style="max-height:200px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Jumlah Penanaman Pohon Tiap Tahun Pada Kegiatan "<?php echo $event; ?>"</h3>
                <div class="form-inline">
                    <div class="form-group">
                        <select class="form-control" name="event" style="max-width: 200px;">
                            <?php foreach($events as $e): ?>
                                <option value="<?php echo $e['id_event']; ?>" <?php echo ($e['id_event'] == $id_event ? "selected" : "") ?>><?php echo $e['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Tampilkan</button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="avg-per-year-by-event" style="max-height:200px"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
</form>

<script src="<?php ROOTPATH?>/assets/plugins/chartjs/Chart.min.js"></script>

<script type="text/javascript">
    chart1show();
    chart2show();
    chart3show();
    chart4show();
    function chart1show() {
        var years = <?php echo json_encode($years);?>;
        var forestries = <?php echo json_encode($forestries);?>;
        var nonforestries = <?php echo json_encode($nonforestries);?>;

        var lineChartCanvas = $("#avg-per-year-per-sector").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: true,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };
        lineChartOptions.datasetFill = false;
        lineChart.Line({
            labels: years,
            datasets: [
                {
                    label: "Kehutanan",
                    fillColor: "rgba(210, 214, 222, 1)",
                    strokeColor: "rgba(210, 214, 222, 1)",
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: forestries
                },
                {
                    label: "Non Kehutanan",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: nonforestries
                }
            ]
        }, lineChartOptions);
    }
    function chart2show(){
        var barChartCanvas = $("#avg-per-year-per-event").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar({
            labels: <?php echo json_encode($chart2_label); ?>,
            datasets: [
                {
                    fillColor: "#00a65a",
                    strokeColor: "#00a65a",
                    pointColor: "#00a65a",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: <?php echo json_encode($chart2_data); ?>
                }
            ]
        }, barChartOptions);
    }
    function chart3show(){
        var barChartCanvas = $("#avg-per-event-by-year").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
        };

        barChartOptions.datasetFill = false;
        barChart.Bar({
            labels: <?php echo json_encode($chart3_label); ?>,
            datasets: [
                {
                    fillColor: "#00a65a",
                    strokeColor: "#00a65a",
                    pointColor: "#00a65a",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: <?php echo json_encode($chart3_data); ?>
                }
            ]
        }, barChartOptions);
    }
    function chart4show() {
        var years = <?php echo json_encode($years);?>;
        var forestries = <?php echo json_encode($forestries);?>;
        var nonforestries = <?php echo json_encode($nonforestries);?>;

        var lineChartCanvas = $("#avg-per-year-by-event").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: true,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };
        lineChartOptions.datasetFill = false;
        lineChart.Line({
            labels: <?php echo json_encode($chart4_label); ?>,
            datasets: [
                {
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: <?php echo json_encode($chart4_data); ?>
                }
            ]
        }, lineChartOptions);
    }
</script>