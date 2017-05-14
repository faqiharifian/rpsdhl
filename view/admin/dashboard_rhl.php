<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kegiatan Rehabilitasi Hutan dan Lahan (RHL)
    </h1>
    <?php
    $id_error = -1;
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(isset($_SESSION['success_store_rhl'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_store_rhl'].'</div>';
        unset($_SESSION['success_store_rhl']);
    }else if(isset($_SESSION['error_store_rhl'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_store_rhl'].'</div>';
        unset($_SESSION['error_store_rhl']);
    }else if(isset($_SESSION['success_update_rhl'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_update_rhl'].'</div>';
        unset($_SESSION['success_update_rhl']);
    }else if(isset($_SESSION['error_update_rhl'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_update_rhl'].'</div>';
        unset($_SESSION['error_update_rhl']);
        if(isset($_SESSION['error_update_rhl_id'])){
            $id_error = $_SESSION['error_update_rhl_id'];
            unset($_SESSION['error_update_rhl_id']);
        }
    }else if(isset($_SESSION['success_delete_rhl'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_delete_rhl'].'</div>';
        unset($_SESSION['success_delete_rhl']);
    }else if(isset($_SESSION['error_delete_rhl'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_delete_rhl'].'</div>';
        unset($_SESSION['error_delete_rhl']);
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
                    <th style="min-width: 150px;">Action</th>
                </tr>
                <?php if(empty($data_rhl)): ?>
                    <tr>
                        <td colspan="5" class="text-center">Data RHL tidak ditemukan</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($data_rhl as $key => $rhl): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td>
                            <span class="view <?php echo ($id_error == $rhl['id_rhl'] ? "hidden" : "") ?>"><?php echo $rhl['name']; ?></span>
                            <span class="edit <?php echo ($id_error == $rhl['id_rhl'] ? "" : "hidden") ?>">
                                <select class="form-control" name="city" required>
                                    <option disabled selected>Pilih Kabupaten</option>
                                    <?php foreach($data_city as $city): ?>
                                        <option value="<?php echo $city['id_city']; ?>" <?php echo ($city['id_city'] == $rhl['id_city'] ? "selected" : ""); ?>><?php echo $city['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </span>
                        </td>
                        <td>
                            <span class="view <?php echo ($id_error == $rhl['id_rhl'] ? "hidden" : "") ?>"><?php echo $rhl['year']; ?></span>
                            <span class="edit <?php echo ($id_error == $rhl['id_rhl'] ? "" : "hidden") ?>">
                                <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Tahun" value="<?php echo $rhl['year']; ?>" required>
                            </span>
                        </td>
                        <td>
                            <span class="view <?php echo ($id_error == $rhl['id_rhl'] ? "hidden" : "") ?>"><?php echo number_format($rhl['large'], 2, ",", "."); ?></span>
                            <span class="edit <?php echo ($id_error == $rhl['id_rhl'] ? "" : "hidden") ?>">
                                <input type="number" class="form-control" name="large" placeholder="Luas Lahan (Ha)" value="<?php echo $rhl['large']; ?>" required>
                            </span>
                        </td>
                        <td>
                            <button type='button' class='btn btn-primary btn-edit view <?php echo ($id_error == $rhl['id_rhl'] ? "hidden" : "") ?>'>Ubah</button>
                            <form id="form-delete-<?php echo $rhl['id_rhl']; ?>" method="post" action="<?php echo ROOT; ?>/admin/rhl/delete.php" style="display: inline-block;">
                                <input type="hidden" value="<?php echo $rhl['id_rhl']; ?>" name="id_rhl"/>
                                <button Onclick='return ConfirmDelete();' type='submit' value='SUBMIT' name='SUBMIT' class='btn btn-danger view <?php echo ($id_error == $rhl['id_rhl'] ? "hidden" : "") ?>'>Hapus</button>
                            </form>
                            <input type="hidden" name="name"/>
                            <form id="form-update-<?php echo $rhl['id_rhl']; ?>" method="post" action="<?php echo ROOT; ?>/admin/rhl/update.php" style="display: inline-block;">
                                <input type="hidden" value="<?php echo $rhl['id_rhl']; ?>" name="id_rhl"/>
                                <input type="hidden" name="city"/>
                                <input type="hidden" name="year"/>
                                <input type="hidden" name="large"/>
                                <button type='submit' value='SUBMIT' name='SUBMIT' class='btn btn-info btn-update edit <?php echo ($id_error == $rhl['id_rhl'] ? "" : "hidden") ?>'>Simpan</button>
                            </form>
                            <button type='button' class='btn btn-warning btn-edit-cancel edit <?php echo ($id_error == $rhl['id_rhl'] ? "" : "hidden") ?>'>Batal</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>
<script>
    function ConfirmDelete()
    {
        var x = confirm("Anda yakin akan menghapus data ini?");
        if (x)
            return true;
        else
            return false;
    }
</script>