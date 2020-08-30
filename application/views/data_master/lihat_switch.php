<!DOCTYPE html>
<html>
<div class="panel panel-default">
    <div class="panel-body">
<body>
 <form action="" method="post">   
 <select class="form-control" name="j_bidang">  
 <option value="">Silahkan Pilih Bidang</option>  
 <option value="b_egov">Bidang E-Gov</option>  
 <option value="b_jar">Bidang Jaringan</option>  
 <option value="b_1">Bidang 1</option>  
 </select> 
 <select class="form-control" name="j_kasi">  
 <option value="">Silahkan Pilih Kasi</option>  
 <option value="k_1">Kasi 1</option>  
 <option value="k_2">Kasi 2</option>  
 <option value="k_3">Kasi 3</option>  
 </select>   
<select class="form-control" name="j_inventaris">  
 <option value="">Silahkan Pilih Jenis Barang</option>   
 <option value="Switch">Switch</option>  
 <option value="Modem">PC</option>  

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
<div class="panel-body">
    <h2><center> Daftar Switch </center></h2>        
    <!--<h2><center> CV. Abadi Jaya </center></h2> -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Id Switch</th>
          <th>Hostname</th>
          <th>Lokasi</th>
          <th>Tahun</th>
          <th>Merk</th>
          <th>Os</th>
          <th>DMZ</th>
          <th>LAN</th>
          <th>Manage</th>
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
             foreach ($Switch->result_array() as $row) {
                echo "<tr>";
                echo "<td>".$row['Idswitch']."</td>";
                echo "<td>".$row['Hostname']."</td>";
                echo "<td>".$row['Lokasi']."</td>";
                echo "<td>".$row['Tahun']."</td>";
                echo "<td>".$row['Merk']."</td>";
                echo "<td>".$row['Os']."</td>";
                echo "<td>".$row['DMZ']."</td>";
                echo "<td>".$row['LAN']."</td>";
                echo "<td>".$row['Manage']."</td>";
                echo "<td>".$row['Pemilik']."</td>";
                echo "<td>".$row['Bidang']."</td>";
                echo "<td>".$row['Seksi']."</td>";
                echo "<td>".$row['Lantai']."</td>";
                echo "<td>".$row['Rak']."</td>";
                echo "<td>".$row['Konfigurasi']."</td>";
                echo "<td>".$row['Penanggungjawab']."</td>";
                echo "<td><a href='".site_url('Jenisnya/form_edit_switch')."?Idswitch=".$row['Idswitch']."'><button>Edit</button></a>
                <div>
                <a href='".site_url('Jenisnya/delete_switch')."?Idswitch=".$row['Idswitch']."'><button>Hapus</button>
                </td>";

                echo "</tr>";
             }
        ?>
      </tbody>
    </table>
  </div>