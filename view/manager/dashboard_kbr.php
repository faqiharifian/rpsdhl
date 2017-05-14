<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kebun Bibit Rakyat (KBR)
    </h1>
    <?php if (empty($kbr_per_year)):?>
        <div class="alert alert-danger" role="alert">Data tahun <?php echo $year;?> tidak ditemukan</div>
    <?php endif;?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Grafik Tahun <?php echo $year;?></h5>
            <form class="form-inline" method="post" action="<?php echo ROOT;?>/manager/kbr/index.php">
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Pilih Tahun" required>
                </div>
                <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
            </form>
        </div>
        <div class="panel-body">

            <canvas id="kbrChart" width="400" max-height="400"></canvas>

        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script type="text/javascript">
    showChart();
    function showChart() {
        var cities = <?php echo json_encode($kbr_cities);?>;
        var units = <?php echo json_encode($kbr_units);?>;
        var larges = <?php echo json_encode($kbr_larges);?>;
        var color_units = <?php echo json_encode($color_units);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("kbrChart");
        var kbrChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: cities,
                datasets: [
                    {
                        label: "Unit",
                        data: units,
                        backgroundColor: color_units
                    },
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
