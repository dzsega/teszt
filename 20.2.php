<?php
echo "Minden második:\n";
for ($i=0, $boo=false; $i<20; $i++){
    $szam=20;
    $prim=7;
    $kiir=($i*$prim)%$szam;
        if ($i%2==1){
        echo "$kiir"." ";
        }
}
?>