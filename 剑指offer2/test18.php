<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 8 大于等于K的最短子数组
 * nums全是正数 双指针同向移动
 */
class soultion
{
    public function process($nums, $k)
    {
        $left = 0;
        $right = 0;
        $sum = 0;
        $minLength = PHP_INT_MAX;
        for ($right = $left; $right < count($nums); $right++) {
            $sum += $nums[$right];
            while ($left <= $right && $sum >= $k) {
                $minLength = min($minLength, $right - $left + 1);
                $sum -= $nums[$left++];
            }
        }
        return $minLength == PHP_INT_MAX ? 0 : $minLength;
    }
}
$s = new Soultion();
var_dump($s->process());