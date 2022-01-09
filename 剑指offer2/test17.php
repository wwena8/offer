<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 7 数组中和为0的三个数
 */
class soultion
{
    public function process($nums)
    {
        sort($nums);
        $ends = [];
        for ($i = 0; $i < count($nums); $i++) {
            $ends = array_merge($ends, $this->twoSum(array_slice($nums, $i+1, count($nums)-$i), -$nums[$i]));
        }
        return $ends;
    }

    private function twoSum($nums, $i)
    {
        $l = 0;
        $r = count($nums) - 1;
        $results = [];
        while ($l < $r) {
            $sum = $nums[$l] + $nums[$r];
            if ($sum + $i == 0) {
                $results[] = [-$i, $nums[$l], $nums[$r]];
                $l++;
                $r--;
            }
            if ($sum < -$i) {
                $l++;
            }
            if ($sum > -$i) {
                $r--;
            }
        }
        return $results;
    }
}
$s = new Soultion();
var_dump($s->process([-1,1,2,-3,-2,1]));