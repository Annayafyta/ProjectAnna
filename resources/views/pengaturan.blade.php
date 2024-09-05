<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: #008080;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #ddd;
            display: block;
        }
        .sidebar a:hover {
      background-color: #0e4848;

        }
        .sidebar h4{
            color: #ffffff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Dashboard</h4>
        <a href="/home">Home</a>
        <a href="/lp">Produk</a>
        <a href="/pesanan">Pesanan</a>
        <a href="#">Pelanggan</a>
        <a href="#">Laporan</a>
        <a href="#">Pengaturan</a>
    </div>

    <div class="main-content">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1>Dashboard Overview</h1>
            <div>
              <button class="btn btn-primary">Notifikasi</button>
              <a href="/"><button class="btn btn-primary">Logout</button></a>
            </div>
          </header>

        <h2 class="mb-4">Settings</h2>

        <div class="card mb-4">
            <div class="card-header">
                <h5>Pengaturan Akun</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" class="form-control" id="username" value="hanna">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" value="hanna@example.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h5>Pengaturan Tampilan</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="theme">Tema</label>
                        <select class="form-control" id="theme">
                            <option>Default</option>
                            <option>Dark Mode</option>
                            <option>Light Mode</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Bahasa</label>
                        <select class="form-control" id="language">
                            <option>Indonesia</option>
                            <option>English</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5>Pengaturan Keamanan</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="twoFactorAuth">Otentikasi Dua Faktor</label>
                        <select class="form-control" id="twoFactorAuth">
                            <option>Nonaktif</option>
                            <option>Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="backupEmail">Email Cadangan</label>
                        <input type="email" class="form-control" id="backupEmail" value="backup@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
