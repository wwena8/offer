<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 2 二进制加法
 * 11 + 10 = 101
 * 从最右相加算下来
 */
class soultion
{
    public function process($a, $b)
    {
        $result = '';
        $i = strlen($a) - 1;
        $j = strlen($b) - 1;
        $carry = 0;
        while ($i >= 0 || $j >= 0) {
            if (!in_array($a[$i], [0, 1]) || !in_array($b[$j], [0, 1])) {
                echo "字符串有错误\n";
                return ;
            }
            $digA = $i >=0 ? $a[$i--] - '0' : 0;//PHP字符串看作是一个由多个字符组成的字符数组
            $digB = $j >=0 ? $b[$j--] - '0' : 0;
            $sum = $digA+$digB+$carry;
            $carry = $sum >= 2 ? 1 : 0;
            $sum = $sum >= 2 ? $sum - 2 : $sum;
            $result .= $sum;
        }
        if ($carry == 1) {
            $result .= 1;
        }
        return strrev($result);
    }
}
$s = new Soultion();
var_dump($s->process('1110', '1011'));