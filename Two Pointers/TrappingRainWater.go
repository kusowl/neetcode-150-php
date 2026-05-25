package main

import "fmt"

func trap(height []int) int {
	left := 0
	right := len(height) - 1
	totalWater := 0

	leftMax := height[left]
	rightMax := height[right]

	for left < right {
		if leftMax < rightMax {
			// left max determines the height of water block
			left += 1

			leftMax = max(leftMax, height[left])
			totalWater += leftMax - height[left]
		} else {
			right -= 1
			rightMax = max(rightMax, height[right])
			totalWater += rightMax - height[right]
		}
	}
	return totalWater
}

func main() {
	height := [12]int{0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1}
	fmt.Print(trap(height[:]))
}
