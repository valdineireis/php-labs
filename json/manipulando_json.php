<?php

// Exemplo de manipulação de JSON

// Lendo URL
$json = file_get_contents("url");

// Transformando o resultado em array, para manipulação
$json = json_decode($json);

// Criando um novo objeto para adição ao array
$obj = new StdClass();
$obj->codigo = 111;
$obj->cidade = "Espírito Santo";
$obj->uf = "ES";

$json->itens[] = $obj;

//print_r($json);

echo "Cidades: ".count($json->itens)."<br>";

foreach ($json->itens as $item) {
	echo "Cidade: ".$item->cidade."<br>";
}

echo "<br>";

// Transforma o array em json
echo json_encode($json);

?>
