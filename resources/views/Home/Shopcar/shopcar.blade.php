<!DOCTYPE html>
<!-- saved from url=(0033)http://www.yougou.com/order.jhtml -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>购物车_优购网上鞋城</title> 
  <link href="/static/Home/css/uc.base.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/base.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/shopcar_v4.0.css" type="text/css" rel="stylesheet" /> 
  <script src="/static/Home/js/hm.js"></script> 
  <script type="text/javascript" async="" src="/static/Home/js/ga.js"></script> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <!-- <script type="text/javascript" src="/static/Home/js/jquery.validate.js"></script>  -->
  <script type="text/javascript" src="/static/Home/js/MD5.js"></script> 
  <!-- <script type="text/javascript" src="/static/Home/js/ygdialog.js"></script>  -->
  <link type="text/css" rel="stylesheet" href="/static/Home/css/ygdialog.css" /> 
  <link rel="stylesheet" type="text/css" href="/static/Home/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/boostrap.min.css">
  <link rel="stylesheet" href="/static/lib/Hui-iconfont/1.0.8/iconfont.min.css">
  <script type="text/javascript">
    var basePath = "";
    var shoppingProcess=true;
</script> 
<style>
  .Huialert{ position:relative;padding:8px 35px 8px 14px;margin-bottom: 20px;text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);background-color: #fcf8e3;border: 1px solid #fbeed5;border-radius: 4px}
