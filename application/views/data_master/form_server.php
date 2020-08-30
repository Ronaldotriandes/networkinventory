<style type="text/css">
  #submit{
   float: right;

  }
  #panel_atas{
    width: 80%;
    margin-left: 10%;
  }
</style>
<?php  
    $id='B-01';
    $no=1;
    foreach ($Server->result_array() as $row) {
        $no++;
    }
    if ($no!=0) {
        if ($no<=9) {
            $id='B-0'.$no;
        } else
        if ($no<=99) {
            $id='B-'.$no;
        } 
    }
?>
<div class="col-sm-6"> <!-- ini ubah jadi 6 buat 50% , 12 buat 100% -->
<div class="card mb-3" class="col-sm-6">
  <div class="card-header"><i class="fa fa-table"></i> Form Server</div>
    <div class="card-body" class="col-sm-6">
      <div class="table-responsive">
        <form class="form-horizontal" id="form" method="post" action="<?=site_url('Jenisnya/save_server');?>">
        <!--<div class="form-group" class="col-sm-6">
          <label for="email" class="control-label col-sm-6">Kode Barang:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="kode" id="email" value="<?php echo $id; ?>" readonly>
          </div>-->
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Id Server:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Idserver" id="Idserver"  required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Tahun:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Tahun" id="Tahun" required>
          </div>
        </div>
        <input type="hidden" class="form-control" name="jumlah" id="jumlah" value='0'>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Merk:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Merk" id="Merk" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Harddisk:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Harddisk" id="Harddisk" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Memory:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Memory" id="Memory" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Processor:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Prosesor" id="Prosesor" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Os:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Os" id="Os" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Hostname:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Hostname" id="Hostname" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Pemilik:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Pemilik" id="Pemilik" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Bidang:</label>
          <div class="col-sm-12">
          <select class="form-control" name="Bidang">  
             <option value="">Silahkan Pilih</option>  
             <option value="Bidang E-Gov">E-Gov</option>  
             <option value="Bidang Jaringan">Jaringan</option>  
             <option value="B_1">Modem</option>  
          s</select>   
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Seksi:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Seksi" id="Seksi" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Lantai:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Lantai" id="Lantai" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Rak:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Rak" id="Rak" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Konfigurasi:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Konfigurasi" id="Konfigurasi" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-6">Penanggung Jawab:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Penanggungjawab" id="Penanggungjawab" required>
          </div>
        </div>
        <div id="submit">
          <button  type="submit" class="btn btn-default" value="Simpan" name="Simpan">Simpan</button>
        </div>
        
      </form>
  </div>
</div>
</div>



<div class="panel-body">
    <h2><center> Daftar Server </center></h2>        
    <!--<h2><center> CV. Abadi Jaya </center></h2> -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id Server</th>
          <th>Tahun</th>
          <th>Merk</th>
          <th>Harddisk</th>
          <th>Memory</th>
          <th>Processor</th>
          <th>OS</th>
          <th>Hostname</th>
          <th>Pemilik</th>
          <th>Bidang</th>
          <th>Seksi</th>
          <th>Lantai</th>
          <th>Rak</th>
          <th>Konfigurasi</th>
          <th>Penanggung Jawab</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
             foreach ($Server->result_array() as $row) {
                echo "<tr>";
                echo "<td>".$row['Idserver']."</td>";
                echo "<td>".$row['Tahun']."</td>";
                echo "<td>".$row['Merk']."</td>";
                echo "<td>".$row['Harddisk']."</td>";
                echo "<td>".$row['Memory']."</td>";
                echo "<td>".$row['Prosesor']."</td>";
                echo "<td>".$row['Os']."</td>";
                echo "<td>".$row['Hostname']."</td>";
                echo "<td>".$row['Pemilik']."</td>";
                echo "<td>".$row['Bidang']."</td>";
                echo "<td>".$row['Seksi']."</td>";
                echo "<td>".$row['Lantai']."</td>";
                echo "<td>".$row['Rak']."</td>";
                echo "<td>".$row['Konfigurasi']."</td>";
                echo "<td>".$row['Penanggungjawab']."</td>";
                echo "<td><a href='".site_url('Jenisnya/form_edit_server')."?Idserver=".$row['Idserver']."'><button>Edit</button></a>
                <div>
                <a href='".site_url('Jenisnya/delete_server')."?Idserver=".$row['Idserver']."'><button>Hapus</button>
                </td>";

                echo "</tr>";
             }
        ?>
      </tbody>
    </table>
  </div>

<script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/vendor/jquery/jquery.validate.js');?>" type="text/javascript"></script>
<script type="text/javascript">

  jQuery.validator.addMethod("nama", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z0-9  ]$/.test( value );
}, 'Please enter a valid email address.');
  $().ready(function(){

      $("#form").validate({
          rules: {
            nama: {
              required : true,
              lettersonly: true
            },
            jenis: {
              required : true,
              lettersonly: true
            },
            satuan: {
              required : true,
              lettersonly: true
            },
            isi: {
              number: true,
              required: true
            }
          },
          messages: {
            nama: {
                required:"Tidak boleh kosong",
                lettersonly:"Hanya huruf dan angka"
            },
            jenis: {
                required:"Tidak boleh kosong",
                lettersonly:"Hanya huruf dan angka"
            },
            satuan:{
                required:"Tidak boleh kosong",
                lettersonly:"Hanya huruf "
            },
            isi: {
                required:"Tidak boleh kosong",
                number:"Hanya angka"
            },
          }
      });
      jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z,0-9, ]+$/i.test(value);
      }, "Letters only please"); 
  });
</script>