<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        $data['products'] = Product::orderBy('id','desc')->get();
        return view('product.index', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        Product::create($request->post());
        return redirect()->route('product.index')->with('success','Created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [];
        $data['products'] = Product::findOrFail($id);
        return view('product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateProductRequest $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
        ]);

        $query = Product::findOrFail($id);
        $query->update($request->all());

        return redirect()->route('product.index')->with('success','Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = Product::findOrFail($id);
        $query->delete();
        return redirect()->route('product.index')->with('success','Deleted successfully');
    }
}
