<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id"=>"1","name"=>"Osmanthus Flower Blend Oolong Tea","description"=>"Uniquely sweet and buttery fragrance that makes it not only delicious to drink as part of a tea blend, it also gives out a relaxing aroma.","image"=>"tea01.jpg","price"=>"16.28"],
    //     ["id"=>"2","name"=>"Mint Lemongrass Blend Oolong Tea","description"=>"Combined with mint, this blend leave your mouth feeling light and refreshing, good to pair with meat or any kind of heavy flavor food.","image"=>"tea02.jpg","price"=>"16.28"],
    //     ["id"=>"3","name"=>"Jasmine Blend Oolong Tea","description"=>"Flower tea with an inviting floral scent and a clean, strong taste, the flavor of jasmine blossoms overlaying earthy oolong undertones.","image"=>"tea03.jpg","price"=>"16.28"],
    //     ["id"=>"4","name"=>"Three Leafs Tea Hand Roasted Rose Blend Oolong Tea","description"=>"Taste smoothly with mild oolong floral flavor continuing into a sweet aftertaste.","image"=>"tea04.jpg","price"=>"16.28"],
    //     ["id"=>"5","name"=>"Butterfly Pea Flower Blend Oolong Tea","description"=>"Sips in sweet, kind of fluffy mouth feel and light. There is a light sour aftertaste, on the similar vibe to other herbals.","image"=>"tea05.jpg","price"=>"16.28"],
    //     ["id"=>"6","name"=>"Chamomile Blend Oolong Tea","description"=>"Inviting floral scent and a clean, strong taste, the flavor of refreshing flower blossoms overlaying earthy oolong undertones.","image"=>"tea06.jpg","price"=>"16.28"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Leaf Tea House - Product";
        $viewData['subtitle'] = "List of products";
        $viewData['products'] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = $product->getName() . " - Leaf Tea House";
        $viewData['subtitle'] = $product->getName();
        $viewData['product'] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
