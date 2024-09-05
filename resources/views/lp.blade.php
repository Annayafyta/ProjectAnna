<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Dashboard</title>
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
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .th {
      background-color: #008080;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center text-white">Dashboard</h4>
        <a href="/home">Home</a>
        <a href="#">Produk</a>
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
                <button class="btn btn-primary ml-auto" data-toggle="modal" data-target="#addProductModal">Tambah Produk</button>
              <button class="btn btn-primary">Notifikasi</button>
              <a href="/"><button class="btn btn-primary">Logout</button></a>

            </div>
          </header>
          

        <h2 class="mb-4">Product List</h2>
        {{-- Total Data Produk:  {{$total}} --}}
        {{-- <a href="{{ route('create-produk') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a> --}}
        <table class="table table-bordered">
            <thead class="th">
                <tr>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                    {{-- @foreach ($produk as $item)
                    <tr>
                        <td>{{$key+1 }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->stok }}</td>
                    <td><img src="{{ asset('storage/foto/'.$item->foto)}}" alt="" style="width: 50px; height:50px"></td>
                        <td>
                            <a href="{{ route('produk.show', $item->id_produk) }}" class="btn btn-info">Detail</a>
                        </td>
                    </tr>
                    @endforeach --}}

                <tr>
                    <td>Gundam</td>
                    <td>Mainan</td>
                    <td>Rp400,000</td>
                    <td>50</td>
                    <td></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editProductModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>Wheels</td>
                    <td>Mainan</td>
                    <td>Rp150,000</td>
                    <td>30</td>
                    <td></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editProductModal">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card mt-5">
                                        <div class="card-header text-center">
                                            Form Produk
                                        </div>
                                        <div class="card-body">
                                            <form action="/produk/create/" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group pt-2">
                                                    <label for="productName">Nama Produk</label>
                                                    <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" name="nama_produk" value="{{old('nama_produk')}}">
                                                </div>
                                                <div class="form-group pt-2">
                                                    <label for="category">Kategori</label>
                                                    <input type="text" class="form-control" id="category" placeholder="Masukkan kategori produk" name="kategori" value="{{old('kategori')}}">
                                                </div>
                                                <div class="form-group pt-2">
                                                    <label for="price">Harga</label>
                                                    <input type="number" class="form-control" id="price" placeholder="Masukkan harga produk" name="harga" value="{{old('harga')}}">
                                                </div>
                                                <div class="form-group pt-2">
                                                    <label for="quantity">Jumlah</label>
                                                    <input type="number" class="form-control" id="quantity" placeholder="Masukkan jumlah produk" name="jumlah" value="{{old('jumlah')}}">
                                                </div>
                                                <div class="form-group pt-2">
                                                    <label for="image">Gambar</label>
                                                    <input type="file" class="form-control-file" name="foto" id="image">
                                                </div>
                                                <button type="submit" class="btn btn-secondary w-100 btn-block mt-5">SIMPAN</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(session('success'))
                <div class="alert alert-success">
                 {{ session('success') }}
                </div>
                @endif

                        {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="editProductName">Nama Produk</label>
                            <input type="text" class="form-control" id="editProductName" value="Gundam">
                        </div>
                        <div class="form-group">
                            <label for="editCategory">Kategori</label>
                            <input type="text" class="form-control" id="editCategory" value="Mainan">
                        </div>
                        <div class="form-group">
                            <label for="editPrice">Harga</label>
                            <input type="text" class="form-control" id="editPrice" value="Rp400,000">
                        </div>
                        <div class="form-group">
                            <label for="editStock">Stok</label>
                            <input type="number" class="form-control" id="editStock" value="50">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                    {{-- <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->kategori }}</td>
                            <td>Rp{{ $product->harga }}</td>
                            <td>{{ $product->stok }}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editProductModal">Edit</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> --}}
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
