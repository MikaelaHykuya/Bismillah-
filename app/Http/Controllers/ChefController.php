<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
use App\Models\Gallery;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ChefController extends Controller
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
        $chefs = Chef::all();
        return view('chefs.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chefs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialty' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('chef_images'), $imageName);

        
        Chef::create([
            'name' => $request->name,
            'specialty' => $request->specialty,
            'image' => $imageName,
        ]);

        return redirect()->route('chefs.index')->with('success', 'Chef created successfully.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
        return view('chefs.show', compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chef = Chef::findOrFail($id);
        return view('chefs.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $chef = Chef::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'specialty' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama sebelum menyimpan yang baru
            Storage::delete($chef->image);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('chef_images'), $imageName);

            $chef->update([
                'name' => $request->name,
                'specialty' => $request->specialty,
                'image' => $imageName,
            ]);
        } else {
            $chef->update([
                'name' => $request->name,
                'specialty' => $request->specialty,
            ]);
        }

        return redirect()->route('chefs.index')->with('success', 'Chef updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chef = Chef::findOrFail($id);
        // Hapus gambar terkait sebelum menghapus chef
        Storage::delete($chef->image);

        $chef->delete();

    return redirect()->route('chefs.index')->with('success', 'Chef deleted successfully.');
    }

}
