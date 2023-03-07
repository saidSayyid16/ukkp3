@extends('template.master')

@section('judul')
    <h1>Edit Data</h1>
@endsection

@section ('content')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/member/{{ $member->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nama</label>
                    <input type="integer" name="nama" class="form-control" id="inputnama" placeholder="Enter nama" value="{{ $member->nama }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat"  value="{{ $member->alamat }}" require>
                    </div>
                    <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="Jenis kelamin" value="{{ $member->jenis_kelamin }}">
                        <option selected>Open this select menu</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                 </div>
                  <div class="form-group">
                    <label for="inputjurusan">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputtelepon" placeholder="Enter Telepon"  value="{{ $member->tlp }}" require>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>

                </div>
              </form>
            </div>
@endsection