<!DOCTYPE html>
<html>
<div class="panel panel-default">
    <div class="panel-body">
<body>
<form action="" method="post">   
 <select class="form-control" name="j_bidang">  
 <option value="">Silahkan Pilih Bidang</option>  
 <option value="b_egov">Bidang E-Gov</option>  
 <option value="b_apif">Bidang Aplikasi Informatika</option>  
 <option value="b_infokom">Bidang Informasi dan Komunikasi Publik</option>  
  <option value="b_persandian">Bidang Persandian dan Keamanan Informasi</option>  
  <option value="b_statistik">Bidang Statistik</option>  
 </select> 
 <select class="form-control" name="j_kasi">  
 <option value="">Silahkan Pilih Seksi</option>  
 <option value="s_tatakelola">Seksi Tata Kelola</option>  
 <option value="s_pengelolaaninfra">Seksi Pengelolaan infrastruktur</option>  
 <option value="s_layanan">Seksi Layanan Infrastruktur</option>
 <option value="">-----------------------</option>
 <option value="s_rekayasa">Seksi Rekayasa Aplikasi</option>
 <option value="s_integrasi">Seksi Integrasi dan Interoperabilitas</option>
 <option value="s_pengelolaanaplikasi">Seksi Pengelolaan Aplikasi</option>
 <option value="">-----------------------</option>
 <option value="s_pengelolaaninfo">Seksi Pengelolaan Informasi</option>
 <option value="s_komunikasipub">Seksi Komunikasi Publik</option>
 <option value="s_kemitraankom">Seksi Kemitraan Komunikasi</option>
 <option value="">-----------------------</option>
 <option value="s_persandian">Seksi Persandian</option>
 <option value="s_keamananinfo">Seksi Keamanan Informasi</option>
 <option value="s_layanankeamanan">Seksi Layanan Keamanan Informasi</option>
 <option value="">-----------------------</option>
 <option value="s_komplikasidata">Seksi Komplikasi Data</option>
 <option value="s_pengolahananalis">Seksi Pengolahan dan Analisis</option>
 <option value="s_layanandata">Seksi Layanan Data</option>

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
          elseif($jk=='s_tatakelola')
          {
            $ji=$_POST['j_inventaris'];
            if (empty($_POST['j_inventaris']))
            {
              redirect('Jenisnya/lihat_kasi1');
            }
            elseif ($ji== 'Switch')
            {
                redirect('Jenisnya/melihat_switch1');
            }
          }
          elseif($jk=='s_pengelolaaninfra')
          {
            $ji=$_POST['j_inventaris'];
            if (empty($_POST['j_inventaris']))
            {
              redirect('Jenisnya/lihat_kasi2');
            }
            elseif ($ji== 'Switch')
            {
                redirect('Jenisnya/melihat_switch2');
            }
          }
          elseif($jk=='s_layanan')
          {
            $ji=$_POST['j_inventaris'];
            if (empty($_POST['j_inventaris']))
            {
              redirect('Jenisnya/lihat_kasi3');
            }
            elseif ($ji== 'Switch')
            {
                redirect('Jenisnya/melihat_switch3');
            }
          }
          echo "Seksi tidak cocok";
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
  <div class="table-responsive">
    <h2><center> Daftar Switch </center></h2>        
    <!--<h2><center> CV. Abadi Jaya </center></h2> -->
    <table id="myTable-stocklist" class="table table-bordered table-hover table-striped">
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
                           echo "</tr>";
             }
        ?>
      </tbody>
    </table>
  </div>