<?php

$id=$_GET['id'];
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

$where = array(
    'id =' => $id
    );

$CRUD->delete($table,$where);
?>