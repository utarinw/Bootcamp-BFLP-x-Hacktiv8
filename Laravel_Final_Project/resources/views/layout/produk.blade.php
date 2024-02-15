<!-- Detail Judul -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div>
        </div>
    </section>

    <!-- Content -->
    <section class="content">
      <!-- Button + Search -->
      <div class="btn-toolbar justify-content-between" role="toolbar" style="margin-bottom: 20px;">
        <div class="btn-group" role="group" aria-label="First group">
          <a type="button" class="btn btn-primary">Mass Upload</a>
          <a href="{{ route('addproduk') }}" type="button" class="btn btn-danger">Tambah</a>
        </div>
        <form action="" method="get">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Produk">
            <button type="button" class="btn btn-secondary">Cari</button>
          </div>
        </form>
      </div>

    <!-- Detail Table -->
      <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Detail Produk</h3>
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
              <th>Kategori</th>
              <th>Parent</th>
              <th>Created At</th>
              <th>Aksi</th>
              <th></th>
            </tr>
          </thead>
        </table>
      </div>
      </div>
    </section>
  <!-- /.card-body -->
</div>