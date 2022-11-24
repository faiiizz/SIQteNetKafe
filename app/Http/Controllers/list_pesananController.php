<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class list_pesananController extends Controller
{
    public function index()
    {
        $list_pesanan = DB::table('list_pesanan')->get();
        return view('list_pesanan',['list_pesanan'=>$list_pesanan]);
    }
    public function insert()
    {
        $result = DB::table('list_pesanan')->insert(
            [
                'nama_pelanggan' => 'Ilham Pramudia',
                'makanan' => 'Mie Rebus Dadar',
                'minuman' => 'Teh Panas',
                'total_harga' => 15000,
                'status_bayar' => 'Lunas',
                'created_at' => now(),
                'updated_at' => now(),

            ]
            );
    }
    public function updatePesanan($id)
    {
        DB::table('list_pesanan')
        ->where('id',[$id])
        ->update(
            [
                "minuman" => "Teh Panas",
                "updated_at" => now(),
            ]
            );
        return redirect('/list_pesanan');
    }
    
    public function deletePesanan($id)
    {
        DB::table('list_pesanan')->where('id',[$id])->delete();
        return redirect('/list_pesanan');
    }
    //
}
