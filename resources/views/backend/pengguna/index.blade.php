@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
                        <div class="px-3 py-3">
                        <h5 class="text-muted">Data Pengguna</h5>
                        <a href="{{route('backend.pengguna.create')}}" class="btn btn-warning">
                          Tambah Pengguna
                        </a>
                        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kode Pegawai</th>
                      <th>Nama</th>
                      <th>No. Telp</th>
                      <th>Username</th>
                      <th>Bagian</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($penggunas as $pengguna)
                    <tr>
                      <td>{{$pengguna->pegawai}}</td>
                      <td>{{$pengguna->nama}}</td>
                      <td>{{$pengguna->telp}}</td>
                      <td>{{$pengguna->panggilan}}</td>     
                      <td>{{$pengguna->bagian}}</td>
                      <th>
                      <form action="{{route('backend.pengguna.delete', $pengguna->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('backend.pengguna.edit', $pengguna->id)}}" class="btn btn-outline-primary btn-sm">
                          Edit
                        </a>
                        <a href="{{route('backend.pengguna.show', $pengguna->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                         <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                      </th>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>

            </div>
        </div>
    </div>
</div>
@endsection