<?php

namespace App\Http\Controllers;

use App\Models\Bunga;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class BungaController extends Controller
{
    public function index()
    {
        $bungas = Bunga::all();
        // dd($bungas);
        return view("user.product", compact('bungas'));
    }

    public function create()
    {
        return view('user.addBunga');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Bunga::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('bunga.view')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(String $id): View
    {
        // get buku by ID
        $bunga = Bunga::findOrFail($id);

        // render view with buku
        return view('user.editBunga', compact('bunga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        $buku = Bunga::findOrFail($id);
        $buku->update([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('bunga.view')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $buku = Bunga::findOrFail($id);
        $buku->delete();
        return redirect()->route('bunga.view')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
