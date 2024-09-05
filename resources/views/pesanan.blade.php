<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Dashboard</title>
    <!-- Bootstrap CSS -->
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
        .navbar {
            margin-bottom: 20px;
        }
        .thead{
      background-color: rgb(40, 116, 116);
      color: #fff;

        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Dashboard</h4>
        <a href="/home">Home</a>
        <a href="/lp">Produk</a>
        <a href="#">Pesanan</a>
        <a href="#">Pelanggan</a>
        <a href="#">Laporan</a>
        <a href="/setting">Pengaturan</a>
    </div>

    <div class="main-content">
        <header class="d-flex justify-content-between align-items-center mb-4">
            <h1>Pesanan</h1>
            <div>
              <button class="btn btn-primary">Notifikasi</button>
              <a href="/login"><button class="btn btn-primary">Logout</button></a>
            </div>
          </header>

        <h2 class="mb-4">Order List</h2>

        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th scope="col">No. Pesanan</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Tanggal Pesanan</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Anna</td>
                    <td>01-08-2024</td>
                    <td>Rp200,000</td>
                    <td><span class="badge badge-success">Selesai</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editOrderModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Reksa</td>
                    <td>03-08-2024</td>
                    <td>Rp150,000</td>
                    <td><span class="badge badge-warning">Dalam Proses</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editOrderModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal Edit Pesanan -->
    <div class="modal fade" id="editOrderModal" tabindex="-1" role="dialog" aria-labelledby="editOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editOrderModalLabel">Edit Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="orderNumber">No. Pesanan</label>
                            <input type="text" class="form-control" id="orderNumber" value="1" disabled>
                        </div>
                        <div class="form-group">
                            <label for="customerName">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="customerName" value="Anna">
                        </div>
                        <div class="form-group">
                            <label for="orderDate">Tanggal Pesanan</label>
                            <input type="date" class="form-control" id="orderDate" value="2024-08-01">
                        </div>
                        <div class="form-group">
                            <label for="totalAmount">Total</label>
                            <input type="text" class="form-control" id="totalAmount" value="Rp200,000">
                        </div>
                        <div class="form-group">
                            <label for="orderStatus">Status</label>
                            <select class="form-control" id="orderStatus">
                                <option selected>Selesai</option>
                                <option>Dalam Proses</option>
                                <option>Dibatalkan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
