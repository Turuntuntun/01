<?php
$rand = rand(1,100);
$url = 'http://www.cbr.ru/scripts/XML_daily.asp';
$xml = simplexml_load_file($url);

$dateFile = date('Y.m.d',filemtime('result/result.txt'));

if($xml and $dateFile != date('Y.m.d')){
    foreach ($xml->Valute as $value){
        $code    =  $value->CharCode->__toString();
        $index   =  $value->Value->__toString();
        $name    =  $value->Name->__toString();
        $nominal =  $value->Nominal->__toString();
        $result['RUB'] =
            [
                'NAME'    => 'Российский рубль',
                'INDEX'   => 1,
                'PAR'     => 1
            ];
        $result[$code] =
            [
                'NAME'    => $name,
                'INDEX'   => str_replace(',','.',$index),
                'PAR'     => $nominal
            ];
    }

    file_put_contents('result/result.txt', json_encode($result));
} else {
    $result = json_decode(file_get_contents('result/result.txt'),true);
}
include 'layouts/layout.php';