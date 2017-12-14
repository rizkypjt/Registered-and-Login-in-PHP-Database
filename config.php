<?php
    $connection = new mysqli("localhost", "root", "" , "tutorial-login");

    if(!$connection){
        echo "<h1> koneksi gagal</h1>";
    }
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = "home";
    }
//routing

switch($page){
    case 'home':
        $page = "home";
    break;
    case 'profile':
        $page = "profile";
    break;
    case 'login':
        $page = "login";
    break;
    case 'register':
        $page = "register";
    break;
    case 'logout':
        $page = "logout";
    break;
    default:
        $page = "home";
    break;
}
?>