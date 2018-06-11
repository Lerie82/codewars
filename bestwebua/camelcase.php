<?php
function camel_case(string $s): string 
{
        $ret = "";
        $words = explode(" ", $s);

        foreach($words as $word)
        {
                $ret .= ucfirst($word);
        }

        return $ret; 
}
?>
