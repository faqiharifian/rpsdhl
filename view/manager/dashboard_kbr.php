<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kebun Bibit Rakyat (KBR)
    </h1>

    <div class="box box-success" style="padding: 10px;">
        <h4>Grafik Tahun <?php echo $year;?></h4>
        <form class="form-inline" method="post" action="<?php echo ROOT;?>/manager/kbr/index.php">
            <div class="form-group">
                <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Pilih Tahun" required>
            </div>
            <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
        </form>
        <?php if (empty($kbr_per_year)):?>
            <div style="margin-top: 10px" class="alert alert-danger" role="alert">Data tahun <?php echo $year;?> tidak ditemukan</div>
        <?php endif;?>
        <canvas id="kbrPerYear" width="400" max-height="200"></canvas>
    </div>

    <div class="box box-success" style="padding: 10px;">
        <h4>Grafik Total </h4>
        <canvas id="kbrSum" width="400" max-height="200"></canvas>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script type="text/javascript">
    showKbrPerYear();
    function showKbrPerYear() {
        var cities = <?php echo json_encode($kbr_cities);?>;
        var units = <?php echo json_encode($kbr_units);?>;
        var larges = <?php echo json_encode($kbr_larges);?>;
        var color_units = <?php echo json_encode($color_units);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("kbrPerYear");
        var kbrPerYear = new Chart(ctx, {
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

    showKbrSum();
    function showKbrSum() {
        var cities = <?php echo json_encode($kbr_cities_sum);?>;
        var units = <?php echo json_encode($kbr_units_sum);?>;
        var larges = <?php echo json_encode($kbr_larges_sum);?>;
        var color_units = <?php echo json_encode($color_units);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("kbrSum");
        var kbrSum = new Chart(ctx, {
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
