<?php

require_once "conexaoDB.php";

echo "#### Executando Fixture ####<br>";

$conn= conexaoDB();

echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " -OK<br>";

echo "Criando Tabela";
$conn->query("CREATE TABLE teste(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(50) CHARACTER SET 'utf8' NULL);");
echo " -OK<br>";

echo "Inserindo Dados";
for($x=0;$x<=9;$x++){

	$name = "Teste {$x}";

	$smt = $conn->prepare("INSERT INTO teste (name) VALUE (:name);");
	$smt->bindParam(":name",$name);
}
echo " -OK<br>";

echo "#### Concluído ####<br>";
?>