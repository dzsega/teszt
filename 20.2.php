<?php
echo "Minden második:\n";
for ($i=0; $i<20; $i++){
    $szam=20;
    $prim=7;
        if ($i%2==1){
        echo ($i*$prim)%$szam." ";
        }
}
echo "\n";
?>