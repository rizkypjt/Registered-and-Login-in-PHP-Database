<?php
if (!isset($_SESSION['is_logged'])) {
    echo "
        <script>
            alert('Login dulu!');
            window.location='?page=login';
        </script>
    ";
}
?>
<div class="col-md-12">
<div class="page-header">
    <h1 class="text-center">WELCOME TO MY SIMPLE APPLICATION</h1>
</div>
</div>