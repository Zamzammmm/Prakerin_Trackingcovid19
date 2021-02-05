@extends('layouts.backend')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            Form Lihat Data Laporan
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nama_provinsi" class="control-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{$laporan->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kota" class="control-label">Nama Kota</label>
                        <input type="text" name="nama_kota" id="nama_kota" value="{{$laporan->rw->kelurahan->kecamatan->kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kecamatan" class="control-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" id="nama_kecamatan" value="{{$laporan->rw->kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kelurahan" class="control-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" id="nama_kelurahan" value="{{$laporan->rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama" class="control-label">Rw</label>
                        <input type="text" name="nama" id="nama" value="{{$laporan->rw->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="jumlah_positif" class="control-label">Jumlah Positif</label>
                        <input type="text" name="jumlah_positif" id="jumlah_positif" value="{{$laporan->jumlah_positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="jumlah_sembuh" class="control-label">Jumlah Sembuh</label>
                        <input type="text" name="jumlah_sembuh" id="jumlah_sembuh" value="{{$laporan->jumlah_sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="jumlah_meninggal" class="control-label">Jumlah Meninggal</label>
                        <input type="text" name="jumlah_meninggal" id="jumlah_meninggal" value="{{$laporan->jumlah_meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="tanggal" class="control-label">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal" value="{{$laporan->tanggal}}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <a href="{{url()->previous()}}" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection