<ul class="list-group">
	<h3 style="text-align: center">LAPORAN KARYAWAN</h3>
	<table class="Table table-bordered">
		<tr>
			<th>No</th>
			<th>Nomor Pegawai</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Status</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
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
			</tr>
		<?php endforeach; ?>
	</table>
</ul>
