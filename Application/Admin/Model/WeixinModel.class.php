<?php
/**
 * Created by PhpStorm.
 * User: SeanHwang
 * Date: 2015/1/11
 * Time: 21:03
 * 微信相关表模型
 */
namespace Admin\Model;

use Think\Model;

class WeixinModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 查询公众帐户信息
     */
    public function get_weixin_info($wechatrecid)
    {
        $this->table('wx_wechat_bindwechat');
        return $this->where(array('wechatrecid' => $wechatrecid))->limit(1)->select();
    }

    /**
     * 根据类型、关键字、微信号取消息
     * 菜单也是根据关键词回复
     */
    public function get_weixin_reply($replytype, $key, $wechatrecid)
    {
        $wheres = ' where 1=1 ';
        if ($replytype != '') {
            $wheres .= " and a.replytype='" . $replytype . "' ";
        }
        if ($key != '') {
            $wheres .= " and a.keyname='" . $key . "' ";
        }
        $wheres .= " and a.wechatrecid='" . $wechatrecid . "' ";

        $sql = 'SELECT a.keyname,b.* from wx_wechat_reply as a
                INNER JOIN wx_wechat_contents as b on b.contentid=a.contentid ' . $wheres . ' LIMIT 1 ';
        $res = $this->query($sql);
        if(count($res) > 0){
            return $res[0];
        }else{
            return $res;
        }
    }
}