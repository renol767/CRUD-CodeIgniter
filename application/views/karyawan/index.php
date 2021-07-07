
<h2><?= $title; ?></h2>
<a type="button" href="<?php echo base_url(); ?>karyawan/create" class="btn btn-success btn-sm" role="button">Tambah Data</a>
<a type="button" href="<?php echo base_url(); ?>karyawan/export" class="btn btn-primary btn-sm" role="button">Export PDF</a>

<br><br>
<ul class="list-group">
<div class="form-inline form-right">
    <?php echo form_open('karyawan/search')?>
    <input type="text" name="keyword" class="form-control" placeholder="Search">
    <button type="submit" class="btn btn-success">Cari</button>
    <?php echo form_close() ?>
</div>
<div><br></div>
<table class="Table table-bordered">
		<tr>
			<th>No</th>
			<th>Nomor Pegawai</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Hp</hp>
            <th>Edit</th>
			<th>Hapus</th>
		</tr>
		<?php
		$i = 1;
		foreach ($karyawan as $row) : ?>
			<tr>
				<td><?php echo $i++?></td>
				<td><?php echo $row ['no_pegawai']; ?></td>
                <td><?php echo $row ['nama']; ?></td>
                <td><?php echo $row ['jk']; ?></td>
                <td><?php echo $row ['status']; ?></td>
                <td><?php echo $row ['tgllahir']; ?></td>
				<td><?php echo $row ['alamat']; ?></td>
                <td><?php echo $row ['nohp']; ?></td>
                <td><a href="<?php echo base_url('karyawan/edit/'.$row['id']); ?>" class="btn btn-warning">Edit</a></td>
				<td><a href="<?php echo base_url('karyawan/delete/'.$row['id']); ?>" class="btn btn-danger">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
	</table>
</ul>
