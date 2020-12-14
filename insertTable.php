<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prakdbweb13";

    $connect = mysqli_connect($hostname, $username, $password, $database);
    if ($connect) {
        echo "Koneksi ke MySQL berhasil <br>";
    }
    else {
        echo "Koneksi ke MySQL gagal <br>".mysqli_connect_error();
    }

    $sql = "INSERT INTO user(id, username, password)
            VALUES (2,'admin', md5 ('153'))";

    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
    }

    else{
        echo "Data gagal ditambahkan <br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>