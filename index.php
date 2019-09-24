<?php
//require_once 'parse.php';
//
//$html = parse::getPage([
//    'url' => "http://www.cbr.ru/scripts/XML_daily.asp",
//    'proxy' => [
//        'ip' => '67.205.132.241',
//        'port' => '1080'
//    ],
//
//
//]);
//echo '<pre>';
$result = [];
$url = 'http://www.cbr.ru/scripts/XML_daily.asp';
$xml = simplexml_load_file($url);
echo '<pre>';
foreach ($xml->Valute as $value){
    $code  =  $value->CharCode->__toString();
    $index =  $value->Value->__toString();
    $name  =  $value->Name->__toString();
    $result[] = [
        $code =>
            [
            'NAME'  => $name ,
            'INDEX' => $index
            ]
    ];
}
file_put_contents('result.txt', json_encode($result));
include 'layout.php';