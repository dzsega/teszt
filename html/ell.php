<?php
$deniedWords=array("auto", "motor", "laptop", "telefon");
$questWord=readline("Keresett szó: ");
for ($i=0; $i<(count($deniedWords)); $i++){//szabadon választható tömb hossz miatt
    if ($deniedWords[$i]==$questWord){
        echo("Denied\n");
        exit(0);
    }
}
echo("Allowed\n");
exit(1);
?>
