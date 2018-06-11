<pre>
<?php
function isValidCoordinates($coordinates)
{
	if(preg_match('/^-?[0-9]+.?\d+?[,]\s?-?[0-9]{1,3}.?\d+$/', $coordinates))
 	{
		if(preg_match("/[a-zA-Z]/i", $coordinates))
		{
			return false;
		}

		$s = explode(".", $coordinates);
		$t = str_split($s[0]);

		if(count($t)>2 || $s[0]>90)
		{
			return false;
		}

		return true;
  	}

	return false;
}

$good = array("-23, 25","24.53525235", "23.4523504", "-23.234235", "43.91343345, 143","4, -3");
$bad = array("23.234, - 23.4234","2342.43536, 34.324236","N23.43345, E32.6457","99.234, 12.324","6.325624, 43.34345.345","0, 1,2","0.342q0832, 1.2324");

for($i=0;$i<count($good);$i++)
{
	$ret = (isValidCoordinates($good[$i])==true)?"true":"false";
	echo $good[$i].": ".$ret."<br/>";
}
echo "<br/>";
for($i=0;$i<count($bad);$i++)
{
        $ret = (isValidCoordinates($bad[$i])==true)?"true":"false";
        echo $bad[$i].": ".$ret."<br/>";
}
//die(var_dump(isValidCoordinates("0.342q0832, 1.2324")));
?>
