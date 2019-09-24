<?php


$xml = new DOMDocument();
$url = 'http://www.cbr.ru/scripts/XML_daily.asp?date_req=' . date('d.m.Y');
$xml->load($url);
    echo '<pre>';
var_dump($xml);