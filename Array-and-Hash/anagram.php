<?php

// Given two strings s and t, return true if t is an anagram
//
// of s, and false otherwise.
//
//
//
// Example 1:
//
// Input: s = "anagram", t = "nagaram"
//
// Output: true
//
// Example 2:
//
// Input: s = "rat", t = "car"
//
// Output: false
//
//
//
// Constraints:
//
//    1 <= s.length, t.length <= 5 * 104
//    s and t consist of lowercase English letters.

class Solution
{
    /**
     * @param  string  $s
     * @param  string  $t
     */
    public function isAnagram($s, $t): bool
    {
        // creating a hashmap
        $s = str_split($s);
        $t = str_split($t);

        if(count($t) !== count($s)) return false;
        $map  = [];

        foreach($s as $item){
            if(isset($map[$item])){
                $map[$item]++;
            }
            else{
                $map[$item] = 1;
            }
        }

        foreach($t as $item){
            if(isset($map[$item])){
                $map[$item]--;
                // if there is the value goes negative, then there are uneven occurrence of the char
                if($map[$item] < 0) return false;
            }
            else{
                return false;
            }
        }

        return true;
    }
}
$s = 'anagram';
$t = 'nagaram';
var_dump((new Solution)->isAnagram($s, $t));

$s = 'aacc';
$t = 'ccac';
var_dump((new Solution)->isAnagram($s, $t));
