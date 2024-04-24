<?php include_once 'public/header.php'?>
<?php 
    // page user pertama login, setelah memasukan username dan password akan di direct ke page selanjutnya
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $db->login('login',"username='$username'","password='$password'");

        foreach($data as $row){
            if($username == $row['username'] && $password == $row['password']){
                header('Location:index.php');
                echo "<script>alert('Berhasil login');</script>";
            }else{
                echo "<script>alert('data ada yang salah');</script>";
            }
        }
    }
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card login">
                    <div class="card-body">
                        <div class="card-title">
                            <center><img src="pln-logo.png" style="width:60%;" class="img-responsive"></img></center>
                            <h5 class="text-center text-muted">Monitoring Permintaan Air & Perkakas</h5>
                            <h3 class="text-center text-muted">PT. PLN UIP SUMBAGSEL</h3>
                            <h4 class="text-center lead">L O G I N</h2>
                            <hr>
                        </div>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" id="" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <center><input type="submit" name="login" value="Login" class="btn btn-outline-success"></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'public/footer.php';?>