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
?>
<table class="table table-bordered" id="dataTables-example">
<thead>
    <tr>
        <th>No.</th>
        <th>Id</th>
        <th>Nama Brg</th>
        <th>Jenis</th>
        <th>Jumlah</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
<?php
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
        <a data-toggle="modal" href="#alert" onclick="hapus('<?=$value['id']?>');" >
        	<i class="fa fa-trash"></i> Delete
        </a>
	</td>
<?php
    echo "</tr>";
	$i = $i+1;
}
?>
     </tbody>
</table>
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
$(document).ready(function() {
    $('#dataTables-example').dataTable();
});
</script>