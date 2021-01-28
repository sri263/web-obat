
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama " required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jekel" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jekel" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_beli" class="col-sm-3 control-label">Tanggal Beli</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_beli" class="form-control" id="inputEmail3" placeholder="Tanggal Beli" required>
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
                    <a href="?page=pelanggan&actions=tampil" class="btn btn-danger btn-sm">
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
   	$n=$_POST['nama'];
	$a=$_POST['alamat'];
    $j=$_POST['jekel'];
    $t=$_POST['tgl_beli'];
    //buat sql
    $sql="INSERT INTO pelanggan VALUES ('','$n','$a','$j','$t')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Tbl_Obat Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>