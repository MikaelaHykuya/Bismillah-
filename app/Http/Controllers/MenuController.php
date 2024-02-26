<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use App\Models\Gallery;
use App\Models\Chef;
use App\Models\Menu;

class MenuController extends Controller
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
        $menus = Menu::all();
        return view ('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_menu' => 'required|integer',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'description' => 'nullable',
            'price' => 'required|string',
        ]);

       
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('menu_images'), $imageName);

        $menu = new Menu([
            'no_menu' => $request->input('no_menu'),
            'title' => $request->input('title'),
            'image' => $imageName,
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $menu->save();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan');
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
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
    
        $request->validate([
            'no_menu' => 'required|integer',
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'description' => 'nullable',
            'price' => 'required|string',
        ]);
    
        // Hapus gambar lama jika ada gambar baru yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama sebelum menyimpan yang baru
            Storage::delete($menu->image);
        
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('menus_image'), $imageName);
            $menu->update(['image' => 'menus_image/'.$imageName]);
        }
    
        $menu->update([
            'no_menu' => $request->input('no_menu'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);
    
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        Storage::delete($menu->image);
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus');
    }
    
}
