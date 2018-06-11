<?php
function solution($str)
{
	//counting letter
	$counter = 1;

	//our return, array of 2 sets of letters
	$ltrs = array();

	//hold our 2 letter string
	$nstr = "";

	//loop through the string, 1 letter at a time
	for($i=0;$i<strlen($str);$i++)
	{
		//if our counter is at 2, reset it and push the data to the array
		if($counter>2)
		{
			$counter = 1;
			array_push($ltrs, $nstr);
			$nstr = "";
		}

		//our string, 2 letters
		$nstr .= $str[$i];
		//echo $str[$i]."<br/>";

		$counter++;
	}

	//if the given string array of letters is odd, add an underscore to the last one
	if(strlen($str) % 2 == 1)
	{
		$nstr .= $str[strlen($str)]."_";
		array_push($ltrs, $nstr);
	} else {
                $nstr .= substr($str[strlen($str)-1].$str[strlen($str)],0,-1);
                array_push($ltrs, $nstr);
	}

	return $ltrs;
}
?>
