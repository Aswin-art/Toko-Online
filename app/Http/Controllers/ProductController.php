<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return response()->json(['message' => 'Data berhasil diambil', 'status' => true,'data' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $product = Product::create($data);

        if($product){
            return response()->json(['message' => 'Product berhasil dibuat', 'status' => true, 'data' => $product]);
        }

        return response()->json(['message' => 'Product gagal dibuat', 'status' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if($product){
            return response()->json(['message' => 'Data berhasil diambil', 'status' => true, 'data' => $product]);
        }

        return response()->json(['message' => 'Data gagal diambil', 'status' => false]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $product = Product::where('id', $id)->update($data);
        $result = Product::where('id', $id)->first();
        if($product){
            return response()->json(['message' => 'Data berhasil diupdate', 'status' => true, 'data' => $result]);
        }

        return response()->json(['message' => 'Data gagal diupdate', 'status' => false]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);

        if($product){
            return response()->json(['message' => 'data berhasil dihapus', 'status' => true]);
        }

        return response()->json(['message' => 'data gagal dihapus', 'status' => false]);
    }
}
