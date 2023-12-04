<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lowongan</title>
</head>
<body>
    <h1>Tambah Lowongan</h1>

    <form action="<?= site_url('crud_lowongan/store') ?>" method="post">
        <label for="nama_perusahaan">Nama Perusahaan</label>
        <input type="text" name="nama_perusahaan" required><br>

        <label for="nama_lowongan">Nama Lowongan</label>
        <input type="text" name="nama_lowongan" required><br>

        <label for="definisi_pekerjaan">Definisi Pekerjaan</label>
        <textarea name="definisi_pekerjaan" required></textarea><br>

        <label for="lokasi">Lokasi</label>
        <input type="text" name="lokasi" required><br>

        <label for="gaji">Gaji</label>
        <input type="number" name="gaji" required><br>

        <label for="pengalaman">Pengalaman</label>
        <input type="text" name="pengalaman" required><br>

        <label for="jenis_pekerjaan">Jenis Pekerjaan</label>
        <input type="text" name="jenis_pekerjaan" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
