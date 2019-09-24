<?php

$result = [];
$url = 'http://www.cbr.ru/scripts/XML_daily.asp';
$xml = simplexml_load_file($url);
foreach ($xml->Valute as $value){
    $code  =  $value->CharCode->__toString();
    $index =  $value->Value->__toString();
    $name  =  $value->Name->__toString();
    $result[$code] =
        [
            'NAME'  => $name ,
            'INDEX' => $index
        ];
}
file_put_contents('results/result.txt', json_encode($result));
include 'layouts/layout.php';