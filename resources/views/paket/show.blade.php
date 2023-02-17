@extends('template.master')

@section('judul')
<h1>Halaman Data Paket</h1>
@endsection

@section('content')
<div class="col-md-12">
  <div class="card card-danger">
     <div class="card-header">
       <h3 class="card-title">Masukan Data Barang</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="/paket" method="POST">
         @csrf
       <div class="card-body">
         <div class="form-group" >
         <label for="inputoutletid">Id Outlet</label>
            <input type="integer" name="outlet_id" class="form-control" id="inputoutletid" placeholder="Enter Id Outlet" value="{{ $paket->outlet_id }}" disabled  >
              </div>
          <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="jenis" id="Jenis">
            <option selected>Open this select menu</option>
            <option value="L" disabled {{ $paket->jenis == "kiloan" ? "selected" : ""}}>Kiloan</option>
            <option value="P" disabled {{ $paket->jenis == "selimut" ? "selected" : ""}}>Selimut</option>
            <option value="L" disabled {{ $paket->jenis == "bed_cover" ? "selected" : ""}}>Bed Cover</option>
            <option value="L" disabled {{ $paket->jenis == "kaos" ? "selected" : ""}}>Kaos</option>
          </select>
          </div>
         <div class="form-group">
             <label for="inputnamapaket">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="nama_paket" placeholder="Enter Nama Paket" value="{{ $paket->nama_paket }}" disabled >
           </div>
           <div class="form-group">
             <label for="inputharga">Harga </label>
             <input type="integer" name="harga" class="form-control" id="harga" placeholder="Enter Harga" value="{{ $paket->harga }}" disabled >
           </div>
       <!-- /.card-body -->
       <div class="card-footer">
       <a class="btn btn-danger" href="/paket">Back</a>
       </div>
     </form>
 </div>
@endsection