<?php
    // session_start();
    if (isset($_SESSION['is_logged'])) {
        if ($_SESSION['is_logged'] == false) {
            header('location:?page=home');
        }
    }
?>
<div class = "col-md-4"></div>
<div class="col-md-4">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="text-center">LOGIN USER</h3></div>
        <div class="panel-body">
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">  
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <a href="?page=register">Daftar</a>             
                <p class="text-center">Belum punya akun? <a href="?page=register">Daftar</a></p>
                <input type="hidden" name="_form" value="on">
            </form>
        </div>
    </div>
</div>
<div class="col-md-4"></div>


<?php
if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $pass = isset($_POST['password']) ? $_POST['password'] : "";
    $query = "SELECT * FROM users WHERE email='". $email ."' AND password='" .md5($pass) . "'";
    $query = $connection->query($query);
    if ($query) {
        if ($query->num_rows > 0) {
            session_start();
            while ($data = $query->fetch_array()) {
                $_SESSION['is_logged'] = true;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['email'] = $data['email'];
            }
            header('location: ?page=home');
        } else {
            echo "
                <script>
                    alert('Email dan Password tidak cocok! Periksa kembali');
                    window.location='?page=login';
                </script>
            ";
        }
    } else {
        echo "<h1> query error</h1>";
    }
}
?>