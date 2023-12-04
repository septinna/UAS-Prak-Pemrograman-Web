<!DOCTYPE html>
<html>
<head>
    <title>Detail Lowongan</title>
</head>
<body>
    <h1>Detail Lowongan</h1>

    <p><strong>ID:</strong> <?php echo $lowongan['id']; ?></p>
    <p><strong>Nama Perusahaan:</strong> <?php echo $lowongan['nama_perusahaan']; ?></p>
    <p><strong>Nama Lowongan:</strong> <?php echo $lowongan['nama_lowongan']; ?></p>
    <p><strong>Definisi Pekerjaan:</strong> <?php echo $lowongan['definisi_pekerjaan']; ?></p>
    <p><strong>Lokasi:</strong> <?php echo $lowongan['lokasi']; ?></p>
    <p><strong>Gaji:</strong> <?php echo $lowongan['gaji']; ?></p>
    <p><strong>Pengalaman:</strong> <?php echo $lowongan['pengalaman']; ?></p>
    <p><strong>Jenis Pekerjaan:</strong> <?php echo $lowongan['jenis_pekerjaan']; ?></p>

    <a href="<?php echo base_url('crud_lowongan'); ?>">Kembali ke Daftar Lowongan</a>
</body>
</html>
