<?php
/**
 * Created by PhpStorm.
 * User: lizhao
 * Date: 2021/12/29
 * Time: 12:23 上午
 */

require_once "TreeNode.php";
/**
 * 48 序列化二叉树与反序列化二叉树
 * 前序遍历
 */
class soultion
{
    /**
     * @param $root
     * @return string
     * 序列化
     */
    public function process1($root)
    {
        if (!$root) {
            return "#";
        }
        $left = $this->process1($root->left);
        $right = $this->process1($root->right);
        return $root->val.",".$left.",".$right;
    }

    /**
     * @param $str
     * @return TreeNode|null
     * 反序列化，php递归的时候参数一定是引用的形式
     */
    public function process2(&$str)
    {
        $nodeStrs = explode(',', $str);
        $i = [0];
        return $this->dfs($nodeStrs, $i);
    }

    private function dfs(&$strs, &$i)
    {
        $str = $strs[$i[0]];
        $i[0]++;
        if ($str == '#') {
            return null;
        }
        $node = new TreeNode($str);
        $node->left = $this->dfs($strs, $i);
        $node->right = $this->dfs($strs, $i);
        return $node;
    }
}
$node1 = new TreeNode(1);
$node2 = new TreeNode(2);
$node3 = new TreeNode(3);
$node4 = new TreeNode(4);
$node5 = new TreeNode(5);
$node2->left = $node1;
$node2->right = $node3;
//$node3->right = $node4;
//$node4->right = $node5;
$s = new Soultion();
var_dump($s->process1($node2));
$strs = '2,1,#,#,3,#,#';
var_dump($s->process2($strs));