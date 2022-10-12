<!DOCTYPE html>
<html lang="pt-BR">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdn.tailwindcss.com"></script>


      </head>
      <header>
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center text-white">
                            <p class="font-sans antialiased font-bold">ARDU-WATCH </p>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
        </nav>
        <script type="text/javascript">
    function load(){
        setTimeout("window.open(self.location, '_self');", 1000);
    }
    </script>
    </header>

<body onload="load()">


<div>
  
<?php 
  include "conexao.php";  
   $sql = "SELECT * FROM rtc";
  $resultado = mysqli_query($conexao,$sql)  or die (mysqli_error());
?>
  <div class="overflow-x-auto relative " style="background-color:rgb(31,41,55);">
	<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
		 <thead class ="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
		 <tr>
      
        <th scope="col">Tempo</th>
        <th scope="col">Data</th>
      </tr>
    </thead>
	<?php
     while ($linha=mysqli_fetch_array($resultado)) {                 
	
	  $t = $linha["tempo"];
    $d = $linha["dia"]
	?>
	<tbody >
	<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

      <td class="py-4 px-6"><?php echo "$t"; ?></td>
      <td class="py-4 px-6"><?php echo "$d"; ?></td>


      
    </tr>
      <?php
	}
	mysqli_close($conexao);
   ?> 
   </tbody>
   </table>
   <a class="font-sans antialiased font-bold text-white" href="./listGps.php"> <center>Ir para GPS </center><br> </h>
  <a class="font-sans antialiased font-bold text-white" href="./listOximetro.php"> <center>Ir para Oxímetro</center> </h>
</div>

</body>
</html> 
