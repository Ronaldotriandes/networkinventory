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
 <div class="panel panel-default">
    <div class="panel-body">
     
      <table class="table table-bordered">
        <thead>
          <tr>
      <td style="padding: 200px"><h1><center>Silahkan Pilih Jenis Inventaris</center></h1> </td>
       
    </tr> 
  </thead>
</table>
</div>
</div>
</html>