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
			if(strlen($str[$i+1])<=0) return false;

			//yes-> is next char const
			if(!in_array($str[$i+1], $vowels))
			{
				//yes-> count++ (count=1)
				$count++;
			}
		}

		if($count>1) return true;
	}

	return false;
}

echo isAlt("amazon")."<br/>";
echo isAlt("apple")."<br/>";
echo isAlt("banana")."<br/>";
echo isAlt("orange")."<br/>";
echo isAlt("helipad")."<br/>";
echo isAlt("yay")."<br/>";
?>
