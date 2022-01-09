<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

require_once "TreeNode.php";
/**
 * 49 从根节点到叶节点的路净之和
 */
class soultion
{
    public function process($root)
    {
        return $this->dfs($root, 0);
    }

    private function dfs($root, $path)
    {
        if (!$root) return 0;
        $path = $path * 10 + $root->val;
        if (!$root->left && !$root->right) {
            return $path;
        }
        return $this->dfs($root->left, $path) + $this->dfs($root->right, $path);
    }
}
$node1 = new TreeNode(3);
$node2 = new TreeNode(9);
$node3 = new TreeNode(0);
$node4 = new TreeNode(5);
$node5 = new TreeNode(1);
$node6 = new TreeNode(2);
$node1->left = $node2;
$node1->right = $node3;
$node2->left = $node4;
$node2->right = $node5;
$node3->right = $node6;
$s = new Soultion();
var_dump($s->process($node1));