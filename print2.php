<?php

/*
TASK 2. A Sideways Triangle

*/


for ($i = 1; $i <= 7; $i++)
{
    for ($j = 1; $j <= ($i > 4 ? 8 - $i : $i); $j++)
    {
        echo '# ';
    }
 
    echo "<br>";
 
}