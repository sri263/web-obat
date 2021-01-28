<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" class="form-control" id="inputEmail3" placeholder="Nama Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pembuat" class="col-sm-3 control-label">Pembuat Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembuat" class="form-control" id="inputEmail3" placeholder="Pembuat Obat" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" class="form-control" id="inputEmail3" placeholder="stok" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kadaluarsa" class="col-sm-3 control-label">Kadaluarsa</label>
                            <div class="col-sm-9">
                                <input type="date" name="kadaluarsa" class="form-control" id="inputEmail3" placeholder="Kadaluarsa" required>
                            </div>
                        </div>

				
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=obat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $nama_obat=$_POST['nama_obat'];
	$pembuat=$_POST['pembuat'];
	$stok=$_POST['stok'];
	$kada=$_POST['kadaluarsa'];
 
    //buat sql
    $sql="INSERT INTO tbl_obat VALUES ('','$nama_obat','$pembuat','$stok','$kada')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Tbl_Obat Error");
    if ($query){
        echo "<script>window.location.assign('?page=tbl_obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
