
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href={{ asset('assets/bootstrap/css/bootstrap.min.css')}}>
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
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama Produk</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama produk">
        </div>
        <div class="form-group">
            <label for="category">Kategori</label>
            <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan kategori">
        </div>
        <div class="form-group">
            <label for="price">Harga</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan harga">
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Masukkan jumlah">
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <tbody>
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
    </tbody>

</body>
</html>
<script src={{asset('assets/bootstrap/js/bootstrap.min.js')}}></script>
