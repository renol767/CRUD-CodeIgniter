
<h2><?= $title;?></h2>

<!-- Validasi Form -->
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('karyawan/create'); ?>
<!-- Membuat Form Group -->
<div class="form-group">
    <label>Nomor Pegawai</label>
	<input type="text" class="form-control" name="no_pegawai" placeholder="Nomor Pegawai">

    <label>Nama</label>
	<input type="text" class="form-control" name="nama" placeholder="Nama">

    <label>Jenis Kelamin</label>
    <select class="custom-select", name="jk">
        <option selected hidden>Jenis Kelamin</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>Status</label>
    <label>Jenis Kelamin</label>
    <select class="custom-select", name="status">
        <option selected hidden>Status</option>
        <option value="Menikah">Menikah</option>
        <option value="Belum Menikah">Belum Menikah</option>
    </select>

    <label>Tanggal Lahir</label>
	<input type="date" class="form-control" name="tgllahir" placeholder="Tanggal Lahir">

    <label>Alamat</label>
	<input type="text" class="form-control" name="alamat" placeholder="Alamat">
    <label>No Handphone</label>
	<input type="text" class="form-control" name="nohp" placeholder="Alamat">
</div>
<button type="submit" class="btn btn-info">Submit</button>
</form>
