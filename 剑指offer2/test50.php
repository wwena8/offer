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
 * 50 向下的路径节点之和
 * 二叉树中节点之和等于sum的路径数目
 */
class soultion
{
    /**
     * hash的键是累加加点之和，值是每个节点值之和出现的次数
     */
    public function process($root, $sum)
    {
        $map = [];
        $map[0] = 1;
        return $this->dfs($root, $sum, $map, 0);
    }

    private function dfs($root, $sum, &$map, $path)
    {
        if (!$root) return 0;
        $path += $root->val;
        $count = $map[$path-$sum] ?? 0;
        $map[$path] = $map[$path] + 1;
        $count += $this->dfs($root->left, $sum, $map, $path);
        $count += $this->dfs($root->right, $sum, $map, $path);
        $map[$path] = $map[$path] - 1;
        return $count;
    }
}
$node1 = new TreeNode(5);
$node2 = new TreeNode(2);
$node3 = new TreeNode(4);
$node4 = new TreeNode(1);
$node5 = new TreeNode(6);
$node6 = new TreeNode(3);
$node7 = new TreeNode(7);
$node1->left = $node2;
$node1->right = $node3;
$node2->left = $node4;
$node2->right = $node5;
$node3->left = $node6;
$node3->right = $node7;
$s = new Soultion();
var_dump($s->process($node1, 8));