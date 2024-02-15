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
            <form action="{{ route('kategori.store') }}" method="post">
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
                  @foreach($categories as $category)
                  <option value="{{ $category->category_id }}">{{ $category->name }}</option>
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
                @foreach ($categories as $category)
               <tr>
                        <td>{{ $category->category_id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parentCategory ? $category->parentCategory->name : 'None' }}</td>
                        <td>
                            <a href="{{ route('kategori.show', $category->category_id) }}">View</a>
                            <a href="{{ route('kategori.edit', $category->category_id) }}">Edit</a>
                            <form action="{{ route('kategori.destroy', $category->category_id) }}" method="POST">
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