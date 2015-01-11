<?php
/**
 * Created by PhpStorm.
 * User: SeanHwang
 * Date: 2015/1/11
 * Time: 20:45
 * 微信接口控制器
 */
namespace Admin\Controller;

use Think\Controller;

class WeixinController extends Controller
{
    public function test()
    {
        $weixinmodel = D('Weixin');
        $row = $weixinmodel->get_weixin_reply('', '', 'a23e2f10c1d2dfcef82bf777a6ebe7a8');
        $content = $row['content'];
        $type = $row['contenttype'];
        $data = array(
            'to' => '123',
            'from' => '456',
            'type' => $type,
            'content' => $content
        );
        var_dump($data);
        $this->_get_reply($type, $data);
    }

    /**
     * 在微信平台上设置的对外 URL
     */
    public function api()
    {
        if ($this->_valid()) {
            // 判读是不是只是验证
            $echostr = I('get.echostr');
            if (!empty($echostr)) {
                echo $echostr;
            } else {
                // 实际处理用户消息
                $this->_responseMsg();
            }
        } else {
            //验证失败
            echo 'Error';
        }
    }

    /**
     * 获取数据库Token值
     * @return string
     */
    private function _get_token()
    {
        $wechatrecid = I('get.t');
        $weixinmodel = D('Weixin');
        $row = $weixinmodel->get_weixin_info($wechatrecid);
        if (count($row) > 0) {
            return $row[0]['token'];
        } else {
            return '';
        }
    }

    /**
     * 用于接入验证
     * @return bool
     */
    private function _valid()
    {
//        $token = TOKEN;
        $token = $this->_get_token();
        if ($token == '') {
            return false;
        }
        $signature = I('get.signature');
        $timestamp = I('get.timestamp');
        $nonce = I('get.nonce');

        $tmp_arr = array($token, $timestamp, $nonce);
        sort($tmp_arr, SORT_STRING);
        $tmp_str = implode($tmp_arr);
        $tmp_str = sha1($tmp_str);

        return ($tmp_str == $signature);
    }

    /**
     * 这里是处理消息的地方，在这里拿到用户发送的字符串
     * 分配处理方法
     */
    private function _responseMsg()
    {
        $post_str = file_get_contents('php://input');

        if (!empty($post_str)) {
            // 解析微信传过来的 XML 内容
            $post_obj = simplexml_load_string($post_str, 'SimpleXMLElement', LIBXML_NOCDATA);
            $from_username = $post_obj->FromUserName;
            $to_username = $post_obj->ToUserName;
            $keyword = trim($post_obj->Content); //用户输入的内容
            $msgType = $post_obj->MsgType; //输入类型
            switch ($msgType) {
                case "text":
                    $this->_parseMessage_text($post_obj);
                    break;
                case "image":
                    //$this->_parseMessage_image($post_obj);
                    $this->_subscribeFun($post_obj, 'default');
                    break;
                case "location":

                    break;
                case "link":
                    $this->_subscribeFun($post_obj, 'default');
                    break;
                case "event":
                    $this->_parseMessage_event($post_obj);
                    break;
                case "news":
                    $this->_subscribeFun($post_obj, 'default');
                    break;
                case "music":
                    $this->_subscribeFun($post_obj, 'default');
                    break;
                default:
                    break;
            }
        } else {
            echo 'Error!';
        }
    }

    /**
     * 处理用户输入的字符串 text
     * @param $post_obj
     */
    private function _parseMessage_text($post_obj)
    {
        // TODO: 在这里做一些字符串解析，比如分析某关键字，返回什么信息等等
        $wechatrecid = I('get.t');
        $from_username = $post_obj->FromUserName;
        $to_username = $post_obj->ToUserName;
        $type = 'textkey';
        $keyword = trim($post_obj->Content); //用户输入的内容
        if (!empty($keyword)) {
            //查询数据
            $row = $this->weixin_model->get_weixin_reply($type, $keyword, $wechatrecid);
            if (count($row) > 0) {
                $content = $row['content'];
                $type = $row['contenttype'];
                $data = array(
                    'to' => $from_username,
                    'from' => $to_username,
                    'type' => $type,
                    'content' => $content
                );
                $this->_get_reply($type, $data);
            } else {
                $this->_subscribeFun($post_obj, 'default');//返回默认回复
            }
        }
    }

    /**
     * 根据类型回复用户
     * @param $replytype
     * @param $data
     */
    private function _get_reply($replytype, $data)
    {
        if ($replytype == 'text') {
            $this->assign($data);
            $this->display('text_view');
        } else if ($replytype == 'news') {
            $this->load->view('weixin/news_view', $data);
        } else if ($replytype == 'music') {
            $this->load->view('weixin/music_view', $data);
        }
    }
}