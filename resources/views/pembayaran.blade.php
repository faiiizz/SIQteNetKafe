@extends('layout.master')
 @section('title','Data Collection')
 @section('menuCollectionSatu','active')

 @section('content')
 <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">List Pembayaran</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/insert-pembayaran" class="btn btn-success btn-sm"><i class="fa fa-download">Insert</i> </a>
  </div><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Jumlah Uang</th>
                <th>Total Bayar</th>
                <th>Kembalian</th>
                <th>No.Telpon</th>
                <th>Status Bayar</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembayaran as $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->nama_pelanggan }}</td>
                    <td>{{ $val->jumlah_uang }}</td>
                    <td>{{ $val->total_bayar }}</td>
                    <td>{{ $val->kembalian }}</td>
                    <td>{{ $val->notelp }}</td>
                    <td>{{ $val->status_bayar }}</td>
                    <td>{{ $val->created_at }}</td>
                    <td>{{ $val->updated_at }}</td>
                    <td>
                        <a href="/updatePembayaran/{{ $val->id }}" class="btn btn-warning ">Edit</a>                  
                        <a href="/deletePembayaran/{{ $val->id }}" class="btn btn-danger ">Hapus</a>
                    </td>
                </tr>
            @empty
                <td colspan="6" class="text-center">Tidak ada data..</td>
                
            @endforelse

            </tbody>
        </table>
    </div>
 @endsection
