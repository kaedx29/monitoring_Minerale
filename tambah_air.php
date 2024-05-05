<?php include_once 'public/header.php'; ?>
<?php include_once 'public/sidenav.php'; ?>

<?php 
// file untuk menambah data pada table air
    if(isset($_POST['tambah'])){
        $bulan = $_POST['bulan'];
        $id_air = $_POST['id_air'];
        $tanggal_permintaan = $_POST['tanggal_permintaan'];
        $jenis_air = $_POST['jenis_air'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        $gedung = $_POST['gedung'];

        $insert = $db->insertData('air','bulan, id_air, tanggal_permintaan, jenis_air, jumlah, keterangan, gedung',
        "'$bulan','$id_air','$tanggal_permintaan','$jenis_air','$jumlah','$keterangan','$gedung'");
        if($insert == true){
            echo "<script>alert('Berhasil tambah permintaan air');</script>";
            header('Location:index.php?page=dft_air');
        }else{
            echo "<script>alert('Gagal tambah permintaan air');</script>";
        }
    }
?>

<div class="container-fluid">
    <main class="col-lg-10 offset-2">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Aplikasi Monitoring Permintaan Air Mineral dan Perkakas</h4>
                    <h4 class="text-center lead">PLN UIP SUMBAGSEL</h4>
                </div>
            </div>
            <div class="card col-lg-10 offset-1" style="margin-top:4%;">
            <div id="form">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Form tambah permintaan air mineral</h4><hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="">Bulan Permintaan</label>
                                            <input type="text" name="bulan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Air</label>
                                            <input type="text" name="id_air" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Permintaan (YYYY-MM-DD)</label>
                                            <input type="text" name="tanggal_permintaan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih jenis air</label>
                                            <select name="jenis_air" id="" class="form-control" required>
                                                <option disabled selected required>Pilih jenis air</option>
                                                <option value="Air mineral galon">Air mineral galon</option>
                                                <option value="Galon isi ulang">Galon isi ulang</option>
                                                <option value="Air mineral 1,5 l">Air mineral 1,5 l</option>
                                                <option value="Air mineral 600 ml">Air mineral 600 ml</option>
                                                <option value="Air mineral 330 ml">Air mineral 330 ml</option>
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
                                        <center><input type="submit" value="Tambah" name="tambah" class="btn btn-primary"></center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div id="box">
                    
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once 'public/footer.php'; ?>