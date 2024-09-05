<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      background-color: rgb(40, 116, 116);
      color: #fff;
      padding-top: 20px;
    }
    .sidebar a {
      color: #fff;
      padding: 10px 20px;
      display: block;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .main-content {
      margin-left: 250px;
      padding: 20px;
    }
    .search-bar {
      margin-bottom: 20px;
    }
    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
    }
    .card-body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 150px;
    }
    .card-icon {
      font-size: 2rem;
      margin-right: 10px;
    }
    .footer {
      text-align: center;
      padding: 10px;
      background-color: #f8f9fa;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
    /* Card Colors */
    .card-product {
      background-color: #008080;
      color: #fff;
    }
    .card-customer {
      background-color: #006666;
      color: #fff;
    }
    .card-revenue {
      background-color: #004c4c;
      color: #fff;
    }
    .card-activity {
      background-color: #002f2f;
      color: #fff;
    }
    .card-events {
      background-color: #001919;
      color: #fff;
    }
    .progress-bar {
      /* transition: width 2s ease-in-out; */
      transition: width 0.5s ease-in-out;
    }

  </style>
</head>
<body>
    {{-- <div class="logo">
        <img src="{{ asset('storage/foto/logo-removebg-preview.png') }}" class="lg" alt="" style="margin-left: 50vh">
    </div> --}}
  <div class="sidebar">
    <h4 class="text-center">Dashboard</h4>
    <a href="#">Home</a>
    <a href="/lp">Produk</a>
    <a href="/pesanan">Pesanan</a>
    <a href="#">Pelanggan</a>
    <a href="#">Laporan</a>
    <a href="/setting">Pengaturan</a>
  </div>

  <div class="main-content">
    <header class="d-flex justify-content-between align-items-center mb-4">
      <h1>Dashboard Overview</h1>
      <div>
        {{-- <a href="/hom"><button class="btn btn-succes">Tampilan Pelanggan</button></a> --}}
        <button class="btn btn-primary">Notifikasi</button>
        <a href="/"><button class="btn btn-primary">Logout</button></a>
      </div>
    </header>

    <div class="search-bar">
      <input type="text" class="form-control" placeholder="Search...">

    </div>

    <div class="mb-4">
        <h4>Gundam</h4>
        <div class="progress">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
            60%
          </div>
        </div>
      </div>
      <div class="mb-4">
        <h4>Hot Wheels</h4>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
            92%
          </div>
        </div>
      </div>
      <div class="mb-4">
        <h4>Robot</h4>
        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            20%
          </div>
        </div>
      </div>
      <div class="mb-4">
        <h4>Transformers</h4>
        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
            35%
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card card-product">
          <div class="card-body d-flex">
            <div class="card-icon">
              <i class="fas fa-box"></i>
            </div>
            <div>
              <h5 class="card-title">Total Produk</h5>
              <p class="card-text">200</p>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4">
        <div class="card card-customer">
          <div class="card-body d-flex">
            <div class="card-icon">
              <i class="fas fa-users"></i>
            </div>
            <div>
              <h5 class="card-title">Total Pelanggan</h5>
              <p class="card-text">359</p>
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-4 mb-4">
        <div class="card card-revenue">
          <div class="card-body d-flex">
            <div class="card-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div>
              <h5 class="card-title">Pendapatan</h5>
              <p class="card-text">IDR 90.000.000,00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <section class="product-list">
        <h1>Product List</h1>
        <div id="product-table">

        </div>
    </section> --}}

    <div class="row">
      <div class="col-md-6 mb-4">
        <div class="card card-activity">
          <div class="card-body">
            <h5 class="card-title">Aktivitas Terkini</h5>
            <ul>
              <li>Produk baru ditambahkan</li>
              <li>Pelanggan baru mendaftar</li>
              <li>Pesanan baru diproses</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-events">
          <div class="card-body">
            <h5 class="card-title">Acara Mendatang</h5>
            <ul>
              <li>Diskon besar-besaran akhir tahun</li>
              <li>Peluncuran produk baru</li>
              <li>Webinar tentang teknologi terbaru</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-activity">
          <div class="card-body">
            <h5 class="card-title">Kekurangan</h5>
            <ul>
              <li>Produk dikembalikan karena...</li>
              <li>Rating menurun</li>
              <li>Pay Later menaik</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-activity">
          <div class="card-body">
            <h5 class="card-title">Kekurangan</h5>
            <ul>
              <li>Produk dikembalikan karena...</li>
              <li>Rating menurun</li>
              <li>Pay Later menaik</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-activity">
          <div class="card-body">
            <h5 class="card-title">Kekurangan</h5>
            <ul>
              <li>Produk dikembalikan karena...</li>
              <li>Rating menurun</li>
              <li>Pay Later menaik</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card card-activity">
          <div class="card-body">
            <h5 class="card-title">Kekurangan</h5>
            <ul>
              <li>Produk dikembalikan karena...</li>
              <li>Rating menurun</li>
              <li>Pay Later menaik</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <footer class="footer">
      &copy; 2024 Dashboard - Just Trust Me You'll Be Fine
    </footer>
  </div>


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Animasi progres bar saat halaman dimuat
      const progressBars = document.querySelectorAll('.progress-bar');
      progressBars.forEach(bar => {
        const value = bar.getAttribute('aria-valuenow');
        bar.style.width = 0; // Mulai dari 0%
        setTimeout(() => {
          bar.style.width = value + '%';
        }, 100);
      });
    });
  </script>
</body>
</html>
