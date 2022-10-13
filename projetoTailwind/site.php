<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>

    <script type="text/javascript">
    function load() {
        setTimeout("window.open(self.location, '_self');", 2000);
    }
    </script>


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
    </nav>
</header>

<body onload="load()" style="background-color:black; padding-bottom:150px">
    <div>
        <?php 
  include "conexao.php";  
   $sql = "SELECT * FROM oximetro JOIN gps JOIN rtc";
  $resultado = mysqli_query($conexao,$sql)  or die (mysqli_error());
    ?>
        <div class="overflow-x-auto relative " style="background-color:rgb(31,41,55);">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>


                        <th scope="col">BPM </th>
                        <th scope="col">Oxigenação</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Data </th>
                        <th scope="col">Eixo X</th>
                        <th scope="col">Eixo Y </th>
                        <th scope="col">Status </th>


                    </tr>
                </thead>
                <?php
      while ($linha=mysqli_fetch_array($resultado)) {      
        
        
        $bpm = $linha["bpm"];
        $oxig = $linha["oxigenacao"];

        $gx = $linha["geox"];
        $gy = $linha["geoy"];
        $t = $linha["tempo"];
        $d = $linha["dia"];

      }
	?>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="py-4 px-6"><?php echo "$bpm"; ?></td>
                        <td class="py-4 px-6"><?php echo "$oxig"; ?></td>
                        <td class="py-4 px-6"><?php echo "$t"; ?></td>
                        <td class="py-4 px-6"><?php echo "$d"; ?></td>
                        <td class="py-4 px-6"><?php echo "$gx"; ?></td>
                        <td class="py-4 px-6"><?php echo "$gy"; ?></td>
                        <td class="py-4 px-6">
                            <?php  
                $bom = "Bom"; 
                $ruim = "Ruim"; 
                $result;
                if ($bpm > 78) {
                    $result = false;
                } 
                else if ($bpm < 73)
                {
                    $result = false;
                }
                else if ($bpm >=74){
                    $result = true;
                }
                if($result == true){
                    echo $bom;
                }
                else {
                    echo $ruim;
                }
            ?>
                        </td>
                    </tr>

                    <?php
	    mysqli_close($conexao);
     ?>
                </tbody>
            </table>
        </div>
        <?php
    if($result == true){ 

        echo '<div class="text-white" style="margin-top: 70px" id="sem perigo">

        <center>
            <p class="font-sans antialiased font-bold" style="font-size: 30px">Nenhum risco encontrado!</p>        
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="width: 300px; height:300px" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
        </center>
        
    </div>';
    }
    else{
        echo '    
        
        <div class="text-white" style="margin-top: 70px" id="perigo">
        <center>
            <p class="font-sans antialiased font-bold" style="font-size: 30px">Perigo! Saúde em risco!</p>        
            <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" style="width: 300px; height:300px">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
            </svg>
        </center>
        
    </div>';
    }
?>


</body>

</html>