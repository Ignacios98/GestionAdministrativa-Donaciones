<?php
$dalTablecbs = array();
$dalTablecbs["Clase"] = array("type"=>3,"varname"=>"Clase", "name" => "Clase", "autoInc" => "0");
$dalTablecbs["Familia"] = array("type"=>3,"varname"=>"Familia", "name" => "Familia", "autoInc" => "0");
$dalTablecbs["Nombre _Segmento"] = array("type"=>200,"varname"=>"Nombre__Segmento", "name" => "Nombre _Segmento", "autoInc" => "0");
$dalTablecbs["Nombre_Clase"] = array("type"=>200,"varname"=>"Nombre_Clase", "name" => "Nombre_Clase", "autoInc" => "0");
$dalTablecbs["Nombre_Familia"] = array("type"=>200,"varname"=>"Nombre_Familia", "name" => "Nombre_Familia", "autoInc" => "0");
$dalTablecbs["Nombre_Producto"] = array("type"=>200,"varname"=>"Nombre_Producto", "name" => "Nombre_Producto", "autoInc" => "0");
$dalTablecbs["Producto"] = array("type"=>3,"varname"=>"Producto", "name" => "Producto", "autoInc" => "0");
$dalTablecbs["Segmento"] = array("type"=>3,"varname"=>"Segmento", "name" => "Segmento", "autoInc" => "0");
$dalTablecbs["unspsc_id"] = array("type"=>3,"varname"=>"unspsc_id", "name" => "unspsc_id", "autoInc" => "1");
$dalTablecbs["unspsc_id"]["key"]=true;

$dal_info["dbrf_at_127_0_0_1__cbs"] = &$dalTablecbs;
?>