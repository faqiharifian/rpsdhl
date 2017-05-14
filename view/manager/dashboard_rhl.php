<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kegiatan Rehabilitasi Hutan dan Lahan (RHL)
    </h1>
    <?php if (empty($rhl_per_year)):?>
        <div class="alert alert-danger" role="alert">Data tahun <?php echo $year;?> tidak ditemukan</div>
    <?php endif;?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Grafik Tahun <?php echo $year;?></h5>
            <form class="form-inline" method="post" action="<?php echo ROOT;?>/manager/rhl/index.php">
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Pilih Tahun" required>
                </div>
                <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
            </form>
        </div>
        <div class="panel-body">

            <canvas id="rhlChart" width="400" max-height="400"></canvas>

        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script type="text/javascript">
    showChart();
    function showChart() {
        var cities = <?php echo json_encode($rhl_cities);?>;
        var larges = <?php echo json_encode($rhl_larges);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("rhlChart");
        var rhlChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cities,
                datasets: [
                    {
                        label: "Luas (Ha)",
                        data: larges,
                        backgroundColor: color_larges
                    }
                ]
            }

        });
    }
</script>
