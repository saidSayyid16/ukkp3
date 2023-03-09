@extends('template.master')

@section('judul')
    <h1>Ini Halaman Index Outlet</h1>
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
      <h3 class="card-title"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="outlet/create" class="btn btn-info mb-3">
          <i class="fas fa-plus"></i>
           Tambah
        </a>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telepon</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
          @forelse($outlet as $outlet)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $outlet->nama }}</td>
          <td>{{ $outlet->alamat }}</td>
          <td>{{ $outlet->tlp }}</td>
          <td>
          <form action="{{ route ('outlet.destroy', [$outlet->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="outlet/{{$outlet->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="outlet/{{$outlet->id}}/edit">Edit</a>
            @csrf
            @method('DELETE')
           <input type="submit" class="btn btn-danger" value="Delete">
          </form>
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
     $('#data-outlet').DataOutlet();
        
      $('#example2').DataOutlet({
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