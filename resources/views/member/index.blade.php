@extends('template.master')

@section('judul')
    <h1>Ini Halaman Create Member</h1>
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
      <h3 class="card-title">Data Member</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="member/create" class="btn btn-info">
    <i class="fas fa-plus"></i>
        Tambah   
        </a>
        <br>
        </tr>
        <br>
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Telepon</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @forelse($member as $member)
         <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $member->nama }}</td>
          <td>{{ $member->alamat}}</td>
          <td>{{ $member->jenis_kelamin }}</td>
          <td>{{ $member->tlp }}</td>
          <td>
          <form action="{{ route ('member.destroy', [$member->id])}}" method="POST">
              <a class="btn btn-info mr-3" href="member/{{$member->id}}">Detail</a>
              <a class="btn btn-warning mr-3" href="member/{{$member->id}}/edit">Edit</a>
              <form action="/member/{{$member->id}}" method="POST">
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
     $('#data-paket').DataPaket();
        
      $('#example2').DataPaket({
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