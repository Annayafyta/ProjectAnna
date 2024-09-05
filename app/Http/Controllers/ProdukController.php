<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ProdukController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Produk::create([
            'name' => $request->name,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName,
        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function shop(){
        return view('produk.shop');
    }

    public function add(Request $request){
        $validatedata = $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }

        $produk = Produk::create([
            'id' => $request->id,
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
            'foto' => $fileName
        ]);

        if ($produk) {
            Session::flash('pesan', 'Data berhasil ditambahkan');

        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');
        }

        return redirect('pesanan');
    }

    public function index(){
        // $produk = Produk::all();
        return view('dashboard');
    }

    public function indexx()
{
    $products = Produk::all();
    return view('produk.index', compact('produk'));
}


    public function gundam(){
        return view('gundam');
    }

    public function psn(){
        return view('pesanan');
    }

    public function produk(){
        // $produk = Produk::all();
        return view('lp');
    }
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }
    public function create(){
        return view('create-produk');
    }
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama_produk' => 'required|max:100',
    //         'deskripsi' => 'nullable',
    //         'harga' => 'required|numeric',
    //         'stok' => 'required|integer',
    //         'kategori' => 'required|max:50',
    //         'gambar_produk' => 'nullable|image|max:2048',
    //     ]);

    //     Produk::create($validatedData);
    //     return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    // }

    // public function store(){
    //     return view('pesanan');
    // }
    public function seting(){
        return view('pengaturan');
    }
}

