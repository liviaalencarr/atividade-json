<?php 

$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';
//string json contendo os dados de um funcionário

$obj = json_decode($json_str);
//faz o parsing na string, gerando um objeto PHP

echo "nome: $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";

?>