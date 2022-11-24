<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class list_pelangganController extends Controller
{
    public function index()
    {
        $list_pelanggan = DB::table('list_pelanggan')->get();
        return view('list_pelanggan',['list_pelanggan'=>$list_pelanggan]);
    }
    public function insert()
    {
        $result = DB::table('list_pelanggan')->insert(
            [
                'nama_pelanggan' => 'Rizki Pratama',
                'alamat' => 'JL.Puyuh no 69',
                'notelp' => '62164854',
                'email' => 'rizki@gmail.com',
                'created_at' => now(),
                'updated_at' => now(),

            ]
            );
    }
    public function updatePelanggan($id)
    {
        DB::table('list_pelanggan')
        ->where('id',[$id])
        ->update(
            [
                "notelp" => "0813423528",
                "updated_at" => now(),
            ]
            );
        return redirect('/list_pelanggan');
    }
    
    public function deletePelanggan($id)
    {
        DB::table('list_pelanggan')->where('id',[$id])->delete();
        return redirect('/list_pelanggan');
    }
    //
}
