<?php
/**
 * @Author: Young
 * @Date:   2015-02-17 21:08:35
 * 微信交互设置控制器
 */
namespace Admin\Controller;

class WechatSettingController extends CommonController
{
    /*=============================素材管理=====================================*/
    /**
     * 文本素材
     */
    public function matterText()
    {
        

    }
    /*============================关键字回复=====================================*/
    /**
     * 关键字列表
     */
    public function keywordList()
    {
        $keywords = M('wechatkeywords');
        $map['type'] = array('neq', 'default');
        $list = $keywords->where($map)->select();
        $this->assign('list', $list);
        $this->display();
    }

    /**
     * 关键字默认回复
     */
    public function keywordDefault()
    {

    }
}