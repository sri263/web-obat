<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pelanggan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pelanggan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Penjualan Obat Di Apotek XYZ </h2>
                        
                        <hr>
                        <h3>DATA PELANGGAN</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
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

                            </tbody>
                            <tfoot>
                                <tr>
                                <td colspan="8" class="text-right">
                                        Batu Bara <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Pemilik, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
