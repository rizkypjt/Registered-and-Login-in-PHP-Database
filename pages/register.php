<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="text-center">REGISTRASI USER</h3></div>
        <div class="panel-body">
            <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                <input type="hidden" name="_form" value="on">
            </form>
        </div>
    </div>
</div>
<div class="col-md-4"></div>

<?php    
    if(isset($_POST['_form']) AND $_POST['_form'] == 'on'){
        $query = "INSERT INTO users VALUES(NULL, '$_POST[nama]', '$_POST[email]', md5('$_POST[password]'))";
        if ($connection->query($query)) {
            echo "
                <script>
                    alert('Registrasi Berhasil!');
                    window.location='?page=login';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Whoops! Registrasi gagal silahkan coba lagi');
                    window.location='?page=register';
                </script>
            ";
        }
    }
    ?>