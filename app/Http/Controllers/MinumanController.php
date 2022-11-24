<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanController extends Controller
{
    public function index()
    {
        $minuman = DB::table('minuman')->get();
        return view('minuman',['minuman'=>$minuman]);
    }
    public function insert()
    {
        $result = DB::table('minuman')->insert(
            [
                'nama_minuman' => 'Kopi Susu Panas',
                'harga' => 7000,
                'jumlah' => 1,
                'sisa' => 9,
                'ukuran' => 'Large',
                'created_at' => now(),
                'updated_at' => now(),

            ]
            );
    } 
      public function updateMinuman($id)
    {
        DB::table('minuman')
        ->where('id',[$id])
        ->update(
            [
                "ukuran" => "Small",
                "updated_at" => now(),
            ]
            );
        return redirect('/minuman');
    }
    
    public function deleteMinuman($id)
    {
        DB::table('minuman')->where('id',[$id])->delete();
        return redirect('/minuman');
    }
    //
}
