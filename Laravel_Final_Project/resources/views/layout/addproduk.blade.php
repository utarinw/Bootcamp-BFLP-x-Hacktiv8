<!-- Detail Judul -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('produk') }}">Produk</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div>
        </div>
    </section>

    <!-- Content -->
<section class="content">
  <form action="{{ route('produk.store') }}" method="post">
  <div class="row">
        <!-- Edit Product -->
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Produk</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="form-group">
                  <label for="Nama">Nama Produk</label>
                  <input class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="Nama">Deskripsi</label>
                    <textarea id="deskripsi" name="description" class="form-control" style="height: 100px">
                    </textarea>
                </div>
              </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- Detail Product -->
        <div class="col-md-6">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Informasi Tambahan</h3>
              </div>
              <div class="card-body">
                <!-- Status Produk -->
                <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" id="status" name="status[]">
                          <option value="draft">Draft</option>
                          <option value="published">Published</option>
                        </select>
                      </div>
                <!-- /.form group -->

                <!-- Kategori -->
                <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" id="kategori" name="category_id[]">
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                      </div>
                <!-- /.form group -->

                <!-- Harga -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="number" id="price" name="price" class="form-control my-colorpicker1">
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>

                <!-- Berat -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Berat</label>
                    <input type="number" id="weight" name="weight" class="form-control my-colorpicker1">
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>

                <!-- Foto -->
                <div class="bootstrap-timepicker">
                  <div class="form-group">
                    <label>Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img_url" name="img_ur;">
                        <label class="custom-file-label" for="inputGabmar"></label>
                      </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
  </form>
</section>
</div>