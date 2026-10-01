<?php

    function twoNum($nums, $target) {
        $seen = []; // memory;
        foreach($nums as $index => $num) {
            $complement = $target - $num;
            if(array_key_exists($complement, $seen)) {
                return [$seen[$complement], $index];
            }
            $seen[$num] = $index;
        }
    }
    $nums = [2,7,11,15];
    echo twoNum($nums, 9);

?>