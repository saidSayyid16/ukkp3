@extends('template.master')

@section('judul')
    <h1>Ini Halaman Detail/Show Outlet</h1>
@endsection

@section ('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Informasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nama</label>
                    <input type="integer" name="Nama" class="form-control" id="inputnama" placeholder="Enter Nama" value="{{ $outlet->nama }}" disabled  >
                  </div>

                  <div class="form-group">
                    <label for="inputNamaKelas">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Enter Alamat" value="{{ $outlet->alamat }}" disabled>
                  </div>

                  <div class="form-group">
                    <label for="inputJurusan">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputTelepon" placeholder="Enter Telepon" value="{{ $outlet->tlp }}" disabled >
                  </div>
                </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <a class="btn btn-info" href="/outlet">Back</a>
                </div>
              </form>
            </div>
@endsection