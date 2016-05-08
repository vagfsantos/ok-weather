<?php
	$city = $_POST['city'];
	$url = 'http://servicos.cptec.inpe.br/XML/listaCidades?city=' . urlencode($city);
	$xml = simplexml_load_file($url); 
	echo json_encode($xml);
?>