<?php
function isPrime($number)
{
    if ($number==2)
        return true;
    if ($number%2==0)
        return false;
    $i=3;
    $max_factor = (int)sqrt($number);
    while ($i<=$max_factor){
        if ($number%$i == 0)
            return false;
        $i+=2;
    }
    return true;
}

function getPrimes($max_number)
{
    $primes = [];
    for ($i=3; $i<=$max_number; $i++){
        if (isPrime($i))
            $primes[] = $i;
    }
    return $primes;
}

for ($i=2; $i<100; $i++)
{
    $a = isPrime($i);
    echo $a;
}
