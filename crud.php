<?php

include 'koneksi.php';

$ambil=$_GET['aksi'];
if($ambil=="ulasan")
{
    
    $id_user 	= @$_POST['id_user'];
    $id_vendor 	= @$_POST['id_vendor'];
    $rate	= @$_POST['score'];
    $judul	= @$_POST['judul'];
    $tgl_nikah	= @$_POST['tgl_nikah'];
    $deskripsi	= @$_POST['deskripsi'];

    $result	= mysqli_query ($conn,"INSERT INTO ulasan VALUES ('','$id_user','$id_vendor',
    '$rate','$judul', '$tgl_nikah','$deskripsi')")or die (mysqli_error());
		if ($result=true){
            echo"<script>alert('Berhasil Memberikan Ulasan');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=ulasan.php"/>';
		}else {
			echo"<script>alert('Gagal Memberikan Ulasan');</script>";
		}
}
?>

<?php

include 'koneksi.php';

$ambil=$_GET['aksi'];
if($ambil=="pesanan")
{
    
    $user 	= @$_POST['adduser'];
    $email 	= @$_POST['addemail'];
    $pass	= @$_POST['addpass'];
    $nama	= @$_POST['addnama'];
    $level	= @$_POST['addlevel'];

    $result	= mysqli_query ($conn,"INSERT INTO ulasan VALUES ('$nama','$user','$email','$pass','$level')")or die (mysqli_error());
		if ($result=true){
            echo"<script>alert('Tambah Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=ulasan.php"/>';
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
    }
?>