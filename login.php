<?php

if(isset($_POST['nohp']) && isset($_POST['password'])){

    $nohp = $_POST['nohp'];
    $password = $_POST['password'];

    $nohp_benar = "08123456789";
    $password_benar = "1234";

    if($nohp == $nohp_benar && $password == $password_benar){
        echo "Login Berhasil!";
        header("Location: dashboard.php");
    } else {
        echo "No HP atau Password salah!";
    }

} else {
    echo "Silakan login dulu dari halaman utama";
}

?>