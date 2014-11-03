<?php
$id=$_GET['id'];
$nama=$_GET['nama'];
$jenis=$_GET['jenis'];
$jumlah=$_GET['jumlah'];
$hbeli=$_GET['hbeli'];
$hjual=$_GET['hjual'];
// Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
include "../model/crud.php";

// menginisiasi Class CRUD
$CRUD = new CRUD();

// Mengupdate data user
// ==============================================
// insert($table,$data);
//
// @return Array

$table = 'barangnya';
$data = array(
	'nama' => $nama,
	'jenis' => $jenis,
	'jumlah' => $jumlah,
	'hrg_beli' => $hbeli,
	'hrg_jual' => $hjual
    );

$where = array(
    'id =' => $id
    );

$CRUD->update($table,$data,$where);
?>