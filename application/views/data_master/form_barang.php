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
    foreach ($barang->result_array() as $row) {
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
<div class="col-sm-12"> <!-- ini ubah jadi 6 buat 50% , 12 buat 100% -->
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
          <input type="text" class="form-control" name="idserver" id="idserver"  required>
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
          <input type="number" class="form-control" name="Harddisk" id="Harddisk" required>
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
    <h2><center> Tabel Barang </center></h2>        
    <h2><center> CV. Abadi Jaya </center></h2> 
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Satuan</th>
          <th>Isi Satuan</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php 
             foreach ($barang->result_array() as $row) {
                echo "<tr>";
                echo "<td>".$row['no_barang']."</td>";
                echo "<td>".$row['nama_barang']."</td>";
                echo "<td>".$row['jenis_barang']."</td>";
                echo "<td>".$row['satuan']."</td>";
                echo "<td>".$row['isi_satuan']."</td>";
                echo "<td><a href='".site_url('gudang/form_edit_barang')."?kode=".$row['no_barang']."'><button>Edit</button>nan</a></td>";
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