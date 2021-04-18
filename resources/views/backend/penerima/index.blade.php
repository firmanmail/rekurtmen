@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="px-3 py-2">
                    <h4 class="font-weight-bold">Data Penerimaan</h4>
                    <a href="{{route('backend.penerima.create')}}" class="btn btn-warning">Tambah Data</a>
                </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No Penerimaan</th>
                                    <th>No Test</th>
                                    <th>Nama</th>
                                    <th>Nilai</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                        <tbody>
                            @foreach ($penerimas as $penerima)
                            <tr>
                                <td>{{$penerima->no_penerima}}</td>
                                <td>{{$penerima->nomor_test}}</td>
                                <td>{{$penerima->nama}}</td>
                                <td>{{$penerima->nilai}}</td>
                                <td>{{$penerima->status}}</td>
                                <td>
                                    <form action="{{route('backend.penerima.delete', $penerima->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                                <a href="{{route('backend.penerima.edit', $penerima->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a href="{{route('backend.penerima.show', $penerima->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                                                <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection