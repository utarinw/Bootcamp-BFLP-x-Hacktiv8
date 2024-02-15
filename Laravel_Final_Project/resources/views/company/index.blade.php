<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CALLA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

@include('layout.navbar')
@include('layout.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
    </section>

    <!-- Main Content -->
<section class="content">
    <div class="row">
        <!-- Edit Product -->
        <div class="col-md-4">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Kategori</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="{{ route('kategori.create') }}" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Kategori</label>
                <input type="text" id="name" name="name" class="form-control" value="" placeholder="Nama Kategori">
              </div>
              <div class="form-group" action="">
                <label for="parent_id">Kategori</label>
                <select id="parent_id" name="parent_id" class="form-control custom-select">  
                  <option value="">Pilih Kategori</option>
                  @foreach ($kategori as $company)
                  <option value="{{ $company->category_id }}">{{ $company->name }}</option>
                  @endforeach 
                </select>
              </div>
              <div class="button">
                <a href="#" class="btn btn-secondary">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-success float-right">
              </div>
            </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

        <!-- Detail Product -->
        <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Detail Kategori</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Parent</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($kategori as $company)
               <tr>
                        <td>{{ $company->category_id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->parentCategory ? $company->parentCategory->name : 'None' }}</td>
                        <td>
                            <a href="{{ route('kategori.show', $company->category_id) }}">View</a>
                            <a href="{{ route('kategori.edit', $company->category_id) }}">Edit</a>
                            <form action="{{ route('kategori.destroy', $company->category_id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
              </tr>
              @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
    </div>
</section>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
</body>
</html>