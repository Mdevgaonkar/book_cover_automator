<?php


$link=$_POST["link"] ;

$link=explode(',',$link) ;
$data=base64_decode($link[1]);

$filepath=("images/image".$_POST["no"].".jpg") ;

file_put_contents($filepath,$data) ;

?>
