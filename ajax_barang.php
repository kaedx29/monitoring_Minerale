<?php include_once 'public/header.php'; ?>


<table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No air</th>
                                <th>Tanggal permintaan</th>
                                <th>Jenis Air</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Gedung</th>
                                <?php?>
                                <th>Aksi</th>
                                <?php?>
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
                            $search = $_GET["cari"];
                            $no = 1;
                            $data = $db->searchAir('air.id_air', "$search");
                            foreach($data as $row){
                            ?>
                            <tr>
                                <td><?php echo $row['id_air']; ?></td>
                                <td><?php echo $row['tanggal_permintaan']; ?></td>
                                <td><?php echo $row['jenis_air']; ?></td>
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

<?php include_once 'public/footer.php'; ?>