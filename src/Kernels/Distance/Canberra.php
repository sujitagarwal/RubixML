<?php

namespace Rubix\ML\Kernels\Distance;

class Canberra implements Distance
{
    /**
     * Compute the distance between two coordinate vectors.
     *
     * @param  array  $a
     * @param  array  $b
     * @return float
     */
    public function compute(array $a, array $b) : float
    {
        $distance = 0.0;

        foreach ($a as $i => $coordinate) {
            $distance += abs($coordinate - $b[$i])
                / (abs($coordinate) + abs($b[$i]));
        }

        return $distance;
    }
}
