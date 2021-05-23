@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">

                    <form method="post" action="{{url('customer/add')}}">
                        @csrf

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Customer</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Customer">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">No HP</label>
                                <input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="No HP">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText1">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInput1" placeholder="Alamat">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a herf="{{url('customer')}}" class="btn btn-success">Kembali</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection