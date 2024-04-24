<?php include_once 'public/header.php'; ?>
<?php include_once 'public/sidenav.php'; ?>

<?php 
// file untuk menambah data pada table akun
    if(isset($_POST['tambah'])){
        $bulan = $_POST['bulan'];
        $id_perkakas = $_POST['id_perkakas'];
        $tanggal_permintaan  = $_POST['tanggal_permintaan'];
        $jenis_perkakas = $_POST['jenis_perkakas'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        $gedung = $_POST['gedung'];
        $lantai = $_POST['lantai'];

        $insert = $db->insertData('perkakas','bulan, id_perkakas, tanggal_permintaan, jenis_perkakas, jumlah, keterangan, gedung, lantai',"'$bulan','$id_perkakas','$tanggal_permintaan','$jenis_perkakas','$jumlah','$keterangan','$gedung','$lantai'");
        if($insert == true){
            echo "<script>alert('Berhasil tambah permintaan perkakas');</script>";
            header('Location:index.php?page=dft_perkakas');
        }else{
            echo "<script>alert('Gagal tambah permintaan perkakas');</script>";
        }
    }
?>

<div class="container-fluid">
    <main class="col-lg-10 offset-2">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Aplikasi Monitoring Permintaan Perkakas</h4>
                    <h4 class="text-center lead">PLN UIP SUMBAGSEL</h4>
                </div>
            </div>
            <div class="card col-lg-10 offset-1" style="margin-top:4%;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Form tambah permintaan perkakas</h4><hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">Bulan dan Tahun Permintaan</label>
                                            <input type="text" name="bulan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Perkakas</label>
                                            <input type="text" name="id_perkakas" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Permintaan (YYYY-MM-DD)</label>
                                            <input type="text" name="tanggal_permintaan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih jenis perkakas</label>
                                            <select name="jenis_perkakas" id="" class="form-control" required>
                                                <option disabled selected required>Pilih jenis perkakas</option>
                                                <option value="Tisu roll">Tisu roll</option>
                                                <option value="Tisu biasa">Tisu biasa</option>
                                                <option value="Sabun">Sabun</option>
                                                <option value="Plastik">Plastik</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah</label>
                                            <input type="text" name="jumlah" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <input type="text" name="keterangan" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih gedung</label>
                                            <select name="gedung" id="" class="form-control" required>
                                                <option disabled selected required>Pilih gedung</option>
                                                <option value="Gedung UIP SUMBAGSEL">Gedung UIP SUMBAGSEL</option>
                                                <option value="Gedung arsip">Gedung arsip</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih lantai</label>
                                            <select name="lantai" id="" class="form-control" required>
                                                <option disabled selected required>Pilih lantai</option>
                                                <option value="Lantai 1">Lantai 1</option>
                                                <option value="Lantai 2">Lantai 2</option>
                                                <option value="Lantai 3">Lantai 3</option>
                                            </select>
                                        </div>
                                        <center><input type="submit" value="Tambah" name="tambah" class="btn btn-primary"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once 'public/footer.php'; ?>