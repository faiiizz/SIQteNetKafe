<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = DB::table('pembayaran')->get();
        return view('pembayaran',['pembayaran'=>$pembayaran]);
    }
    public function insert()
    {
        $result = DB::table('pembayaran')->insert(
            [
                'nama_pelanggan' => 'Blackshoes',
                'jumlah_uang' => 'JL.Gajah II no 45',
                'total_bayar' => '25000',
                'kembalian' => 'Purify@gmail.com',
                'notelp' => '621238779',
                'status_bayar' => 'Belum Lunas',
                'created_at' => now(),
                'updated_at' => now(),

            ]
            );
    }
    public function updatePembayaran($id)
    {
        DB::table('pembayaran')
        ->where('id',[$id])
        ->update(
            [
                "status_bayar" => "Lunas",
                "updated_at" => now(),
            ]
            );
        return redirect('/pembayaran');
    }
    
    public function deletePembayaran($id)
    {
        DB::table('pembayaran')->where('id',[$id])->delete();
        return redirect('/pembayaran');
    }
    //
}
