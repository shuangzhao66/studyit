<?php
//    $a = 10;
//    echo $a;
//echo $_SERVER;
//var_dump($_SERVER);


$pathinfo = "/dashboard/index";
if(array_key_exists("PATH_INFO",$_SERVER)){
    $pathinfo = $_SERVER["PATH_INFO"];
}
//echo $pathinfo;
$pathArr = explode("/",substr($pathinfo,1));
include "views/".$pathArr[0]."/".$pathArr[1].".html";
//    echo $_SERVER;
//    var_dump($_SERVER);
//    $pathinfo = $_SERVER["PATH_INFO"];
//    echo $pathinfo;

//    var_dump(explode("/",$pathinfo));

//    echo substr($pathinfo,1);


//    $pathArr = explode("/",substr($pathinfo,1));
//    $path_parts = pathinfo();
//    include "/views/dashboard/index.html";
//    include "views/".$pathArr[0]."/".$pathArr[1].".html";
?>