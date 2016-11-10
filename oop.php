<?php

error_reporting(E_ALL);

// file oop.php
// deklarasi class/object

class Mobil
{
	private $warna = null;
	private $merk = null;

	private $kilometer = 0;
	private $satuan = " km<br>";

	private function getSatuanJarak()
	{
		return $this->satuan;
	}

	public function setWarna($warna_baru)
	{
		$this->warna = $warna_baru;
	}
	public function getWarna()
	{
		return $this->warna;
	}
	public function maju($km)
	{
		$this->kilometer += $km;
	}
	public function mundur($km)
	{
		$this->kilometer -= $km;
	}
	public function getJarak()
	{
		return $this->kilometer.$this->getSatuanJarak();
	}
	public function setSatuanJarak($sat)
	{
		$this->satuan = $sat;
	}
}

$mobil1 = new Mobil;
$mobil1->setWarna("hijau");
// echo $mobil1->getWarna();

$mobil1->setWarna("biru");
// echo $mobil1->getWarna();

echo $mobil1->getJarak();
$mobil1->maju(50);
echo $mobil1->getJarak();// 50 km
$mobil1->maju(15);
echo $mobil1->getJarak();// 65 km
$mobil1->mundur(60);
echo $mobil1->getJarak();// 5 km


$mobil1->setSatuanJarak(" m");
echo $mobil1->getJarak(); //5 m

