<?php 
include('koneksi.php');
$koneksi = new Dbh();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['id'],$_POST['nisn'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
	header('location:index.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['id'],$_POST['nisn'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan']);
	header('location:index.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:index.php');
}
?>