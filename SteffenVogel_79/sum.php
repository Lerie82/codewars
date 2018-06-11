<?php
function compare($s1, $s2) 
{
        if($s1 == null) $s1 = "";
        if($s2 == null) $s2 = "";
        
        if(!ctype_alpha($s1)) $s1 = "";
        if(!ctype_alpha($s2)) $s2 = "";
        
        $s1 = strtoupper($s1);
        $s2 = strtoupper($s2);
        $suma = 0;
        $sumb = 0;

        $a = str_split($s1);
        $b = str_split($s2);

        foreach($a as $cha)
        {
                $suma += ord($cha);
        }

        foreach($b as $chb)
        { 
                $sumb += ord($chb);
        }

        return ($suma == $sumb?true:false);

        //die(var_dump($sumb));
}
?>
