<?php
include('config.php');
?>
	
<html lang="en">
  <head >
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
     <!-- Untuk Google Chrome, Firefox & Opera --> 
     
     <meta name="theme-color" content="#F0F8FF">
     <!-- Untuk Windows Phone --> 
     <meta name="msapplication-navbutton-color" content="#F0F8FF"> 
     <!-- Untuk Safari iOS --> 
     <meta name="apple-mobile-web-app-capable" content="yes"> 
     <meta name="apple-mobile-web-app-status-bar-style" content="#F0F8FF">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap-4.1.3/css/bootstrap-4.1.3.min.css">
	
	
    <title >ecomerce</title>
  </head>
  <style>
      

  </style>
  
  <body style="background-color:#F5F5F5;">



<div class="container mt-5">

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Tambah</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql = "SELECT * FROM kadidat";
       $query = mysqli_query($con, $sql);
        while($data = mysqli_fetch_array($query)){
    echo "<tr>";
      
      echo "<td scope='row'>".$data['id']."</td>";
      echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jumlah']."</td>";
    echo "<td>";
            
            echo "<a role='button' class='btn btn-success' href='update.php?id=".$data['id']."'>tambah</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
  </tbody>
</table>
</div><!-- container-->
</body>

</html>





        
            

            
            
            

            