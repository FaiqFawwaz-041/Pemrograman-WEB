<?php 

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$Angkatan = $_POST['Angkatan'];
$Prodi = $_POST['Prodi'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp,"$nama|$alamat|$email|$Angkatan|$Prodi\n");
fclose($fp);

echo "Terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<a href='TugasAkhir.php'>Isi buku tamu</a><br>";
echo "<a href='lihat.php'>Lihat buku tamu</a><br>";

 ?>



