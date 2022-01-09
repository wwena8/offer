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
 * 53 二叉搜索树中序遍历的下一个节点
 */
class soultion
{
    public function process($root, $p)
    {
        $cur = $root;
        $result = null;
        while ($cur) {
            if ($cur->val > $p->val) {
                $result = $cur;
                $cur = $cur->left;
            } else {
                $cur = $cur->right;
            }
        }
        return $result;
    }
}
$s = new Soultion();
var_dump($s->process());