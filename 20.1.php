<?php
echo "A számok:\n";
$i=0;
while ($i<30){
    $szam=30;
    $prim=13;
    $kiir=($i*$prim)%$szam;
    echo "$kiir ";
    //minden harmadik
        switch ($i%3){
            case (0):
                $elsotomb[$i]="$kiir";
                break;
            case (1):
                $masodiktomb[$i]="$kiir";
                break;
            case (2):
                $harmadiktomb[$i]="$kiir";
                break;
        }
$i++;     
}
echo "\nMinden első szám:\n";
foreach ($elsotomb as $seged){
    echo"$seged"." ";
    } 
echo "\nMinden második szám:\n";
foreach ($masodiktomb as $seged){
    echo"$seged"." ";
    }
echo "\nMinden harmadik szám:\n";
foreach ($harmadiktomb as $seged){
    echo"$seged"." ";
    }
echo "\n";
/*
for ($i=0; $i<20; $i++){
    $szam=20;
    $prim=7;
    $kiir=($i*$prim)%$szam;
    echo "A szám: $kiir \n";
    //minden második
}
*/
?>