<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2022/1/1
 * Time: 6:56 下午
 */
$a = [[1,2],[3]];
$b = [[1,2],[3]];
var_dump(array_slice($a, 1, 1));;
return;
$i = 13;
while ($i < 119) {
    $i++;
    shell_exec("cp test13.php test$i.php");
//    shell_exec("rm test$i.php");
}