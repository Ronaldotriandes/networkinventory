<!DOCTYPE html>
<html lang="en"> 

<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Inventari Jaringan</title> 
<style type="text/css">
.ss {
  text-align: center;
}
</style>

<!-- Bootstrap core CSS-->
<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.css');?>" rel="stylesheet" type="text/css" />
  <!-- Custom fonts for this template-->
   <link href="<?=base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
  <!-- Page level plugin CSS-->
   <link href="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
  <!-- Custom styles for this template-->
   <link href="<?=base_url('assets/css/sb-admin.css');?>" rel="stylesheet" type="text/css" />
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar gambar1 navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="ss">
    <a class="navbar-brand" href="<?=site_url('#');?>">INVENTARIS JARINGAN DINAS KOMUNIKASI DAN INFORMATIKA PROVINSI JAWA BARAT</a></div>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <?php if ($this->session->userdata('jabatan')=='Admin') { ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Tambah Data</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents">
                <li><a href="<?=site_url('Jenisnya/jenis');?>">Pilih Inventory</a></li>
                <!--<li><a href="<?=site_url('gudang/form_supplier');?>">Supplier</a></li>-->
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Persediaan</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents2">
                <li><a href="<?=site_url('gudang/form_history_persediaan');?>">Daftar Stock Barang </a></li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">-->
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Lihat Data</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                <li><a href="<?=site_url('Jenisnya/Lihat');?>">Data Inventory</a></li>
                <li><a href="<?=site_url('Jenisnya/lihatdatac');?>">Data Center(server)</a></li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">User </span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages2">
                <li><a href="<?=site_url('Jenisnya/reg');?>">Tambah User</a></li>
              </ul>
            </li> 
            <div class="gambar1"></div>
        <?php } ?>
        <?php if ($this->session->userdata('jabatan')=='User') { ?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
              <!--<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-wrench"></i>
                <span class="nav-link-text">Persediaan</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseComponents2">
                <li><a href="<?=site_url('gudang/form_history_persediaan');?>">Daftar Stock Barang </a></li>
              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">-->
              <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-file"></i>
                <span class="nav-link-text">Lihat Data Invetory</span>
              </a>
              <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                <li><a href="<?=site_url('Jenisnya/Lihat');?>">Data Inventory</a></li>
                <li><a href="<?=site_url('Jenisnya/lihatdatac');?>">Data Center(server)</a></li>
              </ul>
            </li>
           
        <?php } ?>
        
       
        
        
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      
      <!-- Area Chart Example-->
      
      <div class="row">
        <div class="col-lg-12">
          <!-- Example Bar Chart Card-->
         
          <!-- Card Columns Example Social Feed-->
          <?php 
          $this->load->view($isi);
      ?>
         
          <!-- /Card Columns-->
        </div>
     
      </div>
      <!-- Example DataTables Card-->
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Inventaris Jaringan Diskominfo 2018</small>
        </div>
        <div class="text-align">
        <small>Created By Ronaldo Triandes & Mulia Hanif</small> </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar??</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik Keluar dibawah ini jika anda yakin ingin keluar.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?=site_url('login/logout');?>">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    


<script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/vendor/jquery/jquery.validate.js');?>" type="text/javascript"></script>

    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>" type="text/javascript"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>" type="text/javascript"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url('assets/vendor/chart.js/Chart.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/vendor/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.js');?>" type="text/javascript"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url('assets/js/sb-admin.min.js');?>" type="text/javascript"></script>
    <!-- Custom scripts for this page-->
    <script src="<?=base_url('assets/js/sb-admin-datatables.min.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/sb-admin-charts.min.js');?>" type="text/javascript"></script>
  </div>
</body>

</html>
