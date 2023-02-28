<?php
$tahun = 1995;
var_dump($tahun);

if(($tahun %4== 0 && $tahun %100 !=0)|| $tahun %400 == 0) {
    echo "$tahun tahun kabisat" ;
}else {
    echo "$tahun bukan kabisat" ;
}













