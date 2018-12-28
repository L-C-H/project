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
    <li class="item-frist about_user"> <a rel="nofollow" href="/Homelogin/create">登录</a> / <a rel="nofollow" href="/Homeregister/create">注册</a> </li> 
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
 <form action="/Homephonelogin" method="post" id="ff"> 
   <div class="cen-new rel"> 
    <a href="../首页/index.html" target="_blank" class="cen-new" style="background: url('/static/Home/images/ba839750211e4c6485fe16dea496b709.jpg') no-repeat top center;position: absolute;top: 0;left: 0;z-index: 0"></a> 
    <div class="nreg_box clearfix" style="left: 50%;margin-left: 115px;position: absolute;top: 0;width: 378px;z-index: 1;"> 
     <div id="emailDiv" class="nreg_left fr" style=""> 
      <ul class="tab_sig_reg clearfix"> 
       <li class="tab_sig"><a href="/Homelogin/create">帐户密码登录</a></li> 
       <li class="tab_reg tab_cur"><a href="#">手机号快捷登录</a></li> 
      </ul> 
      <div class="nreg_form"> 
       <dl class="nreg_item mobile_regitem clearfix rel" id="mobile_nreg_item"> 
        <dd> 
         <div class="nreg_input_bg rel"> 
          <label class="lab1 nreg_mob_ema"><span class="fl">手机号</span></label> 
          <div class="tab_user_name"> 
           <a id="mobileLink" class="reg_Tab reg_TabCurr" href="javascript:;" regtype="mobile"><span>手机号</span></a> 
           <input type="hidden" name="option" id="option" value="phone" /> 
          </div> 
          <input type="text" name="phone" id="reg_mobile_" class="nreg_input" valid="Mobile" placeholder="请输入您的手机号码" value="{{old('phone')}}" /> 
         </div> 
        </dd> 
        <dt> 
         <div  class="errortips"></div> 
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
         <div  class="errortips"></div> 
        </dt> 
       </dl> 
       <dl id="dlMobileCode" class="nreg_item mobile_regitem clearfix rel"> 
        <dd> 
         <div class="nreg_input_bg fl" style="width:235px;"> 
          <label class="lab1" for="reg_mobile_code_">短信验证码</label> 
          <input type="text" name="phonecode" id="reg_mobile_code_" class="nreg_sinput" valid="MsgIdentifyCode" style="width: 155px;" /> 
         </div> 
         <div class="fr"> 
          <a id="sendMsgBtn" href="javascript:;" class="regAutoBtn_1"> <span style="margin-left:0;" id="getMsgSpan">获取验证码</span> </a> 
         </div> 
        </dd> 
        <dt> 
         <div data-msg="sendmsgtips"></div> 
        </dt> 
       </dl> 
       <p class="blank5"></p> 
        {{csrf_field()}}

       <p style="text-align: center"><button type="submit" title="立即登录" style="width: 312px;height: 40px;background: black;color:white;border:none;cursor: pointer;">立即登录</button></p> 
       <p class="f_black" style="color: #999;margin-top: 10px;text-align: center;">使用合作网站账号登录优购：</p> 
       <p class="cop_link"> <a href="/api/alipay/sendToFastLogin.sc?redirectURL=" class="nreg_zpay f_blue">&nbsp;</a> | <a href="/api/qq/toLogin.sc?redirectURL=" class="nreg_qq f_blue">&nbsp;</a> | <a href="/api/sina/toLogin.sc?redirectURL=" class="nreg_sina f_blue">&nbsp;</a> | <a href="/api/renren/toRenren.sc?redirectURL=" class="nreg_people f_blue">&nbsp;</a> </p> 
      </div> 
     </div> 
    </div> 
   </div> 
  </form> 
  <!--底部start--> 
  <div class="footer Gray"> 
   <p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0">粤 B2-20090203</a></p> 
  </div> 
  <!--底部end--> 
  <script type="text/javascript">
var PHONE=false;
var CODE=false;
//当鼠标移入时,变色
$('#sendMsgBtn').mouseover(function(){
  $(this).css('background','gray');
});
//当鼠标移出时,变色
$('#sendMsgBtn').mouseout(function(){
  $(this).css('background','black');
});
//获取手机号
$("input[name='phone']").blur(function(){
  $(this).parent('div').css('border','1px solid black');
  // console.log(555);exit;
  //获取手机号
  p = $(this).val();
  // alert(p);
  if (p=='') {
    $(this).parents('dd').next('dt').find('div').css('color','black').html('手机号不能为空');
    return false;
  }else if(p.match(/^[1][3,4,5,7,8][0-9]{9}$/)==null){
    $(this).parents('dd').next('dt').find('div').css('color','black').html('格式不对');
    PHONE=false;
  }else{
    $(this).parents('dd').next('dt').find('div').html('');
    $(this).parent('div').css('border','1px solid #e3e2e2');
    o=$(this);
    // 判断手机号是否注册
    $.get('/checkphone',{p:p},function(data){
      // alert(data);
      if (data==0) {
        o.parents('dd').next('dt').find('div').css('color','black').html('该账户还没注册');
        $('#sendMsgBtn').attr('disabled',true);
        PHONE=false;
      }else{
        //把获取校验码按钮 设置激活
        $('#sendMsgBtn').attr('disabled',false);
        PHONE=true;
      }
    });
  }
  
});
//获取短信发送校验码按钮
$('#sendMsgBtn').one('click',function(){
  //获取注册的手机号
  pp = $("input[name='phone']").val();
  o = $(this);
  //ajax
  $.get("/sendphone",{pp:pp},function(data){
    if (data.code==000000) {
      //按钮倒计时
      m=60;
      //定时器
      mytime=setInterval(function(){
        m--;
        //赋值给按钮
        o.html(m+'秒后重新发送');
        //按钮禁用
        o.attr('disabled',true);
        if (m==0) {
          //清除定时器
          clearInterval(mytime);
          //重新给按钮赋值
          o.html('重新发送');
          //激活按钮
          o.attr('disabled',false);
        }
      },1000);
    }
  },'json');

});
$("input[name='phonecode']").focus(function(){
  $(this).parents('dd').next('dt').find('div').html('');
});
//输入手机校验码
$("input[name='phonecode']").blur(function(){
  $(this).parent('div').css('border','1px solid black');
  oo = $(this);
  //获取输入的校验码
  pcode = $(this).val();
  $.get("/checkcode",{pcode:pcode},function(data){
    if (data==1) {
      oo.parents('dd').next('dt').find('div').html('');
      oo.parent('div').css('border','1px solid #e3e2e2');
      CODE=true;
    }else if (data==2) {
      oo.parents('dd').next('dt').find('div').css('color','black').html('校验码不一致');
      CODE=false;
    }else if (data==3) {
      oo.parents('dd').next('dt').find('div').css('color','black').html('校验码不能为空');
      CODE=false;
    }else if (data==4) {
      oo.parents('dd').next('dt').find('div').css('color','black').html('校验码已过期');
      CODE=false;
    }
  });
});

// //表单提交
$('#ff').submit(function(){
  //trigger 某个元素触发某个事件
  $("input").trigger("blur");
  if (PHONE && CODE) {
    return true;//成功提交
  }else{
    return false;//阻止提交
  }
  
});

</script>  
 </body>
</html>