@extends('template.master')

@section('judul')
    <h1>Ini Halaman Index Transaksi</h1>
@endsection

@section('content')
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

@push('scripts')
<script src="{{ asset ('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script>
    $(function () {
     $('#data-tarnsaksi').DataTransaksi();
        
      $('#example2').DataTransaksi({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endpush