<?php include_once 'public/header.php'; ?>
<?php include_once 'public/sidenav.php'; ?>

<?php 
    if(isset($_POST['update'])){
        $bulan = $_POST['bulan'];
        $tanggal_permintaan = $_POST['tanggal_permintaan'];
        $jenis_perkakas = $_POST['jenis_perkakas'];
        $jumlah= $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];
        $gedung = $_POST['gedung'];
        $lantai = $_POST['lantai'];
        $id_perkakas = $_GET['idPerkakas'];

        $upd= $db->updateData('perkakas',"bulan='$bulan',id_perkakas='$id_perkakas',tanggal_permintaan='$tanggal_permintaan',jenis_perkakas='$jenis_perkakas',jumlah='$jumlah',keterangan='$keterangan',gedung='$gedung',lantai='$lantai'","id_perkakas='$id_perkakas'");
        if($upd == true){
            header('Location:index.php?page=dft_perkakas');
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
                    <h3 class="text-center">Aplikasi Monitoring Permintaan Air Mineral dan Perkakas</h4>
                    <h4 class="text-center lead">PLN UIP SUMBAGSEL</h4>
                </div>
            </div>
            <div class="card col-lg-10 offset-1" style="margin-top:4%;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Form Update Permintaan Perkakas</h4><hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-2">
                                    <form action="#" method="post">
                                    <?php 
                                        $id_perkakas = $_GET['idPerkakas'];
                                        $data = $db->getId('perkakas',"id_perkakas='$id_perkakas'");
                                        foreach($data as $row){
                                    ?>
                                        <div class="form-group">
                                            <label for="">Bulan Permintaan</label>
                                            <input type="text" value="<?php echo $row['bulan']; ?>" name="bulan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">No. Perkakas</label>
                                            <input type="text" value="<?php echo $row['id_perkakas']; ?>" name="id_perkakas" class="form-control" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Permintaan (YYYY-MM-DD)</label>
                                            <input type="text" value="<?php echo $row['tanggal_permintaan']; ?>" name="tanggal_permintaan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih jenis perkakas</label>
                                            <select name="jenis_perkakas" id="" class="form-control" required>
                                                <option disabled selected required>Pilih jenis air</option>
                                                <option value="Tisu Roll">Tisu Roll</option>
                                                <option value="Tisu Biasa">Tisu Biasa</option>
                                                <option value="Sabun">Sabun</option>
                                                <option value="Plastik">Plastik</option>
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
                                        <div class="form-group">
                                            <label>Pilih lantai</label>
                                            <select name="lantai" id="" class="form-control" required>
                                                <option disabled selected required>Pilih lantai</option>
                                                <option value="Lantai 1">Lantai 1</option>
                                                <option value="Lantai 2">Lantai 2</option>
                                                <option value="Lantai 3">Lantai 3</option>
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