<?php
$tomb=array("auto", "motor", "laptop", "telefon");
$p=readline("Jelszó?: ");
for ($i=0; $i<(count($tomb)); $i++){//szabadon választható tömb hossz miatt
    if ($tomb[$i]==$p){
        echo("Denied\n");
        exit(0);
    }
}
echo("Allowed\n");
exit(1);
?>