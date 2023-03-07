@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="member/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nama</label>
                    <input type="integer" name="Nama" class="form-control" id="inputnama" placeholder="Enter Nama" value="{{ $member->nama }}" disabled  >
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputalamat" placeholder="Enter Alamat" value="{{ $member->alamat }}" disabled>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="Jenis_kelamin">
                      <option selected>Open this select menu</option>
                      <option value="L" disabled {{ $member->jenis == "laki-laki" ? "selected" : ""}}>Laki-laki</option>
                      <option value="P" disabled {{ $member->jenis == "Perempuan" ? "selected" : ""}}>Perempuan</option>
                    </select>
                    </div>
                  <div class="form-group">
                    <label for="inputJurusan">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputTelepon" placeholder="Enter Telepon" value="{{ $member->tlp }}" disabled >
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-info" href="/member">Back</a>
                </div>
              </form>
            </div>
@endsection