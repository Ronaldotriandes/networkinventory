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
    foreach ($server->result_array() as $row) {
        $Idserver=$row['Idserver'];
        $Tahun=$row['Tahun'];
        $Merk=$row['Merk'];
        $Harddisk=$row['Harddisk'];
        $Memory=$row['Memory'];
        $Prosesor=$row['Prosesor'];
        $Os=$row['Os'];
        $Hostname=$row['Hostname'];
        $Pemilik=$row['Pemilik'];
        $Bidang=$row['Bidang'];
        $Seksi=$row['Seksi'];
        $Lantai=$row['Lantai'];
        $Rak=$row['Rak'];
        $Konfigurasi=$row['Konfigurasi'];
        $Penanggungjawab=$row['Penanggungjawab'];




    }
    
?>

<div class="card mb-3">
  <div class="card-header"><i class="fa fa-table"></i> Form Barang</div>
    <div class="card-body">
      <div class="table-responsive">
        <form class="form-horizontal" id="form" method="post" action="<?=site_url('Jenisnya/save_edit_server');?>">
        <div class="form-group">
          <label for="email" class="control-label col-sm-2">Id Server:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Idserver" id="Idserver" value="<?php echo $Idserver; ?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Tahun:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Tahun" id="Tahun" value="<?php echo $Tahun; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Merk:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Merk" id="Merk" value="<?php echo $Merk; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Harddisk:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Harddisk" id="Harddisk" value="<?php echo $Harddisk; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Memory:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Memory" id="Memory" value="<?php echo $Memory; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Prosesor:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Prosesor" id="Prosesor" value="<?php echo $Prosesor; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Os:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Os" id="Os" value="<?php echo $Os; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Hostname:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Hostname" id="Hostname" value="<?php echo $Hostname; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Pemilik:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Pemilik" id="Pemilik" value="<?php echo $Pemilik; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Bidang:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Bidang" id="Bidang" value="<?php echo $Bidang; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Seksi:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Seksi" id="Seksi" value="<?php echo $Seksi; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Lantai:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Lantai" id="Lantai" value="<?php echo $Lantai; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Rak:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Rak" id="Rak" value="<?php echo $Rak; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Konfigurasi:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Konfigurasi" id="Konfigurasi" value="<?php echo $Konfigurasi; ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd" class="control-label col-sm-2">Penanggung Jawab:</label>
          <div class="col-sm-12">
          <input type="text" class="form-control" name="Penanggungjawab" id="Penanggungjawab" value="<?php echo $Penanggungjawab; ?>" required>
          </div>
        </div>
        <div id="submit">
          <button  type="submit" class="btn btn-default" value="Simpan" name="Simpan">Simpan</button>
        </div>
        
      </form>
  </div>
<script src="<?=base_url('assets/vendor/jquery/jquery.min.js');?>" type="text/javascript"></script>
<script src="<?=base_url('assets/vendor/jquery/jquery.validate.js');?>" type="text/javascript"></script>
<script type="text/javascript">

  jQuery.validator.addMethod("nama", function(value, element) {
  // allow any non-whitespace characters as the host part
  return this.optional( element ) || /^[a-zA-Z0-9 ]$/.test( value );
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
                lettersonly:"Hanya huruf dan angka"
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