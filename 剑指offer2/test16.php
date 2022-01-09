<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 6 排序数组的两个数字之和
 */
class soultion
{
    public function process($nums, $k)
    {
        $l = 0;
        $r = count($nums) - 1;
        while ($l <= $r) {
            if ($nums[$l] + $nums[$r] < $k) {
                $l++;
            }
            if ($nums[$l] + $nums[$r] == $k) {
                return [$l, $r];
            }
            if ($nums[$l] + $nums[$r] > $k) {
                $r--;
            }
        }
        return ;
    }
}
$s = new Soultion();
var_dump($s->process([1,2,3,4,5,8,9], 9));