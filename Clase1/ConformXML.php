<?php

$noticia = array('titulo' => "Este es mi titulo",
                'cuerpo' => "Desarrollo de la noticia",
                'fecha'=> "20202-07-06"
                );

$xml = new SimpleXMLElement("<notas></notas>");

$noticias = $xml->addChild("noticias");
$noticias->addChild("titulo", "$noticia['titulo']");
$noticias->addChild("cuerpo", "$noticia['cuerpo']");
$noticias->addChild("fecha", "$noticia['fecha']");

header("Content-Type: text/xml");
echo $xml->asXML();

