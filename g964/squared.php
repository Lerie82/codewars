<?php
function listSquared($m, $n)
{
	//$n=246;
	$sum = 0;
	$ret = [];

	for($i=0;$i<=$n;$i++)
	{
		$r = pow($i,2);

		if($n%$i==0)
		{
			echo "$i = $r\n";
			$sum += $r;
		}

		if(sqrt($sum) == floor(sqrt($sum)))
		{
			//found a squared one
			echo "this one is square";
			array_push($ret, [$n,$sum]);
		}
	}

	return $ret;
}

die(var_dump(listSquared(1, 250)));
?>
