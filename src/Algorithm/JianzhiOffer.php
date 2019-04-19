<?php
/**
 * Created by PhpStorm.
 * User: syncher
 * Date: 4/19/19
 * Time: 9:40 AM
 */

namespace App\Algorithm;


class JianzhiOffer
{
    /**
     * given n integer items array, and all items in [0, n-1]
     * assumption:
     *  1. each given array must have at least a repeat item
     * @param array $arr given integer array
     * @return mixed output repeated number or false
     */
    public function findRepeatInArray(array $arr)
    {
        $len = count($arr);

        // handel illegal input
        if (empty($arr)) {
            return false;
        }
        for ($i = 0; $i < $len; $i++) {
            if ($arr[$i] < 0 || $arr[$i] > $len - 1) {
                return false;
            }
        }

        for ($i = 0; $i < $len; $i++) {
            while ($arr[$i] != $i) {
                $j = $arr[$i];
                if ($arr[$j] === $arr[$i]) {
                    return $arr[$i];
                }
                // exchange
                $arr[$i] ^= $arr[$j];
                $arr[$j] ^= $arr[$i];
                $arr[$i] ^= $arr[$j];
            }
        }

        return false;
    }

}