<body >

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-md-4"></div>
<div class="col-md-4" style="margin-top: 60px;">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="text-center">REGISTRASI USER</h3></div>
        <div class="panel-body">
            <form id="form" action="<?=site_url('Jenisnya/save_user');?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="alamat">Username</label>
                    <input type="alamat" name="username" class="form-control" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                <input type="hidden" name="_form" value="on">
                
            </form>
          
        </div>
    </div>
</div>
<div class="col-md-4"></div>