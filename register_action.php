<?php
include "koneksi.php";
$nama = $_POST ['nama'];
$username = $_POST['username'];
$password =md5($_POST['password']);

//insert mysql tabel userr
$query = mysqli_query($koneksi, "insert into pengguna (nama,username,password,level) values ('$nama','$username','$password','user')");

?>

<script>
    alert ("Regristrasi Tamu Berhasil");
    document.location = "login.php";
</script>
