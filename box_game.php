<?php

//box_game.php

/**
* 
*/
class box_game
{
	private $position = [0,0]; // x,y

	public function cek()
	{
		return $this->position;
	}

	public function kanan($petak)
	{
		$this->position[0]+=$petak;
	}
	public function kiri($petak)
	{
		$this->position[0]-=$petak;
	}
	public function atas($petak)
	{
		$this->position[1]-=$petak;
	}
	public function bawah($petak)
	{
		$this->position[1]+=$petak;
	}
	public function cetak_box()
	{
		$box = "<table border='1'>";
		for ($i=0; $i < 10; $i++) { 
		$box .= "<tr style='width:20px;height:20px;'>";

			for ($x=0; $x < 10; $x++) { 
				$box .= "<td style='width:20px;height:20px;'>";
				if ($this->position[0]==$x AND $this->position[1]==$i) {
					$box .= "x";
				}
				$box .= "</td>";
			}
			$box .="</tr>";
		 }
		 $box .= "</table>";
		 return $box;
	}
}
$box = new box_game;
echo $box->cetak_box();
$box->bawah(5);
echo $box->cetak_box();
$box->kanan(5);
echo $box->cetak_box();