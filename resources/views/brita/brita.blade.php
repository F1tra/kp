
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('layout.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Selamat Datang {{ Auth::user()->name }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brita </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Kelola Brita') }}</div>
            <div class="card-tools">
                <a href="{{ route('createbrita')}}" class="btn btn-success"> Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
                <div class="card-body">
                <table id="table-data" class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>GAMBAR</th>
                            <th>DESKRIPSI</th>
                            <th>TANGGAL</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($data_brita as $brita)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="text-center">{{ $brita->judul}}</td>
                                <td class="text-center">{{ $brita->gambar}}</td>
                                {{-- <td>
                                @if($brita->gambar !== null)
                                <img src="{{asset('storage/Gambar_brita/'.$brita->gambar)}}"  width="100px"/>
                                @else[gambar tidak tersedia]@endif
                                </td> --}}
                                <td class="text-center">{{ $brita->deskripsi}}</td>
                                <td class="text-center">{{ $brita->tanggal}}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" id="" class="btn btn-primary"
                                            data-toggle="modal" data-target="#editbrita"
                                            data-id="{{ $brita->id }}" style="margin-right:20px;">Edit</button>
                                             
                                        <button type="button" id="" class="btn btn-danger"
                                            data-toggle="modal" data-target="#hapus"
                                            data-id="{{ $brita->id }}" style="margin-right:20px;">HAPUS</button>
                                             
                                            {{-- {!! Form::open(['url' => 'admin/mapel/delete/'.$profile->id, 'method' => 'POST']) !!}
                                        {{ Form::button('HAPUS', ['class' => 'btn btn-danger', 'onclick' => "deleteConfirmation('')"]) }}
                                    {!! Form::close() !!} --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<!-- REQUIRED SCRIPTS -->
@include('layout.script')
</body>
</html>
