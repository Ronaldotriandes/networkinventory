<!DOCTYPE html>
<html>
<div class="panel panel-default">
    <div class="panel-body">
<body>
 <form action="" method="post">   
<select class="form-control" name="p_rak">  
 <option value="">Silahkan Pilih Rak</option>  
 <option value="r_1">1</option>  
 <option value="r_2">2</option>  
 <option value="r_3">3</option>  
  <option value="r_4">4</option>  
  <option value="r_5">5</option>  
 </select> 
 <select class="form-control" name="p_tahun">  
 <option value="">Silahkan Pilih Tahun</option>  
 <option value="t_14">2014</option>  
 <option value="t_15">2015</option>  
 <option value="t_16">2016</option>
 <option value="t_17">2017</option>
  <option value="t_18">2018</option>
 </select>    
 <input type="submit" name="enter" value="Enter">  

 </form>  
<?php   
 if(isset($_POST['enter']))   
  {   
      if((empty($_POST['j_bidang'])) And (empty($_POST['j_kasi'])) And (empty($_POST['j_inventaris'])))   
      {  
        echo "Anda belum memilih!";
        redirect('Jenisnya/melihat_semua');  
      }
      $jb = $_POST['j_bidang'];  
      if ($jb == 'b_egov') 
        {
          $jk=$_POST['j_kasi'];
          if ((empty($_POST['j_kasi'])) And (empty($_POST['j_inventaris'])))
          {
            redirect('Jenisnya/lihat_bidang1');
          }
          elseif($jk=='k_1')
          {
            $ji=$_POST['j_inventaris'];
            if (empty($_POST['j_inventaris']))
            {
              redirect('Jenisnya/lihat_kasi1');
            }
            elseif ($ji== 'Server')
            {
                redirect('Jenisnya/melihat_server1');
            }
            elseif ($ji=='Switch')
            {
              redirect('Jenisnya/melihat_switch1');
            }
          }
          elseif($jk=='k_2')
          {
            $ji=$_POST['j_inventaris'];
            if (empty($_POST['j_inventaris']))
            {
              redirect('Jenisnya/lihat_kasi2');
            }
            elseif ($ji== 'Server')
            {
                redirect('Jenisnya/melihat_server2');
            }
            elseif ($ji=='Switch')
            {
              redirect('Jenisnya/melihat_switch2');
            }
          }
        }
      elseif ($jb == 'Switch') {
          redirect('Jenisnya/form_switch');
      }
      echo "coba lagi";    
  }  
  ?>  
 </html>
<div  class="table-responsive">
    <h2><center> Daftar Server </center></h2>        
    <!--<h2><center> CV. Abadi Jaya </center></h2> -->
    <table id="myTable-stocklist" class="table table-bordered table-hover table-striped">
      <thead>
        <tr>
          <th>Id Server</th>
          <th>Tahun</th>
          <th>Merk</th>
          <th>Harddisk</th>
          <th>Memory</th>
          <th >Processor</th>
          <th>OS</th>
          <th>Hostname</th>
          <th>Pemilik</th>
          <th>Bidang</th>
          <th>Seksi</th>
          <th>Lantai</th>
          <th>Rak</th>
          <th>Konfigurasi</th>
          <th>Penanggung Jawab</th>
        </tr>
      </thead>
      <tbody>
        <?php 
             foreach ($Seerver->result_array() as $row) {
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
                //*echo "<td><a href='".site_url('gudang/form_edit_barang')."?kode=".$row['no_barang']."'><button>Edit</button>nan</a></td>";*//
                echo "</tr>";
             }
        ?>
      </tbody>
    </table>
  </div>