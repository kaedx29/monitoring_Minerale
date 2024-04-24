<?php 
    require_once 'public/header.php';
?>

<?php 
    require_once 'public/sidenav.php';
?>

<?php 
    // penggunaan if dan switch untuk menentukan include file berdasarkan url
    if(isset($_REQUEST['page'])){
        $page = $_REQUEST['page'];
        switch($page){
            case 'dft_air':
                include_once 'permintaan_air.php';
                break;
            case 'tmb_air':
                include_once 'tambah_air.php';
                break;
            case 'upd_air':
                include_once 'update_air.php';
                break;
            case 'dft_perkakas':
                include_once 'permintaan_perkakas.php';
                break;
            case 'tmb_perkakas':
                include_once 'tambah_perkakas.php';
                break;
            case 'upd_perkakas':
                include_once 'update_perkakas.php';
                break;
        }
    }else{
        include_once 'dashboard.php';
    }
?>

<?php 
    require_once 'public/footer.php';
?>