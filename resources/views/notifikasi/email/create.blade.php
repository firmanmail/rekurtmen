@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-11">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('kirim.email')}}"  method="post">
                    @csrf
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">email</label>
                                <input type="text" name="email" id="" class="form-control" placeholder>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="py-5">
                        <button type="submit" class="btn btn-danger">
                            Kirim email
                        </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection