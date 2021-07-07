<div class="container-fluid">
	<h2><?= $title; ?></h2>
	<?php foreach ($karyawan as $row ) : ?>
		<form action="<?php echo base_url(). 'karyawan/update'; ?>" method="post">

	<div class="form-group">
    <label>Nomor Pegawai</label>
    <input type="hidden" name="id" value="<?php echo $row->id ?>">
	<input type="text" class="form-control" name="no_pegawai" placeholder="Nomor Pegawai" value="<?php echo $row->no_pegawai ?>">

    <label>Nama</label>
	<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $row->nama ?>">

    <label>Jenis Kelamin</label>
    <select class="custom-select", name="jk">
        <option selected hidden>Jenis Kelamin</option>
        <?php if ($row->jk == "Laki - Laki"): ?>
        <option selected value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
        <?php endif ?>
        <?php if ($row->jk == "Perempuan"): ?>
        <option value="Laki - Laki">Laki - Laki</option>
        <option selected value="Perempuan">Perempuan</option>
        <?php endif ?>
    </select>

    <label>Status</label>
	<select class="custom-select", name="status">
        <option selected hidden>Status</option>
        <?php if ($row->status == "Menikah"): ?>
        <option selected value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
        <?php endif ?>
        <?php if ($row->status == "Belum Menikah"): ?>
        <option value="Menikah">Menikah</option>
        <option selected value="Belum Menikah">Belum Menikah</option>
        <?php endif ?>
    </select>

    <label>Tanggal Lahir</label>
	<input type="date" class="form-control" name="tgllahir" placeholder="Tanggal Lahir" value="<?php echo $row->tgllahir ?>">

    <label>Alamat</label>
	<input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $row->alamat ?>">

    <label>No Handphone</label>
	<input type="text" class="form-control" name="nohp" placeholder="Alamat" value="<?php echo $row->nohp ?>">
	</div>
	<button type="submit" class="btn btn-info">Submit</button>
	</form>
	<?php endforeach; ?>
