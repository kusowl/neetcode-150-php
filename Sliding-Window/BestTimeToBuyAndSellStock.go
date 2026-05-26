package main

import (
	"fmt"
)

func maxProfit(prices []int) int {
	if len(prices) == 0 {
		return 0
	}
	difference := make([]int, len(prices))

	for i := 1; i < len(prices); i++ {
		difference[i-1] = prices[i] - prices[i-1]
	}

	maximumProfit := difference[0]
	currentProfit := difference[0]
	for i := 1; i < len(difference); i++ {
		currentProfit = max(difference[i], currentProfit+difference[i])
		maximumProfit = max(maximumProfit, currentProfit)
	}

	if maximumProfit < 0 {
		return 0
	}

	return maximumProfit
}

func main() {
	prices := [6]int{7, 1, 5, 3, 6, 4}
	result := maxProfit(prices[:])
	fmt.Println("Max Profit:", result)
}
