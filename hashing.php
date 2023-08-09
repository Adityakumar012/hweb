<?php
use kornrunner\Keccak;

$var1 = $_GET;
if($var1['a']==1){
    $var2=hash('sha256', $var1['text']);
}
if($var1['a']==2){
    $var2=hash('sha384', $var1['text']);
}
if($var1['a']==3){
    $var2=hash('sha512', $var1['text']);
}
if($var1['a']==4){
    $var2=hash('sha224', $var1['text']);
}
if($var1['a']==5){
    $var2=hash('sha3-256', $var1['text']);
}
if($var1['a']==6){
    $var2=hash('sha3-384', $var1['text']);
}
if($var1['a']==7){
    $var2=hash('sha3-512', $var1['text']);
}
if($var1['a']==8){
    $var2=hash('sha3-224', $var1['text']);
}
if($var1['a']==9){
    $var2=Keccak::hash('', 256);
}
if($var1['a']==10){
    $var2=hash('keccak-384', $var1['text']);
}
if($var1['a']==11){
    $var2=hash('keccak-512', $var1['text']);
}
if($var1['a']==12){
    $var2=hash('keccak-224', $var1['text']);
}
else{
    // do noting
}



print_r($var2);
?>