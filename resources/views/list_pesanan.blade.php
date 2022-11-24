@extends('layout.master')
 @section('title','Data Collection')
 @section('menuCollectionSatu','active')

 @section('content')
 <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">List Pesanan</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/insert-list_pesanan" class="btn btn-success btn-sm"><i class="fa fa-download">Insert</i> </a>
  </div><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Makanan</th>
                <th>Minuman</th>
                <th>Total harga</th>
                <th>Status Bayar</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($list_pesanan as $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->nama_pelanggan }}</td>
                    <td>{{ $val->makanan }}</td>
                    <td>{{ $val->minuman }}</td>
                    <td>{{ $val->total_harga }}</td>
                    <td>{{ $val->status_bayar }}</td>
                    <td>{{ $val->created_at }}</td>
                    <td>{{ $val->updated_at }}</td>
                    <td>
                        <a href="/updatePesanan/{{ $val->id }}" class="btn btn-warning ">Edit</a>
                        <a href="/deletePesanan/{{ $val->id }}" class="btn btn-danger ">Hapus</a>
                    </td>
                </tr>
            @empty
                <td colspan="6" class="text-center">Tidak ada data..</td>
                
            @endforelse

            </tbody>
        </table>
    </div>
 @endsection
