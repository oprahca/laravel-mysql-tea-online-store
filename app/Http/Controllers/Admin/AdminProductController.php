<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Leaf Tea House Online Store - Admin Page - Product";
        $viewData['products'] = Product::all();
        return view('admin.product.index')->with("viewData",$viewData);
    }

    public function store(Request $request) 
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|float|gt:0",
            "image" => "image",
        ]);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage('game.png');
        $newProduct->save();

        // $createData = $request->only(['name','description','price']);
        // $createData['image'] = "game.png";
        // Product::created($createData);

        if($request->hasFile('image'))
        {
            $imageName = $newProduct->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }
        
        return back();
    }

    public function delete($id) 
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData['title'] = "Leaf Tea House - Edit Product";
        $viewData['product'] = Product::findOrFail($id);
        return view('admin.product.edit')->with('viewData',$viewData);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|float|gt:0",
            "image" => "image",
        ]);

        $currentProduct = Product::findOrFail($id);
        $currentProduct->setName($request->input('name'));
        $currentProduct->setDescription($request->input('description'));
        $currentProduct->setPrice($request->input('price'));

        if($request->hasFile('image'))
        {
            $imageName = $currentProduct->getId() . "." . $request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $currentProduct->setImage($imageName);
        }

        $currentProduct->save();
        return redirect()->route('admin.product.index');
    }
}