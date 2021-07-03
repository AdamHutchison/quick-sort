# Quick Sort

Example of Quicksort written in PHP.

Quick sort uses divide and conquer in order to sort a list in .

The premise is as follows:

1. If the list has 1 or fewer items, return it as it doesn't need sorting.
2. If the list has 2 items - sort them and return them.
3. Otherwise, pick a pivot item, divide the list into those numbers that are greater than the pivot and those that less than the pivot
4. Recursively do the same to the lower and upper lists and merge them all back together.

Eventually the recursive calls will hit the base case of 2 items and return them sorted.