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

                    <form method="post" action="{{url('customer/'.$dt->id)}}">
                        @csrf
                        {{method_field('PUT')}}

                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{$dt->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Nama Customer</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputText" placeholder="Nama" value="{{$dt->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">No HP</label>
                                <input type="number" name="no_hp" class="form-control" id="exampleInputText" placeholder="No HP" value="{{$dt->no_hp}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputText" placeholder="Alamat" value="{{$dt->alamat}}">
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