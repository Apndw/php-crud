<?php
    include './koneksi.php';

    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "INSERT INTO BUKU (judul, penulis, jenis, gambar) VALUES ('$judul_buku', '$penulis_buku', '$jenis_buku', '$gambar_buku')";

    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
        echo "<a href='tampil.php'>Lihat Data</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>