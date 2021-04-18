@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('backend.penerima.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nomor Penerima</label>
                                <input type="text" name="penerima" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nomor Test</label>
                                <input type="text" name="test" id="" class="form-control" placeholder="">
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
                                <label for="name">nilai</label>
                                <input type="text" name="nil" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">status</label>
                                <input type="text" name="stts" id="" class="form-control" placeholder="">
                            </div>
                        </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-danger">
                            Simpan
                        </button>
                        <a href="{{route('backend.penerima.index')}}" class="btn btn-warning">
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