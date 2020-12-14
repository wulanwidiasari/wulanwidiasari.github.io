<?php
    include "koneksi.php";

    $username=$_POST['username'];
    $password=md5 ($_POST['password']);

    $qry="select * from user where username='$username' and password='$password'";
    $result=mysqli_query($connect,$qry);
    $cek=mysqli_num_rows($result);

    if ($cek) {
        echo "Anda berhasil login. Silahkan menuju ";?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else {
        echo "Anda gagal login. silahkan ";?>
        <a href="loginform.html">Login kembali</a>
    <?php
        echo mysqli_error($connect);
    }
?>