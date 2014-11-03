<?php 
// Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
include "../model/crud.php";

// menginisiasi Class CRUD
$CRUD = new CRUD();

// Mengambil data user
// ==============================================
// @method : Format
// get_data($table,$orderBy,$orderType,$limit);
// @return Array

$rows = $CRUD->get_data('barangnya','id','ASC');
$i = 1;
// Menampilkan data user yang berhasil di ambil
foreach ($rows as $value) {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$value['id']."</td>";
    echo "<td>".$value['nama']."</td>";
    echo "<td>".$value['jenis']."</td>";
    echo "<td>".$value['jumlah']."</td>";
    echo "<td>".$value['hrg_beli']."</td>";
    echo "<td>".$value['hrg_jual']."</td>";
?>
	<td align="right">
		<a data-toggle="modal" href='#modal-id' onclick="edit('<?=$value['id']?>','<?=$value['nama'] ?>','<?=$value['jenis'] ?>','<?=$value['jumlah'] ?>','<?=$value['hrg_beli'] ?>','<?=$value['hrg_jual'] ?>');">
			<i class="fa fa-pencil"></i> Edit
		</a> |
        <a href="" onclick="hapus('<?=$value['id']?>');" >
        	<i class="fa fa-trash"></i> Delete
        </a>
	</td>
<?php
    echo "</tr>";
	$i = $i+1;
}
?>