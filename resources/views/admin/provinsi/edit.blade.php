@extends('layouts.backend')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            Form Edit Data Provinsi
        </div>
        <div class="card-body">
            <form action="{{ url('provinsi/update/'.$provinsi->id ) }}" method="POST">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="kode_provinsi" class="control-label">Kode Provinsi</label>
                        <input type="text" name="kode_provinsi" id="kode_provinsi" value="{{$provinsi->kode_provinsi}}" class="form-control @error('kode_provinsi') is-invalid @enderror" value="{{ old('kode_provinsi')}}" autofocus>
                        @error('kode_provinsi')
                        <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_provinsi" class="control-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{$provinsi->nama_provinsi}}" class="form-control @error('nama_provinsi') is-invalid @enderror" value="{{ old('kode_provinsi')}}">
                        @error('nama_provinsi')
                        <div class="invalid_feedback" style="color:red">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection