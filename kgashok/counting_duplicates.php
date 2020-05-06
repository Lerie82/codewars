function duplicateCount($text)
{
    $split = str_split(strtolower($text));
    $dupeArr = [];
    $arr = [];
    
    foreach($split as $ltr)
    {
        if(!in_array($ltr, $dupeArr))
        {
            array_push($dupeArr, $ltr);
        } else 
        {
            array_push($arr, $ltr);
        }
    }
    
    return count(array_unique($arr));
}
