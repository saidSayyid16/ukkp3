@extends('template.master')

@section('judul')
<h1>Ini Halaman Edit Paket</h1>
@endsection

@section ('content')
<div class="card card-blue">
              <div class="card-header">
                <h3 class="card-title">Add New Paket</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route ('paket.update',[$paket->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputoutletid">Pakets</label>
                    <input type="integer" name="outlet_id" class="form-control" id="inputoutletid" placeholder="Enter Id Outlet" value="{{ $paket->outlet_id }}" > 
              <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis" id="Jenis" value="{{ $paket->jenis }}">
                    <option selected>Open this select menu</option>
                    <option value="kiloan">Kiloan</option>
                    <option value="selimut">Selimut</option>
                    <option value="bed_cover">Bed Cover</option>
                    <option value="kaos">Kaos</option>
                    <option value="lain">lainnya</option>
                </select>
                </div>
                <div class="form-group">
             <label for="harga_awal">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="harga_awal" placeholder="Enter Nama Paket" value="{{ $paket->nama_paket }}">
           </div>
           <div class="form-group">
             <label for="harga_awal">Harga</label>
             <input type="integer" name="harga" class="form-control" id="harga_awal" placeholder="Enter Harga" value="{{ $paket->harga }}">
           </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-info">Submit</button> 
       </div>
     </form>
 </div>
@endsection