@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Keranjang Belanja</h2>

    <table class="table table-hover shadow p-3 mb-5">
        <thead>
            <tr>
                <th scope="col">Produk</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{ asset('storage/foto/xi.png') }}" class="card-img-top" alt="Gundam Exia"></td>
                <td>Gundam Exia</td>
                <td>Rp 500.000</td>
                <td>
                    <input type="number" class="form-control" value="1" min="1">
                </td>
                <td>Rp 500.000</td>
                <td>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            <!-- Produk lain akan diulang di sini -->
        </tbody>


    </table>

    <div class="row">
        <div class="col-md-6">
            <a href="/hom" class="btn btn-outline-secondary">Lanjut Belanja</a>
        </div>
        <div class="col-md-6 text-end">
            <h4>Total: Rp 500.000</h4>
            <a href="/checkout" class="btn btn-primary">Checkout</a>
            {{-- <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p> --}}
        </div>
    </div>
</div>
@endsection
