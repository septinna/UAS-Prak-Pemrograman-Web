<!-- contact_read.php -->
<?php
include('templates/header.php'); 
include('templates/navbar.php'); 
?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Kontak</title>
</head>
<body>
    <style>
        /* CSS code */

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table td button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
        }

        table td button:hover {
            background-color: #d32f2f;
        }

        .alert {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
    <h1>Data Kontak</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Depan</th>
                <th>Nama Belakang</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['nama_depan'] ?></td>
                    <td><?= $contact['nama_belakang'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['no_hp'] ?></td>
                    <td><?= $contact['pesan'] ?></td>
                    <td>
                        <form action="/pages/contactread/delete/<?= $contact['id'] ?>" method="post" id="deleteForm<?= $contact['id'] ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" onclick="confirmDelete(<?= $contact['id'] ?>)">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(contactId) {
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin ingin menghapus data ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form
                    document.getElementById('deleteForm' + contactId).submit();
                }
            });
        }
    </script>
</body>
</html>

<?php
include('templates/scripts.php');
include('templates/footer.php');
?>