.Huialert, .Huialert h4{color: #c09853}
.Huialert h4{margin: 0}
.Huialert .Hui-iconfont{position:absolute;top:9px;right:10px;line-height: 20px;cursor:pointer; color:#000; opacity:0.2;_color:#666}
.Huialert .Hui-iconfont.hover{ color:#000;opacity:0.8}
.Huialert-success{color: #468847;background-color: #dff0d8;border-color: #d6e9c6}
.Huialert-success h4{color: #468847}
.Huialert-danger, .Huialert-error{color: #b94a48;background-color: #f2dede;border-color: #eed3d7}
.Huialert-danger h4, .Huialert-error h4{color: #b94a48}
.Huialert-info{color: #3a87ad;background-color: #d9edf7;border-color: #bce8f1}
.Huialert-info h4{color: #3a87ad}
.Huialert-block{padding-top: 14px;padding-bottom: 14px}
.Huialert-block > p, .Huialert-block > ul{margin-bottom: 0}
.Huialert-block p + p{margin-top: 5px}
</style>
  <!-- <script type="text/javascript" src="/static/Home/js/yg.common.js"></script>  -->
  <!-- <script type="text/javascript" src="/static/Home/js/payOnline.js"></script>  -->
  <!-- <script type="text/javascript" src="/static/Home/js/yg.shopcart.js"></script>  -->
  <!-- <script src="/static/Home/js/f.txt"></script> -->
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
    @if(session('username'))
     <li class="item-frist about_user"> <a rel="nofollow" href="/Homelogin/create">欢迎{{session('username')}}</a> / <a rel="nofollow" href="/Homelogin" class="log">注销</a> </li> 
    @else
      <li class="item-frist about_user"> <a rel="nofollow" href="/Homelogin/create">登录</a> / <a rel="nofollow" href="/Homeregister/create">注册</a> </li>  
     @endif 
    <li class="item"> <a href="http://www.yougou.com/my/favorites.jhtml" class="top-collect"> <i class="icon bg-top_collect"></i> <span class="title">收藏</span> </a> </li> 
    @if(session('username'))
    <li class="item-cart"> <a href="/Homeshopinsert"><i class="icon"></i>购物袋</a> </li> 
    @else
    <li class="item-cart"> <a href="/Homeshopcar"><i class="icon"></i>购物袋</a> </li>
    @endif
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
  <!-- <script type="text/javascript" src="/static/Home/js/index.js"></script>  -->
  <!--header end-->
  @if(session('gologin')) 
    <div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('gologin')}}</div>
  @endif
  <script>
    $('.Huialert').click(function(){
      $(this).css('display','none');
    });
  </script>
  <div class="cen cart_header"> 
   <h1 class="logo"><a href="/Home" title="优生活，购时尚"><img src="/static/Home/images/logo-yg.png" alt="优购时尚商城" /></a></h1> 
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
       <th>
        <form action="/Homepay" method="post">
        <label name="CNYcheckAllLabel" class="ygChkbox" tradecurrency="CNY"><button class="btn btn-info fx" name="checkall">反选</button></label>
       </th> 
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
         <td id="tr_td" colspan="7">
          <input type="hidden" value="2" id="productRecordNum" />
          <input type="hidden" value="0" id="productGiftRecordNum" />
          <input type="hidden" value="2" id="orderCommNum" /> 
          <!-- 优购时尚商城开始--> 
          @if(!empty($rows))
          @foreach($rows as $v)
          <div id="shopping_cart" class="shopping_cart_tr aa"> 
           <div class="shpcrt_blank10 clearfix"></div> 
           <dl class="clearfix"> 
            <input type="hidden" value="2018-12-04 13:48:45" id="addTime" /> 
            <dd class="fl rel col_chkbox"> 
             <label class="ygChkbox"> <input type="checkbox" value="{{$v['id']}}" name="goods[]" psize="35" class="box1" checked="checked" />
             </label> 
            </dd> 
            <dt class="col_1 fl rel" style="width: 160px"> 
             <a target="_blank" href="/Homeinfo/{{$v['id']}}"> <img src="{{$v['pic']}}" width="60" height="60" class="thumImg" /> </a> 
            </dt> 
            <dd class="col_2 fl rel"> 
             <a target="_blank" href="/Homeinfo/{{$v['id']}}" title="{{$v['goods_des']}}" class="shopLink"> 
              <div>
               {{$v['goods_des']}}
              </div>
            </a> 
            </dd> 
            <dd class="col_3 fl"> 
             <div class="pl20"> 
              <p class="cgray tleft">颜色：<em class="f_gray">{{$v['color']}}</em></p> 
              <p class="cgray tleft">尺码：<em class="f_gray"></em></p> 
             </div> 
            </dd> 
            <dd class="col_4 fl rel money{{$v['id']}}">
              {{$v['goods_price']}}
             <div class="mt3">
              <span class="actvtip2">秒杀<i></i></span>
             </div>
            </dd> 
            <dd class="col_5 fl rel"> 
             <a class="goodsSub fl desc{{$v['id']}}" proindex="1" href="javascript:void(0);">-</a>
             <input id="selectNum_1 val" proindex="1" class="goodsTxt fl" type="text" value="{{$v['num']}}" name="" />
             <a class="goodsPlus fl add{{$v['id']}}" proindex="1" href="javascript:void(0);">+</a>
             <input type="hidden" id="productId_1" value="206bdb56baf9a6de7664b19976534414__m" />
             <input class="id" type="hidden" name="id" value="{{$v['id']}}">
             <input type="hidden" name="stock" value="{{$v['stock']}}"> 
             <input type="hidden" id="productNo_1" value="100727412006" /> 
             <input type="hidden" id="minCanBuyNum_1" value="1" /> 
             <input type="hidden" id="maxCanBuyNum_1" value="2147483647" /> 
             
            </dd> 
            <dd class="col_6 fl">
             <strong class="corg tot{{$v['id']}}">{{$v['goods_price']*$v['num']}}</strong>
            </dd> 
            <dd class="col_7 fl" style="padding-top: 10px"> 
             <a class="btn btn-info JsFavortei" pid="ad8ebbe090944bc9927ae45517a29d47" psize="35" prono="100727412006" spid="206bdb56baf9a6de7664b19976534414__m" href="/Homecollect/{{$v['id']}}">移入收藏夹</a> 
             <br /> <br />
             <a href="javascript:void(0)" prono="100727412006" class="btn btn-danger del" pid="206bdb56baf9a6de7664b19976534414__m">删除</a>
            </dd>
           </dl> 
           <div class="shpcrt_blank10 clearfix"></div> 
          </div>
          @endforeach
          @else
          <!-- 空购物车 -->
            <div id="shoppingCartContainerCNY"> 
             <div class="cen mt10 cart_null_div"> 
              <div class="bd clearfix"> 
               <img src="/uploads/shopcar/shopping-car.png" width="100" height="98"> 
               <div> 
                <p class="cart_null_txt f14"> 您的购物袋中暂无商品，赶快选择心爱的商品吧！ </p>
                <p class="mt10"> <a href="/Home" class="gohome_btn">回到首页</a> </p> 
                <p class="mt30 f14"> 您可以查看：</p> 
                <p class="mt15 see-my"> <a href="/Homecollect">我的收藏夹</a> <a href="/Homeorder">我已购买的商品</a> </p> 
               </div> 
              </div> 
             </div> 
              </div>
          @endif
         </td> 
      </tr> 
     </tbody> 
    </table> 
    <ul class="shpcrt_operations"> 
     <li style="height: 55px;">
      <label><button class="btn btn-success checkall" style="margin:0px 0px 0px 14px;" class="all"  name="checkall">全选</button></label>
     </li> 
     <li> <a style="height: 34px;padding: 4px 7px;" class="btn btn-info fav" pid="all" href="javascript:;">移入收藏夹</a> </li> 
     <li> <button style="height: 34px;padding: 4px 7px;" class="btn btn-danger alldel">删除</button> </li> 
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
    <a style="margin-top: 10px;margin-left: 14px" href="/Home" class="btn btn-success mt5 ml20 fl">继续购物</a> 
    <div class="fl mt15"> 
     <a style="height: 34px;width:90px;padding: 6px 3px;margin-top: -5px" href="javascript:;" class="btn btn-danger cblue ml20 clearShopcart clean" tradecurrency="CNY">清空购物袋</a>
    </div> 
    <div class="fr"> 
     <strong>总计（不含运费 ）</strong>：
     <strong class="cgray f16">&yen;</strong>
     <strong class="corg f20 total">{{$total}}</strong> 
     <!-- <a href="/Homepay" class="cart_b_paybtn ml10 ">去结算</a>  -->
     {{csrf_field()}}
     <input type="submit" class="btn btn-success" value="去结算">
    </div> 
   </div> 
   </form>
   <!--//最低成单金额start--> 
   <!--//最低成单金额end--> 
   <!--//最大成单金额start--> 
   <!--//最大成单金额end--> 
  </div> 
  <div id="shoppingCartContainerKRW"></div> 
  <div id="shoppingCartContainerKRW_ZF"></div> 
  <div id="shoppingCartContainerHKD"></div> 

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
    //再买就满足活动 start--> 
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
    
    <!-- 根据购物袋商品推荐 start -->
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
          @foreach($rev as $vv)
         <li style="position: relative;">
          <div class="hpro_box">
           <div class="pic" style="height: 200px">
            <a href="http://www.yougou.com/c-teenmix/sku-cdd03bl8-100976030.shtml#ref=cart?#ref=cart?po=buy" target="_blank"><img src="{{$vv->pic}}" width="160" height="160" alt="{{$vv->goods_des}}" /></a>
           </div>
           <p class="title mt5"><a href="/Homelist/{{$vv->id}}" target="_blank">{{$vv->goods_des}}</a></p>
           <div class="price c9 mt3">
            <p class="price_sc"><em class="ygprc15">&yen;<i>295</i></em>
             <del>
              &yen;{{$vv->goods_price}}
             </del><span class="ico_discount"><i>0.3692115143929912</i>折</span></p>
            <p class="mt15"><a href="/Homeshopcar/{{$vv->id}}" class="cart_addto_lnk" goodsno="100976030">加入购物袋</a></p>
           </div>
         </li>
         @endforeach
        </ul> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- //根据购物袋商品推荐end> -->

    <!-- //您最近收藏的商品start  -->
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
  <!--//您最近收藏的商品end 
  最近浏览过的商品startt--> 
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
  <noscript> 
   <div style="display:inline;"> 
    <img height="1" width="1" style="border-style:none;" alt="" src=" "/> 
   </div> 
  </noscript> 
  <noscript> 
   <div style="display:none;"> 
    <img height="0" width="0" style="border-style:none;" src="" /> 
   </div> 
  </noscript> 
  
  <div id="cartSelector" class="cart_selector_pop none">
   <b class="icon arr jsarr">&nbsp;</b>
   <a href="javascript:;" class="icon close jsclose">&nbsp;</a>
   <div class="bd" id="cartSelectorCon">
    <p class="loading">加载中，请稍后...</p>
   </div>
  </div>
 </body>
 <script>
  @foreach($rows as $v)
  //数量减
    $('.desc{{$v["id"]}}').click(function(){
      //获取到输入框的id值
      id=$(this).next().next().next().next().val();
      //获取总金额
      total=$('.total').html();
      obj=$(this);
      //Ajax传值
      $.get('/Homeshopless',{id:id},function(data){
        // console.log(data);
        if(data){
          //修改输入框的数量
          num=obj.next().val();
          num=Number(num);
          //判断num值是否小于1
          if(num<=1){
            num=1;
            obj.next().val(num);
            // obj.attr('disabled');
          }else{
            obj.next().val(--num);
          }

          //获取商品的价格
          price=parseInt($('.money{{$v["id"]}}').html());
          // alert(price);
          //获取小计
          money=parseInt($('.tot{{$v["id"]}}').html());
          // alert(money);
          money=money-price;
          // alert(money);
          $('.tot{{$v["id"]}}').html(money);

          //合计
          total=parseInt($('.total').html());
          // alert(total);
          total=total-price;

          $('.total').html(total);
        }
        
      });
    });
    @endforeach
    //数量加
    @foreach($rows as $v)
    $('.add{{$v["id"]}}').click(function(){
      //获取id值
      id=$(this).next().next().val();
      //获取库存
      stock=$(this).next().next().next().val();
        obj=$(this);
        $.get('/Homeshopadd',{id:id,stock:stock},function(data){
          // console.log(data);
          if(data){
            //修改输入框的数量
            num=obj.prev().val();
            num=Number(num);
            //判断数量是否大于库存
            if(num>=stock){
              num=stock;
            }else{
              obj.prev().val(++num);
            }
            //获取商品的价格
            price=parseInt($('.money{{$v["id"]}}').html());
            // alert(price);
            //获取小计
            money=parseInt($('.tot{{$v["id"]}}').html());
            // alert(money);
            //小计
            money=money+price;
            // alert(money);
            $('.tot{{$v["id"]}}').html(money);
            // alert($('.tot').html());
            //合计
            total=parseInt($('.total').html());
            total=total+price;

            $('.total').html(total);
          }
          
        });
    });
    @endforeach
    //商品删除的方法
    $('.del').click(function(){
      // alert(1);
      //获取id
      id=$('.id').val();
      obj=$(this);
      // alert(id);
      $.get('/Homeshopdel',{id:id},function(data){
        // alert(data);
        //判断是否删除成功
        if(data){
          obj.parents('.aa').remove();
          //刷新本页面
          // window.location.reload();
          alert('删除成功');
        }
      })
    });

    //清空购物车
    $('.clean').click(function(){
      // alert(1);
      id=$('.id').val();
      // alert(id);
      $.get('/Homeshopclean',{id:id},function(data){
        // alert(data);
        if(data){
          window.location.reload();
          alert('清空购物袋成功');
        }else{
          alert('清空购物车失败');
        }
      })
    });

    //全选
    $('.checkall').click(function(){
      // alert(1);
      //让所有input框选中
      $(':checkbox').attr('checked','true');
    });

    //反选
    $('.fx').click(function(){
      // alert(1);
      $(':checkbox').each(function(){
        //alert($(this).attr('checked'));
        //将你选中的内容checked改为相反内容
        $(this).attr('checked',!$(this).attr('checked'));
      })
    });

    //删除
    $('.alldel').click(function(){
      // alert(1);
      $('.aa').remove();
      // alert('删除成功');
    });

 </script>
</html>