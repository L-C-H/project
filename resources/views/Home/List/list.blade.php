<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>
    -女鞋新款|正品|折扣|价格-优购网时尚商城
  </title> 
  <meta name="Description" content="优购网热销女鞋新款|正品|折扣,知名品牌，厂家直销，全网最低价，100%专柜正品保障，10天退换货!" /> 
  <meta name="Keywords" content="女鞋新款|正品|折扣|价格" /> 
  <meta http-equiv="”Cache-Control”" content="”no-transform”" /> 
  <meta http-equiv="”Cache-Control”" content="”no-siteapp”" /> 
  <link href="/static/Home/css/yg-base-new.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/channel.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/zy_active.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/zy_search_list.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <style type="text/css">
  #mbx{display:inline-block;background:url(/static/Home/images/filter-sprite.png) no-repeat;background-position:right 0; padding-right:16px; margin-right:10px;}
</style> 
 </head> 
 <body class="selfadaptat"> 
  <!--header created time: 2018-12-04T09:43:38+08:00 --> 
  <!--公共头部start--> 
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
        @foreach($announce as $v)
        <li class="item Black"> <a target="_blank" href="/Homenotice/{{$v->id}}">{{$v->title}}</a> </li> 
        @endforeach
       </ul> 
      </div> 
     </div> </li> 
   </ul> 
  </div> 
  <!--导航start--> 
  <!-- nav created time: 2018-12-03T14:42:02+08:00 --> 
  <div id="logo" class="logo-container"> 
   <div class="header-logo"> 
    <a href="/Home"> <img src="/static/Home/picture/logo.png" width="98" height="58" /> </a> 
   </div> 
   <div class="nav-container" style="padding-top: 0;"> 
    <div class="nav"> 
     <ul> 
      <li id="nav_logo" style="display: none" class="item-first"> <a href="/Home"> <img src="/static/Home/picture/logo.png" width="60" height="38" /> </a> </li> 

      <li class="item"> <a href="http://www.yougou.com/" target="_blank"> 首页 </a> </li> 
      @foreach($cate as $cates)
      <li class="item"> <a href="http://www.yougou.com/f-0-MXZ-0-1.html" _yg_nav="5b2ba28f59bcda74c9000050{{$cates->id}}" target="_blank">{{$cates->name}} </a> </li>
      @endforeach 
     </ul> 
     <div class="search-wrapper"> 
      <form action="http://www.yougou.com/sr/searchKey.sc " class="input_box" onsubmit="if(keyword.value==''){return false;}" id="J_TopSearchForm" method="get"> 
       <div class="search"> 
        <input type="text" id="keyword" name="keyword" /> 
        <i id="btn-search" class="icon bg-Details_page_enlarge"></i> 
       </div> 
      </form> 
     </div> 
    </div> 
   </div> 
   <div class="nav-container-down"> 
     @foreach($cate as $cates)
    <div id="5b2ba28f59bcda74c9000050{{$cates->id}}" class="nav-down-menu" style="display: none;" _yg_nav="5b2ba28f59bcda74c9000050{{$cates->id}}"> 
    
     <div class="sub-container"> 
      @foreach($cates->suv as $catess)
      <dl class="header-nav-dl"> 
       <dt> 
          <a href="#" target="_blank"> {{$catess->name}} </a> 
         </dt> 
         @foreach($catess->suv as $value)
         <dd> 
          <a href="/info" target="_blank"> {{$value->name}} </a> 
         </dd>  
         @endforeach
      </dl> 
      @endforeach
     </div> 
     
    </div> 
    @endforeach
   </div> 
   <div class="line"></div> 
  </div> 
  <!--//导航end--> 
  <script type="text/javascript" src="/static/Home/js/index.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg_suggest.js"></script> 
  <!--//公共头部end--> 
  <input type="hidden" name="baseLink" value="0-MXZ-0" id="baseLink" /> 
  <input type="hidden" name="queryStr" value="" id="queryStr" /> 
  <input type="hidden" name="orderBy" value="1" id="orderBy" /> 
  <input type="hidden" name="mctcd" value="" id="mctcd" /> 
  <input type="hidden" name="brandEnName" value="0" id="brandEnName" /> 
  <input type="hidden" name="storeId" value="" id="storeId" /> 
  <input type="hidden" name="queryParams" value="" id="queryParams" /> 
  <input type="hidden" name="shoppePro" value="05B" id="shoppePro" /> 
  <input type="hidden" name="seasonPro" value="052" id="seasonPro" /> 
  <input type="hidden" name="price_area" value="" id="price_area" /> 
  <input type="hidden" name="isSearchKey" value="" id="isSearchKey" /> 
  <div class="filter-wrap"> 
   <div class="filter-title-list"> 
    <ul class="menu-list"> 
     <li><a href="/">首页</a><span class="fenge">&nbsp;&gt;</span></li> 
     <li> <a href="http://www.yougou.com/f-0-MXZ-0-1.html" title="女鞋">女鞋</a> </li> 
     <span class="fenge">&nbsp;&nbsp;</span> 
    </ul> 
    <ul class="filter-result-list"> 
    </ul> 
   </div> 
   <div class="filter-sub-wrap"> 
    <div class="filter-sub-navlist"> 
     <p>共<span>&gt;3034</span>个结果</p> 
     <form action="" method="get"> 
      <ul class="filter-list-wrap"> 
       <li class="radio"> <p> <i></i> 品类 </p> 
        <div> 
         @foreach($left_cates as $type)
         <ul> 
          <li class="radio-item"> <p> <i></i> <label for="propSubCat00"><a href="/Homelist/{{$type->catesid}}" title="{{$type->type}}">{{$type->type}}</a></label> </p>
          </li>
        </ul>
        @endforeach
        </div> </li> 
       <li class="checkbox hideDefault"> <p><i></i>价格</p> 
        <div> 
         <ul name="price_group"> 
           @foreach($left_cates as $price)
         <!--  <li> <input type="checkbox" name="001" value="http://www.yougou.com/f-tata-MXZ-058001-1.html" class="input-checkbox" id="propCat10" /> <label for="propCat10" href="http://www.yougou.com/f-tata-MXZ-058001-1.html" title="51-100元">{{$price->price}}</label> </li> -->
         <li>
           <form action="/Homebrand/{{$id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="new" value="0">
            <input type="hidden" name="price_num" value="{{$price->price_num}}">
            <input type="submit" value="{{$price->price}}" style="opacity:1;background-color: white;cursor: pointer;">
           </form>
         </li>
          @endforeach 
         </ul> 
         <div class="cheackBtn-box"> 
          <div class="multiple-btn">
           + 多选
          </div> 
          <div class="btn-wrap"> 
           <a href="javascript:;" class="sure gray">确认</a> 
           <a href="javascript:;" class="cancel">取消</a> 
          </div> 
         </div> 
        </div> </li> 
       <li class="checkbox hideDefault"> <p><i></i>尺码</p> 
        <div> 
         <ul name="size_list"> 
          @foreach($left_cates as $size)
         <!--  <li> <input type="checkbox" name="08D" value="http://www.yougou.com/f-tata-MXZ-05708D-1.html" class="input-checkbox" id="propCat20" /> <label for="propCat20" href="http://www.yougou.com/f-tata-MXZ-05708D-1.html" title="32">{{$size->size}}</label> </li>  -->
          <li>
           <form action="/Homebrand/{{$id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
             <input type="hidden" name="new" value="0">
            <input type="hidden" name="size" value="{{$size->size}}">
            <input type="submit" value="{{$size->size}}" style="opacity:1;background-color: white;cursor: pointer;">
           </form>
         </li>
          @endforeach 
         </ul> 
         <div class="cheackBtn-box"> 
          <div class="multiple-btn">
           + 多选
          </div> 
          <div class="btn-wrap"> 
           <a href="javascript:;" class="sure gray">确认</a> 
           <a href="javascript:;" class="cancel">取消</a> 
          </div> 
         </div> 
         <!-- 更多 --> 
         <div class="filter-more"> 
          <span class="icon"></span> 
         </div> 
         <div class="filter-less"> 
          <span class="icon"></span> 
         </div> 
        </div> </li> 
       <li class="checkbox hideDefault"> <p><i></i>颜色</p> 
        <div> 
         <ul name="prop_value_no_00T"> 
          @foreach($left_cates as $color)
         <!--  <li> <input type="checkbox" name="00A" value="http://www.yougou.com/f-tata-MXZ-00T00A-1.html" class="input-checkbox" id="propCat30" /> <label for="propCat30" href="http://www.yougou.com/f-tata-MXZ-00T00A-1.html" title="黑色">{{$color->color}}</label> </li>  -->
          <li>
           <form action="/Homebrand/{{$id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
             <input type="hidden" name="new" value="0">
            <input type="hidden" name="color" value="{{$color->color}}">
            <input type="submit" value="{{$color->color}}" style="opacity:1;background-color: white;cursor: pointer;">
           </form>
         </li>
         @endforeach         
         </ul> 
         <div class="cheackBtn-box"> 
          <div class="multiple-btn">
           + 多选
          </div> 
          <div class="btn-wrap"> 
           <a href="javascript:;" class="sure gray">确认</a> 
           <a href="javascript:;" class="cancel">取消</a> 
          </div> 
         </div> 
         <!-- 更多 --> 
         <div class="filter-more"> 
          <span class="icon"></span> 
         </div> 
         <div class="filter-less"> 
          <span class="icon"></span> 
         </div> 
        </div> </li> 
       <li class="checkbox hideDefault"> <p><i></i>季节</p> 
        <div> 
         <ul name="prop_value_no_050"> 
          @foreach($left_cates as $season)
          <!-- <li> <input type="checkbox" name="003" value="http://www.yougou.com/f-tata-MXZ-050003-1.html" class="input-checkbox" id="propCat40" /> <label for="propCat40" href="http://www.yougou.com/f-tata-MXZ-050003-1.html" title="冬季">{{$season->season}}</label> </li>  -->
           <li>
           <form action="/Homebrand/{{$id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="new" value="0">
            <input type="hidden" name="season" value="{{$season->season}}">
            <input type="submit" value="{{$season->season}}" style="opacity:1;background-color: white;cursor: pointer;">
           </form>
         </li>
          @endforeach  
         </ul> 
         <div class="cheackBtn-box"> 
          <div class="multiple-btn">
           + 多选
          </div> 
          <div class="btn-wrap"> 
           <a href="javascript:;" class="sure gray">确认</a> 
           <a href="javascript:;" class="cancel">取消</a> 
          </div> 
         </div> 
         <!-- 更多 --> 
        </div> </li> 
       <li class="checkbox hideDefault"> <p><i></i>风格</p> 
        <div> 
         <ul name="prop_value_no_04T"> 
           @foreach($left_cates as $fg)
        <!--   <li> <input type="checkbox" name="003" value="http://www.yougou.com/f-tata-MXZ-04T003-1.html" class="input-checkbox" id="propCat60" /> <label for="propCat60" href="http://www.yougou.com/f-tata-MXZ-04T003-1.html" title="OL通勤">{{$fg->fg}}</label> </li>  -->
         <li>
           <form action="/Homebrand/{{$id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <input type="hidden" name="new" value="0">
            <input type="hidden" name="fg" value="{{$fg->fg}}">
            <input type="submit" value="{{$fg->fg}}" style="opacity:1;background-color: white;cursor: pointer;">
           </form>
         </li>
          @endforeach 
         </ul> 
         <div class="cheackBtn-box"> 
          <div class="multiple-btn">
           + 多选
          </div> 
          <div class="btn-wrap"> 
           <a href="javascript:;" class="sure gray">确认</a> 
           <a href="javascript:;" class="cancel">取消</a> 
          </div> 
         </div> 
         <!-- 更多 --> 
         <div class="filter-more"> 
          <span class="icon"></span> 
         </div> 
         <div class="filter-less"> 
          <span class="icon"></span> 
         </div> 
        </div> </li> 
      </ul> 
     </form> 
    </div>  
    <div class="filter-sub-content"> 
     <div class="sub-wrap"> 
      <div class="sub-tab-title"> 
       <ul class="sub-title-tab"> 
        <!-- <li> <a title="新品" class="" href="/Homelist/{{$id}}">新品</a> </li>  -->
        <li>
        <form action="/Homelist/{{$id}}" method="post">
          <input type="hidden" name="new" value="0" />
          <input type="submit"  value="折扣" style="background-color: white;border:0px;cursor: pointer;">
          {{csrf_field()}}
          {{method_field('PUT')}}
        </form>
        </li>
        <!-- <li> <a title="热销" class="active" href="http://www.yougou.com/f-0-MXZ-0-1.html">热销</a> </li>  -->
        <li>
        <form action="/Homelist/{{$id}}" method="post">
            <input type="hidden" name="new" value="1" />
            <input type="submit"  value="热销" style="background-color: white;border:0px;cursor: pointer;">
            {{csrf_field()}}
            {{method_field('PUT')}}
        </form>
        </li>
        <!-- <li> <a title="排序" class="" href="http://www.yougou.com/f-0-MXZ-0-0.html">推荐</a> </li>  -->
         <li>
        <form action="/Homelist/{{$id}}" method="post">
            <input type="hidden" name="new" value="2" />
            <input type="submit"  value="推荐" style="background-color: white;border:0px;cursor: pointer;">
            {{csrf_field()}}
            {{method_field('PUT')}}
        </form>
        </li>
       <!--  <li> <a title="按价格由高到低" class="" href="http://www.yougou.com/f-0-MXZ-0-2.html">价格</a> </li>  -->
        <!-- <li> <a title="按折扣由高到低" class="" href="http://www.yougou.com/f-0-MXZ-0-5.html">折扣</a> </li>  -->
        <li>
         <form action="/Homelist/{{$id}}" method="post">
            <input type="hidden" name="new" value="3" />
            <input type="submit"  value="新品" style="background-color: white;border:0px;cursor: pointer;">
            {{csrf_field()}}
            {{method_field('PUT')}}
        </form>
        </li>
       </ul> 
       <div class="page-sum"> 
        <span>1</span> - 
        <span>236</span>页 / 
        <span> <span></span> <a href="http://www.yougou.com/f-0-MXZ-0-1-2.html">下一页&gt;</a> </span> 
       </div> 
      </div> 
      <div class="actt_panel sub-goods-list" id="commodity_part_result"> 
       <div class="actt_panel_bd"> 
        <ul class="proList new_prdlist" id="proList"> 
          @if(count($cated) < 2))
          @foreach($info as $v)
          @if($v->status==0)
         <li> 
          <div class="srchlst-wrap"> 
           <div class="hd goods-head"> 
            <a href="/Homeinfo/{{$v->id}}"> <sup no="101026379" class="mark_small_101026379 salepic"></sup> <img width="230" height="230" alt="{{$v->goods_des}}" class="lazy_loading" src="/static/Home/picture/blank.gif" original="{{$v->pic}}" /> </a> 
           </div> 
           <div class="bd goods-desc"> 
            <span class="nptt"> <a target="_blank" href="/info" class="elli" title="{{$v->goods_des}}">{{$v->goods_des}}</a> </span> 
            <p class="price_sc price-wrap"> <em class="ygprc15 price_no101026379 cur-price">&yen;&nbsp;<i>{{$v->goods_price}}</i></em> 
             <del class="origin-price">
              &yen;&nbsp;
              <i>{{$v->original_price}}</i>
             </del> </p> 
            <em class="collect" id="101026379" url="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=list&amp;po=list" src="http://i2.ygimg.cn/pics/belle/2018/101026379/101026379_01_mb.jpg?11" price="598"></em> 
           </div> 
          </div> </li> 
          @endif
          @endforeach
          @else   
          
          @foreach($cated as $value)
          @if($value->status==0)
           <li> 
            <div class="srchlst-wrap"> 
             <div class="hd goods-head"> 
              <a href="/Homeinfo/{{$value->id}}"> <sup no="101026379" class="mark_small_101026379 salepic"></sup> <img width="230" height="230" alt="{{$value->goods_des}}" class="lazy_loading" src="/static/Home/picture/blank.gif" original="{{$value->pic}}" /> </a> 
             </div> 
             <div class="bd goods-desc"> 
              <span class="nptt"> <a target="_blank" href="/info" class="elli" title="{{$value->goods_des}}">{{$value->goods_des}}</a> </span> 
              <p class="price_sc price-wrap"> <em class="ygprc15 price_no101026379 cur-price">&yen;&nbsp;<i>{{$value->goods_price}}</i></em> 
               <del class="origin-price">
                &yen;&nbsp;
                <i>{{$value->original_price}}</i>
               </del> </p> 
              <em class="collect" id="101026379" url="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=list&amp;po=list" src="http://i2.ygimg.cn/pics/belle/2018/101026379/101026379_01_mb.jpg?11" price="598"></em> 
             </div> 
            </div> </li> 
            @endif
            @endforeach
          @endif
        </ul> 
       </div> 
      </div>
     </div> 
    </div> 
   </div>  
  </div> 
  <div class="newPage"> 
   <div class="d_pa clearfix fr mb20 mr40"> 
    <a class="curr">1</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-2.html">2</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-3.html">3</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-4.html">4</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-5.html">5</a> 
    <a class="dot">...</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-235.html">235</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-236.html">236</a> 
    <a rel="nofollow" href="http://www.yougou.com/f-0-MXZ-0-1-2.html">下一页&gt;</a> 
   </div> 
  </div> 
  <div class="cen mt30 clearfix" style="padding-top:10px;"> 
   <!--seo推广链接，品牌+分类部分--> 
   <!--seo推广链接，品牌+分类部分结束--> 
   <p class="blank10"></p> 
   <p class="blank10"></p> 
   <script type="text/javascript">
      //底部的tab选项卡JS
      $(document).ready(function () {
        $(".bot_tab li").click(function () {
          $(".bot_tab li").eq($(this).index()).addClass("check_black").siblings().removeClass('check_black');
          $(".t_as").hide().eq($(this).index()).show();
        });

        //左侧底部的最后一商品删除下划虚线
        $("#24hours_hot > .pdt_wrap:last").addClass("last");
      });
    </script> 
  </div> 
  <!--添加底部搜索框结束--> 
  <script type="text/javascript">
    var ajaxCount = '4', currentPage = '1', staticRoot = 'http://s2.ygimg.cn';
    var tag = 1, ajaxSign = true;
    var $list = $("#proList li");
  </script> 
  <script type="text/javascript" src="/static/Home/js/base.yougou-2.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.search.recent_view.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yougou-channel.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg_suggest.js"></script> 
  <script type="text/javascript" src="/static/Home/js/commodity.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.search.select.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.zysearch.sr.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.zysearch.sr.new.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.search.search.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/resize.js"></script> 
  <script type="text/javascript" src="/static/Home/js/ygdialog.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.good.collect.js"></script> 
  <!--环信 start--> 
  <script type="text/javascript" src="/static/Home/js/customermanagement.js"></script> 
  <script src="/static/Home/js/easemob.js"></script> 
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
         <a href="#" class="link">分销项目</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="#" class="link">礼品卡</a> 
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
         <a href="#" class="link">微信客服：优购时尚商城</a> 
        </dd> 
       </dl> </li> 
     </ul> 
    </div> 
    <div class="national-certification"> 
     <ul class="content"> 
      <li> <a href="http://www.anquan.org/authenticate/cert/?site=www.yougou.com&amp;at=realname" key="521b3d2524306332d3107ff3" target="_blank"> <img width="124" height="47" src="/static/Home/picture/sm_124x47.png" style="border: medium none;" alt="安全联盟认证" /> </a> </li> 
      <li class="item"> 
       <!--          <a href="http://szcert.ebs.org.cn/93740fab-b419-4b67-940c-d2e808d6480b" target="_blank" title="众信网" rel="nofollow">--> <a href="  https://szcert.ebs.org.cn/817869EF-8D9D-4C35-BABB-451984A81886" target="_blank" title="众信网" rel="nofollow"> <img src="/static/Home/picture/ebs-logo.jpg" width="124" height="47" /> </a> </li> 
      <li class="item"> <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow"> <img src="/static/Home/picture/beian1.png" width="124" height="47" /> </a> </li> 
      <li class="item"> <a href="http://61.144.227.239:9002/" target="_blank" rel="nofollow"> <img src="/static/Home/picture/beian2.png" width="124" height="47" /> </a> </li> 
     </ul> 
     <ul class="qr-code"> 
      <li> 
       <div class="border"> 
        <img src="/static/Home/picture/app.jpg" alt="扫描下载手机客户端" class="img-app" /> 
       </div> 
       <div class="title">
        扫描下载手机客户端
       </div> </li> 
      <li class="item"> 
       <div class="border"> 
        <img src="/static/Home/picture/wechat.jpg" alt="关注公众号" /> 
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
      <li> <a href="/Homelink" class="title">友情链接</a> </li> 
     </ul> 
    </div> 
    <div class="copyright"> 
     <p> Copyright &copy; 2011-2016 Yougou Technology Co., Ltd. <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">粤ICP备09070608号-4</a> 增值电信业务经营许可证： <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">粤 B2-20090203 </a>&nbsp; <span>深公网安备：4403101910665 </span> <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030502000017"> <span>粤公网安备 44030502000017号</span> </a> </p> 
    </div> 
   </div> 
  </div> 
  <!-- common js --> 
  <span class="none"> 
   <!-- 1. sourceChannel --> <script type="text/javascript" src="/static/Home/js/sourcechannel.js"></script> 
   <!-- 2.  mv    --> 
   <!--<script src="/static/Home/js/mv.js" type="text/javascript"></script>--> <script type="text/javascript" src="/static/Home/js/mv.js"></script> 
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
</script> <script type="text/javascript" src="/static/Home/js/conversion.js"></script> 
   <noscript> 
    <div style="display:inline;"> 
     <img height="1" width="1" style="border-style:none;" alt="" src="/static/Home/picture/5681fc3f9ed24ab69befb77ad9a987a3.gif" /> 
    </div> 
   </noscript> </span> 
  <!-- common js end --> 
  <!----> 
  <script type="text/javascript">
