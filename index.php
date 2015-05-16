<?php
 $rota=parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 $path= str_replace("/", "", $rota['path']);
?>
<html>
<head>
	<title></title>
</head>
<body>


<?php require_once("menu.php");?>
<div>
	<?php require_once($path.".php");?>
</div>
</body>
</html>