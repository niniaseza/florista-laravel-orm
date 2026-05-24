<?php
namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\Category;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::with('category')->get();
        $categories = Category::all();
        return view('flowers.index', compact('flowers', 'categories'));
    }

    public function show($id)
    {
        $flower = Flower::with('category')->findOrFail($id);
        return view('flowers.show', compact('flower'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('flowers.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $category = Category::find($request->category_id);
        Flower::create([
            'nama' => $request->nama,
            'jenis' => $category->name,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('flowers.index')->with('success', 'Flower added successfully!');
    }

    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        $categories = Category::all();
        return view('flowers.edit', compact('flower', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'category_id' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $flower = Flower::findOrFail($id);
        $category = Category::find($request->category_id);
        $flower->update([
            'nama' => $request->nama,
            'jenis' => $category->name,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('flowers.index')->with('success', 'Flower updated successfully!');
    }

    public function destroy($id)
    {
        $flower = Flower::findOrFail($id);
        $flower->delete();
        return redirect()->route('flowers.index')->with('success', 'Flower deleted successfully!');
    }

    public function byCategory($id)
    {
        $category = Category::findOrFail($id);
        $flowers = Flower::where('category_id', $id)->get();
        $categories = Category::all();
        return view('flowers.index', compact('flowers', 'categories', 'category'));
    }
}