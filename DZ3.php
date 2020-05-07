<?php

for ($i=1; $i<=9; $i++)
{
    for ($j=1; $j<=10; $j++)
    {
      if($j==10)
      {
          echo "<br/>";
      }
      else {
          echo $i*$j . ' ';
      }
    }
}

    $i=0;
    a:
    $i++;
    if($i<=100)
    {
        $i = pow($i,2);
        echo $i . ' ';
        goto a;
    }
    else {
        echo 'Цикл завершен';
    }

    function pidor($a, $b, $c = -5)
    {
        return $a*$b*$c;
    }

    $li = pidor(-5,8);
    echo $li;
