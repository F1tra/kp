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
              <li class="breadcrumb-item active">Tambah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Tambah') }}</div>
            <div class="card-body">
                <table id="table-data" class="table table-bordered">
            <form action="{{ route('simpanbrita')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="form-group">
                    <input type="file" id="gambar" name="gambar" class="form-control" placeholder="Gambar">
                </div>
                <div class="form-group">
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi">
                </div>
                <div class="form-group">
                    <input type="date" id="tanggal" name="tanggal" class="form-control" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
            </form>
                    {{-- <tbody>
                        @php $no=1; @endphp
                        @foreach ($mapel as $mpl)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="text-center">{{ $mpl->mapel}}</td>
                                <td class="text-center">{{ $mpl->semester}}</td>
                                <td>{{ $mpl->jurusans->jurusan }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" id="btn-edit-mapel" class="btn btn-success"
                                            data-toggle="modal" data-target="#editJadwalModal"
                                            data-id="{{ $mpl->id }}" style="margin-right:20px;">UBAH</button>
                                            
                                            {!! Form::open(['url' => 'admin/mapel/delete/'.$mpl->id, 'method' => 'POST']) !!}
                                        {{ Form::button('HAPUS', ['class' => 'btn btn-danger', 'onclick' => "deleteConfirmation('".$mpl->mapel."')"]) }}
                                    {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
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
