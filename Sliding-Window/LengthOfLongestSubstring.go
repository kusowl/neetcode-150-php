package main

import (
	"fmt"
)

// Find the length of longest substring without duplicate charecters
func lengthOfLongestSubstring(s string) int {
	if s == "" {
		return 0
	}

	maxLength, left, right := 0, 0, 0
	charMap := make(map[string]bool)

	for right < len(s) {
		// remove charecters from the window (represented by two pointers),
		// when a duplicate is found
		for {
			_, ok := charMap[string(s[right])]

			if !ok {
				break
			}
			delete(charMap, string(s[left]))
			left++
		}

		charMap[string(s[right])] = true

		currentLen := right - left + 1
		if currentLen > maxLength {
			maxLength = currentLen
		}

		right++
	}
	return maxLength
}

func test(expectedLength, actualLength int, name string) {
	if expectedLength == actualLength {
		fmt.Printf("✔️ test %s passed.\n", name)
	} else {
		fmt.Printf("❌ test %s failed.\n", name)
	}
}

func main() {
	s := "abcabcbb"
	test(3, lengthOfLongestSubstring(s), s)
	s = "bbbbb"
	test(1, lengthOfLongestSubstring(s), s)
	s = "pwwkew"
	test(3, lengthOfLongestSubstring(s), s)
	s = "dvdf"
	test(3, lengthOfLongestSubstring(s), s)
}
