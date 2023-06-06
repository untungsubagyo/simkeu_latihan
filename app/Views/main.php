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
  <?php echo $this->include('layout/content-wrapper'); ?>
  <?php echo $this->include('layout/footer'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <?php echo $this->include('layout/script'); ?>
</body>
</html>
