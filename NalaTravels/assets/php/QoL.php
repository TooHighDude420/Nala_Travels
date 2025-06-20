<?php
class qol
{

    public static function getRandomCol()
    {
        $colArray = [
            "[#D9ED92]",
            "[#B5E48C]",
            "[#99D98C]",
            "[#76CB93]",
            "[#52B69A]"
        ];

        $colIndex = rand(0, sizeof($colArray) - 1);
    
        return $colArray[$colIndex];
    }
}