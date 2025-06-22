<?php
include "koneksi.php";
$nama = $_POST ['nama'];
$email = $_POST['email'];
$kepada = $_POST['kepada'];
$pesan = $_POST['pesan'];

//insert mysql
$query = mysqli_query($koneksi, "insert into daftar_tamu (nama,email,kepada,pesan) values ('$nama','$email','$kepada','$pesan')");

?>

<script>
    alert ("Simpan Data Berhasil");
    document.location = "index.php";
</script>
