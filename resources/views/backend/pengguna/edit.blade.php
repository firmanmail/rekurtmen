@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('backend.pengguna.update',  $penggunas->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Kode Pegawai</label>
                                <input type="text" name="pegawai" id="" class="form-control" placeholder="" value="{{$penggunas->pegawai}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Pengguna</label>
                                <input type="text" name="nama" id="" class="form-control" placeholder="" value="{{$penggunas->nama}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <input type="text" name="alamat" id="" class="form-control" placeholder="" value="{{$penggunas->alamat}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">No. Telp</label>
                                <input type="text" name="telp" id="" class="form-control" placeholder="" value="{{$penggunas->telp}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Username</label>
                                <input type="text" name="panggilan" id="" class="form-control" placeholder="" value="{{$penggunas->panggilan}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Bagian</label>
                                <input type="text" name="bagian" id="" class="form-control" placeholder="" value="{{$penggunas->bagian}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control" value="{{$penggunas->jenis_kelamin}}" >
                                    <option>Pilih</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tanggal Tambah</label>
                                <input type="date" name="tgl_tambah" id="" class="form-control" placeholder="" value="{{$penggunas->tgl_tambah}}">
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-danger">
                            Simpan
                        </button>
                        <a href="{{route('backend.pengguna.index')}}" class="btn btn-warning">
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