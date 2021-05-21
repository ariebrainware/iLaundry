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
                    
                    <form method="post" action="{{url('paket-laudry/add')}}">
                        @csrf

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Paket</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Paket">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Harga Paket / KG</label>
                            <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a herf="{{url('paket-laundry')}}" class="btn btn-success">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

