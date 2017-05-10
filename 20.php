<?php
echo "A számok:\n";
for ($i=0, $boo=false; $i<20; $i++){
    $szam=20;
    $prim=7;
    $kiir=($i*$prim)%$szam;
    echo "$kiir ";
    //minden második
        if ($boo==false){
        //echo "Az első: $kiir \n";
        $elsotomb[$i]="$kiir";
        $boo=true;
        } else {
        //echo "A második: $kiir \n";
        $masodiktomb[$i]="$kiir";
        $boo=false;
        }
}
echo "\nMinden első szám:\n";
foreach ($elsotomb as $seged){
    echo"$seged"." ";
    } 
echo "\nMinden második szám:\n";
foreach ($masodiktomb as $seged){
    echo"$seged"." ";
    }
echo "\n";
/*
for ($i=0; $i<20; $i++){
    $szam=20;
    $prim=7;
    $kiir=($i*$prim)%$szam;
    echo "A szám: $kiir \n";
}
*/
?>