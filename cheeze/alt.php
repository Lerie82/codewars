<pre>

<?php
function isAlt($str)
{
	$vowels = array('a','e','i','o','u');

	//count=0
	$count = 0;

	//amazon
	//a,m,a,z,o,n
	$str = str_split($str);

	//is 'a' a vowel
	for($i=0;$i<count($str);$i++)
	{
		if(in_array($str[$i], $vowels))
		{
			//yes-> is next char const
			if($i+1 < sizeof($str))
			{
				if(!in_array($str[$i+1], $vowels))
				{
					//yes-> count++ (count=1)
					$count++;
				}
			}
		}

		if($count>1) return true;
	}

	return false;
}

echo isAlt("amazon")."\r\n";
echo isAlt("apple")."\r\n";
echo isAlt("banana")."\r\n";
echo isAlt("orange")."\r\n";
echo isAlt("helipad")."\r\n";
echo isAlt("yay")."\r\n";
?>
