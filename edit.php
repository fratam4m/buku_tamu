<?php
//halaman update
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from daftar_tamu where id='$id'");
$data= mysqli_fetch_array($query);
if (!$data) {
    echo "Data tidak ditemukan!";
    exit;
}
?>
    <h1>UBAH DAFTAR TAMU</h1>
    <form action="edit_action.php" method="POST">
        <table>
            <input type="hidden" name="nama" id="" value="<?php echo $data['nama'];?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="" value=<?php echo $data ['nama'];?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
             <tr>
                <td>No Telpon</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" name="email" id="" value=<?php echo $data ['email'];?>></td>
            </tr>
            <tr>
                <td>Kepada</td>
                <td><input type="text" name="kepada" id="" value=<?php echo $data ['kepada'];?>></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" id="" col="30" row="3"><?php echo $data ['pesan'];?> </textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"><input type="reset" value="CANCEL"></td>
            </tr>
        </table>
    </form>
