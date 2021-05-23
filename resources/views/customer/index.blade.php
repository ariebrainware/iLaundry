@extends('layouts.app')



@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">

          <a href="{{url('customer/add')}}" class="btn btn-info">Tambah Data</a>
          <hr>

          <table class="table table-hover" id="myTable">
            <thead>
              <tr>
                <th>No.</th>
                <th>Email</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $e=>$dt)

              <tr>
                <td>{{$e+1}}</td>
                <td>{{$dt->email}}</td>
                <td>{{$dt->nama}}</td>
                <td>{{$dt->no_hp}}</td>
                <td>{{$dt->alamat}}</td>
                <td>{{date('d F Y H:i:s', strtotime($dt->created_at))}}</td>
                <td>{{date('d F Y H:i:s', strtotime($dt->updated_at))}}</td>
                <td>
                  <!-- Button trigger modal -->
                  <div>
                    <a class="btn btn-success btn-sm" href="{{ url('customer/'.$dt->id) }}">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-dataid="{{$dt->id}}" data-toggle="modal" data-target="#delete">
                      Delete
                    </button>
                  </div>
              </tr>
              @endforeach
            </tbody>

          </table>

          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection