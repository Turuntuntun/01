<?php
$url = 'http://www.cbr.ru/scripts/XML_daily.asp';
$xml = simplexml_load_file($url);
$rand = rand(1,100);
foreach ($xml->Valute as $value){
    $code    =  $value->CharCode->__toString();
    $index   =  $value->Value->__toString();
    $name    =  $value->Name->__toString();
    $nominal =  $value->Nominal->__toString();
    $result['RUB'] =
        [
            'NAME'    => 'Российский рубль',
            'INDEX'   => 1,
            'PAR' => 1
        ];
    $result[$code] =
        [
            'NAME'    => $name,
            'INDEX'   => str_replace(',','.',$index),
            'PAR' => $nominal
        ];
}
include 'layouts/layout.php';