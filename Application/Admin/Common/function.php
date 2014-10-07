<?php
/**
 * 递归重组节点列表数组
 * @param array $node 节点数组
 * @param number $pid 父级ID
 */
function node_merge($node, $access = null, $pid = 0){
	$arr = array();
	foreach ($node as $v){
		if ($v['pid'] == $pid){
			if (is_array($access)){
				$v['access'] = in_array($v['id'], $access) ? 1 : 0;
			}
			$v['child'] = node_merge($node, $access, $v['id']);
			$arr[] = $v;
		}
	}
	return $arr;
}