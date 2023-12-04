<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Team Section</title>



  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">SiTepat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('index_view') ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('premium') ?>">Premium</a>
            </li>
            <li class="nav-item">
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Lowongan Pekerjaan</h2>
        <div class="underline"></div>
        <p>Rekomendasi Pekerjaan Terbaik Bulan Ini.</p>
      </div>

      <div class="row">
      <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v18_200.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Editor Vidio dan Animasi</h4>
              <span>Pixel Corporation</span>
              <p>Membuat konten vidio untuk kebutuhan iklan produk.</p>
              <p><i class="bi bi-geo"></i> Bandung</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 2.500.000</p>
              <p><i class="bi bi-briefcase"></i> 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Part Time</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- Tambahkan 9 card yang serupa di sini -->
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v18_216.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Apoteker</h4>
              <span>RS. Pelita Harapan</span>
              <p>Meracik obat sesuai resep yang telah diberikan dokter.</p>
              <p><i class="bi bi-geo"></i> Yogyakarta</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 3.000.000</p>
              <p><i class="bi bi-briefcase"></i> 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Magang</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v35_242.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Guru Matematika</h4>
              <span>SMA Tunas Bangsa</span>
              <p>Membimbing, mengajar, dan menginspirasi siswa dalam menguasai konsep matematika yang kompleks.</p>
              <p><i class="bi bi-geo"></i> Semarang</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 3.000.000 - 4.000.000</p>
              <p><i class="bi bi-briefcase"></i> Kurang dari 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Magang</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v35_253.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Resepsionis</h4>
              <span>Amaris Hotel</span>
              <p>Menyambut dan melayani tamu dengan ramah, mengelola reservasi, dan menyediakan informasi yang akurat.</p>
              <p><i class="bi bi-geo"></i> Bogor</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 4.000.000</p>
              <p><i class="bi bi-briefcase"></i> 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Full Time</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tambahkan 6 card lagi di sini -->
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v35_227.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Digital Marketing</h4>
              <span>PT. Nusa Indah</span>
              <p>Mengembangkan strategi pemasaran digital yang efektif .</p>
              <p><i class="bi bi-geo"></i> Jakarta</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 4.000.000</p>
              <p><i class="bi bi-briefcase"></i> Kurang dari 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Full Time</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tambahkan 5 card lagi di sini -->
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="teampic"><img src="<?= base_url('assets/images/v35_265.png') ?>" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Waiters</h4>
              <span>BlueHeron</span>
              <p>Melayani customer dengan ramah sesuai SOP restaurant.</p>
              <p><i class="bi bi-geo"></i> Surabaya</p>
              <p><i class="bi bi-currency-dollar"></i> Rp 1.000.000</p>
              <p><i class="bi bi-briefcase"></i> Kurang dari 1 Tahun</p>
              <p><i class="bi bi-clock-fill"></i> Part Time</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div> 



      </div>
    </div>
  </section>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<style>
  .team .member {
    position: relative;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    border-radius: 5px;
    background: #794c08;
  }

  .team .member .teampic {
    overflow: hidden;
    width: 180px;
    border-radius: 50%;
  }

  .team .member .member-info {
    padding-left: 30px;
  }

  .team .member h4 {
    font-weight: 700;
    margin-bottom: 5px;
    font-size: 20px;
    color: tomato;
  }

  .team .member span {
    display: block;
    font-size: 15px;
    padding-bottom: 10px;
    position: relative;
    font-weight: 500;
  }

  .team .member span::after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 2px;
    background: black;
    bottom: 0;
    left: 0;
  }

  .team .member p {
    margin: 10px 0 0 0;
    font-size: 14px;
  }

  .team .member .social {
    margin-top: 12px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }

  .team .member .social a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background: #f8f3ef;
  }

  .team .member .social a i {
    color: tomato;
    font-size: 16px;
    margin: 0 2px;
  }

  .team .member .social a:hover {
    background: tomato;
  }

  .team .member .social a:hover i {
    color: #fff;
  }

  .team .member .social a+a {
    margin-left: 8px;
  }

  section {
    padding: 60px 0;
    overflow: hidden;
  }

  .section-title {
    text-align: center;
    padding-bottom: 30px;
  }

  .section-title h2 {
    font-size: 32px;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
  }

  .section-title h2::after {
    content: "";
    position: absolute;
    display: block;
    width: 50px;
    height: 2px;
    background: #000;
    bottom: 0;
    left: calc(50% - 25px);
  }

  .section-title p {
    margin-bottom: 0;
    margin-top: 20px;
    font-size: 18px;
    font-weight: 600;
    color: #777;
  }

  .underline {
    position: absolute;
    display: block;
    width: 80px;
    height: 3px;
    background: tomato;
    bottom: -10px;
    left: calc(50% - 40px);
  }

  @media (max-width: 768px) {
    .team .member .teampic {
      width: 100px;
    }

    .team .member .member-info {
      padding-left: 15px;
    }

    .section-title h2 {
      font-size: 28px;
    }
  }
</style>
