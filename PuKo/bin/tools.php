<?php

function convert_bytes($number)
{
    $len = strlen($number);
    if($len < 4)
    {
        return sprintf("%d b", $number);
    }
    if($len >= 4 && $len <=6)
    {
        return sprintf("%0.2f Kb", $number/1024);
    }
    if($len >= 7 && $len <=9)
    {
        return sprintf("%0.2f Mb", $number/1024/1024);
    }
    
    return sprintf("%0.2f Gb", $number/1024/1024/1024);
                            
}
