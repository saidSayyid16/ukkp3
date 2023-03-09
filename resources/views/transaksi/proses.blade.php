@extends('template.master')

@section('judul')
<h1>Ini Halaman Create Transaksi</h1>
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
  <!-- Form Element sizes -->
  <div class="card card-success">
    <div class="card-body">
      <form action="{{ route('transaksi.detail.store', request()->segment(2)) }}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-md-8">
            <select name="id_paket" id="id_paket" class="form-control">
              <option selected disabled>--Pilih Data Paket--</option>
              @forelse ($pakets as $paket)
                <option value="{{ $paket->id }}">{{ $paket->nama_paket }}</option>                  
              @empty
                <option selected disabled>Tidak Ada Paket Tersedia</option>
              @endforelse
            </select>
            @error('id_paket')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="number" name="qty" id="qty" class="form-control" placeholder="Isi Qty">
            @error('qty')
              <div class="text-danger small">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group  col-md-2">
            <input type="submit" value="Tambah" class="btn btn-success form-control">
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
<div class="row">
  <!-- left column -->
  <div class="col-md-8">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Pilih Data Member</label>
            <select name="member_id" id="member_id" class="form-control">
              <option selected disabled>--Pilih Data Member--</option>
              @forelse ($members as $member)
                <option value="{{ $member->nama }}">{{ $member->nama }}</option>                  
              @empty
                <option selected disabled>Tidak Ada Paket Tersedia</option>
              @endforelse
            </select>
          </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <!--/.col (right) -->
</div>

<div class="card">
    <div class="card-header">
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
      <h3 class="card-title">Data Transaksi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="transaksi/create" class="btn btn-primary">
    <i class="fas fa-plus-square"></i>
           Tambah
        </a>
        <br>
        </tr>
        <br>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Outlet</th>
          <th>Nama Member</th>
          <th>Kode Invoice</th>
          <th>Tanggal</th>
          <th>Status</th>
          <th>Dibayar</th>
          <th>Harga</th>
        </tr>
        </thead>
        <tbody>
          @forelse($transaksis as $transaksi)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $transaksi->outlet->nama }}</td>
          <td>{{ $transaksi->member->nama }}</td>
          <td>{{ $transaksi->kode_invoice }}</td>
          <td>{{ $transaksi->tgl }}</td>
          <td>{{ $transaksi->status }}</td>
          <td>{{ $transaksi->dibayar }}</td>
          <td>{{ $transaksi->paket }}</td>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>

        @endforelse
      </table>
    </div>
    <!-- /.card-body -->
  
@endsection