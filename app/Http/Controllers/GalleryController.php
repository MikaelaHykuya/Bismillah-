<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Chef;
use App\Models\Menu;

use Illuminate\Support\Facades\View;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showHome()
    {
        $galleries = Gallery::all();
        $chefs = Chef::all();
        $menus = Menu::all();
        return View::make('home', compact('galleries', 'chefs', 'menus'));
    }
    
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            // tambahkan validasi sesuai kebutuhan
        ]); 

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imageName,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Gambar Berhasil Ditambahkan');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    $galleries = Gallery::find($id);
    return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Validasi data form jika diperlukan
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        // Perbarui data galeri
        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');

        // Periksa apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            // (Anda mungkin ingin menyimpan gambar lama sebagai backup atau menggunakan storage)

            // Simpan gambar baru
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // Simpan nama file gambar baru ke dalam basis data
            $gallery->image_path = $imageName;
        }

        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Gambar Berhasil Di Update');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $gallery = Gallery::find($id);

        if ($gallery->image) {
        \Storage::delete($gallery->image);
        }

        $gallery->delete();

    return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}   