<div class="panel panel-default">
    <div class="panel-body">
<body>
 <form action="" method="post">   
 <select class="form-control" name="j_inventaris">  
 <option value="">Silahkan Pilih</option>  
 <option value="Server">Server</option>  
 <option value="Switch">Switch</option>  
 <option value="PC">PC</option>
 <option value="Router"> Router</option>  

 </select>   
 <input type="submit" name="enter" value="Enter">  
  
 </form>  

 <div class="panel panel-default">
    <div class="panel-body">
     
      <table class="table table-bordered">
        <thead>
          <tr>
      <td style="padding: 100px"><h1><center>Silahkan Pilih Jenis Inventaris Barang</center></h1> </td>
       
    </tr> 
  </thead>
</table>
</div>
</div>
</body>
<?php   
  if(isset($_POST['but']))   
  {   
   
      redirect('Jenisnya/coba');
  }   

  if(isset($_POST['enter']))   
  {   
      if(empty($_POST['j_inventaris']))  
      {  
        echo "Anda belum memilih!";  
      }
      $q = $_POST['j_inventaris'];  
      if ($q == 'Server') {
          redirect('Jenisnya/form_server');
      }
      if ($q == 'Switch') {
          redirect('Jenisnya/form_switch');
    }    
  }   
  ?>  
</html>