<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */
require_once "TreeNode.php";
/**
 * 47 二叉树的剪枝
 * 一个二叉树的所有节点，要么为0要么为1 剪除所有节点值为0的子树
 */
class soultion
{
    public function process($root)
    {
        if (!$root) return null;
        $root->left = $this->process($root->left);
        $root->right = $this->process($root->right);
        if (!$root->left && !$root->right && $root->val == 0) {
            return null;
        }
        return $root;
    }
}
$node1 = new TreeNode(1);
$node2 = new TreeNode(0);
$node3 = new TreeNode(0);
$node4 = new TreeNode(0);
$node5 = new TreeNode(0);
$node6 = new TreeNode(0);
$node7 = new TreeNode(1);
$node1->left = $node2;
$node1->right = $node3;
$node2->left = $node4;
$node2->right = $node5;
$node3->left = $node6;
$node3->right = $node7;
$s = new Soultion();
var_dump($s->process($node1));