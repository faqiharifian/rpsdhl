<section class="content-header">
    <h1>
        Penanaman Satu Milyar Pohon (OBIT)
    </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tambah</h5>
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="<?php echo ROOT; ?>/admin/obit/store.php">
                <div class="form-group">
                    <input type="text"  class="form-control" name="name" placeholder="Nama Kegiatan">
                </div>
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="year" placeholder="Tahun">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="count" placeholder="Jumlah Pohon (Btg)">
                </div>
                <button type="submit" class="btn btn-default">Tambah</button>
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
                        <td></td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
    </div>
</section>