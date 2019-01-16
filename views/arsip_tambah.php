<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Arsip</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="Kelas" class="form-control">
                                    <option value="Arsip Pidana">IA</option>
                                    <option value="Arsip Pidana">IB</option>
                                    <option value="Arsip Perdata">IIA</option>
                                    <option value="Arsip Pidana">IIB</option>
                                    <option value="Arsip Perdata">IIIA</option>
                                    <option value="Arsip Perdata">IIIB</option>
                                    <option value="Arsip Perdata">IVA</option>
                                    <option value="Arsip Perdata">IVB</option>
                                    <option value="Arsip Pidana">VA</option>
                                    <option value="Arsip Pidana">VB</option>
                                    <option value="Arsip Pidana">VIA</option>
                                    <option value="Arsip Pidana">VIB</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Nama_Siswa" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Siswa" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Siswa" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="Nis" class="col-sm-3 control-label">NISN</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nis" class="form-control" id="inputEmail3" placeholder="Inputkan NISN" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="tgl_penerimaan" class="col-sm-3 control-label">Tanggal Penerimaan</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_penerimaan" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Penerimaan" required>
                            </div>
                        </div>

                        <!--Status-->
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="Jumlah" class="col-sm-3 control-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" name="Jumlah" class="form-control" id="inputPassword3" placeholder="Inputkan Jumlah">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-danger">
                                    <span class="fa fa-save"></span> Simpan Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=arsip&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $arsip=$_POST['Kelas'];
  $arsip=$_POST['Nama_Siswa'];
    $arsip=$_POST['Nis'];
  $arsip=$_POST['tgl_penerimaan'];
  $arsip=$_POST['Jumlah'];
    //buat sql
    $sql="INSERT INTO arsip VALUES ('','$Kelas','$Nama_Siswa','$Nis','$tgl_penerimaan','$Jumlah',')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=arsip&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
