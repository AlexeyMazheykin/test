<?php
//$xmlFile = $_SERVER["DOCUMENT_ROOT"] . "/XML/FileZilla.xml";
$xmlFile = file_get_contents("FileZilla.xml");
$xml = new SimpleXMLElement($xmlFile);


$servers = [];

$xmlServers = $xml->Servers->Server;

foreach ($xmlServers as $server) {
//    $servers[] = [
//        "name" => $server->Host,
//        "port" => (string)$server->Port,
//        "user" => (string)$server->User,
//        "pass" => [
//            "value" => (string)$server->Pass,
//            "encoding" => (string)$server->Pass["encoding"]
//        ]
//    ];
    $server->Host["egerge"] = "Afaefwefwe";
}
$arr = ["ewe"=>"1", "aaa"=>2];


$str = $xml->asXML("../range/test.xml");


die();
