<?php include_once 'public/header.php'; ?>
<?php include_once 'public/sidenav.php'; ?>

<?php 
    if(isset($_POST['update'])){
        $bulan = $_POST['bulan'];
        $tanggal_permintaan = $_POST['tanggal_permintaan'];
        $jenis_air = $_POST['jenis_air'];
        $jumlah= $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        $gedung = $_POST['gedung'];
        $id_air = $_GET['getId'];

        $upd = $db->updateData('air',"bulan='$bulan',id_air='$id_air',tanggal_permintaan='$tanggal_permintaan',jenis_air='$jenis_air',jumlah='$jumlah',keterangan='$keterangan',gedung='$gedung'","id_air='$id_air'");
        if($upd == true){
            header('Location:index.php?page=dft_air');
        }else{
            return false;
            }
        }
?>

<div class="container-fluid">
    <main class="col-lg-10 offset-2">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Aplikasi Monitoring Permintaan Air dan Perkakas</h4>
                    <h4 class="text-center lead">PLN UIP SUMBAGSEL</h4>
                </div>
            </div>
            <div class="card col-lg-10 offset-1" style="margin-top:4%;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Form update permintaan air</h4><hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <form action="#" method="post">
                                    <?php 
                                        $id = $_GET['getId'];
                                        $data = $db->getId('air',"id_air='$id'");
                                        foreach($data as $row){
                                    ?>
                                        <div class="form-group">
                                            <label for="">Bulan dan Tahun Permintaan</label>
                                            <input type="text" value="<?php echo $row['bulan']; ?>" name="bulan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No. Air</label>
                                            <input type="text" value="<?php echo $row['id_air']; ?>" name="id_air" class="form-control" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Permintaan (YYYY-MM-DD)</label>
                                            <input type="text" value="<?php echo $row['tanggal_permintaan']; ?>" name="tanggal_permintaan" class="form-control" required>
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
                                            <input type="text" value="<?php echo $row['jumlah']; ?>" name="jumlah" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keterangan</label>
                                            <input type="text" value="<?php echo $row['keterangan']; ?>" name="keterangan" id="" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih gedung</label>
                                            <select name="gedung" id="" class="form-control" required>
                                                <option disabled selected required>Pilih gedung</option>
                                                <option value="Gedung UIP SUMBAGSEL">Gedung UIP SUMBAGSEL</option>
                                                <option value="Gedung arsip">Gedung arsip</option>
                                            </select>
                                        </div>
                                        <?php }?>
                                        <center><input type="submit" value="Update" name="update" class="btn btn-primary"></center>
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