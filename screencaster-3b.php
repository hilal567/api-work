<?php

function convert($value) {

	$result = preg_replace("/[^a-z0-9A-Z]/", ",", $value);
	if ($value ="Engineer-Wairuri-Kamau|20.00,15,16") {
		# code...
		$a =  strtr($result, array("Engineer"=>"(Er.)"));
		return $a;
	}
	if ($value ="Doctor WaMvua Ka12mbua `12040102010") {
		# code...
		$b =  strtr($result, array("Doctor"=>"(Dr.)"));
		return $b;
	}
	elseif ($value ="Miss#tOopoi#susan£3311") {
		# code...
		$c =  strtr($result, array("Miss"=>"(Ms.)"));
		return $c;
	}
	elseif($value ="Mister%Jothan%Wafula_7+7") {
		# code...
		$d =  strtr($result, array("Mister"=>"(Mr.)"));
		return $d;
	}
	
	

	return $result;
}

echo convert("Engineer-Wairuri-Kamau|20.00,15,16")."<br>";
echo convert("Doctor WaMvua Ka12mbua `12040102010")."<br>";
echo convert("Miss#tOopoi#susan£3311")."<br>";
echo convert("Mister%Jothan%Wafula_7+7")."<br>";
?>