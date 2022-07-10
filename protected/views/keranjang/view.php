<?php
$total=0;

if(!empty($_SESSION['basket'])){
    foreach($_SESSION['basket'] as $key => $val){
        $total +=$val;
    }
    echo'Ada<strong>'.$total.'</strong> barang dikeranjang<<br>';
} else {
    echo"Tidak ada barang di keranjang";
}
?>