<?php  
    $bom = "Bom"; 
    $ruim = "Ruim"; 
    if ($bpm > 78) {
        $result = false;
    } 
    else if ($bpm < 73){
        $result = false;
    }
    else if ($bpm >=74){
            $result = true;
    }

    if ($oxig >= 95){
        $result2 = true;
    }
                
    if ($oxig < 95) {
        $result2 = false;
    }
?>