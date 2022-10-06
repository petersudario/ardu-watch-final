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
 <caption>Informações do oxímetro</caption>

<div>
  
<?php 
  include "conexao.php";  
   $sql = "SELECT * FROM oximetro";
  $resultado = mysqli_query($conexao,$sql)  or die (mysqli_error());
  ?>
	<table class="table table-striped table-bordered">
		 <thead class='table-success'>
		 <tr>
      
        <th>Oxigenação</th>
        <th>Batimento</th>
        <th>BPM </th>
       
      </tr>
    </thead>
	<?php
      while ($linha=mysqli_fetch_array($resultado)) {                 
      
      $oxig = $linha["oxigenacao"];
	    $batim = $linha["bp"];
      $bpm = $linha["bpm"];
	?>
	<tbody >
	<tr>

      <td><?php echo "$oxig"; ?></td>
      <td><?php echo "$batim"; ?></td>
      <td><?php echo "$bpm"; ?></td>


    </tr>
      <?php
	}
	mysqli_close($conexao);
   ?> 
   </tbody>
   
   </table>
   
   <a href="./listRtc.php"> Ir para RTC <br> </h>
      <a href="./listGps.php"> Ir para GPS </h>
</div>

</body>
</html> 