<!-- 
var bd_cpro_rtid="n1c3ns";
//-->
</script> 
  <script type="text/javascript" src="/static/Home/js/rt.js"></script> 
  <noscript> 
   <div style="display:none;"> 
    <img height="0" width="0" style="border-style:none;" src="/static/Home/picture/rt.jpg" /> 
   </div> 
  </noscript> 
  <!-- Google Code Parameters --> 
  <script type="text/javascript">
var google_tag_params = {
    ecomm_prodid: [],
    brand:'',
    firstCategoryName:'',
    subCategoryName:'',
    thirdCategoryName:'',
    ecomm_pagetype:'',
    webType:'',
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
  <script type="text/javascript" src="/static/Home/js/conversion.js">
</script> 
  <noscript> 
   <div style="display:inline;"> 
    <img height="1" width="1" style="border-style:none;" alt="" src="/static/Home/picture/5fbabacf12ba4d399b54035e7fa70969.gif" /> 
   </div> 
  </noscript> 
  <script type="text/javascript">
var dsp_config = {
  search_word: '', 
  brand_name: '', 
  p_class1: '女鞋',
  p_class2: '', 
  p_class3: '', 
  p_class4: '', 
  p_viewList: ['101026379','101018471','101156234'], 
  bd_list_type: 'ecom_search'
};
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
  <script type="text/javascript">
    $(function() {
      $(window).bind('scroll', function() {
        if ($list.length % 20 == 0) {
          var $lastImg = $('img:last', $list[$list.length-4]), picH = $lastImg.offset().top, pageH = $(window).height() + $(window).scrollTop();
          if (picH < pageH && ajaxSign && tag < ajaxCount) {
            ajaxSign = false;
            if ($('#isSearchKey').val() == 'true') {
              loadKeyData(getParameForKey(""), "");
            } else {
              loadFilterData(getParameForFilter());
            }
          }
        }
      }).scroll();
    });
  </script> 
  <script type="text/javascript">
    var dsp_config = {
      search_word: '',
      brand_name: '阿迪达斯_阿迪休闲_阿迪三叶草_亚瑟士_百思图_拔佳_百丽_bevivo_卡特_哥伦比亚_匡威_卡骆驰_迪士尼_暇步士_茵奈儿_真美诗_妙丽_New Balance_耐克_鬼冢虎_彪马_锐步_森达_思加图_他她_天美意_乐斯菲斯_添柏岚_万斯',
      p_class1: '',
      p_class2: '',
      p_class3: '',
      p_class4: '',
      p_viewList: ['100195844', '100497620', '100497618'],
      bd_list_type: 'ecom_search'
    };
  </script>  
 </body>
</html>