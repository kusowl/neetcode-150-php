package main

import "fmt"

func maxArea(height []int) int {
	left := 0
	right := len(height) - 1
	maxArea := 0

	for left < right {
		width := right - left
		currentHeight := min(height[left], height[right])
		currentArea := width * currentHeight

		maxArea = max(currentArea, maxArea)

		if height[left] < height[right] {
			left++
		} else {
			right--
		}
	}

	return maxArea
}

func main() {
	height := [9]int{1, 8, 6, 2, 5, 4, 8, 3, 7}
	fmt.Println(maxArea(height[:]))
}
