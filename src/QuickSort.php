<?php

namespace QuickSort;

class QuickSort
{
    public function sort(array $list): array
    {
        $count = count($list);

        // BASE CASE

        // Check if the array needs sorting
        if ($count < 2) {
            return $list;
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
}
