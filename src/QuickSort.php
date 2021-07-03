<?php

namespace QuickSort;

class QuickSort
{
    public function sort(array $list): array
    {
        $count = count($list);

        // BASE CASE

        // Check if the array needs sorting
        if ($count <= 1) {
            return $list;
        }

        // check if weve hit the base case
        if ($count == 2) {
            return $this->swapItems($list);
        }

        // RECURSIVE CASE

        // Choose the pivot
        $pivot = $list[0];

        // Split the list into those greater than the pivot and those less than the pivot
        [$low, $high] = $this->partition($pivot, array_slice($list, 1, $count - 1));

        // Recursively sort the lower and higher arrays and merge together
        return array_merge($this->sort($low), [$pivot], $this->sort($high));
    }

    private function partition($pivot, array $items): array
    {
        $high = [];
        $low = [];

        // collect lower and higher values
        foreach ($items as $item) {
            if ($item > $pivot) {
                $high[] = $item;
            } else {
                $low[] = $item;
            }
        }

        return [$low, $high];
    }

    private function swapItems(array $items): array
    {
        if (count($items) != 2) {
            throw new \Exception("Item count needs to be 2 in order to use the swapItems method");
        }

        if ($items[1] < $items[0]) {
            return [$items[1], $items[0]];
        }

        return $items;
    }
}
