<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Model\TiketAdmin;
use Illuminate\Support\Facades\DB;

class TiketAdminControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $tiketAdmin = DB::table('tiket')->get();   
        return view ('admin.index', compact('tiketAdmin'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try 
        {
            DB::table('tiket')->insert([
                'id_tiket' => $request ->id_tiket,
                'jenis_tiket' => $request ->jenis_tiket,
                'nama_konser' => $request ->nama_konser,
                'jadwal' => $request ->jadwal,
                'stok' => $request ->stok,
                'harga' => $request ->harga,
                ]); 
            return  redirect('admin_tiket')-> with ('status', 'Tiket Konser  berhasil ditambah..'); 
        } 
                catch(\Illuminate\Database\QueryException $ex){ 
                // dd($ex->getMessage());
                return  redirect('admin_tiket')-> with ('status', 'Tiket Konser gagal ditambah..'); 
            } 
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
    public function edit(string $id_tiket)
    {
        
        $tiketAdmin = DB::table('tiket')->where('id_tiket', $id_tiket)->first();  
        return view('admin.edit',compact('tiketAdmin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_tiket)
    {
        
        $tiketAdmin = DB::table('tiket')->where('id_tiket', $id_tiket)->first();  
        $affected = DB::table('tiket')->where('id_tiket', $id_tiket)->update([
            'jenis_tiket' => $request ->jenis_tiket,
            'nama_konser' => $request ->nama_konser,
            'jadwal' => $request ->jadwal,
            'stok' => $request ->stok,
            'harga' => $request ->harga,
        ]);  
        return  redirect('admin_tiket')-> with ('status', 'Tiket Konser berhasil diubah..'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_tiket)
    {
        $tiketAdmin = DB::table('tiket')->where('id_tiket', $id_tiket)->delete();  
        return  redirect('admin_tiket')-> with ('status', 'Tiket Konser berhasil dihapus..');
    }
}
