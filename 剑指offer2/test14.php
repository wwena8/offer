<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 4 只出现一次的数字
 */
class soultion
{
    public function process($nums)
    {
        $bitSums = [];
        foreach ($nums as $num) {
            for ($i = 0; $i < 32; $i++) {
                $bitSums[$i] += ($num >> (31 - $i)) & 1; // 得到num二进制形式中从左数起第i个数位
            }
        }
        $result = 0;
        for ($i = 0; $i < 32; $i++) {
            $result = ($result << 1) + $bitSums[$i] % 3;
        }
        return $result;
    }
}
$s = new Soultion();
var_dump($s->process([1,1,1,2]));