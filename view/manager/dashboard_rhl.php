<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kegiatan Rehabilitasi Hutan dan Lahan (RHL)
    </h1>


    <div class="box box-success" style="padding: 10px;">
        <h4>Grafik Tahun <?php echo $year;?></h4>
        <form class="form-inline" method="post" action="<?php echo ROOT;?>/manager/rhl/index.php">
            <div class="form-group">
                <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Pilih Tahun" required>
            </div>
            <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tampilkan</button>
        </form>
        <?php if (empty($rhl_per_year)):?>
            <div style="margin-top: 10px" class="alert alert-danger" role="alert">Data tahun <?php echo $year;?> tidak ditemukan</div>
        <?php endif;?>
        <canvas id="rhlPerYear" width="400" max-height="200"></canvas>
    </div>


    <div class="box box-success" style="padding: 10px;">
        <h4>Grafik Total</h4>
        <canvas id="rhlSum" width="400" max-height="200"></canvas>
    </div>


</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script type="text/javascript">
    showRhlPerYear();
    function showRhlPerYear() {
        var cities = <?php echo json_encode($rhl_cities);?>;
        var larges = <?php echo json_encode($rhl_larges);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("rhlPerYear");
        var rhlPerYear = new Chart(ctx, {
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

    showRhlSum();
    function showRhlSum() {
        var cities = <?php echo json_encode($rhl_cities_sum);?>;
        var larges = <?php echo json_encode($rhl_larges_sum);?>;
        var color_larges = <?php echo json_encode($color_larges);?>;
        var ctx = document.getElementById("rhlSum");
        var rhlSum = new Chart(ctx, {
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
