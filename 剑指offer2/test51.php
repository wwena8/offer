<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */
require_once "TreeNode.php";
/**
 * Class soultion
 * 51 节点之和的最大路径
 */
class soultion
{
    public function process($root)
    {
        $maxSum[] = PHP_INT_MIN;
        $this->dfs($root, $maxSum);
        return $maxSum[0];
    }

    /**
     * @param $root
     * @param $maxSum
     * @return int|mixed
     * 引用
     */
    private function dfs($root , &$maxSum)
    {
        if (!$root) return 0;
        $maxSumLeft[] = PHP_INT_MIN;
        $left = max(0, $this->dfs($root->left, $maxSumLeft));
        $maxSumRight[] = PHP_INT_MIN;
        $right = max(0, $this->dfs($root->right, $maxSumRight));
        $maxSum[0] = max($maxSumLeft[0], $maxSumRight[0]);
        $maxSum[0] = max($maxSum[0], $root->val+ $left + $right);
        return $root->val + max($left, $right);
    }
}
$node1 = new TreeNode(-9);
$node2 = new TreeNode(4);
$node3 = new TreeNode(20);
$node4 = new TreeNode(15);
$node5 = new TreeNode(7);
$node6 = new TreeNode(-3);
$node1->left = $node2;
$node1->right = $node3;
$node3->left = $node4;
$node3->right = $node5;
$node4->left = $node6;
$s = new Soultion();
var_dump($s->process($node1));