<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Produk;

class ProdukController extends Controller
{

    public function __construct()
    {
        $check = $this->middleware('auth'); 
    }

    public function index()
    {
        $produk = Produk::paginate(10);
        return view('produk.index', ['data' => $produk]);
    }

    public function create()
    {
        return view('produk.add');
    }


    public function store(Request $request)
    {

        \Validator::make($request->all(), [
            'nama_produk' => 'required|unique:tbl_produk|string|max:255',
            'harga'       => 'required|numeric|regex:/^[0-9]+$/',
            'stok'        => 'required|numeric|regex:/^[0-9]+$/',
            'image'       => 'required|mimes:(jpg,jpeg|max:5120',
        ])->validate();


        $new_produk = new Produk;
        $new_produk->nama_produk    = $request->get('nama_produk'); 
        $new_produk->harga          = $request->get('harga');
        $new_produk->stok           = $request->get('stok');


        $cover = $request->file('image');

        if($cover){
            $tujuan_upload = 'produk-image';
            $cover->move($tujuan_upload,$cover->getClientOriginalName());
            $new_produk->image = $cover->getClientOriginalName();
        }


        $new_produk->save();
        return redirect()->route('produk.index')->with('status1', 'Produk berhasil disimpan');

    }

    public function show($id)
    {
        $data = Produk::findOrFail($id);

        return view('produk.show', ['produk' => $data]);
    }

    public function edit($id)
    {
        $edit = Produk::findOrFail($id);
        return view('produk.edit', ['produk' => $edit]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        
        \Validator::make($request->all(), [
            'nama_produk' => 'required|string|max:255',
            'harga'       => 'required|numeric|regex:/^[0-9]+$/',
            'stok'        => 'required|numeric|regex:/^[0-9]+$/',
            'image'       => 'mimes:(jpg,jpeg|max:5120',
        ])->validate();


        $produk->nama_produk = $request->get('nama_produk'); 
        $produk->harga       = $request->get('harga');
        $produk->stok        = $request->get('stok');

        $cover               = $request->file('image');

        if($cover){
            $image_path =  $cover->store('produk-image', 'public');
            $produk->image = $image_path;
        }


        $produk->save();
        return redirect()->route('produk.edit', ['id' => $id])->with('status', 'Data Produk berhasil diupdate');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect()->route('produk.index')
        ->with('status', 'Produk Berhasil diHapus');
    }
}
