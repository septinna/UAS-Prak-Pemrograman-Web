<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/contact.css') ?>">
</head>
<body>
    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Kontak Informasi</h2>
                <h3 class="info-sub-title">Kami siap melayani anda selama 24 jam </h3>
                <ul class="info-details">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Kontak:</span> <a href="#">+6285768370595</a>
                    </li>
                    <li>
                        <i class="fas fa-paper-plane"></i>
                        <span>Email:</span> <a href="mailto:info@yoursite.com">sitepat@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="#">Sitepat.com</a>
                    </li>
                </ul>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="form-wrap">
                <form action="<?= base_url('/contact/save') ?>" method="POST">
                    <?= csrf_field() ?>
                    <h2 class="form-title">Silahkan Tinggalkan Pesan</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text" class="fname" name="nama_depan" placeholder="Nama Depan" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="lname" name="nama_belakang" placeholder="Nama Belakang" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="phone" name="no_hp" placeholder="No. HP" required>
                        </div>
                        <div class="form-group">
                            <textarea name="pesan" placeholder="Tulis Pesan" required></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Kirim Pesan" class="submit-button">
                </form>
            </div>
        </div>
    </section>
</body>
</html>
