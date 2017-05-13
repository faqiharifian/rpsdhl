<section class="content-header">
    <h1>
        Penanaman Satu Milyar Pohon (OBIT)
    </h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5>Tambah</h5>
        </div>
        <div class="panel-body">
            <form class="form-inline" method="post" action="../manager/kbr_add.php">
                <div class="form-group">
                    <select class="form-control" name="kabupaten">
                        <option value="">Pilih Kabupaten</option>
                        <option value="semarang">Kab. Semarang</option>
                        <option value="semarang">Kab. Semarang</option>
                        <option value="semarang">Kab. Semarang</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text"  class="tahun_kbr form-control" name="tahun" placeholder="Tahun">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="unit" placeholder="Jumlah Unit">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="luas" placeholder="Luas Lahan (Ha)">
                </div>
                <button type="submit" class="btn btn-default">Tambah</button>
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</section>