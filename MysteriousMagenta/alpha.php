<pre>

<?php
function alphabet_position(string $s): string
{
        $ltrs = str_split($s);
        $nums = [];

        foreach($ltrs as $ltr)
        {
                if(ctype_alpha($ltr)) array_push($nums, abs((ord(strtolower($ltr))-96)));
        }

        return implode(" ", $nums);
}

echo alphabet_position("The narwhal bacons at midnight.");
?>
