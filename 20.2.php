<?php
echo "Minden második:\n";
for ($i=0; $i<20; $i+=2){
    $szam=20;
    $prim=7;
    echo ($i*$prim)%$szam." ";
}
echo "\n";
?>