<?php
require('conf.php');
// require('db.php');
// https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect

// $appid = 'wx43953f2495f6d1cc';
// $appsecret = '6f9962be39cf55d8c85fd0ae4ea0b4e7';

$back = urlencode('http://stark.ngrok.wdevelop.cn/act.php');
https://open.weixin.qq.com/connect/oauth2/authorize?appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$back}&response_type=code&scope=snsapi_userinfo&state=STATE#wechat_redirect";
        // https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx0fe0851d8bcf3fe0&redirect_uri=http%3A%2F%2Fstark.ngrok.wdevelop.cn%2Fv1%2Fuser%2Fregister&
        // response_type=code&
        // scope=snsapi_userinfo&
        // state=authorize&uin=MTY5MjI0ODMwMQ%3D%3D&key=74fca2553f5ed736ddeb97cc9b767a19493f50156e15309dd27269cae1abb638d57d7b313c866b9506a19e3f55c13521&pass_ticket=QO0K2qhHtH96M60naypcEe9n9TxSGZdDDlXEFSkX4IvPpUmDmysekkYrjEOos3b7XIWoj464TgoEzFh0EY2hag==
// 直接跳转到指定url
header("Location: {$url}");


// array(10) {
//   ["openid"]=&gt;
//   string(28) "oPs5ouLW3qg7P6CLj-jS7M1XVtSw"
//   ["nickname"]=&gt;
//   string(10) "stark.wang"
//   ["sex"]=&gt;
//   int(1)
//   ["language"]=&gt;
//   string(5) "zh_CN"
//   ["city"]=&gt;
//   string(0) ""
//   ["province"]=&gt;
//   string(6) "北京"
//   ["country"]=&gt;
//   string(6) "中国"
//   ["headimgurl"]=&gt;
//   string(127) "http://wx.qlogo.cn/mmopen/uCr0XQkia65fRdRkjAArpwbYoDiad9LrMMVq1SiabjsC3EGspryE59ogR2XatPvQrVxcUTjEF2xwN1XMxNY1Qlx6Hqsue5lhQhM/0"
//   ["privilege"]=&gt;
//   array(0) {
//   }
//   ["unionid"]=&gt;
//   string(28) "o28P7ww-ZMphcik-5ZSbkCr_QTQw"
// }

