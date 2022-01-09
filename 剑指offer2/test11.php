<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 1 输入2个int整数，返回商，不允许使用除法
 */
class soultion
{
    public function process($a , $b)
    {
        if ($a == 0x80000000 && $b == -1) return 2147483647;
        $negative = 2;
        if ($a > 0) {
            $negative--;
            $a = -$a;
        }
        if ($b > 0) {
            $negative--;
            $b = -$b;
        }
        $result = $this->div($a, $b);
        return $negative == 1 ? -$result : $result;
    }

    private function div($a, $b)
    {
        $result = 0;
        while ($a <= $b) {
            $value = $b;
            $q = 1;
            while ($value >= 0xc0000000 && $a <= $value+$value) {
                $q += $q;
                $value += $value;
            }
            $result += $q;
            $a -= $value;
        }
        return $result;
    }
}
