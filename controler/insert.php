<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$jenis=$_GET['jenis'];
$jumlah=$_GET['jumlah'];
$hbeli=$_GET['hbeli'];
$hjual=$_GET['hjual'];

// Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
include "../model/CRUD.php";

// menginisiasi Class CRUD
$CRUD = new CRUD();

// Menginsert data user
// ==============================================
// insert($table,$data);
//
// @return Array

$table = 'barangnya';
$data = array(
	'id' => $id,
	'nama' => $nama,
	'jenis' => $jenis,
	'jumlah' => $jumlah,
	'hrg_beli' => $hbeli,
	'hrg_jual' => $hjual
    );

$CRUD->insert($table,$data);
?>