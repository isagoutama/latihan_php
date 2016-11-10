<?php

	function ulang($banyak,$kalimat)
	{
		// for ($i=0; $i < $banyak; $i++) { 
		// 	return $kalimat;
		// }
		if ( $banyak > 100) {
			return $kalimat;
		}else{
			return 0;
		}
	}
	function ulang2($banyak,$kalimat)
	{
		// for ($i=0; $i < $banyak; $i++) { 
		// 	return $kalimat;
		// }
		if ( $banyak > 100) {
			return $kalimat;
		}else{
			return 0;
		}
	}
	function kabatakumod($operator,$a1,$a2){
		if ($operator=="+") {
			return $a1+$a2;
		}
		else if ($operator=="-") {
			return $a1-$a2;
		}
		else if ($operator=="x") {
			return $a1*$a2;
		}
		else if ($operator=="/") {
			return $a1/$a2;
		}
		else if ($operator=="%") {
			return $a1%$a2;
		}else{
			return "no operator goblok";
		}
	}

	echo kabatakumod("+",100,50);
	echo kabatakumod("/",100,50);
	echo kabatakumod("x",100,50);
	echo kabatakumod("%",100,50);
	echo kabatakumod("-",100,50)."<br><br>";

	$hari = [0,"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Kamis"];
	// echo ulang(100,"hai");
	// echo ulang2(100,"hai");
	echo date("d-m-Y")."<br>";
	echo date("D, d M Y")."<br>";
	echo date("l, d M Y")."<br>";
	echo date("N, d M Y")."<br>";
	echo $hari[date("N")].date(", d M Y")."<br>";

	date_default_timezone_set(Asia/Jakarta);
	echo date("H:i:s")."<br>";

