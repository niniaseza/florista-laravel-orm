<?php
namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();
        return view('flowers.index', compact('flowers'));
    }

    public function show($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.show', compact('flower'));
    }

    public function create()
    {
        return view('flowers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);
        Flower::create($request->all());
        return redirect()->route('flowers.index')->with('success', 'Bunga berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        return view('flowers.edit', compact('flower'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);
        $flower = Flower::findOrFail($id);
        $flower->update($request->all());
        return redirect()->route('flowers.index')->with('success', 'Bunga berhasil diupdate!');
    }

    public function destroy($id)
    {
        Flower::findOrFail($id)->delete();
        return redirect()->route('flowers.index')->with('success', 'Bunga berhasil dihapus!');
    }
}