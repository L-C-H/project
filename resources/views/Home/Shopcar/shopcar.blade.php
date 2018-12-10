<!DOCTYPE html>
<!-- saved from url=(0033)http://www.yougou.com/order.jhtml -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>订单提交中心_优购网上鞋城</title> 
  <link href="/static/Home/css/uc.base.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/base.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/shopcar_v4.0.css" type="text/css" rel="stylesheet" /> 
  <script src="/static/Home/js/hm.js"></script> 
  <script type="text/javascript" async="" src="/static/Home/js/ga.js"></script> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <script type="text/javascript" src="/static/Home/js/jquery.validate.js"></script> 
  <script type="text/javascript" src="/static/Home/js/MD5.js"></script> 
  <script type="text/javascript" src="/static/Home/js/ygdialog.js"></script> 
  <link type="text/css" rel="stylesheet" href="/static/Home/css/ygdialog.css" /> 
  <link rel="stylesheet" type="text/css" href="/static/Home/css/bootstrap.min.css">
  <script type="text/javascript">
    var basePath = "";
    var shoppingProcess=true;
</script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/payOnline.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.shopcart.js"></script> 
  <script src="/static/Home/js/f.txt"></script>
 </head> 
 <body> 
  <!--
--> 
  <!--header start--> 
  <!--header created time: 2018-12-04T13:40:10+08:00 --> 
  <!--公共头部top_nav_bar--> 
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
    <li class="item-frist about_user"><a href="http://www.yougou.com/my/ucindex.jhtml"><i class="icon sign-in"></i>您好,<span id="user_id">18244948099</span></a>&nbsp;<a href="http://www.yougou.com/logout.jhtml">[退出]</a></li> 
    <li class="item"> <a href="http://www.yougou.com/my/favorites.jhtml" class="top-collect"> <i class="icon bg-top_collect"></i> <span class="title">收藏</span> </a> </li> 
    <li class="item-cart"> <a href="http://www.yougou.com/order.jhtml"><i class="icon"></i>购物袋</a> </li> 
    <li class="item"> 
     <div class="notice"> 
      <a href="javascript:;">公告</a> 
      <div class="notice-content"> 
       <ul class="notice-list"> 
        <li class="item Red"> <a target="_blank" href="http://www.yougou.com/article/201805/3adfa2a3ca664e86ba4a6a8a33988940.shtml#ref=index&amp;po=notice_notice1">优购客服电话变更</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201712/e4de56a20dcf458d88626858531fb8b6.shtml#ref=index&amp;po=notice_notice2">关闭分享购频道</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201607/182fbbbcc43940259e172d1da13cacce.shtml#ref=index&amp;po=notice_notice3">提醒会员谨防诈骗电话</a> </li> 
       </ul> 
      </div> 
     </div> </li> 
   </ul> 
  </div> 
  <script type="text/javascript" src="/static/Home/js/index.js"></script> 
  <!--header end--> 
  <div class="cen cart_header"> 
   <h1 class="logo"><a href="http://www.yougou.com/" title="优生活，购时尚"><img src="/static/Home/images/logo-yg.png" alt="优购时尚商城" /></a></h1> 
   <div class="fr cart_step mt20"> 
    <ul> 
     <li class="current">我的购物袋<em></em><i></i></li> 
     <li>提交订单中心<em></em><i></i></li> 
     <li>成功提交订单<em></em><i></i></li> 
    </ul> 
   </div> 
  </div> 
  <span class="none"> <input type="hidden" id="addProductMaxNum" value="2" /> <input type="hidden" id="limitCartAddProductMaxNum" value="100" /> <input type="hidden" id="orderNum" value="0" /> <input type="hidden" id="isLock" value="false" /> <input type="hidden" id="limitOrderNum" value="40" /> <input type="hidden" id="limitOrderCommBuyMaxNum" value="40" /> <input type="hidden" id="isKrwFreeDuty" value="false" /> </span> 
  <!-- 若所有购物袋均为空提示一下内容   --> 
  <!-- 普通购物袋 --> 
  <div id="shoppingCartContainerCNY"> 
   <div class="cen cart_gray_box mt20"> 
    <table class="cart_list_tb"> 
     <colgroup> 
      <col width="60" /> 
      <col width="370" /> 
      <col width="110" /> 
      <col width="110" /> 
      <col width="110" /> 
      <col width="110" /> 
      <col width="120" /> 
     </colgroup> 
     <thead> 
      <tr> 
       <th> <label name="CNYcheckAllLabel" class="ygChkbox" tradecurrency="CNY"> <input class="none" type="checkbox" id="CNYcheckStartAll" name="CNYcheckAll" checked="checked" /> <i class="skin fl mt5 ml20 checked"></i> 全选 </label> </th> 
       <th> <span class="pr25">商品名称</span> </th> 
       <th>颜色尺码</th> 
       <th>单价</th> 
       <th>数量</th> 
       <th>小计(元)</th> 
       <th>操作</th> 
      </tr> 
     </thead> 
     <tbody> 
      <tr> 
       <td id="tr_td" colspan="7"> <input type="hidden" value="2" id="productRecordNum" /> <input type="hidden" value="0" id="productGiftRecordNum" /> <input type="hidden" value="2" id="orderCommNum" /> 
        <!-- 优购时尚商城开始--> 
        <div id="shopping_cart0" class="shopping_cart_tr "> 
         <div class="shpcrt_blank10 clearfix"></div> 
         <dl class="clearfix"> 
          <input type="hidden" value="2018-12-04 13:48:45" id="addTime" /> 
          <dd class="fl rel col_chkbox"> 
           <label class="ygChkbox"> <input type="checkbox" value="206bdb56baf9a6de7664b19976534414__m" name="CNYcheck" pid="ad8ebbe090944bc9927ae45517a29d47" psize="35" prono="100727412006" class="none" checked="checked" /> <i class="skin fl checked"></i> </label> 
          </dd> 
          <dt class="col_1 fl rel"> 
           <a target="_blank" href="http://www.yougou.com/c-teenmix/sku-cc221am8-100727412.shtml"> <img onerror="this.src='/images/common/160x160.jpg'" src="/static/Home/images/100727412_01_t.jpg" width="60" height="60" class="thumImg" /> </a> 
          </dt> 
          <dd class="col_2 fl rel"> 
           <a target="_blank" href="http://www.yougou.com/c-teenmix/sku-cc221am8-100727412.shtml" title="Teenmix/天美意2018春专柜同款白色牛皮趣味卡通图案女休闲鞋CC221AM8" class="shopLink"> 
            <div>
             Teenmix/天美意2018春专柜同款白色牛皮趣味卡通图案女休闲鞋CC221AM8
            </div> </a> 
          </dd> 
          <dd class="col_3 fl"> 
           <div class="pl20"> 
            <p class="cgray tleft">颜色：<em class="f_gray">白色</em></p> 
            <p class="cgray tleft">尺码：<em class="f_gray">35</em></p> 
           </div> 
          </dd> 
          <dd class="col_4 fl rel ">
            249 
           <div class="mt3">
            <span class="actvtip2">秒杀<i></i></span>
           </div> 
          </dd> 
          <dd class="col_5 fl rel"> 
           <a class="goodsSub fl" proindex="1" href="javascript:void(0);">-</a> 
           <input id="selectNum_1" proindex="1" class="goodsTxt fl" type="text" value="1" name="goodsCount" /> 
           <a class="goodsPlus fl" proindex="1" href="javascript:void(0);">+</a> 
           <input type="hidden" id="productId_1" value="206bdb56baf9a6de7664b19976534414__m" /> 
           <input type="hidden" id="productNo_1" value="100727412006" /> 
           <input type="hidden" id="minCanBuyNum_1" value="1" /> 
           <input type="hidden" id="maxCanBuyNum_1" value="2147483647" /> 
           <input type="hidden" name="oldNum_100727412006" id="oldNum_1" value="1" /> 
          </dd> 
          <dd class="col_6 fl">
           <strong class="corg">249</strong>
          </dd> 
          <dd class="col_7 fl"> 
           <a class="JsFavorite" pid="ad8ebbe090944bc9927ae45517a29d47" psize="35" prono="100727412006" spid="206bdb56baf9a6de7664b19976534414__m" href="javascript:void(0)">移入收藏夹</a> 
           <br /> 
           <a href="javascript:void(0)" prono="100727412006" class="JsRemoveGood JsDel" pid="206bdb56baf9a6de7664b19976534414__m">删除</a> 
          </dd> 
         </dl> 
         <div class="shpcrt_blank10 clearfix"></div> 
        </div> 
        <div id="shopping_cart1" class="shopping_cart_tr "> 
         <div class="shpcrt_blank10 clearfix"></div> 
         <dl class="clearfix"> 
          <input type="hidden" value="2018-12-04 13:48:45" id="addTime" /> 
          <dd class="fl rel col_chkbox"> 
           <label class="ygChkbox"> <input type="checkbox" value="e70f862debd7c67d5f41b14c68280489__m" name="CNYcheck" pid="e15cd081bfac4ad6acef5187608c8ca7" psize="35" prono="100912659005" class="none" checked="checked" /> <i class="skin fl checked"></i> </label> 
          </dd> 
          <dt class="col_1 fl rel"> 
           <a target="_blank" href="http://www.yougou.com/c-teenmix/sku-ar571am8-100912659.shtml"> <img onerror="this.src='/images/common/160x160.jpg'" src="/static/Home/images/100912659_01_t.jpg" width="60" height="60" class="thumImg" /> </a> 
          </dt> 
          <dd class="col_2 fl rel"> 
           <a target="_blank" href="http://www.yougou.com/c-teenmix/sku-ar571am8-100912659.shtml" title="Teenmix/天美意2018春专柜同款黑色牛剖层皮/纺织品厚底街头风女休闲鞋AR571AM8" class="shopLink"> 
            <div>
             Teenmix/天美意2018春专柜同款黑色牛剖层皮/纺织品厚底街头风女休闲鞋AR571AM8
            </div> </a> 
          </dd> 
          <dd class="col_3 fl"> 
           <div class="pl20"> 
            <p class="cgray tleft">颜色：<em class="f_gray">黑色</em></p> 
            <p class="cgray tleft">尺码：<em class="f_gray">35</em></p> 
           </div> 
          </dd> 
          <dd class="col_4 fl rel ">
            369 
           <div class="mt3">
            <span class="actvtip2">秒杀<i></i></span>
           </div> 
          </dd> 
          <dd class="col_5 fl rel"> 
           <a class="goodsSub fl" proindex="2" href="javascript:void(0);">-</a> 
           <input id="selectNum_2" proindex="2" class="goodsTxt fl" type="text" value="1" name="goodsCount" /> 
           <a class="goodsPlus fl" proindex="2" href="javascript:void(0);">+</a> 
           <input type="hidden" id="productId_2" value="e70f862debd7c67d5f41b14c68280489__m" /> 
           <input type="hidden" id="productNo_2" value="100912659005" /> 
           <input type="hidden" id="minCanBuyNum_2" value="1" /> 
           <input type="hidden" id="maxCanBuyNum_2" value="2147483647" /> 
           <input type="hidden" name="oldNum_100912659005" id="oldNum_2" value="1" /> 
          </dd> 
          <dd class="col_6 fl">
           <strong class="corg">369</strong>
          </dd> 
          <dd class="col_7 fl"> 
           <a class="JsFavorite" pid="e15cd081bfac4ad6acef5187608c8ca7" psize="35" prono="100912659005" spid="e70f862debd7c67d5f41b14c68280489__m" href="javascript:void(0)">移入收藏夹</a> 
           <br /> 
           <a href="javascript:void(0)" prono="100912659005" class="JsRemoveGood JsDel" pid="e70f862debd7c67d5f41b14c68280489__m">删除</a> 
          </dd> 
         </dl> 
         <div class="shpcrt_blank10 clearfix"></div> 
        </div> </td> 
      </tr> 
     </tbody> 
    </table> 
    <ul class="shpcrt_operations"> 
     <li> <label name="CNYcheckAllLabel" class="ygChkbox" tradecurrency="CNY"> <input class="none" type="checkbox" id="CNYcheckEndAll" name="CNYcheckAll" checked="checked" /> <i class="skin fl mt5 ml20 checked"></i> 全选 </label> </li> 
     <li> <a class="JsFavorite" pid="all" href="javascript:;">移入收藏夹</a> </li> 
     <li> <a class="JsRemoveGood" pid="all" href="javascript:;">删除</a> </li> 
    </ul> 
    <div class="shpcrt_opt clearfix"> 
     <div class="opt_bd fr"> 
      <table class="ygtjzx_ttl_lrtbl cart_reduce_price"> 
       <tbody> 
       </tbody> 
      </table> 
     </div> 
    </div> 
   </div> 
   <div class="cen cart_gray_box_ft"> 
    <a href="http://www.yougou.com/" class="cart_goon_link mt5 ml20 fl">继续购物</a> 
    <div class="fl mt15"> 
     <a href="javascript:;" class="cblue ml20 clearShopcart" tradecurrency="CNY">清空购物袋</a> 
    </div> 
    <div class="fr"> 
     <strong>总计（不含运费 ）</strong>：
     <strong class="cgray f16">&yen;</strong>
     <strong class="corg f20">618</strong> 
     <!-- <a href="/Homepay" class="cart_b_paybtn ml10 ">去结算</a>  -->
     <a href="/Homepay" class="btn btn-success">去结算</a>
    </div> 
   </div> 
   <!--//最低成单金额start--> 
   <!--//最低成单金额end--> 
   <!--//最大成单金额start--> 
   <!--//最大成单金额end--> 
  </div> 
  <div id="shoppingCartContainerKRW"></div> 
  <div id="shoppingCartContainerKRW_ZF"></div> 
  <div id="shoppingCartContainerHKD"></div> 
  <script type="text/javascript">
    checkProductNum();
    function checkProductNum(){
        var addProductNum=$('#addProductNum').val();
        var limitCartAddProductMaxNum=$('#limitCartAddProductMaxNum').val();
        if(addProductNum!='' && parseInt(addProductNum)>parseInt(limitCartAddProductMaxNum) && 0 != parseInt(limitCartAddProductMaxNum)){
            //alert("购物袋最多存放"+limitCartAddProductMaxNum+"件商品，请编辑购物袋!");
            //return false;
            ygDialog({ 
                title:'提示',
                content:'<br/><br/><h2><center>购物袋最多存放'+limitCartAddProductMaxNum+'件商品，请编辑购物袋!</center></h2>',
                width:300,
                height:120,
                lock:true
            });
        }
    }
 </script> 
  <div class="clearfix cen mt15"> 
   <div class="fr cgray cart_btinfo"> 
    <p class="cart_bz"> 购物保障：<i class="icon_zp"></i>100%正品<i class="icon_thh"></i>10天退换货<i class="icon_bcj"></i>10天补差价 </p> 
    <p>优惠券/礼品卡在下一步使用</p> 
    <p><a href="http://www.yougou.com/shoppingcart/shoppingcart_advise.jhtml" target="_blank" class="cgray">帮助我们改进购物流程</a></p> 
   </div> 
  </div> 
  <!--凑单提醒start--> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zdtx"> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--凑单提醒end--> 
  <!--加价购推荐 start--> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel jjg"> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--//加价购推荐end>
    <!--//再买就满足活动 start--> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zmjmz0"> 
     <input type="hidden" class="loa" value="0" /> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zmjmz1"> 
     <input type="hidden" class="loa" value="0" /> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zmjmz2"> 
     <input type="hidden" class="loa" value="0" /> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zmjmz3"> 
     <input type="hidden" class="loa" value="0" /> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zmjmz4"> 
     <input type="hidden" class="loa" value="0" /> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--//再买就满足活动end> 
    
    <!--//根据购物袋商品推荐 start--> 
  <div id="similar_recommend" class="cen uc_main mt30" style="display: block;"> 
   <h3 class="f16 c6 f_yahei">购买了您购物袋中商品的顾客还买了</h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel gwcgm"> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs">第<span>1</span>页，共 2 页</p> 
      <div style=" width:950px; overflow:hidden;margin:auto;"> 
       <div class="slide_bd_c rel" style="height:600px;width:950px;"> 
        <ul class="uc_hpro_lst abs clearfix ul1 " style="height: 600px; width: 1900px; left: 0px;">
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-teenmix/sku-cdd03bl8-100976030.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100976030_01_s.jpg" width="160" height="160" alt="Teenmix/天美意2018夏灰银色街头潮流舒适厚底女凉鞋CDD03BL8" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-teenmix/sku-cdd03bl8-100976030.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">Teenmix/天美意2018夏灰银色街头潮流舒适厚底女凉鞋CDD03BL8</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>295</i></em>
             <del>
              &yen;799
             </del><span class="ico_discount"><i>0.3692115143929912</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100976030">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/101018471_01_s.jpg" width="160" height="160" alt="Tata/他她2018冬专柜同款黑色拼接粗高跟后绑带过膝靴女长靴DS661DC8" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">Tata/他她2018冬专柜同款黑色拼接粗高跟后绑带过膝靴女长靴DS661DC8</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>468</i></em>
             <del>
              &yen;1399
             </del><span class="ico_discount"><i>0.33452466047176554</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="101018471">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-teenmix/sku-ar141am8-100787641.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100787641_01_s.jpg" width="160" height="160" alt="Teenmix/天美意2018春专柜同款白/黑色牛皮革卡通图案厚底女休闲鞋AR141AM8" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-teenmix/sku-ar141am8-100787641.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">Teenmix/天美意2018春专柜同款白/黑色牛皮革卡通图案厚底女休闲鞋AR141AM8</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>899</i></em>
             <del>
              &yen;899
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100787641">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/101026379_01_s.jpg" width="160" height="160" alt="Belle/百丽瘦瘦靴2018冬季新款黑色弹力绒布粗跟圆头过膝靴82868DC8" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">Belle/百丽瘦瘦靴2018冬季新款黑色弹力绒布粗跟圆头过膝靴82868DC8</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>598</i></em>
             <del>
              &yen;1599
             </del><span class="ico_discount"><i>0.37398373983739835</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="101026379">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100514854_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2018新款男子运动基础系列针织长裤BK7414" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2018新款男子运动基础系列针织长裤BK7414</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>229</i></em>
             <del>
              &yen;299
             </del><span class="ico_discount"><i>0.7658862876254181</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100514854">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-nike/sku-804343-100483316.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100483316_01_s.jpg" width="160" height="160" alt="NIKE耐克2018年新款男子AS M NSW CRW FT CLUB套头衫804343-010" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-nike/sku-804343-100483316.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">NIKE耐克2018年新款男子AS M NSW CRW FT CLUB套头衫804343-010</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>259</i></em>
             <del>
              &yen;299
             </del><span class="ico_discount"><i>0.8662207357859532</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100483316">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100370348_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2019年新款中性训练系列挎包AJ4232" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2019年新款中性训练系列挎包AJ4232</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>89</i></em>
             <del>
              &yen;99
             </del><span class="ico_discount"><i>0.898989898989899</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100370348">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-nike/sku-844839-100481189.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100481189_01_s.jpg" width="160" height="160" alt="NIKE耐克2018年新款男子NIKE KWAZI复刻鞋844839-002" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-nike/sku-844839-100481189.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">NIKE耐克2018年新款男子NIKE KWAZI复刻鞋844839-002</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>519</i></em>
             <del>
              &yen;599
             </del><span class="ico_discount"><i>0.8664440734557596</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100481189">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100699750_01_s.jpg" width="160" height="160" alt="NIKE耐克2018年新款男子NIKE FLEX EXPERIENCE RN 7跑步鞋908985-001" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">NIKE耐克2018年新款男子NIKE FLEX EXPERIENCE RN 7跑步鞋908985-001</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>449</i></em>
             <del>
              &yen;499
             </del><span class="ico_discount"><i>0.8997995991983968</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100699750">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bs0526-100868538.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100868538_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2018男子CON18 TR PNT针织长裤BS0526" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bs0526-100868538.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2018男子CON18 TR PNT针织长裤BS0526</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>189</i></em>
             <del>
              &yen;299
             </del><span class="ico_discount"><i>0.6321070234113713</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100868538">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100988699_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2018男子COSMIC 2PE跑步鞋B44880" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2018男子COSMIC 2PE跑步鞋B44880</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>289</i></em>
             <del>
              &yen;499
             </del><span class="ico_discount"><i>0.5791583166332666</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100988699">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bk7433-100506954.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100506954_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2018年新款男子运动基础系列针织长裤BK7433" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bk7433-100506954.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2018年新款男子运动基础系列针织长裤BK7433</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>369</i></em>
             <del>
              &yen;369
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100506954">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100202608_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2019年新款中性袜子AA2323" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2019年新款中性袜子AA2323</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>29</i></em>
             <del>
              &yen;29
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100202608">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-nike/sku-574236-100590131.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100590131_01_s.jpg" width="160" height="160" alt="NIKE耐克男子NIKE COURT MAJESTIC LEATHER复刻鞋574236-100" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-nike/sku-574236-100590131.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">NIKE耐克男子NIKE COURT MAJESTIC LEATHER复刻鞋574236-100</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>295</i></em>
             <del>
              &yen;449
             </del><span class="ico_discount"><i>0.6570155902004454</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100590131">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100506993_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯新款男子运动基础系列针织套衫S98803" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯新款男子运动基础系列针织套衫S98803</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>274</i></em>
             <del>
              &yen;369
             </del><span class="ico_discount"><i>0.7425474254742548</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100506993">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100506984_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2017年新款男子运动基础系列夹克BR1024" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2017年新款男子运动基础系列夹克BR1024</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>399</i></em>
             <del>
              &yen;399
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100506984">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-nike/sku-aa7406-100916425.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100916425_01_s.jpg" width="160" height="160" alt="NIKE耐克2018年新款男子NIKE ZOOM WINFLO 5跑步鞋AA7406-001" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-nike/sku-aa7406-100916425.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">NIKE耐克2018年新款男子NIKE ZOOM WINFLO 5跑步鞋AA7406-001</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>609</i></em>
             <del>
              &yen;749
             </del><span class="ico_discount"><i>0.8130841121495327</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100916425">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100202615_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2019年新款中性袜子AA2324" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2019年新款中性袜子AA2324</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>29</i></em>
             <del>
              &yen;29
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100202615">加入购物袋</a></p>
           </div>
          </div></li>
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic">
            <a href="http://www.yougou.com/c-belle/sku-3ux01cm5-100698111.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100698111_01_s.jpg" width="160" height="160" alt="Belle/百丽秋季专柜同款黑色牛皮商务正装男单鞋3UX01CM5" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-belle/sku-3ux01cm5-100698111.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">Belle/百丽秋季专柜同款黑色牛皮商务正装男单鞋3UX01CM5</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>398</i></em>
             <del>
              &yen;1138
             </del><span class="ico_discount"><i>0.34973637961335674</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100698111">加入购物袋</a></p>
           </div>
           <br />
           <div class="pic">
            <a href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank"><img src="/static/Home/images/100503159_01_s.jpg" width="160" height="160" alt="adidas阿迪达斯2018年新款男子运动基础系列针织长裤BP8742" /></a>
           </div>
           <p class="title mt5"><a href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=cart&amp;#ref=cart&amp;po=buy" target="_blank">adidas阿迪达斯2018年新款男子运动基础系列针织长裤BP8742</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>399</i></em>
             <del>
              &yen;399
             </del><span class="ico_discount"><i>1.0</i>折</span></p>
            <p class="mt15"><a href="javascript:;" class="cart_addto_lnk" goodsno="100503159">加入购物袋</a></p>
           </div>
          </div></li>
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--//根据购物袋商品推荐end>

    <!--//您最近收藏的商品start--> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel zjsc"> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--//您最近收藏的商品end--> 
  <!--最近浏览过的商品startt--> 
  <div class="cen uc_main mt30"> 
   <h3 class="f16 c6 f_yahei"></h3> 
   <div class="cart_recpro"> 
    <div class="uc_slide uc_cnlike rel recently_browse"> 
     <div class="slide_hd">
      <h2></h2>
     </div> 
     <div class="slide_bd"> 
      <a class="slide_lf abs" href="javascript:void(0);"></a> 
      <a class="slide_rt abs" href="javascript:void(0);"></a> 
      <p class="slide_page abs"></p> 
      <div class="slide_bd_c rel"> 
       <ul class="uc_hpro_lst abs clearfix"> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--//最近浏览过的商品end--> 
  <!--底部start--> 
  <div class="cgray cen footer"> 
   <span class="pr10"> Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. </span> 
   <span class="pr10"> <a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备09070608号-4</a> </span> 
   <span class="pr10"> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn/" target="_blank">粤 B2-20090203</a> </span> 
  </div> 
  <!--//底部end--> 
  <!--//问卷调查--> 
  <script type="text/javascript" src="/static/Home/js/yg.ucenter.js"></script> 
  <script type="text/javascript">
    $(function(){
        getActiveRecommendList();
        getSimilarRecommendList();
        //16-03-29 轮播页
        var $ul = $('.ul1');
        var $li = $ul.find('li');
        $ul.css('width',$li.outerWidth()*$li.length);
        
        uc.proLfSlide(".zjcs");
        uc.proLfSlide(".zjll");
        uc.proLfSlide(".cdsp");
        uc.proLfSlide(".cjhd",9,9);
        uc.proLfSlide(".mjhd",9,9);     
        uc.proLfSlide(".gwcgm",5,5);
        
    });
