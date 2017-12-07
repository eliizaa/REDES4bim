<?php
$senha=$_POST['senha'];
$senha=strtoUpper($senha);


function rem_repet( $str )
{
	$tam = strlen($str);
	$res = array();
		for( $i = 0; $i < $tam; $i++ )
		if( !in_array($str[$i], $res) )
			array_push($res,$str[$i]);
	return $res;
}//tira repeticao

$texto=$_POST['texto'];
$texto=strtoUpper($texto);
$texto=str_split($texto);


$alfabeto ='abcdefghijklmnopqrstuvwxyz';
$alfabeto=strtoUpper($alfabeto);

$alfaCrip = rem_repet($senha.$alfabeto);//Alfabeto Criptografado

var_dump($alfaCrip);

	$alfabeto=str_split($alfabeto);
	
	$cripCesar = array();
for($i=0; $i<count($texto); $i++){
	if($texto[$i]!=" " && $texto[$i]!="." && $texto[$i]!="," && $texto[$i]!="?" && $texto[$i]!="!" ){
		$carac=ord($texto[$i]);
		$carac = $carac-65;
		
		array_push($cripCesar, $alfaCrip[$carac]);	
	}
	else{
		array_push($cripCesar, $texto[$i]);
	}
}
	echo "<pre>";
	print_r($cripCesar);
	echo "</pre>";

			$arrayRot13 = array();

			$metade1 = array("A","B","C","D","E","F","G","H","I","J","K","L","M");
			
			$metade2 = array("N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
			for($i=0; $i<count($cripCesar); $i++){
				if(ord($cripCesar[$i])>=65 && ord($cripCesar[$i])<=90){
					for($j=0; $j<count($metade1); $j++){
						if($cripCesar[$i]==$metade1[$j]){
							array_push($arrayRot13, $metade2[$j]);
						}
					}
					for($j=0; $j<count($metade2); $j++){
						if($cripCesar[$i]==$metade2[$j]){
							array_push($arrayRot13, $metade1[$j]);
						}
					}
				}else{
					array_push($arrayRot13, $cripCesar[$i]);
				}
				
			$arrayRot13[$i] = ord($arrayRot13[$i]);
			$arrayRot13[$i] = base_convert($arrayRot13[$i], 10, 16);
			echo $arrayRot13[$i];
			}
			echo "<pre>";
			print_r($arrayRot13);
			echo "</pre>";

			


?>