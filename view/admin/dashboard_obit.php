<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Penanaman Satu Milyar Pohon (OBIT)
    </h1>
    <?php
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(isset($_SESSION['success_store_obit'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_store_obit'].'</div>';
        unset($_SESSION['success_store_obit']);
    }else if(isset($_SESSION['error_store_obit'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_store_obit'].'</div>';
        unset($_SESSION['error_store_obit']);
    }else if(isset($_SESSION['success_delete_obit'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_delete_obit'].'</div>';
        unset($_SESSION['success_delete_obit']);
    }else if(isset($_SESSION['error_delete_obit'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_delete_obit'].'</div>';
        unset($_SESSION['error_delete_obit']);
    }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tambah</h5>
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="<?php echo ROOT; ?>/admin/obit/store.php">
                <div class="form-group">
                    <input type="text"  class="form-control" name="name" placeholder="Nama Kegiatan" required>
                </div>
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="count" placeholder="Jumlah Pohon (Btg)" required>
                </div>
                <button type="submit" class="btn btn-default" value="SUBMIT" name="SUBMIT" >Tambah</button>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Daftar OBIT</h5>
        </div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tahun</th>
                    <th>Jumlah Pohon (Btg)</th>
                    <th>Action</th>
                </tr>
                <?php if(empty($data_obit)): ?>
                <tr>
                    <td colspan="5" class="text-center">Data OBIT tidak ditemukan</td>
                </tr>
                <?php else: ?>
                    <?php foreach($data_obit as $key => $obit): ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $obit['name']; ?></td>
                        <td><?php echo $obit['year']; ?></td>
                        <td><?php echo $obit['count']; ?></td>
                        <td>
                            <form method="post" action="<?php echo ROOT; ?>/admin/obit/delete.php">
                                <input type="hidden" value="<?php echo $obit['id_obit']; ?>" name="id_obit"/>
                                <button Onclick='return ConfirmDelete();' type='submit' value='SUBMIT' name='SUBMIT' class='btn btn-danger'>Hapus</button>
                            </form>
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