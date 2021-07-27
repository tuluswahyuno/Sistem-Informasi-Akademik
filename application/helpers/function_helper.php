<?php 

	function skorNilai($nilai,$sks)
	{
		if($nilai == 'A') $skor=4*$sks;
		elseif ($nilai == 'B') $skor=3*$sks;
			elseif ($nilai == 'C') $skor=2*$sks;
				elseif ($nilai == 'D') $skor=1*$sks;
					else $skor=0;
				return $skor;
	}

 ?>