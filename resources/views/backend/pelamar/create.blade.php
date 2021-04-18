@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('backend.pelamar.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Kode Pegawai</label>
                                <input type="text" name="kode" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <input type="text" name="almt" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Pendidikan Akhir</label>
                                <input type="text" name="pendi" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Umur</label>
                                <input type="text" name="umur" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">No Telp</label>
                                <input type="text" name="telp" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Jenis Kelamin</label>
                                <select name="jk" id="" class="form-control" >
                                    <option>Pilih</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>
                            </div>
                        </div>
                    </div>  
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-danger">
                            Simpan
                        </button>
                        <a href="{{route('backend.pelamar.index')}}" class="btn btn-warning">
                          Batal
                        </a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection