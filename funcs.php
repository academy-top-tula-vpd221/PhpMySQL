<?php
    function max_index(array $array) : int
    {
        $max = 0;
        for($i = 1; $i < count($array); $i++)
            if($array[$i] > $array[$max])
                $max = $i;
        return $max;
    }

    function get_oper(string $sign) : callable
    {
        switch($sign)
        {
            case "+": return fn($a, $b) => $a + $b;
            case "-": return fn($a, $b) => $a - $b;
            case "*": return fn($a, $b) => $a * $b;
        }
    }