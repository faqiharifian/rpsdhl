<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kegiatan Rehabilitasi Hutan dan Lahan (RHL)
    </h1>
    <?php
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(isset($_SESSION['success_store_rhl'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_store_rhl'].'</div>';
        unset($_SESSION['success_store_rhl']);
    }else if(isset($_SESSION['error_store_rhl'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_store_rhl'].'</div>';
        unset($_SESSION['error_store_rhl']);
    }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tambah</h5>
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="<?php echo ROOT; ?>/admin/rhl/store.php">
                <div class="form-group">
                    <select class="form-control" name="city" required>
                        <option disabled selected>Pilih Kabupaten</option>
                        <?php foreach($data_city as $city): ?>
                            <option value="<?php echo $city['id_city']; ?>"><?php echo $city['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="large" placeholder="Luas Lahan (Ha)" required>
                </div>
                <button type="submit" class="btn btn-default" value="SUBMIT" name="SUBMIT" >Tambah</button>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tabel</h5>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Kabupaten</th>
                    <th>Tahun</th>
                    <th>Luas Lahan (Ha)</th>
                    <th>Action</th>
                </tr>
                <?php if(empty($data_rhl)): ?>
                    <tr>
                        <td colspan="5" class="text-center">Data RHL tidak ditemukan</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($data_rhl as $key => $rhl): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $rhl['name']; ?></td>
                        <td><?php echo $rhl['year']; ?></td>
                        <td><?php echo $rhl['large']; ?></td>
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>