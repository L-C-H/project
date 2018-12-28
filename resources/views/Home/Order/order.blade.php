<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0056)http://www.yougou.com/my/order.jhtml?t=15439027898553029 -->
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="pragma" content="no-cache" /> 
  <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate" /> 
  <meta http-equiv="expires" content="0" /> 
  <title>我的订单</title> 
  <link href="/static/Home/css/thickbox.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet" /> 
  <link href="/static/Home/css/ucenter_v2.0.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" async="" src="/static/Home/js/ga.js"></script> 
  <script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg.common.js"></script> 
  <script type="text/javascript" src="/static/Home/js/ygdialog.js"></script> 
  <link type="text/css" rel="stylesheet" href="/static/Home/css/ygdialog.css" /> 
  <script type="text/javascript" src="/static/Home/js/yg.member.js"></script> 
  <style type="text/css">
  .bgred{ padding:2px 4px 0 4px; color:#FFFFFE; background:#f67649; }
</style> 
  <script type="text/javascript">
  $(function(){
      //搜索订单号框显示提示信息
      if($("#searchCriteria").val().length == 0){
          $("#searchCriteria").val("订单号");
      }
      //提交搜索判断条件
      $("#searchForm").bind("submit",function(){
          if($("#searchCriteria").val()=="订单号"){
                $("#searchCriteria").val("");
          }
      })
      $("#searchCriteria").bind("blur",function(){
          var thisval = "";
          thisval = $(this).val();
          if(thisval == ""){
              $(this).val("订单号")
          }
      })
      $("#searchCriteria").bind("focus",function(){
            var thisval = "";
            thisval = $(this).val();
            if(thisval == "订单号"){
                $(this).val("");
            }
        })
      //提交表单
      $(".uc_ordersearchbtn").bind("click",function(){
            $("#searchForm").submit();
        })
      //select弹出
    $(".dropdownbtn").bind("click",function(){
      $(".uc_selectpop").hide();
      $(this).parent().find(".uc_selectpop").show();
    })
    $(document).bind("click",function(e){
            target = e.target || Event.srcElement;
            if(!$(target).hasClass("dropdowntgt")){
                $(".uc_selectpop").hide();
            }
        })
        //select选中并回收
    $(".uc_selectpop>li").bind("click",function(){
      $(".uc_selectpop").hide();
      $(this).parent().find(".orderfilterKV").val($(this).attr("value"));
      $(this).parent().parent().find(".uc_selchecked").val($(this).html());
      $("#searchForm").submit();
    })
      //状态为所有状态时  显示已取消复选框
      if($("#status").val() == '所有状态'){
          $("#canceledOrder").show();
      }
      //点击已取消 查询订单
      $("#canceledSearch").bind("click",function(){
      $("#searchForm").submit();
    })
  })

    $(function(){
        //鼠标悬浮在查看物流弹出框，默认获取订单1数据
        $(".express").live("mouseover",function(){
           $(this).css("z-index","1000");
            $(this).find(".expmsgpop").css("display","block");
            getExpMsg.call($(this).find(".tabb>li").eq(0),0);
        })
        $(".express").live("mouseout",function(){
            $(".expmsgpop").hide();
            $(this).css("z-index","0");
        })

        //鼠标点击切换效果
        $(".expmsgpop .tabb>li").bind("click",function(){
            expTabjs.call(this);
            getExpMsg.call(this,$(this).index())
        });

        //分钟倒计时变化
        var expCountdowns = $(".orderActiveTime_sw");
        window.setInterval(function(){
            for(var i = 0 ; i < expCountdowns.length ; i ++){
                if($(expCountdowns[i]).html() == 1){
                    $(expCountdowns[i]).removeClass("orderActiveTime_sw");
                    $(expCountdowns[i]).parent().parent().hide();
                    $(expCountdowns[i]).parent().parent().parent().find(".pingjaisub").hide();
                }else{
                    $(expCountdowns[i]).html(function(index,oldcontent){
                        return oldcontent-1;
                    })
                }
            }
        },60000)

        //切换标签的方法
        function expTabjs(){
            $(this).parent().parent().find(".tabb>li").removeClass("currr");
            $(this).addClass("currr");
            $(this).parent().parent().find(".expli>li").hide();
            $(this).parent().parent().find(".expli>li").eq($(this).index()).show();
        }

        //获取快递单数据的方法
        function getExpMsg(orderIndex){
            if($(this).attr("isload") == "true"){
                return false;
            }
            $(this).attr("isload","true");
            var orderSubNo = $(this).attr("data");
            var expressNo = $(this).attr("expressNo");
            var logisticsCode = $(this).attr("logisticsCode");
            var logisticsDiv = $(this).parent().parent().find(".expli>li").eq(orderIndex).find(".expstatus");
            $.ajax({
                type:'post',
                url:"/my/getLogisticsRecordByExpressNo.jhtml",
                data:{'expressNo':expressNo,'logisticsCode':logisticsCode,'sort':'desc'},
                dataType:"json",
                success:function(result){
                    var html = [];
                    var data = result.data;
                    if(result.response == "ok" && data != null){
                        var record = data.data;
                        for(var i=0;i<4;i++) {
                            if(i==0){
                                html.push('<p class="new">');
                            }else{
                                html.push('<p>');
                            }
                            html.push(record[i].context);
                            html.push('<br/>');
                            html.push(record[i].time);
                            html.push('</p>');
                        }
                        html.push('<p class="expseeall"><a href="/order/orderDetails.jhtml?mainOrderNo='+orderSubNo.substring(0,orderSubNo.indexOf('_'))+'" target="_blank">点击查看全部>></a></p>');
                    }else{
                        html.push("<div class='experr'>");
                        html.push('<span>很抱歉，未获取到配送信息。</span><br />');
                        html.push('<span>可登录</span><a href="'+data.logisticsWebsite+'" target="_blank"> '+data.logisticsName+'官网 </a><span>查询<br />或致电 </span><span style="color:#36c">'+data.logisticsTel+'</span><span> 快递官方客服。</span>');
                        html.push('</div>');
                    }
                    logisticsDiv.html(html.join(''));
                }
            });
        }
    })
    
   /*鼠标划过商品小图显示数量，尺码*/
    $(".expli_goods_img .img_list_cod").live("mouseover",function(){
        $(this).find(".pink-size").css("display","block");
    })
    $(".expli_goods_img .img_list_cod").live("mouseout",function(){
        $(this).find(".pink-size").css("display","none");
    })
    
    /*展开、收起商品*/
    $(".expli_goods_img .showOth").live("click",function(){
    $(this).parent().find(".oth_goods").css("display","block");
    $(this).css("display","none");
    $(this).parent().find(".hideOth").css("display","block");
    }).live("mouseover",function(){
    $(this).css("color","#e60012");
    }).live("mouseout",function(){
    $(this).css("color","#333");
    })
    $(".expli_goods_img .hideOth").live("click",function(){
    $(this).parent().find(".oth_goods").css("display","none");
    $(this).css("display","none");
    $(this).parent().find(".showOth").css("display","block");
    }).live("mouseover",function(){
    $(this).css("color","#e60012");
    }).live("mouseout",function(){
    $(this).css("color","#333");
    })
</script> 
  <style type="text/css">.easemobim-mobile-html{position:relative!important;width:100%!important;height:100%!important;padding:0!important;margin:0!important}.easemobim-mobile-body{position:absolute;top:0!important;left:0!important;width:100%!important;height:100%!important;overflow:hidden!important;padding:0!important;margin:0!important}.easemobim-mobile-body>*{display:none!important}.easemobim-mobile-body>.easemobim-chat-panel{display:block!important}.easemobim-chat-panel{z-index:1000;overflow:hidden;position:fixed;border:none;width:0;height:0;-webkit-transition:all .01s;-moz-transition:all .01s;transition:all .01s;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px}.easemobim-chat-panel.easemobim-minimized{border:none;box-shadow:none;height:37px!important;width:104px!important}.easemobim-chat-panel.easemobim-minimized.easemobim-has-prompt{width:360px!important;height:270px!important}.easemobim-chat-panel.easemobim-mobile{position:absolute!important;width:100%!important;height:100%!important;left:0!important;top:0!important;border-radius:0;box-shadow:none}.easemobim-chat-panel.easemobim-mobile.easemobim-minimized{height:0!important;width:0!important}.easemobim-chat-panel.easemobim-hide{visibility:hidden;width:1px!important;height:1px!important;border:none}.easemobim-chat-panel.easemobim-dragging{display:none}.easemobim-iframe-shadow{left:auto;top:auto;display:none;cursor:move;z-index:16777270;position:fixed;border:none;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px;background-size:100% 100%;background-repeat:no-repeat}.easemobim-iframe-shadow.easemobim-dragging{display:block}.easemobim-prompt-wrapper{display:none;z-index:16777271;position:fixed;width:30px;height:30px;padding:10px;top:0;bottom:0;margin:auto;left:0;right:0;color:#fff;background-color:#000;text-align:center;border-radius:4px;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;opacity:.7;-moz-box-sizing:content-box;box-sizing:content-box}.easemobim-prompt-wrapper>.loading{position:relative;width:30px;height:30px;display:inline-block;overflow:hidden;margin:0;padding:0;-webkit-animation:easemobim-loading-frame 1s linear infinite;-moz-animation:easemobim-loading-frame 1s linear infinite;animation:easemobim-loading-frame 1s linear infinite}@-webkit-keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@-moz-keyframes easemobim-loading-frame{0%{-moz-transform:rotate(0);transform:rotate(0)}to{-moz-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);-moz-transform:rotate(1turn);transform:rotate(1turn)}}.easemobim-pc-img-view{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:16777270}.easemobim-pc-img-view>.shadow{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000}.easemobim-pc-img-view>img{max-width:100%;max-height:100%;position:absolute;margin:auto;top:0;right:0;bottom:0;left:0}</style> 
  <script src="/static/Home/js/f.txt"></script> 
 </head> 
 <body class="myorder"> 
  <!--公共头部 start--> 
  <!--header created time: 2018-12-04T13:50:10+08:00 --> 
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
        <li class="item Red"> <a target="_blank" href="http://www.yougou.com/article/201805/3adfa2a3ca664e86ba4a6a8a33988940.shtml#ref=index&amp;po=notice_notice1">优购客服电话变更</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201712/e4de56a20dcf458d88626858531fb8b6.shtml#ref=index&amp;po=notice_notice2">关闭分享购频道</a> </li> 
        <li class="item item1 "> <a target="_blank" href="http://www.yougou.com/article/201607/182fbbbcc43940259e172d1da13cacce.shtml#ref=index&amp;po=notice_notice3">提醒会员谨防诈骗电话</a> </li> 
       </ul> 
      </div> 
     </div> </li> 
   </ul> 
  </div> 
  <!--导航start--> 
  <!-- nav created time: 2018-12-03T14:42:02+08:00 --> 
  <div id="logo" class="logo-container"> 
   <div class="header-logo" style="display: block;"> 
    <a href="/Home"> <img src="/static/Home/images/logo.png" width="98" height="58" /> </a> 
   </div> 
   <div class="nav-container" style="padding-top: 0;"> 
    <div class="nav"> 
     <ul> 
      <li id="nav_logo" style="display: none;" class="item-first"> <a href="/Home"> <img src="/static/Home/images/logo.png" width="60" height="38" /> </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/" target="_blank"> 首页 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-0-MXZ-0-1.html" _yg_nav="5b2ba28f59bcda74c9000050" target="_blank"> 女鞋 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A-04Y004-1.html" _yg_nav="53d0e925c7da508b0c000195" target="_blank"> 男鞋 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-0-PTK-0-1.html" _yg_nav="5b2badd459bcda74c900007a" target="_blank"> 运动 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-0-KDT-0-1.html" _yg_nav="53d0e924c7da508b0c00011e" target="_blank"> 户外 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-0-9XB_HX4-0-1.html" _yg_nav="5b2bb95259bcdae402000009" target="_blank"> 儿童 </a> </li> 
      <li class="item" style="padding: 15px;"> <a href="http://www.yougou.com/f-0-6LJ-0-1.html" _yg_nav="53d0e924c7da508b0c000155" target="_blank"> 箱包 </a> </li> 
     </ul> 
     <div class="search-wrapper"> 
      <form action="http://www.yougou.com/sr/searchKey.sc" class="input_box" onsubmit="if(keyword.value==''){return false;}" id="J_TopSearchForm" method="get"> 
       <div class="search"> 
        <input type="text" id="keyword" name="keyword" autocomplete="off" /> 
        <ul class="searchmenu" style="display:none"></ul> 
        <i id="btn-search" class="icon bg-Details_page_enlarge"></i> 
       </div> 
      </form> 
     </div> 
    </div> 
   </div> 
   <div class="nav-container-down"> 
    <div id="5b2ba28f59bcda74c9000050" class="nav-down-menu" style="display: none;" _yg_nav="5b2ba28f59bcda74c9000050"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 品牌 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-belle-MXZ-0-1.html" target="_blank"> 百丽 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-tata-MXZ-0-1.html" target="_blank"> 他她 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-teenmix-0-0-1.html" target="_blank"> 天美意 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-millies-0-0-1.html" target="_blank"> 妙丽 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-senda-0-0-1.html" target="_blank"> 森达 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-joypeace-0-0-1.html" target="_blank"> 真美诗 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-staccato-0-0-1.html" target="_blank"> 思加图 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-bata-MXZ-0-1.html" target="_blank"> 拔佳 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-hushpuppies-0-0-1.html" target="_blank"> 暇步士 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-crocs-0-0-1.html" target="_blank"> 卡骆驰 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-basto-0-0-1.html" target="_blank"> 百思图 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-jipijapa-MXZ-0-1.html" target="_blank"> Jipi Japa </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R-0-1.html" target="_blank"> 女士单鞋 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_0YN-0-1.html" target="_blank"> 浅口鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_MML-0-1.html" target="_blank"> 尖头鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%B0%8F%E7%99%BD%E9%9E%8B&amp;orderBy=1&amp;catgNo=MXZ_F5R"> 小白鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_Q2T-0-1.html" target="_blank"> 乐福鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_UWO-05B000-1.html" target="_blank"> 满帮鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_18N-05B000-1.html" target="_blank"> 高跟鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_8YR-05B000-1.html"> 松糕鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-MXZ_F5R_N3I-05B000-1.html" target="_blank"> 平底鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
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
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ-050002-1.html" target="_blank"> 秋季新品 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%93%E6%9F%9C%E5%90%8C%E6%AC%BE%20%E5%A5%B3%E9%9E%8B&amp;orderBy=1" target="_blank"> 专柜同款 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%94%9C%E7%BE%8E&amp;orderBy=1&amp;catgNo=MXZ" target="_blank"> 甜美风 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%9D%B4%E8%9D%B6%E7%BB%93&amp;orderBy=1&amp;catgNo=MXZ" target="_blank"> 蝴蝶结 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%80%E5%AD%97%E5%B8%A6&amp;orderBy=1&amp;attrStr=050001&amp;catgNo=MXZ" target="_blank"> 一字带 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-MXZ-0-1.html" target="_blank"> 热销TOP </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="53d0e925c7da508b0c000195" class="nav-down-menu" style="display: none;" _yg_nav="53d0e925c7da508b0c000195"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 品牌 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-belle-Y0A-0-1.html"> 百丽 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-senda-Y0A-0-1.html"> 森达 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-hushpuppies-Y0A-0-1.html" target="_blank"> 暇步士 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-bata-Y0A-0-1.html"> 拔佳 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-teenmix-Y0A-0-1.html"> 天美意 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-tata-Y0A-0-1.html"> 他她 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-basto-Y0A-0-1.html"> 百思图 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-crocs-Y0A-0-1.html"> 卡骆驰 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-fato-Y0A-0-1.html"> 伐拓 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 分类 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A-04T020_052001-1.html" target="_blank"> 休闲鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_R5O-0-1.html" target="_blank"> 乐福鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_Q28-052001-1.html" target="_blank"> 懒人鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%B3%BB%E5%B8%A6%E9%9E%8B&amp;orderBy=0&amp;catgNo=Y0A" target="_blank"> 系带鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A_XE1_O2S-052001-1.html"> 满帮鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A-04T024_052001-1.html" target="_blank"> 正装鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_RVN-04Y004-1.html" target="_blank"> 打孔鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_8OT-04Y004-1.html"> 豆豆鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-Y0A_KJG_8M7-0-1.html" target="_blank"> 纯凉鞋 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl"> 
       <dt> 
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 关键词 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-04Y004_050001_05B001_052001-1.html" target="_blank"> 专柜同款 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-00T009_052001-1.html"> 小白鞋 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=2018&amp;orderBy=1&amp;catgNo=Y0A" target="_blank"> 2018新品 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/f-0-Y0A-0-1.html" target="_blank"> 热销TOP </a> 
       </dd> 
      </dl> 
     </div> 
    </div> 
    <div id="5b2badd459bcda74c900007a" class="nav-down-menu" style="display: none;" _yg_nav="5b2badd459bcda74c900007a"> 
     <div class="sub-container"> 
      <dl class="header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK-0-1.html"> 品牌 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-adidas-PTK-0-1.html" target="_blank"> 阿迪达斯 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-nike-PTK-0-1.html" target="_blank"> 耐克 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-adidasoriginals-PTK-0-1.html" target="_blank"> 三叶草 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-adidasneo-PTK-0-1.html" target="_blank"> 阿迪休闲 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-puma-PTK-0-1.html" target="_blank"> 彪马 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-converse-PTK-0-1.html" target="_blank"> 匡威 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-onitsukatiger-PTK-0-1.html" target="_blank"> 鬼冢虎 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-skechers-PTK-0-1.html" target="_blank"> 斯凯奇 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-asics-PTK-0-1.html" target="_blank"> 亚瑟士 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-reebok-PTK-0-1.html" target="_blank"> 锐步 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-vans-PTK-0-1.html" target="_blank"> 万斯 </a> 
       </dd> 
      </dl> 
      <dl class="item header-nav-dl" style="width: 130px;"> 
       <dt> 
        <a href="http://www.yougou.com/f-0-PTK_J7F-0-1.html" target="_blank"> 运动鞋 </a> 
       </dt> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_LMT-0-1.html" target="_blank"> 跑步鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_2GZ-0-1.html" target="_blank"> 休闲鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CQ2-0-1.html" target="_blank"> 复刻鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CQL-0-1.html" target="_blank"> 篮球鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_KDP-0-1.html" target="_blank"> 户外鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_5YS-0-1.html" target="_blank"> 帆布鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_XKG-0-1.html" target="_blank"> 网球鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_BSP-0-1.html" target="_blank"> 综训鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_2GI-0-1.html" target="_blank"> 健步鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_CMO-0-1.html" target="_blank"> 足球鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
        <a href="http://www.yougou.com/f-0-PTK_J7F_8Y5-0-1.html" target="_blank"> 凉鞋/拖鞋 </a> 
       </dd> 
       <dd style="display: inline-block; width: 60px;"> 
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
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%B4%9D%E5%A3%B3%E5%A4%B4%E4%BC%91%E9%97%B2%E9%9E%8B&amp;orderBy=0&amp;catgNo=PTK" target="_blank"> 贝壳头鞋 </a> 
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
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 品牌 </a> 
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
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E6%88%B7%E5%A4%96%E6%9C%8D&amp;orderBy=1" target="_blank"> 户外服 </a> 
       </dt> 
       <dd> 
        <a href="http://www.yougou.com/f-0-KDT_LEI_IKL-0-1.html" target="_blank"> T恤 </a> 
       </dd> 
       <dd> 
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%86%B2%E9%94%8B%E8%A1%A3&amp;orderBy=1&amp;brandEnName=columbia_thenorthface" target="_blank"> 冲锋衣 </a> 
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
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" target="_blank"> 关键词 </a> 
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
        <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#"> 品牌 </a> 
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
        <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%8C%85&amp;orderBy=1&amp;attrStr=04Y001&amp;catgNo=6LJ_345" target="_blank"> 魅力女包 </a> 
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
  <script type="text/javascript" src="/static/Home/js/index.js"></script> 
  <script type="text/javascript" src="/static/Home/js/yg_suggest.js"></script> 
  <!--//公共头部end--> 
  <input type="hidden" id="basePath" value="" /> 
  <p class="blank10"></p> 
  <p class="curLct">您当前的位置：<a href="http://www.yougou.com/index.html?t=15439027934246924" class="f_blue">首页</a> &gt; <a href="http://www.yougou.com/my/ucindex.jhtml?t=15439027934241609" class="f_blue">我的优购</a> &gt; 我的订单</p> 
  <div class="cen clearfix" style="margin-top: 0px;"> 
   <div class="u_leftxin u_leftxin fl mgr10" id="umenu"> 
    <div class="wdygtit"> 
     <a href="http://www.yougou.com/my/ucindex.jhtml?t=15439027934249566"><span>我的优购</span></a> 
    </div> 
    <ul class="jiaoyizx"> 
     <li class="ultit">交易中心</li> 
     <li class="myorderli"><a href="http://www.yougou.com/my/order.jhtml?t=15439027934244302"><span>我的订单</span></a></li> 
     <li class="myfavorli"><a href="http://www.yougou.com/my/favorites.jhtml?t=154390279342410443"><span>我的收藏</span></a></li> 
     <li class="mycommentli"><a href="http://www.yougou.com/my/comment.jhtml?t=15439027934249590"><span>商品评论/晒单</span></a></li> 
     <li class="msgli"><a href="http://www.yougou.com/my/msg.jhtml?t=15439027934246776"><span id="uc_msg_count">站内消息<i class="huise">（<em>0</em>）</i></span></a></li> 
    </ul> 
    <ul class="wodezc"> 
     <li class="ultit">我的资产</li> 
     <li class="mycouponli"><a href="http://www.yougou.com/my/coupon.jhtml?couponState=1&amp;t=15439027934241244"><span id="my_coupon_tick">我的优惠券</span></a></li> 
     <li class="giftcardli"><a href="http://www.yougou.com/my/giftcard.jhtml?couponState=1&amp;t=154390279342410710"><span id="my_giftcard_tick">我的礼品卡</span></a></li> 
     <li class="mypointli"><a href="http://www.yougou.com/my/point.jhtml?t=15439027934241178"><span id="my_point_tick">我的积分</span></a></li> 
    </ul> 
    <ul class="gerensz"> 
     <li class="ultit">个人设置</li> 
     <li class="safesetli"><a href="http://www.yougou.com/my/safeSet.jhtml?t=15439027934243184"><span id="uc_safe_level">安全设置</span></a></li> 
     <li class="myaddrli"><a href="http://www.yougou.com/my/address.jhtml?t=15439027934242443"><span>我的收货地址</span></a></li> 
    </ul> 
    <ul class="shouhoufw"> 
     <li class="ultit">售后服务</li> 
     <li class="afterservli"><a href="http://www.yougou.com/my/afterService.jhtml?t=15439027934246596"><span>查看退换货</span></a></li> 
     <li class="appservli"><a href="http://www.yougou.com/my/applicationService.jhtml?t=15439027934242012"><span>申请退换货</span></a></li> 
    </ul> 
    <ul class="hotlist"> 
     <li class="hotlist_tit"> 
      <div> 
       <p>24小时热销推荐</p> 
      </div></li> 
     <li class="hotlist_dl"> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=my_order&amp;po=hot24_1" target="_blank"><img src="/static/Home/images/100506984_01_s.jpg" title="adidas 阿迪达斯 运动 夹克" alt="阿迪达斯 夹克" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=my_order&amp;po=hot24_1" target="_blank" title="adidas 阿迪达斯 运动 夹克">阿迪达斯 夹克</a></p> 
        <p class="hotgoodsprice"><span>￥399</span><span class="Hui">￥399</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=my_order&amp;po=hot24_2" target="_blank"><img src="/static/Home/images/100202615_01_s.jpg" title="adidas 阿迪达斯 运动 袜子" alt="阿迪达斯 袜子" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=my_order&amp;po=hot24_2" target="_blank" title="adidas 阿迪达斯 运动 袜子">阿迪达斯 袜子</a></p> 
        <p class="hotgoodsprice"><span>￥29</span><span class="Hui">￥29</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=my_order&amp;po=hot24_3" target="_blank"><img src="/static/Home/images/100503159_01_s.jpg" title="adidas 阿迪达斯 运动 长裤" alt="阿迪达斯 长裤" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=my_order&amp;po=hot24_3" target="_blank" title="adidas 阿迪达斯 运动 长裤">阿迪达斯 长裤</a></p> 
        <p class="hotgoodsprice"><span>￥399</span><span class="Hui">￥399</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-nike/sku-aa7403-100980884.shtml#ref=my_order&amp;po=hot24_4" target="_blank"><img src="/static/Home/images/100980884_01_s.jpg" title="nike 耐克 运动 跑步鞋" alt="耐克 跑步鞋" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-nike/sku-aa7403-100980884.shtml#ref=my_order&amp;po=hot24_4" target="_blank" title="nike 耐克 运动 跑步鞋">耐克 跑步鞋</a></p> 
        <p class="hotgoodsprice"><span>￥469</span><span class="Hui">￥599</span></p> 
       </dd> 
      </dl> 
      <dl> 
       <dt> 
        <a href="http://www.yougou.com/c-adidasneo/sku-fkl62-101011461.shtml#ref=my_order&amp;po=hot24_5" target="_blank"><img src="/static/Home/images/101011461_01_s.jpg" title="adidas neo 阿迪休闲 运动 长裤" alt="阿迪休闲 长裤" onerror="this.src='/static/Home/images/60x60.jpg'" /></a> 
       </dt> 
       <dd> 
        <p class="hotgoodsname"><a href="http://www.yougou.com/c-adidasneo/sku-fkl62-101011461.shtml#ref=my_order&amp;po=hot24_5" target="_blank" title="adidas neo 阿迪休闲 运动 长裤">阿迪休闲 长裤</a></p> 
        <p class="hotgoodsprice"><span>￥299</span><span class="Hui">￥299</span></p> 
       </dd> 
      </dl></li> 
     <li class="last"><a class="hotrenovate" href="javascript:void(0);" onclick="YGM.GlobeTip.hottop24r()">换一批</a></li> 
    </ul> 
   </div> 
   <!--左侧公共部分 end--> 
   <div id="myorder" class="uc_right fr"> 
    <form action="http://www.yougou.com/my/order.jhtml" name="searchForm" id="searchForm" method="post"> 
     <div class="uc_orderfilter"> 
      <h2 class="uc_odrfiltertit">我的订单</h2> 
      <div class="uc_orderselect"> 
       <p class="uc_fll">显示：</p> 
       <div class="uc_selectsty uc_select_6m"> 
        <input type="text" disabled="disabled" class="uc_selchecked" value="6个月内订单" id="orderCreateTime" /> 
        <ul class="uc_selectpop" style="display: none;"> 
         <input class="orderfilterKV" type="hidden" name="orderCreateTime" value="" /> 
         <li value="" selected="selected">6个月内订单</li> 
         <li value="2018">今年内其他订单</li> 
         <li value="2017">2017</li> 
        </ul> 
        <p class="dropdownbtn dropdowntgt"> <span class="dropdowntgt"></span> </p> 
       </div> 
       <div class="uc_selectsty uc_select_stat"> 
        <input disabled="disabled" type="text" class="uc_selchecked" value="所有状态" id="status" /> 
        <ul class="uc_selectpop" style="display: none;"> 
         <input class="orderfilterKV" type="hidden" name="status" value="0" /> 
         <li value="0">所有状态</li> 
         <li value="1">订单生成</li> 
         <li value="2">配货中</li> 
         <li value="3">已发货</li> 
         <li value="4">已取消</li> 
        </ul> 
        <p class="dropdownbtn dropdowntgt"> <span class="dropdowntgt"></span> </p> 
       </div> 
       <div class="uc_selectsty uc_select_paystat"> 
        <input disabled="disabled" type="text" class="uc_selchecked" value="支付状态" id="payStatus" /> 
        <ul class="uc_selectpop" style="display: none;"> 
         <input class="orderfilterKV" type="hidden" name="payStatus" value="0" /> 
         <li value="0">支付状态</li> 
         <li value="1">已支付</li> 
         <li value="2">未支付</li> 
        </ul> 
        <p class="dropdownbtn dropdowntgt"> <span class="dropdowntgt"></span> </p> 
       </div> 
       <a class="uc_ordersearchbtn">搜索订单</a> 
       <div class="uc_ordersearch"> 
        <input type="text" id="searchCriteria" name="searchCriteria" value="订单号" /> 
       </div> 
       <div id="canceledOrder" style=""> 
        <input type="checkbox" id="canceledSearch" name="canceledSearch" value="1" />已取消 
       </div> 
      </div> 
     </div> 
     <input type="hidden" value="15439028046469230" name="t" /> 
    </form> 
    <!--我最近的订单 start--> 
    <div class="zjorder"> 
     <table class="uc_default_table uc_myorder_table"> 
      <thead> 
       <tr> 
        <th colspan="2" class="orderth llb lrb"></th> 
       </tr> 
      </thead> 
      <tbody> 
       <tr> 
        <td colspan="2"> <p class="norecords"> 您最近没购买过任何商品，先去<a class="f_blue" href="http://www.yougou.com/index.html?t=15439027934156955">挑选商品</a>吧！~ </p> </td> 
       </tr> 
      </tbody> 
     </table> 
    </div> 
    <p class="blank10"></p> 
    <div id="paginator" class="paginator"> 
     <script>

  var formId = "searchForm";
  var totalRows = '0';
  var pageSize = 20;


  /**
  *检查是否含有财务千分位分隔符
  *当totalRows>1000时默认格式会加财务千分位逗号
  *例如11,628，在js当做字符串处理
  */
  function ck(txt){
   if(txt.indexOf(',')>-1){
    return true;
   }
   return false;
  }

  /**
  *以逗号进行字符串分割
  *返回去掉逗号的字符串
  *例如11,628->11628
  */
  function split(datastr){
    var arr= new Array();
    var str = "";
    arr=datastr.split(",");
      for (i=0;i<arr.length ;i++ )
      {
          str+=arr[i];
      }
      return str;
  }
  /**
  *如果totalRows>=1000,则去除财务分隔符逗号
  *否则转换为数字类型
  */
  if(ck(totalRows)){
    totalRows = split(totalRows);
  }else{
    totalRows = Number(totalRows);
  }

  function queryPage(pageNo){

    if(isNaN(pageSize)){
        alert('每页条数只能为数字');
        return;
      }

      var totalPage=Math.ceil(totalRows/pageSize);
      var toPage=pageNo;
      if(pageNo==0){
        toPage=document.getElementById("query.page").value;
        if(isNaN(toPage) || toPage<=0){
          alert("请输入大于0的整数.");
          return;
        }

        if(toPage>totalPage){
          alert("没有当前页数");
          return;
        }
      }

      //校验是跳转页是否在记录有效范围内
      //取大于等于总页数的值
      if(toPage>totalPage){
        alert("已经到最后一页");
        return;
      }


      var pageForm = (formId&&formId!="")?document.getElementById(formId):document.forms[0];

      var arr = pageForm.elements;
      var flag = false;
      for(var i=0,j=arr.length;i<j;i++){
        if(arr[i].getAttribute("name")=="query.page"){
          flag = true;
          break;
        }
      }
      var pageEle = document.getElementById("page");

      if(!flag && pageEle == null){
        var artionUrl = pageForm.getAttribute("action");
//        if(artionUrl.indexOf("?")>0){
//          artionUrl = artionUrl + "&page="+toPage;
//        }else{
//          artionUrl = artionUrl + "?page="+toPage;
//        }
//        pageForm.setAttribute("action",artionUrl);

        var pageInput = document.createElement("input");
        pageInput.setAttribute("type", "hidden");
        pageInput.setAttribute("name", "page");
        pageInput.setAttribute("id", "page");
        pageInput.setAttribute("value", toPage);
        pageForm.appendChild(pageInput);

      }
      pageForm.submit();
  }

</script> 
    </div> 
    <!--我最近的订单 end--> 
   </div> 
  </div> 
  <p class="blank20"></p> 
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
         <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" class="link">分销项目</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" class="link">礼品卡</a> 
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
         <a onclick="easemobim.bind({configId: '1f142cd0-a8ca-4769-b447-59f9fa01bb65'})" href="javascript:;" class="link"> <i class="icon bg-bottom_Consultation"></i> 在线咨询</a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="javascript:;" class="link">Email: ygservice@belle.com.cn </a> 
        </dd> 
        <dd class="dd-title"> 
         <a href="http://www.yougou.com/my/order.jhtml?t=15439027898553029#" class="link">微信客服：优购时尚商城</a> 
        </dd> 
       </dl> </li> 
     </ul> 
    </div> 
    <div class="national-certification"> 
     <ul class="content"> 
      <li> <a href="http://www.anquan.org/authenticate/cert/?site=www.yougou.com&amp;at=realname" key="521b3d2524306332d3107ff3" target="_blank"> <img width="124" height="47" src="/static/Home/images/sm_124x47.png" style="border: medium none;" alt="安全联盟认证" /> </a> </li> 
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
   <!--<script src="http://pcs1.ygimg.cn/template/common/js/mv.js?4.3.4" type="text/javascript"></script>--> <script type="text/javascript" src="/static/Home/js/mv.js"></script> 
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
</script> <script type="text/javascript" src="/static/Home/js/f(1).txt"></script> 
   <noscript> 
    <div style="display:inline;"> 
     <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1016027598/?label=ni7GCOL2nQIQzrO95AM&amp;guid=ON&amp;script=0" /> 
    </div> 
   </noscript> </span> 
  <!-- common js end --> 
  <!----> 
  <script>
// url添加时间戳随机数
try {
YouGou.Util.setHrefStamp('.uc_right');
YouGou.Util.setHrefStamp('.u_right');
}catch (e) {} 
</script> 
  <script>
// 记录网站用户登陆状况
_gaq.push(['_trackPageview','/PageAction/st/my/left_2']);
</script> 
  <div id="ClickTaleDiv" style="display: none;"></div> 
  <link href="http://pcs1.ygimg.cnbdshare.js/?5.3.4.6" type="text/css" rel="stylesheet" />  
 </body>
</html>