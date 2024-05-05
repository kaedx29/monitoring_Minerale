<?php include_once 'public/header.php'; ?>


<table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No perkakas</th>
                                <th>Tanggal permintaan</th>
                                <th>Jenis perkakas</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Gedung</th>
                                <th>Lantai</th>
                                <?php?>
                                <th>Aksi</th>
                                <?php?>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_GET['id_perkakas'])){
                                $id_air = $_GET['id_perkakas'];
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
                            $search = $_GET["cariperkakas"];
                            $no = 1;
                            $data = $db->searchPerkakas("
                            perkakas.id_perkakas LIKE '%$search%' 
                            OR perkakas.tanggal_permintaan LIKE '%$search%' 
                            OR perkakas.jenis_perkakas LIKE '%$search%' 
                            OR perkakas.jumlah LIKE '%$search%' 
                            OR perkakas.keterangan LIKE '%$search%' 
                            OR perkakas.gedung LIKE '%$search%'
                            OR perkakas.lantai LIKE '%$search%' 
                            ", $search);
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
                                <?php 
                                ?>
                                    <a href="index.php?page=upd_perkakas&getId=<?php echo $row['id_perkakas'];?>" class="btn btn-primary">Edit</a><br><br>
                                    <a href="index.php?page=dft_perkakas&id_perkakas=<?php echo $row['id_perkakas']; ?>" onclick="return confirm('Anda yakin?');" class="btn btn-primary">Hapus</a><br><br>
                                    <?php ?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

<?php include_once 'public/footer.php'; ?>