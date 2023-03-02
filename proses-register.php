<?php

$nik = $_POST['nik'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$telp = $_POST['telp'];

include 'koneksi.php';

$sql = "INSERT INTO masyarakat(nik,nama,username,password,telepon)VALUES('$nik','$nama','$username','$password','$telp')";
$query = mysqli_query($koneksi,$sql);

if($query){
echo"
<script>
alert('anda berhasil mendaftar silahkan login');
window.location.assign('index.php');
</script>
";

}else{
echo"
<script>
alert('anda gagal mendaftar silahkan ulangi');
window.location.assign('register.php');
</script>
";

}