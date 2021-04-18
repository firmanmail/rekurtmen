@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12">
                <div class="px-3 py-3">
                        <h5 class="text-muted">Pelamar</h5>
                        <a href="{{route('backend.pelamar.create')}}" class="btn btn-warning">
                          Tambah Pelamar
                        </a>
                        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>No. Test</th>   
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Pendidikan Akhir</th>
                      <th>Telephone</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>   
                    @foreach($pelamars as $pelamar)
                    <tr>
                      <td>{{$pelamar->kode}}</td>     
                      <td>{{$pelamar->nama}}</td>
                      <td>{{$pelamar->alamat}}</td>                     
                      <td>{{$pelamar->pendidikan}}</td>
                      <td>{{$pelamar->telpon}}</td>
                      <th>
                      <form action="{{route('backend.pelamar.delete', $pelamar->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('backend.pelamar.edit', $pelamar->id)}}" class="btn btn-outline-primary btn-sm">
                          Edit
                        </a>
                        <a href="{{route('backend.pelamar.show', $pelamar->id)}}" class="btn btn-outline-success btn-sm">Show</a>
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