<?php 

    require_once 'public/sidenav.php';
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
            <div class="card" style="margin-top:4%;">
                <div class="card-body">
                    <h4 class="text-center">Daftar Permintaan Perkakas</h4>
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="index.php?page=tmb_perkakas" class="btn btn-primary">Tambah Permintaan perkakas</a><br><br>
                        </div>
            <div class="col-lg-4">
                    <form action="ajax_perkakas.php" method="GET" id="searchForm">
                        <div class="form-group">
                            <input type="text" name="cariperkakas" id="cariperkakas" class="form-control" placeholder="Cari Permintaan perkakas">
                            <input type="submit" name="search" value="Cari" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No. Perkakas</th>
                                <th>Tanggal Permintaan</th>
                                <th>Jenis Perkakas</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Gedung</th>
                                <th>Lantai</th>
                                <?php 
                                ?>
                                <th>Aksi</th>
                                    <?php ?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_GET['id_perkakas'])){
                                $id_perkakas = $_GET['id_perkakas'];
                                $del = $db->deleteData('perkakas', "id_perkakas='$id_perkakas'");
                                if($del){
                                    header('Location: index.php?page=dft_perkakas');
                                    exit(); // Penting untuk mencegah eksekusi kode selanjutnya setelah redirect
                                } else {
                                    echo "Gagal menghapus data.";
                                }
                            }
                        ?>
                            <?php 
                                $no = 1;
                                $data = $db->getRelasiPerkakas();
                                foreach($data as $row){
                            ?>
                                <tr>
                                    <td><?php echo $row['id_perkakas']; ?></td>
                                    <td><?php echo $row['tanggal_permintaan']; ?></td>
                                    <td><?php echo $row['jenis_perkakas']; ?></td>
                                    <td><?php echo $row['jumlah']; ?></td>
                                    <td><?php echo $row['keterangan']; ?></td>
                                    <td><?php echo $row['gedung']; ?></td>
                                    <td><?php echo $row['lantai']; ?></td>
                                    <td>
                                        <a href="index.php?page=upd_perkakas&idPerkakas=<?php echo $row['id_perkakas'];?>" class="btn btn-primary">Edit</a><br><br>
                                        <a href="index.php?page=dft_perkakas&id_perkakas=<?php echo $row['id_perkakas']; ?>" onclick="return confirm('Anda yakin?');" class="btn btn-primary">Hapus</a><br><br>
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