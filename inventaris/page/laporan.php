<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Laporan Peminjaman Inventaris</div>
        <div class="panel-body">
            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="">Tanggal Awal</label><br>
                    <input type="date" id="Tgl_awal" name="Tgl_Dari" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Sampai</label><br>
                    <input type="date" id="Tgl_sampai" name="Tgl_sampai" class="form-control">
                </div>
                <div class="form-group"><br>
                    <input type="submit" class="btn btn-sm btn-primary" value="Filter">
                    <button class="btn btn-sm btn-sucess">Cetak Laporan</button>
                </div>
            </form>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peminjaman</th>
                        <th>Nama Inventaris</th>
                        <th>Jumlah</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Andika</td>
                        <td>Laptop</td>
                        <td>10</td>
                        <td>5-3-2023</td>
                        <td>6-3-2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>