<section class="content-header">
    <h1>
        Penanaman Satu Milyar Pohon (OBIT)
    </h1>
</section>

<section class="content row">
    <div class="col-sm-6">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Rata-Rata Jumlah Penanaman Pohon Tiap Tahun</h3>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="avg-per-year-per-sector" style="max-height:250px"></canvas>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Rata-Rata Jumlah Penanaman Pohon Tiap Event</h5>
            </div>
            <div class="panel-body">

                <canvas id="avg-per-year-per-event" width="400" max-height="400"></canvas>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Jumlah Penanaman Pohon Tiap Kegiatan Pada Tahun <?php echo $year; ?></h5>
                <form class="form-inline" method="get" action="<?php echo ROOT;?>/manager/obit/">
                    <div class="form-group">
                        <select class="form-control" name="year">
                            <?php foreach($years as $y): ?>
                                <option value="<?php echo $y; ?>" <?php echo ($y == $year ? "selected" : "") ?>><?php echo $y; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
                </form>
            </div>
            <div class="panel-body">

                <canvas id="avg-per-event-by-year" width="400" max-height="400"></canvas>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Jumlah Penanaman Pohon Tiap Tahun Pada Kegiatan "<?php echo $event; ?>"</h5>
                <form class="form-inline" method="get" action="<?php echo ROOT;?>/manager/obit/">
                    <div class="form-group">
                        <select class="form-control" name="year" style="max-width: 200px;">
                            <?php foreach($events as $e): ?>
                                <option value="<?php echo $e['id_event']; ?>" <?php echo ($e['id_event'] == $id_event ? "selected" : "") ?>><?php echo $e['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
                </form>
            </div>
            <div class="panel-body">

                <canvas id="avg-per-year-by-event" width="400" max-height="400"></canvas>

            </div>
        </div>
    </div>
</section>

<script src="<?php ROOTPATH?>/assets/plugins/chartjs/Chart.min.js"></script>

<script type="text/javascript">
    chart1show();
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
</script>