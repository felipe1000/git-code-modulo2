<?php
try{
	$conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
	
}
catch(\PDOException $e){
	die("Erro Código: ".$e->getCode().": ".$e->getMessage());

}

$id=1;
$sql = "SELECT * FROM `clientes` WHERE id= :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("id",$id);
$stmt->execute();
$clientes = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($clientes);
?>