<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return response()->json(['message' => 'Data berhasil diambil', 'status' => true, 'data' => $category]);
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
            'name' => 'required'
        ]);

        $category = Category::create($data);

        if($category){
            return response()->json(['message' => 'Data berhasil disimpan', 'status' => true, 'data' => $category]);
        }

        return response()->json(['message' => 'Data gagal disimpan', 'status' => false]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        if($category){
            return response()->json(['message' => 'Data berhasil ditampilkan', 'status' => true, 'data' => $category]);
        }

        return response()->json(['message' => 'Data gagal ditampilkan', 'status' => false]);
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
            'name' => 'required'
        ]);

        $category = Category::where('id', $id)->update($data);
        $result = Category::where('id', $id)->first();

        if($category){
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
        $category = Category::destroy($id);
        if($category){
            return response()->json(['message' => 'Data berhasil dihapus', 'status' => true]);
        }

        return response()->json(['message' => 'Data gagal dihapus', 'status' => false]);
    }
}
