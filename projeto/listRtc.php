<!DOCTYPE html>
<html lang="pt-BR">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website com Bootstrap</title>      
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      </head>
      <script type="text/javascript">
          function load()
           {
              setTimeout("window.open(self.location, '_self');", 3000);
           }
      </script>
<body onload="load()">
 <caption>Tempo registrado pelo RTC</caption>

<div>
  
<?php 
  include "conexao.php";  
   $sql = "SELECT * FROM rtc";
  $resultado = mysqli_query($conexao,$sql)  or die (mysqli_error());
  ?>
	<table class="table table-striped table-bordered">
		 <thead class='table-success'>
		 <tr>
      
        <th>Tempo</th>
        <th>Data</th>
      </tr>
    </thead>
	<?php
     while ($linha=mysqli_fetch_array($resultado)) {                 
	
	 $t = $linha["tempo"];
    $d = $linha["dia"]
	?>
	<tbody >
	<tr>

      <td><?php echo "$t"; ?></td>
      <td><?php echo "$d"; ?></td>


      
    </tr>
      <?php
	}
	mysqli_close($conexao);
   ?> 
   </tbody>
   </table>
   <a href="./listGps.php"> Ir para GPS <br> </h>
  <a href="./listOximetro.php"> Ir para Oxímetro </h>
</div>

</body>
</html> 
