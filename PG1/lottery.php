<?php
// loser
//bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 2)

//winner
//bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 1)

//loser
//bingo([['HGTYRE', 74], ['BE', 66], ['JKTY', 74]], 3)

function bingo($arr, $cap)
{
	$win = 0;

	foreach($arr as $a)
	{
		$chars = str_split($a[0]);
		foreach($chars as $c)
		{
			if($a[1] == ord($c))
			{
				$win++;
			}
		}
	}

	return ($win>=$cap?"Winner!":"Loser!");
}
?>
