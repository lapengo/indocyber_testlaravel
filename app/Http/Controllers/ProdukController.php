<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
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

        $validatedData = $this->validate($request,[
            'nama_produk' => 'require|string|max:255',
            'harga'       => 'require|numeric',
            'stok'        => 'require|numeric',
            'image'       => 'require',
        ]);


        if ($validatedData->fails()) {
            return redirect('post/create')
                ->withErrors($validatedData)
                ->withInput();
        }


        $new_produk = new Produk;
        $new_produk->nama_produk = $request->get('nama_produk');
        // $new_produk->image = $request->get('image');
        $new_produk->harga = $request->get('harga');
        $new_produk->stok = $request->get('stok');


        $cover = $request->file('image');

        if($cover){

            $tujuan_upload = 'produk-image';
            $cover->move($tujuan_upload,$cover->getClientOriginalName());

            // $image_path =  $cover->store('produk-image', 'public');
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

        $produk->nama_produk = $request->get('nama_produk');
        // $new_produk->image = $request->get('image');
        $produk->harga = $request->get('harga');
        $produk->stok = $request->get('stok');


        $cover = $request->file('image');

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
