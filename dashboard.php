<?php 
// include header
    require_once 'public/header.php';
?>
<?php 
// include sidenav
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
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-primary">
                            <h4 class="text-white">Jumlah permintaan air</h4>
                            <?php 
                                //mengambil data kemudian dijumlahkan 
                                $data = $db->count('jumlah','air');
                                foreach($data as $row){
                                    if($row['jumlah'] > 0){
                            ?>
                            <h4 class="text-white"><?php echo $row['jumlah']; ?></h4>
                                <?php }else{echo "0";}?>
                                <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-body bg-success">
                            <h4 class="text-white">Jumlah permintaan perkakas</h4>
                            <?php 
                            //mengambil data kemudian dijumlahkan
                                $data = $db->count('jumlah','perkakas');
                                foreach($data as $row){
                                    if($row['jumlah'] > 0){
                            ?>
                            <h4 class="text-white"><?php echo $row['jumlah']; ?></h4>
                            <?php }else{echo "0";}?>
                                <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php 
// include footer
    require_once 'public/footer.php';
?>