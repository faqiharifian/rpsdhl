<section class="content-header">
    <h1 style="margin-bottom: 15px">
        Perkembangan Kebun Bibit Rakyat (KBR)
    </h1>

    <?php
    if (session_status() == PHP_SESSION_NONE)
        session_start();
    if(isset($_SESSION['success_store_kbr'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_store_kbr'].'</div>';
        unset($_SESSION['success_store_kbr']);
    }else if(isset($_SESSION['error_store_kbr'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_store_kbr'].'</div>';
        unset($_SESSION['error_store_kbr']);
    }else if(isset($_SESSION['success_delete_kbr'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_delete_kbr'].'</div>';
        unset($_SESSION['success_delete_kbr']);
    }else if(isset($_SESSION['error_delete_kbr'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_delete_kbr'].'</div>';
        unset($_SESSION['error_delete_kbr']);
    }else if(isset($_SESSION['success_update_kbr'])){
        echo'<div class="alert alert-success" role="alert">'.$_SESSION['success_update_kbr'].'</div>';
        unset($_SESSION['success_update_kbr']);
    }else if(isset($_SESSION['error_update_kbr'])){
        echo'<div class="alert alert-danger" role="alert">'.$_SESSION['error_update_kbr'].'</div>';
        unset($_SESSION['error_update_kbr']);
        if(isset($_SESSION['error_update_kbr_id'])){
            $id_error = $_SESSION['error_update_kbr_id'];
            unset($_SESSION['error_update_kbr_id']);
        }
    }
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tambah</h5>
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="<?php echo ROOT;?>/admin/kbr/store.php">
                <div class="form-group">
                    <select class="form-control" name="city" required>
                        <option value="">Pilih Kabupaten</option>
                        <?php
                            foreach ($data_cities as $item_cities){
                                echo"<option value=".$item_cities['id_city'].">".$item_cities['name']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Tahun" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="unit" placeholder="Jumlah Unit" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="large" placeholder="Luas Lahan (Ha)" required>
                </div>
                <button type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-default">Tambah</button>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tabel</h5>
        </div>
        <div class="panel-body">
            <table class="table" id="table_kbr">
                <tr>
                    <th>No</th>
                    <th>Kabupaten</th>
                    <th>Tahun</th>
                    <th>Jumlah Unit</th>
                    <th>Luas Lahan (Ha)</th>
                    <th>Action</th>
                </tr>
                    <?php if(!empty($data_kbr)):?>
                        <?php foreach ($data_kbr as $key => $item_kbr):?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td>
                                    <span class="view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>"><?php echo $item_kbr['name']; ?></span>
                                    <span class="edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>">
                                        <select class="form-control" name="city" required>
                                            <option value="<?php echo $item_kbr['id_city']; ?>"><?php echo $item_kbr['name']; ?></option>
                                                <?php
                                                foreach ($data_cities as $item_cities){
                                                    echo"<option value=".$item_cities['id_city'].">".$item_cities['name']."</option>";
                                                }
                                                ?>
                                        </select>
                                    </span>
                                </td>
                                <td>
                                    <span class="view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>"><?php echo $item_kbr['year']; ?></span>
                                    <span class="edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>">
                                        <input type="text"  class="form-control" name="year" placeholder="Tahun" value="<?php echo $item_kbr['year']; ?>" required>
                                    </span>
                                </td>
                                <td>
                                    <span class="view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>"><?php echo $item_kbr['unit']; ?></span>
                                    <span class="edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>">
                                        <input type="text"  class="form-control" name="unit" placeholder="Jumlah Unit" value="<?php echo $item_kbr['unit']; ?>" required>
                                    </span>
                                </td>
                                <td>
                                    <span class="view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>"><?php echo $item_kbr['large']; ?></span>
                                    <span class="edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>">
                                        <input type="text"  class="form-control" name="large" placeholder="Luas Lahan (Ha)" value="<?php echo $item_kbr['large']; ?>" required>
                                    </span>
                                </td>
                                <td>
                                    <button type='button' class='btn btn-primary btn-edit view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>'>Ubah</button>
                                    <form id="form-delete-<?php echo $item_kbr['id_kbr']; ?>" method='post' action='<?php echo ROOT; ?>/admin/kbr/delete.php' style="display: inline-block;">
                                        <input type='hidden' value='<?php echo $item_kbr['id_kbr']?>' name='id_kbr'/>
                                        <button Onclick='return ConfirmDelete();' type='submit' value='SUBMIT' name='SUBMIT' class='btn btn-danger view <?php echo ($id_error == $item_kbr['id_kbr'] ? "hidden" : "") ?>'>Hapus</button>
                                    </form>
                                    <input type="hidden" name="city"/>
                                    <form id="form-update-<?php echo $item_kbr['id_kbr']; ?>" method="post" action="<?php echo ROOT; ?>/admin/kbr/update.php" style="display: inline-block;">
                                        <input type="hidden" value="<?php echo $item_kbr['id_kbr']; ?>" name="id_kbr"/>
                                        <input type="hidden" name="city"/>
                                        <input type="hidden" name="year"/>
                                        <input type="hidden" name="unit"/>
                                        <input type="hidden" name="large"/>
                                        <button type='submit' value='SUBMIT' name='SUBMIT' class='btn btn-info btn-update edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>'>Simpan</button>
                                    </form>
                                    <button type='button' class='btn btn-warning btn-edit-cancel edit <?php echo ($id_error == $item_kbr['id_kbr'] ? "" : "hidden") ?>'>Batal</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else :?>
                        <tr>
                            <td align='center' colspan='6'>Data KBR tidak ditemukan</td>
                        </tr>
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

