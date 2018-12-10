<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>优购网_用户登录</title> 
  <meta name="description" content="优购网" /> 
  <meta name="keywords" content="优购网" /> 
  <script>
  //禁止iframe嵌入
  if(window.top !== window.self){ window.top.location = window.location;}
</script> 
  <link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/validator.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/new_log_reg.v2.0.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.login.js"></script> 
  <style>
.tab_sig_reg li{width:174px;}
.tab_sig_reg .tab_sig{margin-left:0;margin-right:0;}
.tab_sig a,.tab_reg a{display:inline-block;width:174px;}
.tab_sig_reg li a{color:#333;}
</style> 
 </head> 
 <body> 
  <input id="redirectURL_1" type="hidden" name="redirectURL" value="http://www.yougou.com/order.jhtml" /> 
  <!--header created time: 2018-12-04T13:10:10+08:00 --> 
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
  <div class="cen-new rel"> 
   <a href="http://www.yougou.com" target="_blank" class="cen-new" style="background: url('/static/Home/images/ba839750211e4c6485fe16dea496b709.jpg') no-repeat top center;position: absolute;top: 0;left: 0;z-index: 0"></a> 
   <div class="nreg_box mt15 clearfix" style="left: 50%;margin-left: 115px;position: absolute;top: 0;width: 378px;z-index: 1;"> 
    <div class="nreg_left fr"> 
     <ul class="tab_sig_reg clearfix"> 
      <li class="tab_sig tab_cur"><a href="#">帐户密码登录</a></li> 
      <li class="tab_reg"><a href="/Homephonelogin">手机号快捷登录</a></li> 
     </ul> 
     <div class="nreg_form"> 
      <form onsubmit="return false;" id="loginform" method="post"> 
       <input type="hidden" name="3x2A0e9V1U" value="2c7r2P" id="loginNonceId" /> 
       <dl class="nreg_item clearfix"> 
        <dd> 
         <div class="nreg_input_bg"> 
          <i class="reg_user_name"></i> 
          <input type="text" name="email" placeholder="手机号/会员名称/邮箱" id="email_" class="nreg_input" maxlength="50" value="" /> 
         </div> 
        </dd> 
        <dt>
         <div id="login_email_tip" class="errortips"></div>
        </dt> 
       </dl> 
       <dl class="nreg_item clearfix"> 
        <dd> 
         <div class="nreg_input_bg"> 
          <i class="reg_password"></i> 
          <input type="password" name="password" placeholder="请输入密码" id="password_" class="nreg_input" maxlength="50" /> 
         </div> 
        </dd> 
        <dt>
         <div id="login_password_tip" class="errortips"></div>
        </dt> 
       </dl> 
       <div id="code_container" style="display:none;"> 
        <dl class="nreg_item clearfix"> 
         <dd> 
          <div class="nreg_input_bg fl" style="width:202px"> 
           <label class="lab1 ver_code" for="code2_">验证码</label> 
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
       <p style="display: block;text-align: right;margin-right: 17px;"> <a href="http://www.yougou.com/forgotpassword.jhtml" style="line-height: 26px; text-decoration:underline">忘记密码？</a> </p> 
       <p style="text-align: center"> <input type="submit" class="nlog_submit" value="点击登录" title="登录" /> </p> 
       <p class="f_black" style="color: #999;margin-top: 10px;text-align: center;">使用合作网站账号登录优购：</p> 
       <p class="cop_link"> <a class="we_chat f_blue" href="/member/toThirdPartLogin.jhtml?type=quick-weixin&amp;redirectURL=http://www.yougou.com/order.jhtml">&nbsp;</a> | <a href="/api/alipay/sendToFastLogin.sc?redirectURL=http://www.yougou.com/order.jhtml" class="nreg_zpay f_blue">&nbsp;</a> | <a href="/api/qq/toLogin.sc?redirectURL=http://www.yougou.com/order.jhtml" class="nreg_qq f_blue">&nbsp;</a> | <a href="/api/sina/toLogin.sc?redirectURL=http://www.yougou.com/order.jhtml" class="nreg_sina f_blue">&nbsp;</a> | <a href="/api/renren/toRenren.sc?redirectURL=http://www.yougou.com/order.jhtml" class="nreg_people f_blue">&nbsp;</a> </p> 
       <input type="hidden" name="8h9Z9t9y1F" value="7Y9R4u" id="loginNonceId" /> 
      </form> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="blank20"></div> 
  <div class="footer Gray"> 
   <p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0">粤 B2-20090203</a></p> 
  </div> 
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
    <img height="1" width="1" style="border-style:none;" alt="" src="/static/Home/picture/ea3f3ab917694a18bd27913e4c0809e4.gif" /> 
   </div> 
  </noscript>  
 </body>
</html>