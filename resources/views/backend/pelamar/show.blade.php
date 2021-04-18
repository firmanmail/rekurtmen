@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Kode Pegawai</label>
                                <input type="text" name="kode" id="" class="form-control" placeholder="" value="{{$pelamars->kode}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" id="" class="form-control" placeholder="" value="{{$pelamars->nama}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <input type="text" name="alamat" id="" class="form-control" placeholder="" value="{{$pelamars->alamat}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Pendidikan Akhir</label>
                                <input type="text" name="pendi" id="" class="form-control" placeholder="" value="{{$pelamars->pendidikan}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Umur</label>
                                <input type="text" name="umur" id="" class="form-control" placeholder="" value="{{$pelamars->umur}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">No Telp</label>
                                <input type="text" name="telp" id="" class="form-control" placeholder="" value="{{$pelamars->telpon}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Jenis Kelamin</label>
                                <select name="jk" id="" class="form-control" value="{{$pelamars->jenis_kelamin}}" >
                                    <option>Pilih</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                </select>
                            </div>
                        </div>
                    </div> 
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection