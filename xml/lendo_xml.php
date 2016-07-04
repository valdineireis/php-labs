<?php

// Exemplo

//$xml = simplexml_load_string("url");
$xml = simplexml_load_file("arquivo.xml");

//print_r($xml);

echo "Cidade: ".$xml->nome."<br>";

echo "Manhã".$xml->manha->vento."<br>";
echo "Tarde".$xml->tarde->vento."<br>";
echo "Noite".$xml->noite->vento."<br>";


?>
