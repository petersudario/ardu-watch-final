<?php


$bom = "Bom";
$ruim = "Ruim";
if ($bpm > 78) {
    $result = false;
} elseif ($bpm < 73) {
    $result = false;
} elseif ($bpm >= 74) {
    $result = true;
}

if ($oxig >= 95) {
    $result2 = true;
}

if ($oxig < 95) {
    $result2 = false;
}

if ($pressionado == true){
    $result3 = true;
}
else {
    $result3 = false;
}

?>
