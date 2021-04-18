@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="px-3 py-3">
                        <h5 class="text-muted">Data Bagian / Departemen</h5>
                        <a href="{{route('backend.bagian.create')}}" class="btn btn-warning">
                          Tambah Bagian
                        </a>
                        <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Kode Bagian</th>
                      <th>Nama Departemen</th>
                      <th>Kepala Bagian</th>
                      <th>Lokasi</th>
                      <th>Options</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($bagians as $bagian)
                    <tr>
                      <td>{{$bagian->kode}}</td>
                      <td>{{$bagian->depart}}</td>
                      <td>{{$bagian->kepala}}</td>
                      <td>{{$bagian->lok}}</td>
                      <th><form action="{{route('backend.bagian.delete', $bagian->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('backend.bagian.edit', $bagian->id)}}" class="btn btn-outline-primary btn-sm">
                          Edit
                        </a>
                        <a href="{{route('backend.bagian.show', $bagian->id)}}" class="btn btn-outline-success btn-sm">Show</a>
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