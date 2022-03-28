<?php 


class statics
{
    public static string $name = "MathHelper";

    public static function sum(int... $numbers)
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
     
}

?>