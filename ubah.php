<?php
    include './koneksi.php';
    
    $id = $_POST['id'];
    $judul_buku = $_POST['judul_buku'];
    $penulis_buku = $_POST['penulis_buku'];
    $jenis_buku = $_POST['jenis_buku'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "UPDATE buku SET judul='$judul_buku', penulis='$penulis_buku', jenis='$jenis_buku', gambar='$gambar_buku' WHERE id='$id'";

    if($conn->query($sql) === TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href='tampil.php'>Kembali</a><br>";
    }else{
        echo "Error : ".$sql."<br>".$conn->error;
    }

    $conn->close();

?>