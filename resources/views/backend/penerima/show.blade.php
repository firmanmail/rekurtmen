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
                                <label for="name">Nomor Penerima</label>
                                <input type="text" name="no_penerima" id="" class="form-control" placeholder="" value="{{$penerimas->no_penerima}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nomor Test</label>
                                <input type="text" name="nomor_test" id="" class="form-control" placeholder="" value="{{$penerimas->nomor_test}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="nama" id="" class="form-control" placeholder="" value="{{$penerimas->nama}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">nilai</label>
                                <input type="text" name="nilai" id="" class="form-control" placeholder="" value="{{$penerimas->nilai}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">status</label>
                                <input type="text" name="status" id="" class="form-control" placeholder="" value="{{$penerimas->status}}">
                            </div>
                        </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection