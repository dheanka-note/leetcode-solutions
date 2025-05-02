<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {

        $result = new ListNode();

        $pointer = $result;
        $add = 0;

        while($l1 !== null || $l2 !== null || $add != 0){
            $sum = ($l1->val ?? 0) +  ($l2->val ?? 0) + $add;

            $add = intval($sum / 10);
            $pointer->next = new ListNode($sum % 10);
            $pointer = $pointer->next;

            $l1 = $l1->next;
            $l2 = $l2->next;
        }


        return $result->next;
    }
}
