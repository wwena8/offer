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
 * 52 展开二叉搜索树
 */
class soultion
{
    public function process($root)
    {
        $stack = new SplStack();
        $cur = $root;
        $prev = null;
        $first = null;
        while ($cur || !$stack->isEmpty()) {
            while ($cur) {
                $stack->push($cur);
                $cur = $cur->left;
            }
            $cur = $stack->pop();
            if ($prev) {
                $prev->right = $cur;
            } else {
                $first = $cur;
            }
            $prev = $cur;
            $cur->left = null;
            $cur = $cur->right;
        }
        return $first;
    }
}
$node1 = new TreeNode(1);
$node2 = new TreeNode(2);
$node3 = new TreeNode(3);
$node4 = new TreeNode(4);
$node5 = new TreeNode(5);
$node6 = new TreeNode(6);
$node4->left = $node2;
$node4->right = $node5;
$node2->left = $node1;
$node2->right = $node3;
$node5->right = $node6;
$s = new Soultion();
var_dump($s->process($node4));