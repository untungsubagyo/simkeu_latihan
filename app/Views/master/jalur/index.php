<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  echo $this->include('layout/meta-head');
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="/assets/theme/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php echo $this->include('layout/navbar'); ?>
    <?php echo $this->include('layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?php echo $title; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?php echo $title; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              Data Jalur Pendaftaran
            </div>
            <div class="card-body">
              <div class="row mb-2">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary" onclick="tambah()"><i class="fa fa-plus"></i> Tambah</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th class="text-center" style="width:50px;">#</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Nama Singkat</th>
                        <th class="text-center" style="width:200px;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 0;
                      foreach ($data as $item) {
                        $i++;
                      ?>
                        <tr>
                          <td class='text-right'><?php echo $i; ?>.</td>
                          <td><?php echo $item['nama']; ?></td>
                          <td><?php echo $item['nama_singkat']; ?></td>
                          <td class="text-center">
                            
                          <button class="btn btn-warning" onclick="edit('<?php echo $item['id'];?>','<?php echo $item['nama'];?>','<?php echo $item['nama_singkat'];?>')"><i class="fa fa-edit"></i> Edit</button>

                          <button class="btn btn-danger" onclick="hapus(<?php echo $item['id'];?>)"><i class="fa fa-trash"></i> Hapus</button>
                          
                          </td>
                        </tr>
                      <?php
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.container-fluid -->
        <!-- Modal Tambah / Edit -->
        <div class="modal fade" id="modal-add">
          <form action="/master/jalur/simpan" method="post">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header"><h4 class="modal-title" id="add-title">Tambah Jalur</h4></div>
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="nama_singkat">Nama Singkat</label>
                    <input type="text" id="nama_singkat" name="nama_singkat" class="form-control">
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-warning" data-dismiss="modal">Batal</button>
                  <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
              </div>
            </div>
          </form>
        </div>

        <!-- Modal Hapus -->
        <div class="modal fade" id="modal-delete">
          <form action="/master/jalur/hapus" method="post">
            <input type="hidden" name="id" id="id_delete" value="">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                </div>
                <div class="modal-body">Apakah Anda yakin Akan menghapus data Jalur terpilih?</div>
                <div class="modal-footer">
                  <button class="btn btn-warning" data-dismiss="modal">Batal</button>
                  <input type="submit" class="btn btn-danger" value="Ya">
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php echo $this->include('layout/footer'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php echo $this->include('layout/script'); ?>
  <script>
    function tambah(){
      $('#modal-add').modal();
      $('#add-title').html("Tambah Jalur");
      $('#id').val('');
      $('#nama').val('');
      $('#nama_singkat').val('');
    }
    function edit(id,nama,ns){
      $('#modal-add').modal();
      $('#add-title').html("Edit Jalur");
      $('#id').val(id);
      $('#nama').val(nama);
      $('#nama_singkat').val(ns);
    }
    function hapus(id){
      $('#modal-delete').modal();
      $('#id_delete').val(id);
    }
  </script>
</body>

</html>