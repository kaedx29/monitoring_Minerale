$(document).ready(function(){
    $('#cari').on('keyup',function(){
        $('#load').load('ajax_barang.php?cari='+$('#cari').val());
    });
    
});

$(document).ready(function(){
    $('#cariperkakas').on('keyup',function(){
        $('#load').load('ajax_perkakas.php?cari='+$('#cariperkakas').val());
    });
    
});

