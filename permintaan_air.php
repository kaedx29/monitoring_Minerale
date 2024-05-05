<?php 
    require_once 'public/header.php';
?>
<?php 
    require_once 'public/sidenav.php';
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
            <div class="card" style="margin-top:4%;">
                <div class="card-body">
                    <h4 class="text-center">Daftar Permintaan Air Mineral</h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="index.php?page=tmb_air" class="btn btn-primary text-white">Tambah Permintaan Air</a><br><br>
                        </div>
                        <div class="col-lg-4">
                            <form action="ajax_barang.php" method="get" id="searchForm" autocomplete="on">
                                <div class="form-group">
                                    <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari permintaan air">
                                </div>
                            </form>
                        </div>
                        <form method="POST" action="">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select name="cari_bulan" id="cari_bulan" class="form-control">
                                        <option value="">Pilih bulan</option>
                                        <option value="Januari" <?php if ($bulan=="Januari"){ echo "selected"; } ?>>Januari</option>
                                        <option value="Februari" <?php if ($bulan=="Februari"){ echo "selected"; } ?>>Februari</option>
                                        <option value="Maret" <?php if ($bulan=="Maret"){ echo "selected"; } ?>>Maret</option>
                                        <option value="April" <?php if ($bulan=="April"){ echo "selected"; } ?>>April</option>
                                        <option value="Mei" <?php if ($bulan=="Mei"){ echo "selected"; } ?>>Mei</option>
                                        <option value="Juni" <?php if ($bulan=="Juni"){ echo "selected"; } ?>>Juni</option>
                                        <option value="Juli" <?php if ($bulan=="Juli"){ echo "selected"; } ?>>Juli</option>
                                        <option value="Agustus" <?php if ($bulan=="Agustus"){ echo "selected"; } ?>>Agustus</option>
                                        <option value="September" <?php if ($bulan=="September"){ echo "selected"; } ?>>September</option>
                                        <option value="Oktober" <?php if ($bulan=="Oktober"){ echo "selected"; } ?>>Oktober</option>
                                        <option value="November" <?php if ($bulan=="November"){ echo "selected"; } ?>>November</option>
                                        <option value="Desember" <?php if ($bulan=="Desember"){ echo "selected"; } ?>>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4" >
                                <button id="search" name="search" class="btn btn-warning">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div id="load">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No. Air</th>
                                <th>Tanggal Permintaan</th>
                                <th>Jenis Air</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Gedung</th>
                                <?php 
                                ?>
                                <th>Aksi</th>
                                    <?php ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_GET['id_air'])){
                                $id_air = $_GET['id_air'];
                                $del = $db->deleteData('air', "id_air='$id_air'");
                                if($del){
                                    header('Location: index.php?page=dft_air');
                                    exit(); // Penting untuk mencegah eksekusi kode selanjutnya setelah redirect
                                } else {
                                    echo "Gagal menghapus data.";
                                }
                            }
                        ?>

                            <?php 
                                $no = 1;
                                $data = $db->getRelasiAir();
                                foreach($data as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id_air']; ?></td>
                                <td><?php echo $row['tanggal_permintaan']; ?></td>
                                <td><?php echo $row['jeniair']; ?></td>
                                <td><?php echo $row['jumlah']; ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td><?php echo $row['gedung']; ?></td>
                                <td>
                                <?php 
                                ?>
                                    <a href="index.php?page=upd_air&getId=<?php echo $row['id_air'];?>" class="btn btn-primary">Edit</a><br><br>
                                    <a href="index.php?page=dft_air&id_air=<?php echo $row['id_air']; ?>" onclick="return confirm('Anda yakin?');" class="btn btn-primary">Hapus</a><br><br>
                                    <?php ?>
                                </td>
                            </tr>
                            
                            <?php }?>
                            
                        </tbody>
                    </table>
            </div>
        </div>
    </main>
</div>

<?php 
    require_once 'public/footer.php';
?>