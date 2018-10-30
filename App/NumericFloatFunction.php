<?php
namespace ProblemSets;

class NumericFloatFunction 
{
    public function format($num)
    {
        if(!is_numeric($num)) {
            throw new \InvalidArgumentException();
        }
        
        $formatted = (string)$num;
        $isPointExist = strpos(abs($formatted), '.');
        $strLength = strlen(abs($formatted));
        if ($strLength <= 3 || ($isPointExist && $isPointExist <=3 ))
        {
            return $formatted;
        }
        
        list($a, $back) = strpos($formatted, '.') ? explode('.', abs($formatted)) : array((string)abs($formatted), '');
        $front = "";
        for ($i=0; $i<strlen($a); $i++) 
        {
            $front .= $a[$i];
            if ($i % 3 == 0 && $i<strlen($a)-1) 
            {
                $front .= ",";
            }
        }
        $formatted = strpos($formatted, '.')===false ? $front.$back : $front.'.'.$back;
        
        return $num < 0  ? '-'.$formatted : $formatted;
    }
}