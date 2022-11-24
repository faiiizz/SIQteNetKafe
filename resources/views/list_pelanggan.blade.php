@extends('layout.master')
 @section('title','Data Collection')
 @section('menuCollectionSatu','active')

 @section('content')
 <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">List Pelanggan</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/insert-list_pelanggan" class="btn btn-success btn-sm"><i class="fa fa-download">Insert</i> </a>
    </div><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>No.Telpon</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($list_pelanggan as $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->nama_pelanggan }}</td>
                    <td>{{ $val->alamat }}</td>
                    <td>{{ $val->notelp }}</td>
                    <td>{{ $val->email }}</td>
                    <td>{{ $val->created_at }}</td>
                    <td>{{ $val->updated_at }}</td>
                    <td>
                        <a href="/updatePelanggan/{{ $val->id }}" class="btn btn-warning ">Edit</a>
                        <a href="/deletePelanggan/{{ $val->id }}" class="btn btn-danger ">Hapus</a>
                    </td>
                </tr>
            @empty
                <td colspan="6" class="text-center">Tidak ada data..</td>
                
            @endforelse

            </tbody>
        </table>
    </div>
 @endsection
