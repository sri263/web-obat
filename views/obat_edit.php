<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_obat WHERE id_obat ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Obat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">                     
                        <div class="form-group">
                            <label for="nama_obat" class="col-sm-3 control-label">Nama Obat</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_obat" value="<?=$data['nama_obat']?>"class="form-control" id="inputEmail3" placeholder="Nama Obat">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pembuat" class="col-sm-3 control-label">Pembuat</label>
                            <div class="col-sm-9">
                                <input type="text" name="pembuat" value="<?=$data['pembuat']?>"class="form-control" id="inputEmail3" placeholder="Pembuat">
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Stok</label>
                            <div class="col-sm-9">
                                <input type="text" name="stok" value="<?=$data['stok']?>"class="form-control" id="inputEmail3" placeholder="Stok">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kadaluarsa" class="col-sm-3 control-label">Kadaluarsa</label>
                            <div class="col-sm-9">
                                <input type="text" name="kadaluarsa" value="<?=$data['kadaluarsa']?>"class="form-control" id="inputEmail3" placeholder="Kadaluarsa">
                            </div>
                        </div>
				
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class=""></span> Update Data Obat</button>
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
    $nama=$_POST['nama_obat'];
    $p=$_POST['pembuat'];
	$s=$_POST['stok'];
    $k=$_POST['kadaluarsa'];

    //buat sql
    $sql="UPDATE tbl_obat SET nama_obat='$nama',pembuat='$p' ,stok='$s' ,kadaluarsa='$k' WHERE id_obat ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=obat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



