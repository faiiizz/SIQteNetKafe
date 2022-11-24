@extends('layout.master')
 @section('title','Data Collection')
 @section('menuCollectionSatu','active')

 @section('content')
 <div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Minuman</h1>
    <div class="btn-group" role="group" aria-label="Basic example">
    <a href="/insert-minuman" class="btn btn-success btn-sm"><i class="fa fa-download">Insert</i> </a></div><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Minuman</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Sisa</th>
                <th>Ukuran</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($minuman as $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->nama_minuman }}</td>
                    <td>{{ $val->harga }}</td>
                    <td>{{ $val->jumlah }}</td>
                    <td>{{ $val->sisa }}</td>
                    <td>{{ $val->ukuran }}</td>
                    <td>{{ $val->created_at }}</td>
                    <td>{{ $val->updated_at }}</td>
                    <td>
                        <a href="/updateMinuman/{{ $val->id }}" class="btn btn-warning ">Edit</a>
                        <a href="/deleteMinuman/{{ $val->id }}" class="btn btn-danger ">Hapus</a>
                    </td>
                </tr>
            @empty
                <td colspan="6" class="text-center">Tidak ada data..</td>
                
            @endforelse

            </tbody>
        </table>
    </div>
 @endsection
