<?php
function cube_odd($a) 
{
        $ret = 0; 

        for($i=0;$i<count($a);$i++)
        {
                if(!is_int($a[$i])) return null;
                
                if($a[$i]%2!=0)
                {
                        $ret += pow($a[$i],3);
                }
        }

        return $ret;
}
?>
