<?php
$nama =$_POST['nama'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$nis =$_POST['nis'];
include "../koneksi.php";
$sql="insert into tbl_alternatif (nama, tanggal_lahir, nis) 
values ('$nama','$tanggal_lahir','$nis')";
$hasil=mysqli_query($koneksi,$sql);
//echo "$sql";
if ($hasil) {
 header("location:../index.php?halaman=data&pesan=tambah_sukses");
}else
{
 header("location:../index.php?halaman=data&pesan=tambah_gagal");
}
?>