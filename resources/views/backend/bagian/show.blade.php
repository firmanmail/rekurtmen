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
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection