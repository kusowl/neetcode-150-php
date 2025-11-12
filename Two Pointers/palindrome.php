<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $last = strlen($s) - 1;
        $first = 0;
        while ($first<= $last)
        {
            // Need to check if the current pointers holds an alphanumeric char
            if(!ctype_alnum($s[$first])) {
                $first++;
                continue;
            }
            if(!ctype_alnum($s[$last])) {
                $last--;
                continue;
            }

            if(!(strtolower($s[$first]) === strtolower($s[$last]))) return false;
            else{
                $last--;
               $first++;
            }
        }
        return true;
    }
}

$s = "mom";
var_dump(new Solution()->isPalindrome($s));

$s = "A man, a plan, a canal: Panama";
var_dump(new Solution()->isPalindrome($s));

$s = "race a car";
var_dump(new Solution()->isPalindrome($s));