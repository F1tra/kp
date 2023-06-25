
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
              <li class="breadcrumb-item active">Profil </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">{{ __('Kelola Dekan') }}</div>
            <div class="card-tools">
               <a href="{{ route('create_dekan')}}" class="btn btn-success"> Tambah Data <i class="fas fa-plus-square"></i></a>
                <a href="" target="blank" class="btn btn-secondary"><i class="fa fa-print"></i>Cetak PDF</a>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{" class="btn btn-info" target="_blank">Export</a>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#importDataModal">Import</button>
                </div>
                <!-- Modal Import Data Form -->
                <div class="modal fade" id="importDataModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cover">Upload File</label>
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Import Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <table id="table-data" class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>JUDUL</th>
                            <th>DESKRIPSI</th>
                            <th>GAMBAR</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($data_dekan as $dekan)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td class="text-center">{{ $dekan->judul}}</td>
                                <td class="text-center">{{ $dekan->desk}}</td>
                                <td>
                                @if($dekan->img !== null)
                                <img src="{{asset('storage/Gambar_dekan/'.$dekan->img)}}"  width="100px"/>
                                @else[gambar tidak tersedia]@endif
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" id="btn-edit-dekan" class="btn btn-primary"
                                            data-toggle="modal" data-target="editdekanmodal"
                                            data-id="{{ $dekan->id }}" style="margin-right:20px;">Edit</button>
                                             <form method="POST" action="{{ route('dekan.destroy', $dekan->id) }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ms-1 show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                            </form>
                                            @push('scripts')
                                            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                            <script type="text/javascript">
                                            
                                                $('.show_confirm').click(function(event) {
                                                    var form =  $(this).closest("form");
                                                    event.preventDefault();
                                                    swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You won't be able to revert this!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, delete it!'
                                                    })
                                                    .then((result) => {
                                                        if (result.isConfirmed) {
                                                            form.submit();
                                                            Swal.fire(
                                                            'Deleted!',
                                                            'Your data has been deleted.',
                                                            'success'
                                                            )
                                                        }
                                                    });
                                                });
                                            
                                            </script>    
                                            @endpush
                                            
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
{{-- <div class="modal fade" id="tambahDekanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dekan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('admin.dekan.submit') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="judul">Nama</label>
                            <input type="text" class="form-control" name="judul" id="judul" required/>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" required/>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar" id="gambar" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
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
