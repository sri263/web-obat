<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Obat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_obat WHERE id_obat='" . $_GET ['id'] . "'";
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
                        <h3>DATA OBAT</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                            <tr>
                            <td >Nama Obat</td> <td><?= $data['nama_obat'] ?></td>
                        </tr>
                        <tr>
                            <td>Pembuat Obat</td> <td><?= $data['pembuat'] ?></td>
                        </tr>
                        <tr>
                            <td>Stok</td> <td><?= $data['stok'] ?></td>
                        </tr>
						<tr>
                            <td>Kadaluarsa</td> <td><?= $data['kadaluarsa'] ?></td>
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