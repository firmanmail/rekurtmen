@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('backend.bagian.update',  $bagians->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Kode Bagian</label>
                                <input type="text" name="kode" id="" class="form-control" placeholder="" value="{{$bagians->kode}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Kepala Bagian</label>
                                <input type="text" name="kepala" id="" class="form-control" placeholder="" value="{{$bagians->kepala}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Departemen</label>
                                <input type="text" name="depart" id="" class="form-control" placeholder="" value="{{$bagians->depart}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Lokasi</label>
                                <input type="text" name="lok" id="" class="form-control" placeholder="" value="{{$bagians->lok}}">
                            </div>
                        </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-danger">
                            Simpan
                        </button>
                        <a href="{{route('backend.bagian.index')}}" class="btn btn-warning">
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