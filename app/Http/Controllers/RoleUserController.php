<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = RoleUser::all();
        return response()->json(['message' => 'Role berhasil diambil', 'status' => true, 'data' => $role]);
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

        $role = RoleUser::create($data);

        if($role){
            return response()->json(['message' => 'Data berhasil disimpan', 'status' => true, 'data' => $role]);
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
        $role = RoleUser::find($id);
        if($role){
            return response()->json(['message' => 'data berhasil ditampilkan', 'status' => true, 'data' => $role]);
        }

        return response()->json(['message' => 'data gagal ditampilkan', 'status' => false]);
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

        $category = RoleUser::where('id', $id)->update($data);
        $result = RoleUser::where('id', $id)->first();
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
        $category = RoleUser::destroy($id);
        if($category){
            return response()->json(['message' => 'Data berhasil dihapus', 'status' => true]);
        }

        return response()->json(['message' => 'Data gagal dihapus', 'status' => false]);
    }
}
