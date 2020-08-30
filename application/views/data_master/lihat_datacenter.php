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
      if((empty($_POST['p_rak'])) And (empty($_POST['p_tahun'])) )   
      {  
        echo "Anda belum memilih!";
        redirect('Jenisnya/melihat_server');  
      }
      $jb = $_POST['p_rak'];  
      if ($jb == 'r_1') 
        {
          $jk=$_POST['p_tahun'];
          if ((empty($_POST['p_tahun'])) )
          {
            redirect('Jenisnya/melihat_serverr1');
          }
          elseif($jk=='t_14')
          {
              redirect('Jenisnya/melihat_serverr14');
          }
          elseif($jk=='t_15')
          {
                redirect('Jenisnya/melihat_serverr15');
          }
          elseif($jk=='t_16')
          {
                redirect('Jenisnya/melihat_serverr16');
          }
          elseif($jk=='t_17')
          {
                redirect('Jenisnya/melihat_serverr17');
          }
          elseif($jk=='t_18')
          {
                redirect('Jenisnya/melihat_serverr18');
          }
          echo "coba lagi";
        }
      elseif ($jb == 'r_2') {
          $jk=$_POST['p_tahun'];
          if ((empty($_POST['p_tahun'])) )
          {
            redirect('Jenisnya/melihat_serverr2');
          }
          elseif($jk=='t_14')
          {
              redirect('Jenisnya/melihat_serverr214');
          }
          elseif($jk=='t_15')
          {
                redirect('Jenisnya/melihat_serverr215');
          }
          elseif($jk=='t_16')
          {
                redirect('Jenisnya/melihat_serverr216');
          }
          elseif($jk=='t_17')
          {
                redirect('Jenisnya/melihat_serverr217');
          }
          elseif($jk=='t_18')
          {
                redirect('Jenisnya/melihat_serverr218');
          }
          echo "coba lagi";
      }
      elseif ($jb == 'r_3') {
          $jk=$_POST['p_tahun'];
          if ((empty($_POST['p_tahun'])) )
          {
            redirect('Jenisnya/melihat_serverr3');
          }
          elseif($jk=='t_14')
          {
              redirect('Jenisnya/melihat_serverr314');
          }
          elseif($jk=='t_15')
          {
                redirect('Jenisnya/melihat_serverr315');
          }
          elseif($jk=='t_16')
          {
                redirect('Jenisnya/melihat_serverr316');
          }
          elseif($jk=='t_17')
          {
                redirect('Jenisnya/melihat_serverr317');
          }
          elseif($jk=='t_18')
          {
                redirect('Jenisnya/melihat_serverr318');
          }
          echo "coba lagi";
      }
      elseif ($jb == 'r_4') {
          $jk=$_POST['p_tahun'];
          if ((empty($_POST['p_tahun'])) )
          {
            redirect('Jenisnya/melihat_serverr4');
          }
          elseif($jk=='t_14')
          {
              redirect('Jenisnya/melihat_serverr414');
          }
          elseif($jk=='t_15')
          {
                redirect('Jenisnya/melihat_serverr415');
          }
          elseif($jk=='t_16')
          {
                redirect('Jenisnya/melihat_serverr416');
          }
          elseif($jk=='t_17')
          {
                redirect('Jenisnya/melihat_serverr417');
          }
          elseif($jk=='t_18')
          {
                redirect('Jenisnya/melihat_serverr418');
          }
          echo "coba lagi";
      }
      elseif ($jb == 'r_5') {
          $jk=$_POST['p_tahun'];
          if ((empty($_POST['p_tahun'])) )
          {
            redirect('Jenisnya/melihat_serverr5');
          }
          elseif($jk=='t_14')
          {
              redirect('Jenisnya/melihat_serverr514');
          }
          elseif($jk=='t_15')
          {
                redirect('Jenisnya/melihat_serverr515');
          }
          elseif($jk=='t_16')
          {
                redirect('Jenisnya/melihat_serverr516');
          }
          elseif($jk=='t_17')
          {
                redirect('Jenisnya/melihat_serverr517');
          }
          elseif($jk=='t_18')
          {
                redirect('Jenisnya/melihat_serverr518');
          }
          echo "coba lagi";
      }
      echo "coba lagi";    
  }   
  ?>  
 <div class="panel panel-default">
    <div class="panel-body">
     
      <table class="table table-bordered">
        <thead>
          <tr>
      <td style="padding: 200px"><h1><center>Silahkan Pilih Rak dan Tahun</center></h1> </td>
       
    </tr> 
  </thead>
</table>
</div>
</div>
</html>