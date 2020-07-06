<?php
$contenido = simplexml_load_file('notas.xml');

if(is_object($contenido)) {
    for($i = 0; $i < count($contenido->noticia); $i++) {
      echo "<h1>Título: ".$contenido->noticia[$i]->titulo."</h1>";
      echo "<p>Cuerpo: ".$contenido->noticia[$i]->cuerpo."</p>";
      echo "<p>Autor: ".$contenido->noticia[$i]->autor."</p>";
      echo "<p>Fecha: ".$contenido->noticia[$i]->fecha."</p>";
      echo "<p>Imagen: ".$contenido->noticia[$i]->imagen."</p>";
      echo "<hr/>";
    };
} else {
    echo "Ha ocurrido un error";
}

