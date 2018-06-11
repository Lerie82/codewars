<pre>
<?php
//https://www.codewars.com/kata/pick-peaks/train/php
function pickPeaks(array $arr)
{
	//our return
	$peaks = array(
		'pos' => array(), 'peaks' => array()
	);

	//get the key of the largest number in the array
	//$id = array_search(max($arr), $arr);

	for($i=0;$i<count($arr);$i++)
	{
		//left and right numbers
		$lnum = $arr[$i-1];
		$rnum = $arr[$i+1];

		//check if left and right side are lower than the current value
		//if they are, we found a peak
		if($lnum < $arr[$i] && $rnum < $arr[$i])
		{
			//add the new peak
			array_push($peaks['pos'], $i);

			//add new pos
			array_push($peaks['peaks'], $arr[$i]);
		}
	}

	//return the peaks we found
	return $peaks;
}

die(var_dump(pickPeaks([1,2,3,6,4,1,2,3,2,1])));
?>
