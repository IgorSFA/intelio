<style type="text/css">
	.estilo{
		color: green;
	}

</style>

<?php
	$info = file_get_contents("sugestoes.json");
	$lendo = json_decode($info);
	$vendaConjunta = '{"vendaConjunta":[';		
	$qtdVenda = count($lendo->vendaConjunta)-1;
	$qtdPromo = count($lendo->promoDia);
	$count = 0;
	
	foreach($lendo->vendaConjunta as $campo){
		if($qtdVenda != $count){
			$vendaConjunta .= '"Coloque o produto '.$campo->produto1.' próximo ao produto '.$campo->produto2.'",';
		}else{
			$vendaConjunta .= '"Coloque o produto '.$campo->produto1.' próximo ao produto '.$campo->produto2.'"';
		}
		$count ++;
	}

	$vendaConjunta .= '],';

	$promoDia = '"promodia":[';
	$cont = 0;
	foreach($lendo->promoDia as $campo){
		foreach($campo->produtos as $item){
			if($qtdPromo >= $cont){
				$promoDia .= '"Sugestão de promoção de '.$campo->diaSemana.' :'.$item.'",';
			}else{
				$promoDia .= '"Sugestão de promoção de '.$campo->diaSemana.' :'.$item.'"';
			}
			$cont++;
		}
	}

	$promoDia .=']}';
	$json = $vendaConjunta.$promoDia;
	
	$final = json_encode($json,JSON_UNESCAPED_UNICODE);
	echo $final;
?>