@extends('template.master')

@section('judul')
<h1>Ini Halaman Edit Outlet</h1>
@endsection

@section('content')
<div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Add New Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/{{ $outlet->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_outlet">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda" value="{{ $outlet->nama }}" >
                    @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="nama_outlet">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="{{ $outlet->alamat }}" >
                    @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            </div>
            @enderror
            <div class="form-group">
                    <label for="InputTelepon">Telepon</label>
                    <input type="text" name="tlp" class="form-control" placeholder="Masukan Telepon" value="{{ $outlet->tlp }}" >
                    @error('tlp')
            <div class="alert alert-danger">
                    {{ $message }}
                </div>
            </div>
            @enderror
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Save</button>
                </div>
              </form>
            </div>
@endsection