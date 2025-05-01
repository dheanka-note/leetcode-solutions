<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $stored = [];

        foreach ($nums as $key => $num){

            if(array_key_exists($num, $stored)){
                return [$stored[$num], $key];
            }

            $required = $target - $num;

            $stored[$required] = $key;
        }
    }
}
