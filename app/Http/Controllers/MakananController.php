<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index()
    {
        $makanan = DB::table('makanan')->get();
        return view('makanan',['makanan'=>$makanan]);
    }
    public function insert()
    {
        $result = DB::table('makanan')->insert(
            [
                'nama_makanan' => 'Mie Becek ',
                'harga' => 12000,
                'jumlah' => 1,
                'sisa' => 10,
                'porsi' => 'Solo',
                'created_at' => now(),
                'updated_at' => now(),

            ]
            );
    }
    public function updateMakanan($id)
    {
        DB::table('makanan')
        ->where('id',[$id])
        ->update(
            [
                "porsi" => "Double",
                "updated_at" => now(),
            ]
            );
        return redirect('/makanan');
    }
    
    public function deleteMakanan($id)
    {
        DB::table('makanan')->where('id',[$id])->delete();
        return redirect('/makanan');
    }
    //
}
