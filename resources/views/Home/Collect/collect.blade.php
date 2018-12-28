<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://www.yougou.com/my/favorites.jhtml -->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>我的收藏夹</title> 
  <style type="text/css">
.tr1 td{ height:75px}
</style> 
  <link type="text/css" rel="stylesheet" href="/static/Home/css/ygdialog.css" /> 
  <style type="text/css">.easemobim-mobile-html{position:relative!important;width:100%!important;height:100%!important;padding:0!important;margin:0!important}.easemobim-mobile-body{position:absolute;top:0!important;left:0!important;width:100%!important;height:100%!important;overflow:hidden!important;padding:0!important;margin:0!important}.easemobim-mobile-body>*{display:none!important}.easemobim-mobile-body>.easemobim-chat-panel{display:block!important}.easemobim-chat-panel{z-index:1000;overflow:hidden;position:fixed;border:none;width:0;height:0;-webkit-transition:all .01s;-moz-transition:all .01s;transition:all .01s;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px}.easemobim-chat-panel.easemobim-minimized{border:none;box-shadow:none;height:37px!important;width:104px!important}.easemobim-chat-panel.easemobim-minimized.easemobim-has-prompt{width:360px!important;height:270px!important}.easemobim-chat-panel.easemobim-mobile{position:absolute!important;width:100%!important;height:100%!important;left:0!important;top:0!important;border-radius:0;box-shadow:none}.easemobim-chat-panel.easemobim-mobile.easemobim-minimized{height:0!important;width:0!important}.easemobim-chat-panel.easemobim-hide{visibility:hidden;width:1px!important;height:1px!important;border:none}.easemobim-chat-panel.easemobim-dragging{display:none}.easemobim-iframe-shadow{left:auto;top:auto;display:none;cursor:move;z-index:16777270;position:fixed;border:none;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px;background-size:100% 100%;background-repeat:no-repeat}.easemobim-iframe-shadow.easemobim-dragging{display:block}.easemobim-prompt-wrapper{display:none;z-index:16777271;position:fixed;width:30px;height:30px;padding:10px;top:0;bottom:0;margin:auto;left:0;right:0;color:#fff;background-color:#000;text-align:center;border-radius:4px;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;opacity:.7;-moz-box-sizing:content-box;box-sizing:content-box}.easemobim-prompt-wrapper>.loading{position:relative;width:30px;height:30px;display:inline-block;overflow:hidden;margin:0;padding:0;-webkit-animation:easemobim-loading-frame 1s linear infinite;-moz-animation:easemobim-loading-frame 1s linear infinite;animation:easemobim-loading-frame 1s linear infinite}@-webkit-keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@-moz-keyframes easemobim-loading-frame{0%{-moz-transform:rotate(0);transform:rotate(0)}to{-moz-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);-moz-transform:rotate(1turn);transform:rotate(1turn)}}.easemobim-pc-img-view{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:16777270}.easemobim-pc-img-view>.shadow{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000}.easemobim-pc-img-view>img{max-width:100%;max-height:100%;position:absolute;margin:auto;top:0;right:0;bottom:0;left:0}</style> 
 </head> 
 <body class="myfavor"> 
  <!--header created time: 2018-12-04T13:40:10+08:00 --> 
  <!--公共头部start--> 
  <div class="header"> 
   <ul class="left-content"> 
    <li> 
     <div class="scan-code"> 
      <a href="javascript:;">关注</a> 
      <div class="border-content"> 
       <div class="border"> 
        <img src="/static/Home/images/weChat.jpg" alt="关注公众号" class="qr-code" /> 
        <span class="title">关注公众号</span> 
       </div> 
      </div> 
     </div> </li> 
    <li class="item-app"> 
     <div class="scan-code"> 
      <a href="javascript:;">下载APP</a> 
      <div class="border-content"> 
       <div class="border"> 
        <img src="/static/Home/images/app.jpg" alt="优购APP下载" class="qr-code" /> 
        <span class="title">优购APP下载</span> 
       </div> 
      </div> 
     </div> </li> 
   </ul> 
   <ul class="right-content" id="top_nav"> 
    @if(session('username'))
     <li class="item-frist about_user"> <a rel="nofollow" href="/Homelogin/create">欢迎{{session('username')}}</a> / <a rel="nofollow" href="/Homelogin" class="log">注销</a> </li> 
    @else
      <li class="item-frist about_user"> <a rel="nofollow" href="/Homelogin/create">登录</a> / <a rel="nofollow" href="/Homeregister/create">注册</a> </li>  
     @endif
    <li class="item"> <a href="http://www.yougou.com/my/favorites.jhtml" class="top-collect"> <i class="icon bg-top_collect"></i> <span class="title">收藏</span> </a> </li> 
    <li class="item-cart"> <a href="http://www.yougou.com/order.jhtml"><i class="icon"></i>购物袋</a> </li> 
    <li class="item"> 
     <div class="notice"> 
      <a href="javascript:;">公告</a> 
      <div class="notice-content"> 
       <ul class="notice-list"> 
        <li class="item Red"> <a target="_blank" href="http://www.yougou.com/article/201805/3adfa2a3ca664e86ba4a6a8a33988940.shtml#ref=index?po=notice_notice1">优购客服电话变更</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201712/e4de56a20dcf458d88626858531fb8b6.shtml#ref=index?po=notice_notice2">关闭分享购频道</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201607/182fbbbcc43940259e172d1da13cacce.shtml#ref=index?po=notice_notice3">提醒会员谨防诈骗电话</a> </li> 
       </ul> 
      </div> 
     </div> </li> 
   </ul> 
  </div> 
  <!--导航start--> 
  <!-- nav created time: 2018-12-03T14:42:02+08:00 --> 
  <div id="logo" class="logo-container"> 
   <div class="header-logo"> 
    <a href="http://www.yougou.com/"> <img src="/static/Home/images/logo.png" width="98" height="58" /> </a> 
   </div> 
   <div class="nav-container" style="padding-top: 0;"> 
    <div class="nav"> 
     <ul> 
      <li id="nav_logo" style="display: none" class="item-first"> <a href="http://www.yougou.com/"> <img src="/static/Home/images/logo.png" width="60" height="38" /> </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/" target="_blank"> 首页 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-0-MXZ-0-1.html" _yg_nav="5b2ba28f59bcda74c9000050" target="_blank"> 女鞋 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A-04Y004-1.html" _yg_nav="53d0e925c7da508b0c000195" target="_blank"> 男鞋 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-0-PTK-0-1.html" _yg_nav="5b2badd459bcda74c900007a" target="_blank"> 运动 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-0-KDT-0-1.html" _yg_nav="53d0e924c7da508b0c00011e" target="_blank"> 户外 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-0-9XB_HX4-0-1.html" _yg_nav="5b2bb95259bcdae402000009" target="_blank"> 儿童 </a> </li> 
      <li class="item"> <a href="http://www.yougou.com/f-0-6LJ-0-1.html" _yg_nav="53d0e924c7da508b0c000155" target="_blank"> 箱包 </a> </li> 
     </ul> 
     <div class="search-wrapper"> 
      <form action="http://www.yougou.com/sr/searchKey.sc" class="input_box" onsubmit="if(keyword.value==''){return false;}" id="J_TopSearchForm" method="get"> 
       <div class="search"> 
        <input type="text" id="keyword" name="keyword" /> 
        <i id="btn-search" class="icon bg-Details_page_enlarge"></i> 
       </div> 
      </form> 
     </div> 
    </div> 
   </div> 
   <div class="nav-container-down"> 
    <div id="5b2ba28f59bcda74c9000050" class="nav-down-menu" style="display: none;" _yg_nav="5b2ba28f59bcda74c9000050"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-belle-MXZ-0-1.html" target="_blank"> 百丽 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-tata-MXZ-0-1.html" target="_blank"> 他她 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-teenmix-0-0-1.html" target="_blank"> 天美意 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-millies-0-0-1.html" target="_blank"> 妙丽 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-senda-0-0-1.html" target="_blank"> 森达 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-joypeace-0-0-1.html" target="_blank"> 真美诗 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-staccato-0-0-1.html" target="_blank"> 思加图 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-bata-MXZ-0-1.html" target="_blank"> 拔佳 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-hushpuppies-0-0-1.html" target="_blank"> 暇步士 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-crocs-0-0-1.html" target="_blank"> 卡骆驰 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-basto-0-0-1.html" target="_blank"> 百思图 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-jipijapa-MXZ-0-1.html" target="_blank"> Jipi Japa </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R-0-1.html" target="_blank"> 女士单鞋 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_0YN-0-1.html" target="_blank"> 浅口鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_MML-0-1.html" target="_blank"> 尖头鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%B0%8F%E7%99%BD%E9%9E%8B?orderBy=1?catgNo=MXZ_F5R"> 小白鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_Q2T-0-1.html" target="_blank"> 乐福鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_UWO-05B000-1.html" target="_blank"> 满帮鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_18N-05B000-1.html" target="_blank"> 高跟鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_8YR-05B000-1.html"> 松糕鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_N3I-05B000-1.html" target="_blank"> 平底鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_N1R-0-1.html" target="_blank"> 休闲鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0-05B000-1.html"> 女士靴子 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_3CN-0-1.html" target="_blank"> 短靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_78V-0-1.html"> 中靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_K8M-0-1.html"> 长靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_0VD-0-1.html"> 绒里靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_11U-0-1.html" target="_blank"> 马丁靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_UI0_WKL-0-1.html" target="_blank"> 雪地靴 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM-0-1.html" target="_blank"> 女士凉鞋 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM_LWB-0-1.html" target="_blank"> 凉拖 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM_9M4-0-1.html" target="_blank"> 纯凉鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM_NX1-0-1.html" target="_blank"> 坡跟凉鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM_NX1-0-1.html" target="_blank"> 后空凉鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM_KBN-0-1.html" target="_blank"> 中空凉鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ_FQM-01H0NY-1.html"> 穆勒凉鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ-050002-1.html" target="_blank"> 秋季新品 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%93%E6%9F%9C%E5%90%8C%E6%AC%BE%20%E5%A5%B3%E9%9E%8B?orderBy=1" target="_blank"> 专柜同款 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%94%9C%E7%BE%8E?orderBy=1?catgNo=MXZ" target="_blank"> 甜美风 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%9D%B4%E8%9D%B6%E7%BB%93?orderBy=1?catgNo=MXZ" target="_blank"> 蝴蝶结 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%80%E5%AD%97%E5%B8%A6?orderBy=1?attrStr=050001?catgNo=MXZ" target="_blank"> 一字带 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ-0-1.html" target="_blank"> 热销TOP </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="53d0e925c7da508b0c000195" class="nav-down-menu" style="display: none;" _yg_nav="53d0e925c7da508b0c000195"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-belle-Y0A-0-1.html"> 百丽 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-senda-Y0A-0-1.html"> 森达 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-hushpuppies-Y0A-0-1.html" target="_blank"> 暇步士 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-bata-Y0A-0-1.html"> 拔佳 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-teenmix-Y0A-0-1.html"> 天美意 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-tata-Y0A-0-1.html"> 他她 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-basto-Y0A-0-1.html"> 百思图 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-crocs-Y0A-0-1.html"> 卡骆驰 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-fato-Y0A-0-1.html"> 伐拓 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 分类 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-04T020_052001-1.html" target="_blank"> 休闲鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_R5O-0-1.html" target="_blank"> 乐福鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_Q28-052001-1.html" target="_blank"> 懒人鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%B3%BB%E5%B8%A6%E9%9E%8B?orderBy=0?catgNo=Y0A" target="_blank"> 系带鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_O2S-052001-1.html"> 满帮鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-04T024_052001-1.html" target="_blank"> 正装鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_RVN-04Y004-1.html" target="_blank"> 打孔鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_8OT-04Y004-1.html"> 豆豆鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A_KJG_8M7-0-1.html" target="_blank"> 纯凉鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-04Y004_050001_05B001_052001-1.html" target="_blank"> 专柜同款 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-00T009_052001-1.html"> 小白鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=2018?orderBy=1?catgNo=Y0A" target="_blank"> 2018新品 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-0-1.html" target="_blank"> 热销TOP </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="5b2badd459bcda74c900007a" class="nav-down-menu" style="display: none;" _yg_nav="5b2badd459bcda74c900007a"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK-0-1.html"> 品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-adidas-PTK-0-1.html" target="_blank"> 阿迪达斯 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-nike-PTK-0-1.html" target="_blank"> 耐克 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-adidasoriginals-PTK-0-1.html" target="_blank"> 三叶草 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-adidasneo-PTK-0-1.html" target="_blank"> 阿迪休闲 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-puma-PTK-0-1.html" target="_blank"> 彪马 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-converse-PTK-0-1.html" target="_blank"> 匡威 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-onitsukatiger-PTK-0-1.html" target="_blank"> 鬼冢虎 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-skechers-PTK-0-1.html" target="_blank"> 斯凯奇 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-asics-PTK-0-1.html" target="_blank"> 亚瑟士 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-reebok-PTK-0-1.html" target="_blank"> 锐步 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-vans-PTK-0-1.html" target="_blank"> 万斯 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK_J7F-0-1.html" target="_blank"> 运动鞋 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_LMT-0-1.html" target="_blank"> 跑步鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_2GZ-0-1.html" target="_blank"> 休闲鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CQ2-0-1.html" target="_blank"> 复刻鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CQL-0-1.html" target="_blank"> 篮球鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_KDP-0-1.html" target="_blank"> 户外鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_5YS-0-1.html" target="_blank"> 帆布鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_XKG-0-1.html" target="_blank"> 网球鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_BSP-0-1.html" target="_blank"> 综训鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_2GI-0-1.html" target="_blank"> 健步鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CMO-0-1.html" target="_blank"> 足球鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_8Y5-0-1.html" target="_blank"> 凉鞋/拖鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_I0E-0-1.html" target="_blank"> 包配 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ-0-1.html" target="_blank"> 运动服 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_K02-0-1.html" target="_blank"> T恤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_VK5-0-1.html" target="_blank"> POLO衫 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_FTS-0-1.html" target="_blank"> 短裤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_CJW-0-1.html" target="_blank"> 紧身服/胸衣 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_G4R-0-1.html"> 长裤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_UR8-0-1.html" target="_blank"> 夹克 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK_9NZ_691-0-1.html" target="_blank"> 卫衣/套头衫 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK-0-1.html" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK-052001_05B001-1.html" target="_blank"> 专柜同款 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK-052001-1.html" target="_blank"> 夏季新品 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%B4%9D%E5%A3%B3%E5%A4%B4%E4%BC%91%E9%97%B2%E9%9E%8B?orderBy=0?catgNo=PTK" target="_blank"> 贝壳头鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-PTK-0-5.html"> SALE </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="53d0e924c7da508b0c00011e" class="nav-down-menu" style="display: none;" _yg_nav="53d0e924c7da508b0c00011e"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-thenorthface-IHY_SYG-0-6.html" target="_blank" style="color: #1c1919;"> 乐斯菲斯 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-timberland-KDT-0-0.html" target="_blank"> 添柏岚 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-columbia-IHY_SYG-0-6.html" target="_blank" style="color: #1c1818;"> 哥伦比亚 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-cat-KDT-0-6.html" target="_blank"> CAT </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-KDT_O02-0-1.html" target="_blank"> 户外鞋 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_FXW-0-0.html"> 休闲鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_T7S-0-0.html"> 工装鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_CSM-0-0.html" target="_blank"> 越野鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E6%88%B7%E5%A4%96%E6%9C%8D?orderBy=1" target="_blank"> 户外服 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT_LEI_IKL-0-1.html" target="_blank"> T恤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%86%B2%E9%94%8B%E8%A1%A3?orderBy=1?brandEnName=columbia_thenorthface" target="_blank"> 冲锋衣 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT_LEI_8MP-0-1.html" target="_blank"> 皮肤衣 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT_LEI_SF7-0-0.html" target="_blank"> 抓绒衣裤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT_LEI_QK6-0-0.html" target="_blank"> 软壳衣裤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-IHY_SYG_X3G_YOC_D20-0-0.html" target="_blank"> 休闲裤 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-thenorthface-IHY_SYG_X3G-01H03R04404V06206R07A-1.html" target="_blank"> 速干 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-cat-KDT_O02_T7S-00T00G-0.html" target="_blank"> 大黄靴 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT-05B001-1.html" target="_blank"> 热销TOP </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="5b2bb95259bcdae402000009" class="nav-down-menu" style="display: none;" _yg_nav="5b2bb95259bcdae402000009"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-9XB-0-0.html" target="_blank" style="color:  阿;"> 热门品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-adidas_adidasoriginals-9XB-0-0.html" target="_blank"> 阿迪 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-nike-9XB-0-0.html" target="_blank"> 耐克 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-adidasoriginals-9XB-0-6.html" target="_blank"> 三叶草 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-9XB_HX4-0-0.html" target="_blank"> 童鞋 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_HX4_N2F-0-1.html" target="_blank"> 跑步鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_HX4_2BI-0-1.html" target="_blank"> 户外鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_HX4_4VU-0-1.html" target="_blank"> 复刻鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-9XB_A0E-0-0.html" target="_blank"> 童装 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_1LG-0-1.html" target="_blank"> T恤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_UBH-0-1.html" target="_blank"> 儿童套装 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_J6C-0-1.html" target="_blank"> 裤装 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_00X-0-1.html" target="_blank"> 外套/风衣 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_DDD-0-1.html" target="_blank"> 卫衣 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-9XB_A0E_ORE-0-1.html" target="_blank"> 棉羽 </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="53d0e924c7da508b0c000155" class="nav-down-menu" style="display: none;" _yg_nav="53d0e924c7da508b0c000155"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/favorites.jhtml#"> 品牌 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-istbelle-6LJ-0-1.html"> 百丽箱包 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-basto-6LJ-0-1.html" target="_blank"> 百思图 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-teenmix-6LJ-0-1.html" target="_blank"> 天美意 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-tata-6LJ-0-1.html" target="_blank"> 他她 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-bata-6LJ-0-1.html" target="_blank"> 拔佳 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-staccato-6LJ-0-1.html" target="_blank"> 思加图 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-millies-6LJ-0-1.html" target="_blank"> 妙丽&nbsp; </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%8C%85?orderBy=1?attrStr=04Y001?catgNo=6LJ_345" target="_blank"> 魅力女包 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_345_CEE-0-1.html" target="_blank"> 手提/手包 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_345_I47-0-1.html" target="_blank"> 单肩/斜挎 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_345_8HJ-0-1.html" target="_blank"> 双肩包 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-6LJ_Q5K-0-1.html" target="_blank"> 经典男包 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_Q5K_LPU-0-1.html" target="_blank"> 单肩/斜挎 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_Q5K_51J-0-1.html" target="_blank"> 手提/手包 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-6LJ_Q5K_66S-0-1.html" target="_blank"> 双肩包 </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
   </div> 
   <div class="line"></div> 
  </div> 
  <!--//导航end--> 
  <script type="text/javascript" async="" src="/static/Home/js/ga.js"></script> 
  <script type="text/javascript" src="/static/Home/js/index.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg_suggest.js"></script> 
  <!--//公共头部end--> 
  <div class="blank10"></div> 
  <div class="cen clearfix"> 
   <p class="curLct">您当前的位置：<a target="blank" href="http://www.yougou.com/index.html?t=15439021535147740" class="f_blue">首页</a> &gt; <a href="http://www.yougou.com/my/ucindex.jhtml?t=15439021535141754" class="f_blue">我的优购</a> &gt; 我的收藏夹</p> 
   <div class="u_leftxin u_leftxin fl mgr10" id="umenu"> 
    <div class="wdygtit"> 
     <a href="http://www.yougou.com/my/ucindex.jhtml?t=15439021535141144"><span>我的优购</span></a> 
    </div> 
    <ul class="jiaoyizx"> 
     <li class="ultit">交易中心</li> 
     <li class="myorderli"><a href="http://www.yougou.com/my/order.jhtml?t=15439021535142987"><span>我的订单</span></a></li> 
     <li class="myfavorli"><a href="http://www.yougou.com/my/favorites.jhtml?t=154390215351410688"><span>我的收藏</span></a></li> 
     <li class="mycommentli"><a href="http://www.yougou.com/my/comment.jhtml?t=15439021535146479"><span>商品评论/晒单</span></a></li> 
     <li class="msgli"><a href="http://www.yougou.com/my/msg.jhtml?t=15439021535146556"><span id="uc_msg_count">站内消息<i class="huise">（<em>0</em>）</i></span></a></li> 
    </ul> 
    <ul class="wodezc"> 
     <li class="ultit">我的资产</li> 
     <li class="mycouponli"><a href="http://www.yougou.com/my/coupon.jhtml?couponState=1?t=15439021535144257"><span id="my_coupon_tick">我的优惠券</span></a></li> 
     <li class="giftcardli"><a href="http://www.yougou.com/my/giftcard.jhtml?couponState=1?t=15439021535148065"><span id="my_giftcard_tick">我的礼品卡</span></a></li> 
     <li class="mypointli"><a href="http://www.yougou.com/my/point.jhtml?t=15439021535144089"><span id="my_point_tick">我的积分</span></a></li> 
    </ul> 
    <ul class="gerensz"> 
     <li class="ultit">个人设置</li> 
     <li class="safesetli"><a href="http://www.yougou.com/my/safeSet.jhtml?t=15439021535149601"><span id="uc_safe_level">安全设置</span></a></li> 
     <li class="myaddrli"><a href="http://www.yougou.com/my/address.jhtml?t=15439021535148087"><span>我的收货地址</span></a></li> 
    </ul> 
    <ul class="shouhoufw"> 
     <li class="ultit">售后服务</li> 
     <li class="afterservli"><a href="http://www.yougou.com/my/afterService.jhtml?t=154390215351410393"><span>查看退换货</span></a></li> 
     <li class="appservli"><a href="http://www.yougou.com/my/applicationService.jhtml?t=15439021535148932"><span>申请退换货</span></a></li> 
    </ul> 
    <ul class="hotlist"> 
     <li class="hotlist_tit"> 
      <div> 
       <p>24小时热销推荐</p> 
      </div></li> 
     <li class="hotlist_dl"> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_favorites?po=hot24_1" target="_blank"><img src="/static/Home/images/100514854_01_s.jpg" title="adidas 阿迪达斯 运动 长裤" alt="阿迪达斯 长裤" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_favorites?po=hot24_1" target="_blank" title="adidas 阿迪达斯 运动 长裤">阿迪达斯 长裤</a></p> 
        <p class="hotgoodsprice"><span>￥229</span><span class="Hui">￥299</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_favorites?po=hot24_2" target="_blank"><img src="/static/Home/images/100370348_01_s.jpg" title="adidas 阿迪达斯 运动 斜挎包" alt="阿迪达斯 斜挎包" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_favorites?po=hot24_2" target="_blank" title="adidas 阿迪达斯 运动 斜挎包">阿迪达斯 斜挎包</a></p> 
        <p class="hotgoodsprice"><span>￥89</span><span class="Hui">￥99</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_favorites?po=hot24_3" target="_blank"><img src="/static/Home/images/100699750_01_s.jpg" title="nike 耐克 运动 跑步鞋" alt="耐克 跑步鞋" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_favorites?po=hot24_3" target="_blank" title="nike 耐克 运动 跑步鞋">耐克 跑步鞋</a></p> 
        <p class="hotgoodsprice"><span>￥449</span><span class="Hui">￥499</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_favorites?po=hot24_4" target="_blank"><img src="/static/Home/images/100988699_01_s.jpg" title="adidas 阿迪达斯 运动 跑步鞋" alt="阿迪达斯 跑步鞋" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_favorites?po=hot24_4" target="_blank" title="adidas 阿迪达斯 运动 跑步鞋">阿迪达斯 跑步鞋</a></p> 
        <p class="hotgoodsprice"><span>￥289</span><span class="Hui">￥499</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_favorites?po=hot24_5" target="_blank"><img src="/static/Home/images/100202608_01_s.jpg" title="adidas 阿迪达斯 运动 袜子" alt="阿迪达斯 袜子" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_favorites?po=hot24_5" target="_blank" title="adidas 阿迪达斯 运动 袜子">阿迪达斯 袜子</a></p> 
        <p class="hotgoodsprice"><span>￥29</span><span class="Hui">￥29</span></p> 
       </dd> 
      </dl></li> 
     <li class="last"><a class="hotrenovate" href="javascript:void(0);" onclick="YGM.GlobeTip.hottop24r()">换一批</a></li> 
    </ul> 
   </div> 
   <!-- right content --> 
   <div class="uc_right fr"> 
    <div class="uc_tab" id="fav_prd"> 
     <a class="current a_choosed" href="javascript:void(0);">所有收藏<span class="numspan"></span></a> 
     <a class="current zeronum" href="javascript:void(0);">已降价<span class="numspan">0</span></a> 
     <a class="current zeronum" href="javascript:void(0);">正促销<span class="numspan">0</span></a> 
     <a class="current zeronum" href="javascript:void(0);">即将断货<span class="numspan">0</span></a> 
    </div> 
    <!--商品收藏列表 start--> 
    <div class="uc_fav_list"> 
     <ul class="uc_fav_header"> 
      <li class="pro_name">商品信息</li> 
      <li class="price">价格</li> 
      <li class="cz">操作</li> 
     </ul> 
     <ul class="uc_fav_c uc_goods_fav_c"> 
      <li class="li_fav clearfix"> <span class="s_h fav_select"> <a href="javascript:void(0);" dataid="55772a32618048bc8b7d8b05165fd251" class="uc_ico u_d up" title="置顶">置顶</a> <input name="p1" id="p1" type="checkbox" value="55772a32618048bc8b7d8b05165fd251" class="check_fav" /> </span> <a href="http://www.yougou.com/c-tata/sku-fm2qaaq8-100583167.shtml?t=154411407559510635" target="_blank" class="s_h pro_img"> <img src="http://i2.ygimg.cn/pics/tata/2018/100583167/100583167_01_s.jpg?10" width="60" height="60" alt="" /> </a> 
       <div class="s_h fav_pro_c clearfix"> 
        <div class="s_h pro_info"> 
         <p><a href="http://www.yougou.com/c-tata/sku-fm2qaaq8-100583167.shtml?t=15441140755958941" target="_blank">Tata/他她浅金亮片布水钻蝴蝶结尖头高跟婚鞋浅口女鞋FM2QAAQ8</a></p> 
         <p> <span class="cgray"> 颜色：<em class="f_gray">浅金(亮片布)</em>&nbsp;&nbsp; </span> </p> 
         <p class="pro_cmt">即将断货</p> 
        </div> 
        <div class="s_h price_cs"> 
         <p class="last_price">&yen;268</p> 
         <p class="down_price">距活动结束还有<span class="hei_time" id="jsTime_0" endtime="33910209"><font>9</font>小时<font>19</font>分<font>11</font>秒</span></p> 
         <input type="hidden" id="deadline_0" name="deadline" value="33910209" /> 
        </div> 
        <div class="s_h cz"> 
         <p class="cz1"><a class="shop_car uc_addTo_cart" href="javascript:void(0);" cid="55772a32618048bc8b7d8b05165fd251" goodsno="100583167">移入购物袋</a></p> 
         <p class="cz3"><a class="f_blue uc_delete_fav" dataid="55772a32618048bc8b7d8b05165fd251" href="javascript:void(0);">取消收藏</a></p> 
        </div> 
        <div class="uc_buy_goods none"></div> 
       </div> </li> 
     </ul> 
     <div class="uc_page clearfix"> 
      <!-- 20条记录换页 --> 
      <div id="paginator" class="paginator" style="display: block;"> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
  <p class="blank10"></p> 
  <!-- right content end --> 
  <link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/ucenter_v2.0.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/ygdialog.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.member.js"></script> 
  <!--调查问卷入口--> 
  <!--环信 start--> 
  <script type="text/javascript" src="/static/Home/js/CustomerManagement.js"></script> 
  <script src="/static/Home/js/easemob.js"></script> 
  <div class="easemobim-prompt-wrapper"> 
   <div class="loading"> 
    <div class="em-widget-loading"> 
     <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 70 70"> 
      <circle opacity=".3" fill="none" stroke="#000" stroke-width="4" stroke-miterlimit="10" cx="35" cy="35" r="11"></circle> 
      <path fill="none" stroke="#E5E5E5" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M24 35c0-6.1 4.9-11 11-11 2.8 0 5.3 1 7.3 2.8"></path> 
     </svg> 
    </div> 
   </div> 
  </div> 
  <!--环信 end--> 
  <div class="footer-feature"> 
   <div class="container"> 
    <div class="customer-service"> 
     <ul class="content"> 
      <li> <i class="icon bg-bottom_logistics"></i> <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">正品保证</a></span> </li> 
      <li class="item"> <i class="icon bg-bottom_ensure"></i> <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">10天退换货</a></span> </li> 
      <li class="item"> <i class="icon bg-bottom_service"></i> <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">10天调补差价额</a></span> </li> 
      <li class="item"> <i class="icon bg-bottom_Price_difference"></i> <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">09:00—21:00在线客服</a></span> </li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div class="footer-help"> 
   <div class="container"> 
    <div class="guide-container"> 
     <ul class="content"> 
      <li> 
       <dl> 
        <dt>
          新手帮助 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/help/agreement.shtml" target="_blank" rel="nofollow" class="link">交易条款协议</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/registration.shtml" target="_blank" rel="nofollow" class="link">注册新用户</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/memberpoints.shtml" class="link">会员积分详情</a> 
        </dd> 
       </dl> </li> 
      <li class="item"> 
       <dl> 
        <dt>
          购物指南 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/help/orderprocess.shtml" class="link">订购流程</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/inspectionandsign.shtml" class="link">验货与签收</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/orderinquiries.shtml" class="link">订单配送</a> 
        </dd> 
       </dl> </li> 
      <li class="item"> 
       <dl> 
        <dt>
          支付/配送 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/help/payonline.shtml" class="link">支付方式</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/shippingmethod.shtml" class="link">配送方式</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/deliverytf.shtml" class="link">配送时间及运费</a> 
        </dd> 
       </dl> </li> 
      <li class="item"> 
       <dl> 
        <dt>
          售后服务 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/help/returnpolicy.shtml" class="link">退换货政策</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/refundment.shtml" class="link">退款说明</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/invoicesystem.shtml" class="link">发票制度</a> 
        </dd> 
       </dl> </li> 
      <li class="item"> 
       <dl> 
        <dt>
          会员服务 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/help/forgotpassword.shtml" class="link">找回密码</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/help/contactus.shtml" class="link">联系我们</a> 
        </dd> 
        <dd class="dd-title">
          &nbsp; 
        </dd> 
       </dl> </li> 
      <li class="item" style="display: none;"> 
       <dl> 
        <dt>
          企业合作 
        </dt> 
        <dd class="dd-title-first"> 
         <a href="http://www.yougou.com/my/favorites.jhtml#" class="link">分销项目</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/my/favorites.jhtml#" class="link">礼品卡</a> 
        </dd> 
        <dd class="dd-title">
          &nbsp; 
        </dd> 
       </dl> </li> 
      <li class="item"> 
       <dl> 
        <dt>
          优购客服 
        </dt> 
        <dd class="dd-title-first"> 
         <a onclick="easemobim.bind({configId: &quot;1f142cd0-a8ca-4769-b447-59f9fa01bb65&quot;})" href="javascript:;" class="link"> <i class="icon bg-bottom_Consultation"></i> 在线咨询</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="javascript:;" class="link">Email: ygservice@belle.com.cn </a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/my/favorites.jhtml#" class="link">微信客服：优购时尚商城</a> 
        </dd> 
       </dl> </li> 
     </ul> 
    </div> 
    <div class="national-certification"> 
     <ul class="content"> 
      <li> <a href="http://www.anquan.org/authenticate/cert/?site=www.yougou.com?at=realname" key="521b3d2524306332d3107ff3" target="_blank"> <img width="124" height="47" src="/static/Home/images/sm_124x47.png" style="border: medium none;" alt="安全联盟认证" /> </a> </li> 
      <li class="item"> 
       <!--          <a href="http://szcert.ebs.org.cn/93740fab-b419-4b67-940c-d2e808d6480b" target="_blank" title="众信网" rel="nofollow">--> <a href="https://szcert.ebs.org.cn/817869EF-8D9D-4C35-BABB-451984A81886" target="_blank" title="众信网" rel="nofollow"> <img src="/static/Home/images/ebs-logo.jpg" width="124" height="47" /> </a> </li> 
      <li class="item"> <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"> <img src="/static/Home/images/beian1.png" width="124" height="47" /> </a> </li> 
      <li class="item"> <a href="http://61.144.227.239:9002/" target="_blank" rel="nofollow"> <img src="/static/Home/images/beian2.png" width="124" height="47" /> </a> </li> 
     </ul> 
     <ul class="qr-code"> 
      <li> 
       <div class="border"> 
        <img src="/static/Home/images/app.jpg" alt="扫描下载手机客户端" class="img-app" /> 
       </div> 
       <div class="title">
         扫描下载手机客户端 
       </div> </li> 
      <li class="item"> 
       <div class="border"> 
        <img src="/static/Home/images/weChat.jpg" alt="关注公众号" /> 
       </div> 
       <div class="title">
         关注公众号 
       </div> </li> 
     </ul> 
    </div> 
    <div class="friendly-link"> 
     <ul class="content"> 
      <li> <a href="http://www.yougou.com/help/aboutus.shtml" class="title-first">关于优购</a>| </li> 
      <li> <a href="http://www.yougou.com/group_purchasing.shtml" class="title">集团采购</a>| </li> 
      <li> <a href="http://www.yougou.com/help/zhaopin.shtml" class="title">招贤纳士</a>| </li> 
      <li> <a href="http://www.yougou.com/topics/mobile.shtml" class="title">手机优购</a>| </li> 
      <li> <a href="http://www.yougou.com/help/contactus.shtml" class="title">联系我们</a>| </li> 
      <li> <a href="http://www.yougou.com/friendlink.shtml" class="title">友情链接</a> </li> 
     </ul> 
    </div> 
    <div class="copyright"> 
     <p> Copyright &copy; 2011-2016 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">粤ICP备09070608号-4</a> 增值电信业务经营许可证： <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">粤 B2-20090203 </a>&nbsp; <span>深公网安备：4403101910665 </span> <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030502000017"> <span>粤公网安备 44030502000017号</span> </a> </p> 
    </div> 
   </div> 
  </div> 
  <!-- common js --> 
  <span class="none"> 
   <!-- 1. sourceChannel --> <script type="text/javascript" src="/static/Home/js/sourceChannel.js"></script> 
   <!-- 2.  mv    --> 
   <!-- <script src="/static/Home/js/mv.js?4.3.4" type="text/javascript"></script> --> <script type="text/javascript" src="/static/Home/js/mv.js"></script> 
   <!-- 4. google analytics --> <script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-23566531-1']);
    _gaq.push(['_setDomainName', '.yougou.com']);
    _gaq.push(['_addOrganic', 'baidu', 'word']);
    _gaq.push(['_addOrganic', 'baidu', 'wd']);
    _gaq.push(['_addOrganic', 'soso', 'query']);
    _gaq.push(['_addOrganic', 'soso', 'key']);
    _gaq.push(['_addOrganic', '3721', 'name']);
    _gaq.push(['_addOrganic', 'yodao', 'q']);
    _gaq.push(['_addOrganic', 'vnet', 'kw']);
    _gaq.push(['_addOrganic', 'sogou', 'query']);
    _gaq.push(['_addOrganic', 'sogou', 'keyword']);
    _gaq.push(['_addOrganic', '360', 'q']);
    _gaq.push(['_addOrganic', 'so', 'q']);
    _gaq.push(['_addOrganic', 'haosou', 'q']);
    _gaq.push(['_addOrganic', 'sm', 'q']);
    _gaq.push(['_trackPageview']);
    _gaq.push(['_trackPageLoadTime']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://analytic' : 'http://analytic') + '.yougou.com/ga.js?4.3.4';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> 
   <!-- 5. googleadservices --> 
   <!-- Google Code for &#35775;&#38382;&#39318;&#39029; Remarketing List --> <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1016027598;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "ni7GCOL2nQIQzrO95AM";
var google_conversion_value = 0;
/* ]]> */
</script> <script type="text/javascript" src="/static/Home/js/f.txt"></script> 
   <noscript> 
    <div style="display:inline;"> 
     <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1016027598/?label=ni7GCOL2nQIQzrO95AM?guid=ON?script=0" /> 
    </div> 
   </noscript> </span> 
  <script src="/static/Home/js/f(1).txt"></script> 
  <!-- common js end --> 
  <!----> 
  <script>
// url添加时间戳随机数
try {
YouGou.Util.setHrefStamp('.uc_right');
YouGou.Util.setHrefStamp('.u_right');
}catch (e) {} 
</script> 
  <script type="text/javascript">

/*关闭选择商品加入购物车*/
$(".uc_buy_goods .close_buy_box").click(function(){
  var uc_buy_goods=$(this).closest(".uc_buy_goods");
  var li_fav=$(this).closest(".li_fav");
  uc_buy_goods.slideUp();
  li_fav.removeClass("li_curr");
});

/*取消选择商品加入购物车*/
$(".uc_buy_goods .cancel_buy").click(function(){
  var uc_buy_goods=$(this).closest(".uc_buy_goods");
  var li_fav=$(this).closest(".li_fav");
  uc_buy_goods.slideUp();
  li_fav.removeClass("li_curr");
});

/*展示同类商品推荐*/
$(".similar_item a").click(function(){
  var uc_similar_tj=$(this).closest(".fav_pro_c").find(".uc_similar_tj");
  var s=$(this).find("s");
  if(uc_similar_tj.is(":visible")){
    uc_similar_tj.slideUp();
    s.removeClass("hidden");
  }else{
    uc_similar_tj.slideDown();
    s.addClass("hidden");
  }
});

/*同类商品推荐左右移动效果*/
$(".uc_proTj_list").each(function(){
  var $self=$(this);
  var page = 1;
  var i = 3;
  var len=$self.find("li").length;
  var none_unit_width=540;
  var page_count=Math.ceil(len / i);
  var slide=$self.closest(".uc_similar_tj").find(".slide");
  var slide_lf=$self.closest(".uc_similar_tj").find(".slide_lf");
  var slide_rt=$self.closest(".uc_similar_tj").find(".slide_rt");
  if(len<=3){
    slide.addClass("slide_no");
  }else{
    slide_lf.addClass("slide_no");
  }
  slide_rt.click(function(){ 
    if( !$self.is(":animated") ){
      if( page == page_count ){  
        return;
      }else{
        $self.animate({ left : '-='+none_unit_width}, 500);  
        page++;
        slide_lf.removeClass("slide_no");
        if(page==page_count){
          slide_rt.addClass("slide_no");
        }
      }
    }
   });
   slide_lf.click(function(){
      if( !$self.is(":animated") ){
      if( page == 1 ){
        return;
      }else{
        $self.animate({ left : '+='+none_unit_width }, 500);
        page--;
        slide_rt.removeClass("slide_no");
        if(page==1){
          slide_lf.addClass("slide_no");
        }
      }
    }
    });
});

/*全选、反选
$(".check_allFav").click(function(){
  var checked=$(this).attr("checked");
  if(checked){
    $(".check_fav").attr("checked","checked");
  }else{
    $(".check_fav").attr("checked","");
  }
});*/
// 记录网站用户登陆状况
_gaq.push(['_trackPageview','/PageAction/st/my/left_8']);
</script> 
  <link href="http://pcs1.ygimg.cnbdshare.js/?5.3.4.6" type="text/css" rel="stylesheet" /> 
  <!-- baidu marketing --> 
  <script type="text/javascript"> var dsp_config = { commodities: [ ], bd_list_type: 'ecom_favor' } ; </script> 
  <script type="text/javascript">
    $(document).ready(function () {
        if (typeof dsp_config !== 'undefined') {
            if (dsp_config['bd_list_type'] == 'ecom_reg') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=registerEmailSucceed" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_cart') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=order" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_order') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=continueOrder" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_pay_submit') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=payOnline" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_pay_offline') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=createOrder" + "\"></iframe>\""));
            } else if (dsp_config['bd_list_type'] == 'ecom_search') {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=search_list" + "\"></iframe>\""));
            } else if(dsp_config['bd_list_type'] == 'ecom_view'){
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml?url=prod-csku"+ "\"></iframe>\""));
            } else {
                $("body").append($("<iframe style=\"display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;\" src=\"" + "/inc/code_iframe.shtml" + "\"></iframe>\""));
            }
        }
    });
