# Quick Sort

Example of Quicksort written in PHP.

Quick sort uses divide and conquer in order to sort a list in O(nlogn) time in the best case and O(n<sup>2</sup>). The time complexity depends on the pivot that's chosen.

The premise is as follows:

1. If the list has 1 or fewer items, return it as it doesn't need sorting.
2. Otherwise, pick a pivot item, divide the list into those numbers that are greater than the pivot and those that less than the pivot
3. Recursively do the same to the lower and upper lists and merge them all back together.

Eventually the recursive calls will hit the base case of 2 items and return them sorted.