<?php
    include './koneksi.php';
    $id_buku = $_GET['id_buku'];

    $sql = "SELECT * FROM buku WHERE id=".$id_buku;
    $result = $conn->query($sql);

    $result = $result->fetch_assoc();
?>

<form action="ubah.php" method="post">
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>
        <tr>
            <td>Judul Buku</td>
            <td>:</td>
            <td><input type="text" name="judul_buku" value="<?php echo $result['judul']?>"></td>
        </tr>
        <tr>
            <td>Penulis Buku</td>
            <td>:</td>
            <td><input type="text" name="penulis_buku" value="<?php echo $result['penulis']?>"></td>
        </tr>
        <tr>
            <td>Jenis Buku</td>
            <td>:</td>
            <td><input type="text" name="jenis_buku" value="<?php echo $result['jenis']?>"></td>
        </tr>
        <tr>
            <td>Gambar Buku (link)</td>
            <td>:</td>
            <td><input type="text" name="gambar_buku" value="<?php echo $result['gambar']?>"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="UBAH">
</form>