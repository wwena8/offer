<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

/**
 * 5 单词长度的最大乘积
 */
class soultion
{
    public function process($words)
    {
        $flags = [];
        for ($i = 0; $i < count($words); $i++) {
            $word = $words[$i];
            for ($j = 0; $j < strlen($word); $j++) {
                $flags[$i] = 1 << (ord($word[$j]) - ord('a'));
            }
        }
        $result = 0;
        for ($i = 0; $i < count($words); $i++) {
            for ($j = $i + 1; $j < count($words); $j++) {
                if (($flags[$i] & $flags[$j]) == 0) {
                    $prod = strlen($words[$i]) * strlen($words[$j]);
                    $result = max($result, $prod);
                }
            }
        }
        return $result;
    }
}
$s = new Soultion();
var_dump($s->process(['cat', 'eeavd']));