</script> 
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
  <!-- Vizury数据(跟踪代码) --> 
  <script type="text/javascript" src="/static/Home/js/mv.js"></script> 
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
  <!-- Google Code for &#21152;&#20837;&#36141;&#29289;&#36710; Remarketing List --> 
  <!-- Google Code Parameters --> 
  <script type="text/javascript">
var google_tag_params = {
    ecomm_prodid: '100727412,100912659',
    brand:'',
    firstCategoryName:'',
    subCategoryName:'',
    thirdCategoryName:'',
    ecomm_pagetype:'cart',
    webType:'yg',
    ecomm_totalvalue: 0
};
</script> 
  <!-- Google Code for Main List --> 
  <!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup --> 
  <script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1016027598;
var google_conversion_label = "189vCLqHowQQzrO95AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script> 
  <script type="text/javascript" src="/static/Home/js/f(1).txt">
</script> 
  <noscript> 
   <div style="display:inline;"> 
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0" /> 
   </div> 
  </noscript> 
  <script type="text/javascript">
<!-- 
var bd_cpro_rtid="n1f4nf";
//-->
</script> 
  <script type="text/javascript" src="/static/Home/js/rt.js"></script> 
  <noscript> 
   <div style="display:none;"> 
    <img height="0" width="0" style="border-style:none;" src="http://eclick.baidu.com/rt.jpg?t=noscript&amp;rtid=n1f4nf" /> 
   </div> 
  </noscript> 
  <!-- 好耶埋码 --> 
  <script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-344-0']);
_mvq.push(['$setGeneral', 'cartview', /*用户名*/'18244948099', /*用户id*/ '4bbd8ce72ca04d8dbdcdffa86bf1ceb9']);
_mvq.push(['$logConversion']);
_mvq.push(['$addItem', '',/*商品id*/ '100727412,100912659','','','']);
_mvq.push(['$logData']);
</script> 
  <!-- 百度DSP start--> 
  <script type="text/javascript">
var dsp_config = {
commodities: [
    {no:'100727412006',price:'899.00',number:'1'},{no:'100912659005',price:'999.00',number:'1'}
],
bd_list_type: 'ecom_cart'
}
</script> 
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
  <!-- 百度DSP end--> 
  <div id="cartSelector" class="cart_selector_pop none">
   <b class="icon arr jsarr">&nbsp;</b>
   <a href="javascript:;" class="icon close jsclose">&nbsp;</a>
   <div class="bd" id="cartSelectorCon">
    <p class="loading">加载中，请稍后...</p>
   </div>
  </div>
  <iframe style="display:none;width: 1px; border: 0px none; position: absolute; left: -100px; top: -100px; height: 1px;" src="/static/Home/code_iframe.html"></iframe>
 </body>
</html>