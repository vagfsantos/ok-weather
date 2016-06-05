<?php
	$city = $_POST['city'];
	function tirarAcentos($string){
	    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
	}
	$url = 'http://servicos.cptec.inpe.br/XML/listaCidades?city=' . urlencode(tirarAcentos($city));
	$xml = simplexml_load_file($url); 
	echo json_encode($xml);
?>