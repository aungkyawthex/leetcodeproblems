<?php

    class Solution {
        function isValid($s) {
            $stack = [];
            $map = [
                ')' => '(',
                '}' => '{',
                ']' => '['
            ];

            for($i = 0; $i < strlen($s); $i++) {
                $char = $s[$i];
                if(isset($map[$char])) {
                    $top = array_pop($stack);
                    if($top !== $map[$char]) return false;
                }
                else {
                    array_push($stack, $char);
                }
            }
        return empty($stack); 
        }
    }
    
?>