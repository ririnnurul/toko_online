<p>
	<a href="<?php echo base_url('admin/usser/tambah') ?>" class="btn btn-succes btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p>

<?php
//notifikasin
	if ($this->session->flashdata('sukses')) {
		echo '<p class="alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo '</div>';
	}
?>

<table class="table table-bordered" id="example1">
	<caption></caption>
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>USERNAME</th>
			<th>LEVEL</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($user as $user) { ?>
		<tr>
			<td><?php echo $no ?></td>
			<td><?php echo $user->nama ?></td>
			<td><?php echo $user->email ?></td>
			<td><?php echo $user->username ?></td>
			<td><?php echo $user->akses_level ?></td>
			<td><?php echo $user->nama ?></td>
			<td>
				<a href="<?php echo base_url('admin/user/edit/' .$user->id_user) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
				<a href="<?php echo base_url('admin/user/delete/' .$user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Akan Menghapus Data Ini?')"><i class="fa fa-trash-o"></i>Delete</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>