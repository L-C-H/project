<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>优购时尚商城_手机号快捷登录</title> 
  <meta name="description" content="优购时尚商城" /> 
  <meta name="keywords" content="优购时尚商城" /> 
  <script>
  //禁止iframe嵌入
  if(window.top !== window.self){ window.top.location = window.location;}
  var basePath = "";
  var shoppingProcess=true;
</script> 
  <link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/validator.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/new_log_reg.v2.0.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.mobilelogin.js"></script> 
  <style>
.tab_sig_reg li{width:174px;}
.tab_sig_reg .tab_sig{margin-left:0;margin-right:0;}
.tab_sig a,.tab_reg a{display:inline-block;width:174px;}
.tab_sig_reg li a{color:#333;}
.nreg_item dd .lab1 span:hover{color:#000;}
</style> 
 </head> 
 <body> 
  <!--header created time: 2018-12-04T13:30:10+08:00 --> 
  <!--公共头部top_nav_bar--> 
  <div class="header"> 
   <ul class="left-content"> 
    <li> 
     <div class="scan-code"> 
      <a href="javascript:;">关注</a> 
      <div class="border-content"> 
       <div class="border"> 
        <img src="/static/Home/picture/wechat.jpg" alt="关注公众号" class="qr-code" /> 
        <span class="title">关注公众号</span> 
       </div> 
      </div> 
     </div> </li> 
    <li class="item-app"> 
     <div class="scan-code"> 
      <a href="javascript:;">下载APP</a> 
      <div class="border-content"> 
       <div class="border"> 
        <img src="/static/Home/picture/app.jpg" alt="优购APP下载" class="qr-code" /> 
        <span class="title">优购APP下载</span> 
       </div> 
      </div> 
     </div> </li> 
   </ul> 
   <ul class="right-content" id="top_nav"> 
    <li class="item-frist about_user"> <a rel="nofollow" href="javascript:login();">登录</a> / <a rel="nofollow" href="javascript:register();">注册</a> </li> 
    <li class="item"> <a href="http://www.yougou.com/my/favorites.jhtml" class="top-collect"> <i class="icon bg-top_collect"></i> <span class="title">收藏</span> </a> </li> 
    <li class="item-cart"> <a href="http://www.yougou.com/order.jhtml"><i class="icon"></i>购物袋</a> </li> 
    <li class="item"> 
     <div class="notice"> 
      <a href="javascript:;">公告</a> 
      <div class="notice-content"> 
       <ul class="notice-list"> 
        <li class="item Red"> <a target="_blank" href="/article/201805/3adfa2a3ca664e86ba4a6a8a33988940.shtml#ref=index&amp;po=notice_notice1">优购客服电话变更</a> </li> 
        <li class="item item1 "> <a target="_blank" href="/article/201712/e4de56a20dcf458d88626858531fb8b6.shtml#ref=index&amp;po=notice_notice2">关闭分享购频道</a> </li> 
        <li class="item item1 "> <a target="_blank" href="/article/201607/182fbbbcc43940259e172d1da13cacce.shtml#ref=index&amp;po=notice_notice3">提醒会员谨防诈骗电话</a> </li> 
       </ul> 
      </div> 
     </div> </li> 
   </ul> 
  </div> 
  <script type="text/javascript" src="/static/Home/js/index.js"></script> 
  <div class="uc_hd"> 
   <div class="cen clearfix rel"> 
    <h2 class="cen_logo"><a href="http://www.yougou.com"><img src="/static/Home/picture/signin-register-logo.png" alt="" /></a></h2> 
    <p class="cen_font fl"> 用户登录 </p> 
   </div> 
  </div> 
  <!--更换雅虎邮箱提示 start--> 
  <div class="uc_email_tip" id="uc_email_tip" style="display:none;"> 
   <i class="warn"></i>
   <strong>由于雅虎邮箱即将停止服务</strong>，为了保障您以后能够通过邮箱找回密码、接收订单提醒等，建议尽快把账号完成绑定其他邮箱。
   <a class="Blue" href="javascript:void(0);" id="email_bind_modify">[立即绑定]</a>
   <i class="close"></i> 
  </div> 
  <!--更换雅虎邮箱提示 end-->
  <script type="text/javascript">
function login() {
    location.href = "http://www.yougou.com/signin.jhtml" + location.search;  
    return false;
}
function a() {
    location.href = "http://www.yougou.com/mobilesignin.jhtml" + location.search;
    return false;
}
</script> 
  <form action="return false;" id="loginform" method="post"> 
   <input id="redirectURL_1" type="hidden" name="redirectURL" value="" /> 
   <div class="cen-new rel"> 
    <a href="http://www.yougou.com" target="_blank" class="cen-new" style="background: url('/static/Home/images/ba839750211e4c6485fe16dea496b709.jpg') no-repeat top center;position: absolute;top: 0;left: 0;z-index: 0"></a> 
    <div class="nreg_box clearfix" style="left: 50%;margin-left: 115px;position: absolute;top: 0;width: 378px;z-index: 1;"> 
     <div id="emailDiv" class="nreg_left fr" style=""> 
      <ul class="tab_sig_reg clearfix"> 
       <li class="tab_sig"><a href="javascript:login();">帐户密码登录</a></li> 
       <li class="tab_reg tab_cur"><a href="#">手机号快捷登录</a></li> 
      </ul> 
      <div class="nreg_form"> 
       <dl class="nreg_item mobile_regitem clearfix rel" id="mobile_nreg_item"> 
        <dd> 
         <div class="nreg_input_bg rel"> 
          <label class="lab1 nreg_mob_ema"><span class="fl">手机号</span></label> 
          <div class="tab_user_name"> 
           <a id="mobileLink" class="reg_Tab reg_TabCurr" href="javascript:;" regtype="mobile"><span>手机号</span></a> 
           <input type="hidden" name="option" id="option" value="mobile" /> 
          </div> 
          <input type="text" name="mobile" id="reg_mobile_" class="nreg_input" valid="Mobile" placeholder="请输入您的手机号码" /> 
         </div> 
        </dd> 
        <dt> 
         <div id="reg_mobile_tip" class="errortips"></div> 
        </dt> 
       </dl> 
       <dl class="nreg_item email_regitem clearfix rel" id="email_nreg_item" style="display:none;"> 
        <dd> 
         <div class="nreg_input_bg"> 
          <div class="tab_user_name"> 
           <a id="mobileLink" class="reg_Tab " href="javascript:;" regtype="mobile"><span>手机号</span><i class="tab_nreg"></i></a> 
          </div> 
         </div> 
        </dd> 
        <dt> 
         <div id="reg_email_tip" class="errortips"></div> 
        </dt> 
       </dl> 
       <input type="hidden" name="9m7g9u6j8k" value="6Z7H3K" id="reg_nonce_id" /> 
       <dl id="dlMobileCode" class="nreg_item mobile_regitem clearfix rel"> 
        <dd> 
         <div class="nreg_input_bg fl" style="width:235px;"> 
          <label class="lab1" for="reg_mobile_code_">短信验证码</label> 
          <input type="text" name="mobilecode" id="reg_mobile_code_" class="nreg_sinput" valid="MsgIdentifyCode" style="width: 155px;" /> 
         </div> 
         <div class="fr"> 
          <a id="sendMsgBtn" href="javascript:;" class="regAutoBtn_1"> <span style="margin-left:0;" id="getMsgSpan">获取验证码</span> </a> 
         </div> 
        </dd> 
        <dt> 
         <div id="sendMsgTips" data-msg="sendmsgtips"></div> 
        </dt> 
       </dl> 
       <div id="code_container" style="display:none;"> 
        <dl class="nreg_item clearfix"> 
         <dd> 
          <div class="nreg_input_bg fl" style="width:202px"> 
           <label class="lab1" for="code2_">验证码</label> 
           <input type="text" id="code2_" class="nreg_sinput" maxlength="4" style="width: 130px" /> 
          </div> 
          <div class="fl" style=" padding:0"> 
           <img id="imageValidate2" onclick="changeValidateImage2();return false;" /> 
          </div> 
         </dd> 
         <dt>
          <div id="code2_tip"></div>
         </dt> 
        </dl> 
       </div> 
       <dl class="nreg_item clearfix rel"> 
        <div style="position:absolute;top:38px;right: 17px;"> 
         <div id="pwdStrength" class="pwdStrength none"> 
          <em>低</em>
          <em>中</em>
          <em>高</em> 
         </div> 
        </div> 
       </dl> 
       <!--<p style="text-align: center">
                        <span> <input type="checkbox" id="rules" name="rules" style="margin-top:0" id="rules" checked="checked"  /> </span>
                        <label style="padding-left:3px" for="rules">我已阅读并同意<a href="http://www.yougou.com/help/registrationagreement.html" class="Red undline" target="_blank">《优购会员注册协议》</a></label>
                        <span id="ruleTips"></span>
                    </p>--> 
       <p class="blank5"></p> 
       <p style="text-align: center"> <a href="javascript:void();"> <input type="submit" class="nlog_submit" title="立即登录" value="点击登录" id="reg_buton" /></a> </p> 
       <p class="f_black" style="color: #999;margin-top: 10px;text-align: center;">使用合作网站账号登录优购：</p> 
       <p class="cop_link"> <a href="/api/alipay/sendToFastLogin.sc?redirectURL=" class="nreg_zpay f_blue">&nbsp;</a> | <a href="/api/qq/toLogin.sc?redirectURL=" class="nreg_qq f_blue">&nbsp;</a> | <a href="/api/sina/toLogin.sc?redirectURL=" class="nreg_sina f_blue">&nbsp;</a> | <a href="/api/renren/toRenren.sc?redirectURL=" class="nreg_people f_blue">&nbsp;</a> </p> 
      </div> 
     </div> 
     <input type="hidden" name="8q2y8B9W7D" value="1W2q7b" id="reg_nonce_id" /> 
    </div> 
   </div> 
  </form> 
  <!--底部start--> 
  <div class="footer Gray"> 
   <p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0">粤 B2-20090203</a></p> 
  </div> 
  <!--底部end--> 
  <script type="text/javascript">
//google
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23566531-1']);
  _gaq.push(['_setDomainName', '.yougou.com']);
  _gaq.push(['_addOrganic', 'baidu', 'word']);
  _gaq.push(['_addOrganic', 'soso', 'w']);
  _gaq.push(['_addOrganic', '3721', 'name']);
  _gaq.push(['_addOrganic', 'yodao', 'q']);
  _gaq.push(['_addOrganic', 'vnet', 'kw']);
  _gaq.push(['_addOrganic', 'sogou', 'query']);
  _gaq.push(['_addOrganic', '360', 'q']);
  _gaq.push(['_addOrganic', 'so', 'q']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);


(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://analytic' : 'http://analytic') + '.yougou.com/ga.js?4.3.4';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script> 
  <!--<script src="/static/Home/js/mv.js" type="text/javascript"></script>--> 
  <!-- Google Code for &#27880;&#20876; Conversion Page --> 
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 1016027598;
  var google_conversion_language = "ar";
  var google_conversion_format = "3";
  var google_conversion_color = "ffffff";
  var google_conversion_label = "EFaYCJrxqgIQzrO95AM";
  var google_conversion_value = 0;
  /* ]]> */
</script> 
  <script type="text/javascript" src="/static/Home/js/conversion.js"></script> 
  <noscript> 
   <div style="display:inline;"> 
    <img height="1" width="1" style="border-style:none;" alt="" src="/static/Home/picture/aa9212b9417c46dd880fef7e0d9c6e64.gif" /> 
   </div> 
  </noscript> 
  <!-- baidu marketing --> 
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?e19e291c1f33e089634e4d9034afde33";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>  
 </body>
</html>