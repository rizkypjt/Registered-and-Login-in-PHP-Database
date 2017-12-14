<?php
if (!isset($_SESSION['is_logged'])) {
    echo "
        <script>
            alert('Login dulu!');
            window.location='?page=login';
        </script>
    ";
}
if (isset($_POST['_form']) AND $_POST['_form'] == 'on') {
    $query = "UPDATE users SET nama='$_POST[nama]', email='$_POST[email]'";
    if (trim($_POST['password']) !== '') {
        $query .= ", password='" . md5($_POST['password']) ."'";
    }
    $query .= "WHERE id_user=$_POST[_id_user]";
    if ($connection->query($query)) {
        echo "
            <script>
                alert('Update profil berhasil!');
                window.location='?page=profile';
            </script>
        ";
    } else {
        echo "<h1 Query error</h1>";
    }
}
?>
<div class="col-md-4"></div>
<div class="col-md-4">
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
        <?php $query = "SELECT * FROM users WHERE email='$_SESSION[email]'"; ?>
        <?php if ($query = $connection->query($query)): ?>
            <?php while ($data = $query->fetch_array()): ?>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$data['nama']?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?=$data['email']?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="help-block" style="color: #EC5F54">*Kosongkan jika tidak diganti</span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                <input type="hidden" name="_form" value="on">
                <input type="hidden" name="_id_user" value="<?=$data['id_user']?>">
            <?php endwhile ?>
        <?php endif ?>
    </form>
</div>
<div class="col-md-4"></div>