<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pelanggan WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
            
                        <tr>
                            <td>Nama </td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jekel'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Beli</td> <td><?= $data['tgl_beli'] ?></td>
                        </tr>
						
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

