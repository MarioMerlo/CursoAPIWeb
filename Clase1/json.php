<?php

$noticia = array(
                'titulo' => "Este es mi titulo",
                'cuerpo' => "Desarrollo de la noticia",
                'fecha'=> "20202-07-06"
                );

$json = json_encode($noticia, true);

header("Content-type: application/json");
echo $json;


