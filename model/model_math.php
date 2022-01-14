<?php 

function size_convrt($size){
	if($size < 1000){
		$byt = $size." B";
		return $byt;
	}elseif (($size >= 1000) && ($size < 1000000)) {
		$kilo = $size / 1000;
		$e_kilo = round($kilo,2)." KB";
		return $e_kilo;
	}elseif (($size >= 1000000) && ($size < 1000000000)) {
		$mega = $size / 1000000;
		$e_mega = round($mega,2)." MB";
		return $e_mega;
	}elseif (($size >= 1000000000) && ($size < 1000000000000)) {
		$giga = $size / 1000000000;
		$e_giga = round($giga,2)." GB";
		return $e_giga;
	}else{
		$more = "> 10 TB";
		return $more;
	}
}


 ?>