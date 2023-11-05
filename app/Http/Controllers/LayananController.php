<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = layanan::latest()->get();
        return view('admin.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_layanan' => 'required',
            'deskripsi_layanan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'harga' => 'required',
            'status' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/layanan', $gambar->hashName());

        layanan::create([
            'nama_layanan' => $request->nama_layanan,
            'deskripsi_layanan' => $request->deskripsi_layanan,
            'gambar' => $gambar->hashName(),
            'harga' => $request->harga,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard.index')->with(['success' => 'data kesimpen']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = layanan::findOrFail($id);
        return view('admin.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama_layanan' => 'required',
            'deskripsi_layanan' => 'required',
            'gambar' => 'image|mimes:jpeg,jpg,png|max:2048', // Perhatikan bahwa 'gambar' tidak lagi wajib
            'harga' => 'required',
            'status' => 'required',
        ]);

        $layanan = layanan::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/layanan', $gambar->hashName());

            Storage::delete('public/layanan/' . $layanan->gambar);

            $layanan->update([
                'nama_layanan' => $request->nama_layanan,
                'deskripsi_layanan' => $request->deskripsi_layanan,
                'gambar' => $gambar->hashName(),
                'harga' => $request->harga,
                'status' => $request->status,
            ]);
        } else {
            $layanan->update([
                'nama_layanan' => $request->nama_layanan,
                'deskripsi_layanan' => $request->deskripsi_layanan,
                'harga' => $request->harga,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('dashboard.index')->with(['success' => 'berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = layanan::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $post->gambar);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('dashboard.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
