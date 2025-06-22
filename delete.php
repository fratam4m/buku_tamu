<?php
include "koneksi.php";
$id = $_GET['id'];
//halaman delete
$query = mysqli_query($koneksi, "delete from daftar_tamu where id='$id'");
?>

<script>
    alert("Hapus Data Berhasil");
    document.location = "index.php";
</script>
