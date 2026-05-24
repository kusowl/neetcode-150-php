<?php
$arr = [1,34,22,3,4,15,33,6,77,78];

function bubbleSort($numbers){
    $len = count($numbers);
    for($i=0; $i < $len ; $i++){
        $swapped = false;
        for($j=0; $j < $len - $i -1; $j++){
            if($numbers[$j] > $numbers[$j + 1]){
                $temp = $numbers[$j];
                $numbers[$j] = $numbers[$j + 1];
                $numbers[$j + 1] = $temp;
                $swapped = true;
            }
        }

        if (!$swapped){
            break;
        }
    }

    return $numbers;
}

var_dump(bubbleSort($arr));