</script> 
  <script type="text/javascript">
/*时间倒计时*/
(function($){
  $.fn.countDown=function(options){
    return this.each(function(){
      var _this=$(this);
      var _leftSec=_this.attr('endtime');;
      var _t=null;
      var h,m,s;
      function countdown(){
        _leftSec-=1000;
        h=Math.floor((_leftSec/(1000*60*60))%24);
        m=Math.floor((_leftSec/(1000*60))%60);
        s=Math.floor((_leftSec/1000)%60);
        if(m<10){
          m="0"+m;
        }
        if(s<10){
          s="0"+s;
        }
        _this.html('<font>'+h+'</font>小时<font>'+m+'</font>分<font>'+s+'</font>秒');
        if(_leftSec>0){
          _t=setTimeout(countdown,1000);  
        }
        if(_leftSec<=0){
          window.location.reload();
          return;
        }
        
      }
      countdown();
    });
  }
})(jQuery);

$("input[name='deadline']") .each(function(){
  var index=this.id.substring(this.id.indexOf("_")+1);
  var domTime=$("#jsTime_"+index);
  d={timeMillis:$(this).val()};
  domTime.attr('endTime',d.timeMillis);
  domTime.countDown();
}); 
</script> 
  <iframe style="display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;" src="/static/Home/code_iframe.html"></iframe>  
 </body>
</html>