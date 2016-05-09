<?php
	$city_id = $_POST['city_id'];
	$url = 'http://servicos.cptec.inpe.br/XML/cidade/'. $city_id .'/previsao.xml';
	$xml = simplexml_load_file($url); 
	echo json_encode($xml);
?>