<table class="table table-bordered">
    <thead class="th">
        <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
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
</table>
