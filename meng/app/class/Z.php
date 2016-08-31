<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/14
 * Time: 14:34
 */
class Z{
    public static function fk($onlyid,$pay){
        header("content-type:text/html;charset=utf8");
        $alipay_config['partner']= '2088002075883504';
        $alipay_config['seller_email']	= 'li1209@126.com';
        $alipay_config['key']= 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
        $alipay_config['sign_type']=strtoupper('MD5');
        $alipay_config['cacert']= getcwd().'\\cacert.pem';
        $alipay_config['transport']= 'http';
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => $alipay_config['partner'], // 合作身份者id
            "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
            "payment_type"	=> '1', // 支付类型
            "notify_url"	=> "http://localhost/phpten/shop/public/index/index/yb", // 服务器异步通知页面路径
            "return_url"	=> "http://localhost/phpten/shop/public/index/index/tb", // 页面跳转同步通知页面路径
            "out_trade_no"	=> "$onlyid", // 商户网站订单系统中唯一订单号
            "subject"	=> "订单", // 订单名称
            "total_fee"	=> "$pay", // 付款金额
            "body"	=> "", // 订单描述 可选
            "show_url"	=> "", // 商品展示地址 可选
            "anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
            "exter_invoke_ip"	=> "", // 客户端的IP地址
            "_input_charset"	=> 'utf-8', // 字符编码格式
        );
        foreach ($parameter as $k => $v) {
            if (empty($v)) {
                unset($parameter[$k]);
            }
        }
        ksort($parameter);
        reset($parameter);
        $str = "";
        foreach ($parameter as $k => $v) {
            if (empty($str)) {
                $str .= $k . "=" . $v;
            } else {
                $str .= "&" . $k . "=" . $v;
            }
        }
        $parameter['sign'] = md5($str . $alipay_config['key']);
        $parameter['sign_type'] = $alipay_config['sign_type'];
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
        foreach ($parameter as $k => $v) {
            $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
        }
        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
        echo $sHtml;
    }
}