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
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Kabupaten</th>
                    <th>Tahun</th>
                    <th>Jumlah Unit</th>
                    <th>Luas Lahan (Ha)</th>
                    <th>Action</th>
                </tr>
                    <?php
                        $no = 1;
                        foreach ($data_kbr as $item_kbr){
                            echo"<tr><td>$no</td><td>".$item_kbr['name']."</td><td>".$item_kbr['year']."</td><td>".$item_kbr['unit']."</td><td>".$item_kbr['large']."</td><td></td></tr>";
                            $no++;
                        }
                    ?>
            </table>
        </div>
    </div>
</section>

