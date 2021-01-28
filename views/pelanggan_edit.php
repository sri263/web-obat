<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pelanggan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                             <div class="col-sm-9">
								<input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                             <div class="col-sm-9">
								<input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat" required>
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="jekel" class="col-sm-3 control-label">Jenis Kelamin</label>
                             <div class="col-sm-9">
								<input type="text" name="jekel" value="<?=$data['jekel']?>"class="form-control" id="inputEmail3" placeholder="Jekel" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_beli" class="col-sm-3 control-label">Tanggal Beli</label>
                             <div class="col-sm-9">
								<input type="date" name="tgl_beli" value="<?=$data['tgl_beli']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Beli" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class=""></span> Update Data Pelanggan</button>
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
	$j =$_POST['jekel'];
		$t =$_POST['tgl_beli'];
		

    //buat sql
    $sql="UPDATE pelanggan SET nama = '$n', alamat='$a', jekel='$j', tgl_beli='$t' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pelanggan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



