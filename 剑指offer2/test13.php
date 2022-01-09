<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 3 前n个数字中二进制形式1的个数
 */
class soultion
{
    public function process($num)
    {
        $result = [];
        $result[0] = 0;
        if ($num < 0) return ;
        for ($i = 1; $i <= $num; $i++) {
            $result[$i] = $result[$i & ($i-1)] + 1;
        }
        return $result;
    }
}
$s = new Soultion();
var_dump($s->process(4));