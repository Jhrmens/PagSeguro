<?php
$Data["email"]="";
$Data["token"]="";
$Data["currency"]="BRL";
$Data["itemId1"]="1";
$Data["itemDescription1"]="ZA WARUDO";
$Data["itemAmount1"]="1000.00";
$Data["itemQuantity1"]="1";
$Data["itemWeight1"]="1000";
$Data["reference"]="83783783737";
$Data["senderName"]="Dio Brando";
$Data["senderAreaCode"]="37";
$Data["senderPhone"]="99999999";
$Data["senderEmail"]="c51994292615446022931@sandbox.pagseguro.com.br";
$Data["shippingType"]="1";
$Data["shippingAddressStreet"]="Rua Nippon";
$Data["shippingAddressNumber"]="10";
$Data["shippingAddressComplement"]="Mansao";
$Data["shippingAddressDistrict"]="Morioh";
$Data["shippingAddressPostalCode"]="30690090";
$Data["shippingAddressCity"]="Cairo";
$Data["shippingAddressState"]="MG";
$Data["shippingAddressCountry"]="BRA";

$BuildQuery=http_build_query($Data);
$Url="https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";

$Curl=curl_init($Url);
curl_setopt($Curl,CURLOPT_HTTPHEADER,Array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
curl_setopt($Curl,CURLOPT_POST,true);
curl_setopt($Curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($Curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($Curl,CURLOPT_POSTFIELDS,$BuildQuery);
$Retorno=curl_exec($Curl);
curl_close($Curl);

$Xml=simplexml_load_string($Retorno);
echo $Xml->code;
?>


