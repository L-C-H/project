<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<!-- saved from url=(0038)http://www.yougou.com/my/ucindex.jhtml -->
<html xmlns="http://www.w3.org/1999/xhtml" data-blockbyte-bs-uid="49981"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>我的优购</title>
<link href="/static/Home/css/base-2.css" type="text/css" rel="stylesheet">
<link href="/static/Home/css/ucenter_v2.0.css" type="text/css" rel="stylesheet">
<script src="/static/Home/js/hm.js"></script><script type="text/javascript" async="" src="/static/Home/js/ga.js"></script><script type="text/javascript" src="/static/Home/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/static/Home/js/yg.common.js"></script>
<script type="text/javascript" src="/static/Home/js/ygdialog.js"></script><link type="text/css" rel="stylesheet" href="/static/Home/css/ygdialog.css">
<script type="text/javascript" src="/static/Home/js/yg.member.js"></script><link href="/static/Home/css/new_ucenter.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	//快递跟踪
	function showOrderDiv(expressNo,logisticsCode,mainOrderNo){
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
                            $("#lastLogisticsData"+expressNo).html(record[i].context).show();
                            $("#lastLogisticsTime"+expressNo).html(record[i].time).show();
                        }else{
                            html.push('<p>');
                        }
                        html.push(record[i].context);
                        html.push('<br/>');
                        html.push(record[i].time);
                        html.push('</p>');
                    }
                    html.push('<p class="expseeall"><a href="/order/orderDetails.jhtml?mainOrderNo='+mainOrderNo+'" target="_blank">点击查看全部>></a></p>');
                }else{
                    html.push("<div class='experr'>");
                    html.push('<span>很抱歉，未获取到配送信息。</span><br />');
                    html.push('<span>可登录</span><a href="'+data.logisticsWebsite+'" target="_blank"> '+data.logisticsName+'官网 </a><span>查询<br />或致电 </span><span style="color:#36c">'+data.logisticsTel+'</span><span> 快递官方客服。</span>');
                    html.push('</div>');
                }
                $("#expstatus"+expressNo).html(html.join('')).attr("isload","true");
            }
		});
	}
	function showOrderDelivery(){
		var expressCodes = $('#expressCodes').val();
		if(!expressCodes){return;}
		var expressNos = expressCodes.split(',');
		for(var i=0;i<expressNos.length;i++){
			var expressNo = expressNos[i];
			if($("#lastLogisticsData"+expressNo).length>0){
				var logisticsCode = $("#lastLogisticsData"+expressNo).attr("logisticsCode");
				var mainOrderNo = $("#lastLogisticsData"+expressNo).attr("mainOrderNo");
				showOrderDiv(expressNo,logisticsCode,mainOrderNo);
			}
		}
	}
	$(function(){
		$(".express").live("mouseover",function(){
            $(this).css({"z-index":"1000",'left':50,marginLeft:0});
            $(this).find(".expmsgpop").css("display","block");
        });
        $(".express").live("mouseout",function(){
        	$(".expmsgpop").hide();
        	$(this).css({"z-index":"0",'left':0,marginLeft:50});
    	});
    	showOrderDelivery();
	});

</script>

<style type="text/css">.easemobim-mobile-html{position:relative!important;width:100%!important;height:100%!important;padding:0!important;margin:0!important}.easemobim-mobile-body{position:absolute;top:0!important;left:0!important;width:100%!important;height:100%!important;overflow:hidden!important;padding:0!important;margin:0!important}.easemobim-mobile-body>*{display:none!important}.easemobim-mobile-body>.easemobim-chat-panel{display:block!important}.easemobim-chat-panel{z-index:1000;overflow:hidden;position:fixed;border:none;width:0;height:0;-webkit-transition:all .01s;-moz-transition:all .01s;transition:all .01s;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px}.easemobim-chat-panel.easemobim-minimized{border:none;box-shadow:none;height:37px!important;width:104px!important}.easemobim-chat-panel.easemobim-minimized.easemobim-has-prompt{width:360px!important;height:270px!important}.easemobim-chat-panel.easemobim-mobile{position:absolute!important;width:100%!important;height:100%!important;left:0!important;top:0!important;border-radius:0;box-shadow:none}.easemobim-chat-panel.easemobim-mobile.easemobim-minimized{height:0!important;width:0!important}.easemobim-chat-panel.easemobim-hide{visibility:hidden;width:1px!important;height:1px!important;border:none}.easemobim-chat-panel.easemobim-dragging{display:none}.easemobim-iframe-shadow{left:auto;top:auto;display:none;cursor:move;z-index:16777270;position:fixed;border:none;box-shadow:0 4px 8px rgba(0,0,0,.2);border-radius:4px;background-size:100% 100%;background-repeat:no-repeat}.easemobim-iframe-shadow.easemobim-dragging{display:block}.easemobim-prompt-wrapper{display:none;z-index:16777271;position:fixed;width:30px;height:30px;padding:10px;top:0;bottom:0;margin:auto;left:0;right:0;color:#fff;background-color:#000;text-align:center;border-radius:4px;-webkit-transition:all .5s;-moz-transition:all .5s;transition:all .5s;opacity:.7;-moz-box-sizing:content-box;box-sizing:content-box}.easemobim-prompt-wrapper>.loading{position:relative;width:30px;height:30px;display:inline-block;overflow:hidden;margin:0;padding:0;-webkit-animation:easemobim-loading-frame 1s linear infinite;-moz-animation:easemobim-loading-frame 1s linear infinite;animation:easemobim-loading-frame 1s linear infinite}@-webkit-keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@-moz-keyframes easemobim-loading-frame{0%{-moz-transform:rotate(0);transform:rotate(0)}to{-moz-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes easemobim-loading-frame{0%{-webkit-transform:rotate(0);-moz-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);-moz-transform:rotate(1turn);transform:rotate(1turn)}}.easemobim-pc-img-view{display:none;position:fixed;top:0;left:0;width:100%;height:100%;z-index:16777270}.easemobim-pc-img-view>.shadow{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000}.easemobim-pc-img-view>img{max-width:100%;max-height:100%;position:absolute;margin:auto;top:0;right:0;bottom:0;left:0}</style><script src="/static/Home/images/f.txt"></script><script src="/static/Home/images/f(1).txt"></script><style class="blockbyte-bs-style" data-name="content">body>div#blockbyte-bs-indicator>div{opacity:0;pointer-events:none}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible,body>iframe#blockbyte-bs-overlay.blockbyte-bs-visible{opacity:1;pointer-events:auto}body.blockbyte-bs-noscroll{overflow:hidden !important}body>div#blockbyte-bs-indicator>div{position:absolute;transform:translate3d(-40px, 0, 0);top:0;left:0;width:40px !important;height:100%;background:rgba(0,0,0,0.5);border-radius:0 10px 10px 0;transition:opacity 0.3s, transform 0.3s;z-index:2}body>div#blockbyte-bs-indicator>div>span{-webkit-mask:no-repeat center/32px;-webkit-mask-image:url(chrome-extension://jdbnofccmhefkmjbkkdkfiicjkgofkdh/img/icon-bookmark.svg);background-color:#ffffff;position:absolute;display:block;top:0;left:0;width:100%;height:100%}body>div#blockbyte-bs-indicator[data-pos='right']{left:auto;right:0}body>div#blockbyte-bs-indicator[data-pos='right']>div{transform:translate3d(40px, 0, 0);left:auto;right:0;border-radius:10px 0 0 10px}body>div#blockbyte-bs-indicator.blockbyte-bs-fullHeight>div{border-radius:0}body>div#blockbyte-bs-indicator.blockbyte-bs-hover>div{transform:translate3d(0, 0, 0);opacity:1}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb{height:100% !important;top:0 !important}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div{background:transparent}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div>span{-webkit-mask-position-y:20px}body>iframe#blockbyte-bs-sidebar{width:350px;max-width:none;height:0;z-index:2147483646;background-color:rgba(0,0,0,0.6) !important;border:none;display:block !important;transform:translate3d(-350px, 0, 0);transition:width 0s 0.3s, height 0s 0.3s, opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar[data-pos='right']{left:auto;right:0;transform:translate3d(350px, 0, 0)}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible{width:calc(100% + 350px);height:100%;transform:translate3d(0, 0, 0);transition:opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask{background:none !important}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask:not(.blockbyte-bs-hover){width:calc(350px + 50px)}body>iframe#blockbyte-bs-overlay{width:100%;max-width:none;height:100%;z-index:2147483647;border:none;background:rgba(0,0,0,0.5) !important;transition:opacity 0.3s}
</style></head>

<body class="ucindex">

<!--header created time: 2018-12-10T11:10:11+08:00 -->
<!--公共头部start-->

  <!--  下拉大图 -->
  <div id="big-ad">
    <a target="_blank" href="http://www.yougou.com/topics/154409788411.shtml#ref=index&amp;po=slideshow_slideshow1#ref=index&amp;po=top_top1#ref=index&amp;po=top_top1"></a>
  </div>
  <style type="text/css">
    #big-ad {
      width: 100%;
      background: url('http://i1.ygimg.cn/pics/shop/cms/image/cms/2018/12/08/43fc328acda341eca314851b32b693f5.jpg') no-repeat center top
    }

    #big-ad a {
      display: block;
      width: 100%;
      height: 100%;
    }
  </style>



  <!--  顶部通栏图 -->
  <div id="small-ad">
    <!-- 最顶部通栏广告 -->
    <a target="_blank" href="http://www.yougou.com/topics/154409788411.shtml#ref=index&amp;po=slideshow_slideshow1#ref=index&amp;po=top_top1#ref=index&amp;po=top_top1"></a>
  </div>
  <style type="text/css">
    #small-ad {
      width: 100%;
      height: 50px;
      background: url('http://i2.ygimg.cn/pics/shop/cms/image/cms/2018/12/08/0565013f074347a5870f83ae1c8a86fb.jpg') no-repeat center top
    }
    #small-ad a {
      display: block;
      width: 100%;
      height: 100%;
    }
  </style>


<div class="header">
  <ul class="left-content">
    <li>
      <div class="scan-code">
        <a href="javascript:;">关注</a>
        <div class="border-content">
          <div class="border">
            <img src="/static/Home/images/weChat.jpg" alt="关注公众号" class="qr-code">
            <span class="title">关注公众号</span>
          </div>
        </div>
      </div>
    </li>
    <li class="item-app">
      <div class="scan-code">
        <a href="javascript:;">下载APP</a>
        <div class="border-content">
          <div class="border">
            <img src="/static/Home/images/app.jpg" alt="优购APP下载" class="qr-code">
            <span class="title">优购APP下载</span>
          </div>
        </div>
      </div>
    </li>
  </ul>
  <ul class="right-content" id="top_nav">
    <li class="item-frist about_user"><a href="http://www.yougou.com/my/ucindex.jhtml"><i class="icon sign-in"></i>您好,<span id="user_id">18820606670</span></a>&nbsp;<a href="http://www.yougou.com/logout.jhtml">[退出]</a></li>
    <li class="item">
      <a href="http://www.yougou.com/my/favorites.jhtml" class="top-collect">
        <i class="icon bg-top_collect"></i>
        <span class="title">收藏</span>
      </a>
    </li>
    <li class="item-cart">
      <a href="http://www.yougou.com/order.jhtml"><i class="icon"></i>购物袋</a>
    </li>
    <li class="item">
      <div class="notice">
        <a href="javascript:;">公告</a>
        <div class="notice-content">
          <ul class="notice-list">
            
              <li class="item Red">
                <a target="_blank" href="http://www.yougou.com/article/201805/3adfa2a3ca664e86ba4a6a8a33988940.shtml#ref=index&amp;po=notice_notice1">优购客服电话变更</a>
              </li>
            
              <li class="item item1 ">
                <a target="_blank" href="http://www.yougou.com/article/201712/e4de56a20dcf458d88626858531fb8b6.shtml#ref=index&amp;po=notice_notice2">关闭分享购频道</a>
              </li>
            
              <li class="item item1 ">
                <a target="_blank" href="http://www.yougou.com/article/201607/182fbbbcc43940259e172d1da13cacce.shtml#ref=index&amp;po=notice_notice3">提醒会员谨防诈骗电话</a>
              </li>
            
          </ul>
        </div>
      </div>
    </li>
  </ul>
</div>
<!--导航start-->
<!-- nav created time: 2018-12-05T14:02:10+08:00 -->
<div id="logo" class="logo-container fixed-nav">
  <div class="header-logo" style="display: none;">
    <a href="http://www.yougou.com/">
      <img src="/static/Home/images/logo.png" width="98" height="58">
    </a>
  </div>
  <div class="nav-container" style="padding-top: 0;">
    <div class="nav">
      <ul>
        <li id="nav_logo" style="display: inline-block;" class="item-first">
          <a href="http://www.yougou.com/">
            <img src="/static/Home/images/logo.png" width="60" height="38">
          </a>
        </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/" target="_blank">
              首页
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-0-MXZ-0-1.html" _yg_nav="5b2ba28f59bcda74c9000050" target="_blank">
              女鞋
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A-04Y004-1.html" _yg_nav="53d0e925c7da508b0c000195" target="_blank">
              男鞋
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-0-PTK-0-1.html" _yg_nav="5b2badd459bcda74c900007a" target="_blank">
              运动
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-0-KDT-0-1.html" _yg_nav="53d0e924c7da508b0c00011e" target="_blank">
              户外
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-0-9XB_HX4-0-1.html" _yg_nav="5b2bb95259bcdae402000009" target="_blank">
              儿童
            </a>
          </li>
        
          <li class="item" style="padding: 15px 9px;">
            <a href="http://www.yougou.com/f-0-6LJ-0-1.html" _yg_nav="53d0e924c7da508b0c000155" target="_blank">
              箱包
            </a>
          </li>
        
      </ul>

      <div class="search-wrapper">
        <form action="http://www.yougou.com/sr/searchKey.sc" class="input_box" onsubmit="if(keyword.value==&#39;&#39;){return false;}" id="J_TopSearchForm" method="get">
          <div class="search">
            <input type="text" id="keyword" name="keyword" autocomplete="off"><ul class="searchmenu" style="display:none"></ul>
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
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 品牌


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-belle-MXZ-0-1.html" target="_blank">
                百丽
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-tata-MXZ-0-1.html" target="_blank">
                他她
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-teenmix-0-0-1.html" target="_blank">
                天美意
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-millies-0-0-1.html" target="_blank">
                妙丽
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-senda-0-0-1.html" target="_blank">
                森达
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-joypeace-0-0-1.html" target="_blank">
                真美诗
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-staccato-0-0-1.html" target="_blank">
                思加图
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-bata-MXZ-0-1.html" target="_blank">
                拔佳
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-hushpuppies-0-0-1.html" target="_blank">
                暇步士
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-basto-0-0-1.html" target="_blank">
                百思图
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-jipijapa-MXZ-0-1.html" target="_blank">
                Jipi Japa
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/skap-brand.html" target="_blank">
                圣伽步
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl" style="width: 130px;">
            <dt>
              <a href="http://www.yougou.com/f-0-MXZ_F5R-0-1.html" target="_blank">
                 女士单鞋


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_0YN-0-1.html" target="_blank">
                浅口鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_MML-0-1.html" target="_blank">
                尖头鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%B0%8F%E7%99%BD%E9%9E%8B&amp;orderBy=1&amp;catgNo=MXZ_F5R">
                小白鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_Q2T-0-1.html" target="_blank">
                乐福鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_UWO-05B000-1.html" target="_blank">
                满帮鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_18N-05B000-1.html" target="_blank">
                高跟鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_8YR-05B000-1.html">
                松糕鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_N3I-05B000-1.html" target="_blank">
                平底鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-MXZ_F5R_N1R-0-1.html" target="_blank">
                休闲鞋
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-MXZ_UI0-05B000-1.html">
                 女士靴子


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_3CN-0-1.html" target="_blank">
                短靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_78V-0-1.html">
                中靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_K8M-0-1.html">
                长靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_0VD-0-1.html">
                绒里靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_11U-0-1.html" target="_blank">
                马丁靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_UI0_WKL-0-1.html" target="_blank">
                雪地靴
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-MXZ_FQM-0-1.html" target="_blank">
                 女士凉鞋


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM_LWB-0-1.html" target="_blank">
                凉拖
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM_9M4-0-1.html" target="_blank">
                纯凉鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM_NX1-0-1.html" target="_blank">
                坡跟凉鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM_NX1-0-1.html" target="_blank">
                后空凉鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM_KBN-0-1.html" target="_blank">
                中空凉鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ_FQM-01H0NY-1.html">
                穆勒凉鞋
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 关键词


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ-050002-1.html" target="_blank">
                秋季新品
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%93%E6%9F%9C%E5%90%8C%E6%AC%BE%20%E5%A5%B3%E9%9E%8B&amp;orderBy=1" target="_blank">
                专柜同款
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%94%9C%E7%BE%8E&amp;orderBy=1&amp;catgNo=MXZ" target="_blank">
                甜美风
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%9D%B4%E8%9D%B6%E7%BB%93&amp;orderBy=1&amp;catgNo=MXZ" target="_blank">
                蝴蝶结
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E4%B8%80%E5%AD%97%E5%B8%A6&amp;orderBy=1&amp;attrStr=050001&amp;catgNo=MXZ" target="_blank">
                一字带
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-MXZ-0-1.html" target="_blank">
                热销TOP
              </a>
            </dd>
            
          </dl>
          
        </div>
      </div>
      
    
      
      <div id="53d0e925c7da508b0c000195" class="nav-down-menu" style="display: none;" _yg_nav="53d0e925c7da508b0c000195">
        <div class="sub-container">
          
          <dl class="header-nav-dl" style="width: 130px;">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 品牌


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-belle-Y0A-0-1.html">
                百丽
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-senda-Y0A-0-1.html">
                森达
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-hushpuppies-Y0A-0-1.html" target="_blank">
                暇步士
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-bata-Y0A-0-1.html">
                拔佳
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-teenmix-Y0A-0-1.html">
                天美意
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-tata-Y0A-0-1.html">
                他她
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-basto-Y0A-0-1.html">
                百思图
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-crocs-Y0A-0-1.html">
                卡骆驰
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-fato-Y0A-0-1.html">
                伐拓
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl" style="width: 130px;">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 分类


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A-04T020_052001-1.html" target="_blank">
                休闲鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A_XE1_R5O-0-1.html" target="_blank">
                乐福鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A_XE1_Q28-052001-1.html" target="_blank">
                懒人鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E7%B3%BB%E5%B8%A6%E9%9E%8B&amp;orderBy=0&amp;catgNo=Y0A" target="_blank">
                系带鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A_XE1_O2S-052001-1.html">
                满帮鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A-04T024_052001-1.html" target="_blank">
                正装鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_RVN-04Y004-1.html" target="_blank">
                打孔鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-basto_bata_belle_crocs_hushpuppies_senda_tata_teenmix-Y0A_XE1_8OT-04Y004-1.html">
                豆豆鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-Y0A_KJG_8M7-0-1.html" target="_blank">
                纯凉鞋
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 关键词


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-Y0A-04Y004_050001_05B001_052001-1.html" target="_blank">
                专柜同款
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-Y0A-00T009_052001-1.html">
                小白鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=2018&amp;orderBy=1&amp;catgNo=Y0A" target="_blank">
                2018新品
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-Y0A-0-1.html" target="_blank">
                热销TOP
              </a>
            </dd>
            
          </dl>
          
        </div>
      </div>
      
    
      
      <div id="5b2badd459bcda74c900007a" class="nav-down-menu" style="display: none;" _yg_nav="5b2badd459bcda74c900007a">
        <div class="sub-container">
          
          <dl class="header-nav-dl" style="width: 130px;">
            <dt>
              <a href="http://www.yougou.com/f-0-PTK-0-1.html">
                 品牌


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-adidas-PTK-0-1.html" target="_blank">
                阿迪达斯
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-nike-PTK-0-1.html" target="_blank">
                耐克
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-adidasoriginals-PTK-0-1.html" target="_blank">
                三叶草
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-adidasneo-PTK-0-1.html" target="_blank">
                阿迪休闲
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-puma-PTK-0-1.html" target="_blank">
                彪马
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-converse-PTK-0-1.html" target="_blank">
                匡威
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-onitsukatiger-PTK-0-1.html" target="_blank">
                鬼冢虎
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-skechers-PTK-0-1.html" target="_blank">
                斯凯奇
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-asics-PTK-0-1.html" target="_blank">
                亚瑟士
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-reebok-PTK-0-1.html" target="_blank">
                锐步
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-vans-PTK-0-1.html" target="_blank">
                万斯
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl" style="width: 130px;">
            <dt>
              <a href="http://www.yougou.com/f-0-PTK_J7F-0-1.html" target="_blank">
                 运动鞋


              </a>
            </dt>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_LMT-0-1.html" target="_blank">
                跑步鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_2GZ-0-1.html" target="_blank">
                休闲鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_CQ2-0-1.html" target="_blank">
                复刻鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_CQL-0-1.html" target="_blank">
                篮球鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_KDP-0-1.html" target="_blank">
                户外鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_5YS-0-1.html" target="_blank">
                帆布鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_XKG-0-1.html" target="_blank">
                网球鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_BSP-0-1.html" target="_blank">
                综训鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_2GI-0-1.html" target="_blank">
                健步鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_CMO-0-1.html" target="_blank">
                足球鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_J7F_8Y5-0-1.html" target="_blank">
                凉鞋/拖鞋
              </a>
            </dd>
            
            <dd style="display: inline-block; width: 60px;">
              <a href="http://www.yougou.com/f-0-PTK_I0E-0-1.html" target="_blank">
                包配
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-PTK_9NZ-0-1.html" target="_blank">
                 运动服


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_K02-0-1.html" target="_blank">
                T恤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_VK5-0-1.html" target="_blank">
                POLO衫
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_FTS-0-1.html" target="_blank">
                短裤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_CJW-0-1.html" target="_blank">
                紧身服/胸衣
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_G4R-0-1.html">
                长裤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_UR8-0-1.html" target="_blank">
                夹克
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK_9NZ_691-0-1.html" target="_blank">
                卫衣/套头衫
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-PTK-0-1.html" target="_blank">
                 关键词


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK-052001_05B001-1.html" target="_blank">
                专柜同款
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK-052001-1.html" target="_blank">
                夏季新品
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E8%B4%9D%E5%A3%B3%E5%A4%B4%E4%BC%91%E9%97%B2%E9%9E%8B&amp;orderBy=0&amp;catgNo=PTK" target="_blank">
                贝壳头鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-PTK-0-5.html">
                SALE
              </a>
            </dd>
            
          </dl>
          
        </div>
      </div>
      
    
      
      <div id="53d0e924c7da508b0c00011e" class="nav-down-menu" style="display: none;" _yg_nav="53d0e924c7da508b0c00011e">
        <div class="sub-container">
          
          <dl class="header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 品牌


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-thenorthface-IHY_SYG-0-6.html" target="_blank" style="color: #1c1919;">
                乐斯菲斯
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-timberland-KDT-0-0.html" target="_blank">
                添柏岚
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-columbia-IHY_SYG-0-6.html" target="_blank" style="color: #1c1818;">
                哥伦比亚
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-cat-KDT-0-6.html" target="_blank">
                CAT
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-KDT_O02-0-1.html" target="_blank">
                 户外鞋


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_FXW-0-0.html">
                休闲鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_T7S-0-0.html">
                工装鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-cat_columbia_thenorthface_timberland-KDT_O02_CSM-0-0.html" target="_blank">
                越野鞋
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E6%88%B7%E5%A4%96%E6%9C%8D&amp;orderBy=1" target="_blank">
                 户外服


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-KDT_LEI_IKL-0-1.html" target="_blank">
                T恤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%86%B2%E9%94%8B%E8%A1%A3&amp;orderBy=1&amp;brandEnName=columbia_thenorthface" target="_blank">
                冲锋衣
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-KDT_LEI_8MP-0-1.html" target="_blank">
                皮肤衣
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-KDT_LEI_SF7-0-0.html" target="_blank">
                抓绒衣裤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-KDT_LEI_QK6-0-0.html" target="_blank">
                软壳衣裤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-IHY_SYG_X3G_YOC_D20-0-0.html" target="_blank">
                休闲裤
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#" target="_blank">
                 关键词


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-thenorthface-IHY_SYG_X3G-01H03R04404V06206R07A-1.html" target="_blank">
                速干
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-cat-KDT_O02_T7S-00T00G-0.html" target="_blank">
                大黄靴
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-KDT-05B001-1.html" target="_blank">
                热销TOP
              </a>
            </dd>
            
          </dl>
          
        </div>
      </div>
      
    
      
      <div id="5b2bb95259bcdae402000009" class="nav-down-menu" style="display: none;" _yg_nav="5b2bb95259bcdae402000009">
        <div class="sub-container">
          
          <dl class="header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-9XB-0-0.html" target="_blank" style="color:  阿;">
                 热门品牌


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-adidas_adidasoriginals-9XB-0-0.html" target="_blank">
                阿迪
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-nike-9XB-0-0.html" target="_blank">
                耐克
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-adidasoriginals-9XB-0-6.html" target="_blank">
                 三叶草
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-9XB_HX4-0-0.html" target="_blank">
                 童鞋


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_HX4_N2F-0-1.html" target="_blank">
                跑步鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_HX4_2BI-0-1.html" target="_blank">
                户外鞋
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_HX4_4VU-0-1.html" target="_blank">
                复刻鞋
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-9XB_A0E-0-0.html" target="_blank">
                 童装


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_1LG-0-1.html" target="_blank">
                T恤
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_UBH-0-1.html" target="_blank">
                儿童套装
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_J6C-0-1.html" target="_blank">
                裤装
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_00X-0-1.html" target="_blank">
                外套/风衣
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_DDD-0-1.html" target="_blank">
                卫衣
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-9XB_A0E_ORE-0-1.html" target="_blank">
                棉羽
              </a>
            </dd>
            
          </dl>
          
        </div>
      </div>
      
    
      
      <div id="53d0e924c7da508b0c000155" class="nav-down-menu" style="display: none;" _yg_nav="53d0e924c7da508b0c000155">
        <div class="sub-container">
          
          <dl class="header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/my/ucindex.jhtml#">
                 品牌


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-istbelle-6LJ-0-1.html">
                百丽箱包
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-basto-6LJ-0-1.html" target="_blank">
                百思图
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-teenmix-6LJ-0-1.html" target="_blank">
                天美意
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-tata-6LJ-0-1.html" target="_blank">
                他她
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-bata-6LJ-0-1.html" target="_blank">
                拔佳
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-staccato-6LJ-0-1.html" target="_blank">
                思加图
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-millies-6LJ-0-1.html" target="_blank">
                妙丽&nbsp;
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/sr/searchKey.sc?keyword=%E5%8C%85&amp;orderBy=1&amp;attrStr=04Y001&amp;catgNo=6LJ_345" target="_blank">
                 魅力女包


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_345_CEE-0-1.html" target="_blank">
                手提/手包
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_345_I47-0-1.html" target="_blank">
                单肩/斜挎
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_345_8HJ-0-1.html" target="_blank">
                双肩包
              </a>
            </dd>
            
          </dl>
          
          <dl class="item header-nav-dl">
            <dt>
              <a href="http://www.yougou.com/f-0-6LJ_Q5K-0-1.html" target="_blank">
                 经典男包


              </a>
            </dt>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_Q5K_LPU-0-1.html" target="_blank">
                单肩/斜挎
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_Q5K_51J-0-1.html" target="_blank">
                手提/手包
              </a>
            </dd>
            
            <dd>
              <a href="http://www.yougou.com/f-0-6LJ_Q5K_66S-0-1.html" target="_blank">
                双肩包
              </a>
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
<p class="blank10"></p>
<p class="curLct">您当前的位置：<a href="http://www.yougou.com/index.html?t=15444115821651229" class="f_blue">首页</a> &gt; 我的优购</p>
<div class="cen clearfix" style="margin-top: 264px;">
	<!--左侧公共部分 start-->
<div class="u_leftxin u_leftxin fl mgr10" id="umenu">
	<div class="wdygtit"><a href="http://www.yougou.com/my/ucindex.jhtml?t=15444115821658784"><span>我的优购</span></a></div>
	<ul class="jiaoyizx">
    	<li class="ultit">交易中心</li>
    	<li class="myorderli"><a href="http://www.yougou.com/my/order.jhtml?t=15444115821662249"><span>我的订单</span></a></li>
    	<li class="myfavorli"><a href="http://www.yougou.com/my/favorites.jhtml?t=15444115821662752"><span>我的收藏</span></a></li>
    	<li class="mycommentli"><a href="http://www.yougou.com/my/comment.jhtml?t=15444115821667345"><span>商品评论/晒单</span></a></li>
        <li class="msgli"><a href="http://www.yougou.com/my/msg.jhtml?t=15444115821665211"><span id="uc_msg_count">站内消息<i class="huise">（<em>0</em>）</i></span></a></li>
    </ul>
    <ul class="wodezc">
    	<li class="ultit">我的资产</li>
    	<li class="mycouponli"><a href="http://www.yougou.com/my/coupon.jhtml?couponState=1&amp;t=15444115821664610"><span id="my_coupon_tick">我的优惠券</span></a></li>
        <li class="giftcardli"><a href="http://www.yougou.com/my/giftcard.jhtml?couponState=1&amp;t=15444115821669022"><span id="my_giftcard_tick">我的礼品卡</span></a></li>
        <li class="mypointli"><a href="http://www.yougou.com/my/point.jhtml?t=154441158216610574"><span id="my_point_tick">我的积分</span></a></li>
    </ul>
	<ul class="gerensz">
    	<li class="ultit">个人设置</li>
        <li class="safesetli"><a href="http://www.yougou.com/my/safeSet.jhtml?t=154441158216710201"><span id="uc_safe_level">安全设置</span></a></li>
        <li class="myaddrli"><a href="/Homeaddress"><span>我的收货地址</span></a></li>
    </ul>
    <ul class="shouhoufw">
    	<li class="ultit">售后服务</li>
    	<li class="afterservli"><a href="http://www.yougou.com/my/afterService.jhtml?t=15444115821697543"><span>查看退换货</span></a></li>
        <li class="appservli"><a href="http://www.yougou.com/my/applicationService.jhtml?t=15444115821691178"><span>申请退换货</span></a></li>
    </ul>
</div>
    <!--左侧公共部分 end-->
    <div id="ucindex" class="uc_right fl">
    	<!--右侧头部 start-->
<div class="ucwelcom">
	<div class="ucwelcomleft">
        <div class="ucwelcol1">
            <span>欢迎您，</span>
	 			<span class="ucname" title="18820606670">18820606...</span>
        		<span <="" span="">
            <span id="ucIndexMsg" class="msgno"><a id="ucIndexMsgLink" href="javascript:void(0);">未读短消息（<span id="uc_index_count">0</span>）</a></span>
        </span></div>
        <div class="ucwelcol2">
            <p>账户安全:</p>
            <div class="jindutiao">
            	<div style="width:65px"></div>
            </div>
            		<p class="crOrge">危险</p>
            		<p class="crBlue marleft"><a href="http://www.yougou.com/my/safeSet.jhtml?t=15444115816114857">提升</a></p>
        </div>
        <div class="ucwelcol3">
            <div class="bindtel"><i class="phoimg"></i><span>手机</span>
            </div>
            <div class="bindmail"><i class="mailimg"></i><span>邮箱</span>
        			<span class="bindno"><a href="javascript:void(0);" id="safe_bind_modify">未绑定</a></span>
            </div>
        </div>
    </div>
	<div class="couponul">
    	<ul class="">
            <li>
            	<a href="http://www.yougou.com/my/coupon.jhtml?couponState=1&amp;t=15444115816113082">优惠券<br><span>10</span> 张</a>
            </li>
            <li>
            	<a href="http://www.yougou.com/my/giftcard.jhtml?couponState=1&amp;t=15444115816124399">礼品卡<br><span>0</span> 张</a>
            </li>
            <li>
            	<a href="http://www.yougou.com/my/point.jhtml?t=15444115816127758">积分<br><span>100</span> 兑换</a>
            </li>
        </ul>
    </div>
</div>
<script>
try {
YouGou.Util.setHrefStamp('.ucwelcom');
}catch (e) {} 
</script>
        <!--右侧头部 end-->

        
		<!--我最近的订单 start-->
<div class="zjorder">
	<div class="zjordertop">
		<h3>我最近的订单</h3>
		<ul>
			<li>
        		<a href="http://www.yougou.com/my/order.jhtml?type=waitpay&amp;t=15444115820026590" target="_blank">待付款&nbsp;<span class="crOrg">1</span></a>
        	</li>
            <li>
            	<a>待评价&nbsp;<span>0</span></a>
            </li>
            <li>
            	<a>待发货&nbsp;<span>0</span></a>
            </li>
			<li class="lastli"><a> 退/换货&nbsp;<span>0</span></a>
		</li></ul>
		<p class="seeallorde">
			<a href="http://www.yougou.com/my/order.jhtml?t=15444115820029713" target="_blank">查看全部订单</a>
		</p>
	</div>
	
	<table class="zjorderbody2" cellspacing="1" cellpadding="0" width="200">
		<colgroup>
			<col width="571">
			<col width="106">
			<col width="153">
		</colgroup>
		<tbody>
                @foreach($order as $o)
								<tr>
								<td class="ttd1">
									<div class="uc_goods_item uc_myorder_item clearfix">
										<div class="uc_goods_lt clearfix ">
											<dl id="uc_goods_list1" class="uc_goods_list clearfix">
												<div style="width: 300px; height: 83px; float: left;">
														<dt class="info1 relative">
															<a target="_blank" href="">
																	<img src="{{$o->goods_pic}}" onerror="this.src=&#39;http://pcs2.ygimg.cn/images/common/60x60.jpg&#39;" width="60" height="60" alt="STACCATO/思加图2019专柜同款休闲尖头低跟女皮鞋9D978AM9" title="STACCATO/思加图2019专柜同款休闲尖头低跟女皮鞋9D978AM9">
															</a> <span class="pink-size" style="display: none;">{{$o->order_size}}</span>
														</dt>
													<dd class="info3new">
			                                            <span class="tot_goods fl" style="color: rgb(102, 102, 102); cursor: default;">共{{$o->order_num}}件商品</span>
			                                        </dd>
												</div>
												<dd class="express info2 fl" style="left: 0px; margin-left: 50px;">
													<p>
														订单状态： <span class="pinred">
                              @if({{$o->status}}==0)
                              未付款
                              @endif
                            </span>

													</p>
													
													<p></p>
												</dd>
												<dd class="info5 fl clearfix"></dd>
												<dd class="infoReturn fl"></dd>
											</dl>
										</div>
										<div class="uc_goods_lt clearfix "></div>
									</div>
								</td>
								<td class="ttd2">
										<div class="pingjia">
				                            <p>
				                                <a href="http://www.yougou.com/order/orderDetails.jhtml?mainOrderNo=NA6218133421702&amp;t=15444115820031170" target="_blank">订单详情</a>
				                            </p>
				                        </div>
								</td>
							</tr>
              @endforeach
					<!--判断有没有子订单 end-->
				<!--有主订单 end-->
			<!--判断有没有主订单  end-->
			
		</tbody>
	</table>
	
	<!--组装物流单号数据  end-->
	<input type="hidden" name="expressCodes" id="expressCodes" value="">
</div>

		<!--我最近的订单 end-->
		
		<!--我最近的收藏 start-->
		<div class="zjcollection none" id="zjcollection" style="display: none;">
			<div class="zjordertop">
				<h3>我最近的收藏</h3>
				<ul>
					<li><a href="http://www.yougou.com/my/favorites.jhtml?type=lower&amp;t=15444115820039285" target="_blank" id="lowerCountHref">已降价&nbsp;<span class="crOrg" id="lowerCount"></span></a></li>
					<li><a href="http://www.yougou.com/my/favorites.jhtml?type=promotion&amp;t=15444115820037116" target="_blank" id="promotionCountHref">正促销&nbsp;<span class="crOrg" id="promotionCount"></span></a></li>
					<li class="lastli"><a href="http://www.yougou.com/my/favorites.jhtml?type=broken&amp;t=15444115820037895" target="_blank" id="brokenCountHref">即将断货&nbsp;<span class="crOrg" id="brokenCount"></span></a></li>
				</ul>
				<p class="seeallorde">
					<a href="http://www.yougou.com/my/favorites.jhtml?t=15444115820038750" target="_blank">查看全部收藏</a>
				</p>
			</div>
			<div id="my_collection" class="collection_content"></div>
		</div>
		<!--我最近的收藏 end-->
		
		<!--猜你喜欢 start-->
		<div class="cnlike none" id="cnlike" style="display: block;">
		    <div class="zjordertop">
		        <h3>猜你喜欢</h3>
		        <span class="nextBtn2 refresh">换一组</span>
		    </div>
		    <div class="cnlike_content">
		        <div class="gd_like_pro">
		            <!--<a href="javascript:void(0);" id="prevBtn2" class="prevBtn2 ico_left scroll"></a>
		            <a href="javascript:void(0);" id="nextBtn2"  class="nextBtn2 ico_right scroll"></a>-->
		            <a class="prevBtn2 ico_left scroll" href="javascript:void(0);" style="display: none;"></a>
		            <a class="nextBtn2 ico_right scroll" href="javascript:void(0);" style="display: none;"></a>
		            <div class="uc_guessLike_box" id="uc_guessLike_box2" style="height: 490px;">
		                <ul class="uc_pro_list uc_guessLike_list clearfix" style="width: 3960px; left: 0px;"><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-basto/sku-th601ak7-100499780.shtml#ref=my_ucindex&amp;po=guessyoulike_1"><img class="" title="百思图 basto 女鞋 中空凉鞋" src="/static/Home/images/100499780_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="百思图 basto 女鞋 中空凉鞋" href="http://www.yougou.com/c-basto/sku-th601ak7-100499780.shtml#ref=my_ucindex&amp;po=guessyoulike_1">百思图 女士 中空凉鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>158</i></em><del>¥899</del><span class="ico_discount"><i>0.1757508342602892</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-dx9717-101019663.shtml#ref=my_ucindex&amp;po=guessyoulike_2"><img class="" title="阿迪休闲 adidasneo 运动 夹克" src="/static/Home/images/101019663_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 夹克" href="http://www.yougou.com/c-adidasneo/sku-dx9717-101019663.shtml#ref=my_ucindex&amp;po=guessyoulike_2">阿迪休闲 男士 夹克</a></p><p class="price_sc"><em class="ygprc15">¥<i>305</i></em><del>¥499</del><span class="ico_discount"><i>0.6112224448897795</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-eci02-101010701.shtml#ref=my_ucindex&amp;po=guessyoulike_3"><img class="" title="阿迪休闲 adidasneo 运动 双肩包" src="/static/Home/images/101010701_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 双肩包" href="http://www.yougou.com/c-adidasneo/sku-eci02-101010701.shtml#ref=my_ucindex&amp;po=guessyoulike_3">阿迪休闲 男士 双肩包</a></p><p class="price_sc"><em class="ygprc15">¥<i>109</i></em><del>¥199</del><span class="ico_discount"><i>0.5477386934673367</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-ekf76-100915295.shtml#ref=my_ucindex&amp;po=guessyoulike_4"><img class="" title="阿迪三叶草 adidasoriginals 运动 T恤" src="/static/Home/images/100915295_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 T恤" href="http://www.yougou.com/c-adidasoriginals/sku-ekf76-100915295.shtml#ref=my_ucindex&amp;po=guessyoulike_4">阿迪三叶草 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>249</i></em><del>¥249</del><span class="ico_discount"><i>1.0</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-fjk67-100987128.shtml#ref=my_ucindex&amp;po=guessyoulike_5"><img class="" title="阿迪三叶草 adidasoriginals 运动 夹克" src="/static/Home/images/100987128_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 夹克" href="http://www.yougou.com/c-adidasoriginals/sku-fjk67-100987128.shtml#ref=my_ucindex&amp;po=guessyoulike_5">阿迪三叶草 男士 夹克</a></p><p class="price_sc"><em class="ygprc15">¥<i>475</i></em><del>¥799</del><span class="ico_discount"><i>0.5944931163954944</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-eau71-100869168.shtml#ref=my_ucindex&amp;po=guessyoulike_6"><img class="" title="阿迪达斯 adidas 运动 短裤" src="/static/Home/images/100869168_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 短裤" href="http://www.yougou.com/c-adidas/sku-eau71-100869168.shtml#ref=my_ucindex&amp;po=guessyoulike_6">阿迪达斯 男士 短裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>135</i></em><del>¥229</del><span class="ico_discount"><i>0.5895196506550219</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkl63-100990040.shtml#ref=my_ucindex&amp;po=guessyoulike_7"><img class="" title="阿迪休闲 adidasneo 运动 T恤" src="/static/Home/images/100990040_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 T恤" href="http://www.yougou.com/c-adidasneo/sku-fkl63-100990040.shtml#ref=my_ucindex&amp;po=guessyoulike_7">阿迪休闲 女士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>75</i></em><del>¥129</del><span class="ico_discount"><i>0.5813953488372093</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkm01-101011497.shtml#ref=my_ucindex&amp;po=guessyoulike_8"><img class="" title="阿迪休闲 adidasneo 运动 夹克" src="/static/Home/images/101011497_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 夹克" href="http://www.yougou.com/c-adidasneo/sku-fkm01-101011497.shtml#ref=my_ucindex&amp;po=guessyoulike_8">阿迪休闲 女士 夹克</a></p><p class="price_sc"><em class="ygprc15">¥<i>309</i></em><del>¥499</del><span class="ico_discount"><i>0.6192384769539078</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-aqu48-100987377.shtml#ref=my_ucindex&amp;po=guessyoulike_9"><img class="" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" src="/static/Home/images/100987377_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" href="http://www.yougou.com/c-adidasoriginals/sku-aqu48-100987377.shtml#ref=my_ucindex&amp;po=guessyoulike_9">阿迪三叶草 中性 休闲鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>325</i></em><del>¥569</del><span class="ico_discount"><i>0.5711775043936731</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-ekc86-100991734.shtml#ref=my_ucindex&amp;po=guessyoulike_10"><img class="" title="阿迪三叶草 adidasoriginals 运动 T恤" src="/static/Home/images/100991734_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 T恤" href="http://www.yougou.com/c-adidasoriginals/sku-ekc86-100991734.shtml#ref=my_ucindex&amp;po=guessyoulike_10">阿迪三叶草 女士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>145</i></em><del>¥249</del><span class="ico_discount"><i>0.5823293172690763</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-aqr83-100988748.shtml#ref=my_ucindex&amp;po=guessyoulike_11"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988748_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-aqr83-100988748.shtml#ref=my_ucindex&amp;po=guessyoulike_11">阿迪达斯 中性 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>519</i></em><del>¥899</del><span class="ico_discount"><i>0.5773081201334817</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-aa2181-100981139.shtml#ref=my_ucindex&amp;po=guessyoulike_12"><img class="" title="耐克 nike 运动 板鞋/复刻鞋" src="/static/Home/images/100981139_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 板鞋/复刻鞋" href="http://www.yougou.com/c-nike/sku-aa2181-100981139.shtml#ref=my_ucindex&amp;po=guessyoulike_12">耐克 男士 板鞋/复刻鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>349</i></em><del>¥499</del><span class="ico_discount"><i>0.6993987975951904</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-btb36-100989710.shtml#ref=my_ucindex&amp;po=guessyoulike_13"><img class="" title="阿迪休闲 adidasneo 运动 休闲鞋" src="/static/Home/images/100989710_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 休闲鞋" href="http://www.yougou.com/c-adidasneo/sku-btb36-100989710.shtml#ref=my_ucindex&amp;po=guessyoulike_13">阿迪休闲 男士 休闲鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>329</i></em><del>¥569</del><span class="ico_discount"><i>0.5782073813708261</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-efe71-100988737.shtml#ref=my_ucindex&amp;po=guessyoulike_14"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988737_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-efe71-100988737.shtml#ref=my_ucindex&amp;po=guessyoulike_14">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>648</i></em><del>¥1099</del><span class="ico_discount"><i>0.5896269335759782</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-aa7070-100980459.shtml#ref=my_ucindex&amp;po=guessyoulike_15"><img class="" title="耐克 nike 运动 篮球鞋" src="/static/Home/images/100980459_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 篮球鞋" href="http://www.yougou.com/c-nike/sku-aa7070-100980459.shtml#ref=my_ucindex&amp;po=guessyoulike_15">耐克 男士 篮球鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>489</i></em><del>¥699</del><span class="ico_discount"><i>0.6995708154506438</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-ejy19-100912843.shtml#ref=my_ucindex&amp;po=guessyoulike_16"><img class="" title="阿迪达斯 adidas 运动 POLO衫" src="/static/Home/images/100912843_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 POLO衫" href="http://www.yougou.com/c-adidas/sku-ejy19-100912843.shtml#ref=my_ucindex&amp;po=guessyoulike_16">阿迪达斯 男士 POLO衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>88</i></em><del>¥199</del><span class="ico_discount"><i>0.44221105527638194</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-fuk12-100988068.shtml#ref=my_ucindex&amp;po=guessyoulike_17"><img class="" title="阿迪达斯 adidas 运动 夹克" src="/static/Home/images/100988068_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 夹克" href="http://www.yougou.com/c-adidas/sku-fuk12-100988068.shtml#ref=my_ucindex&amp;po=guessyoulike_17">阿迪达斯 男士 夹克</a></p><p class="price_sc"><em class="ygprc15">¥<i>265</i></em><del>¥499</del><span class="ico_discount"><i>0.531062124248497</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-cdn52-100915007.shtml#ref=my_ucindex&amp;po=guessyoulike_18"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100915007_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-cdn52-100915007.shtml#ref=my_ucindex&amp;po=guessyoulike_18">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>425</i></em><del>¥799</del><span class="ico_discount"><i>0.5319148936170213</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bsy74-100988696.shtml#ref=my_ucindex&amp;po=guessyoulike_19"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988696_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-bsy74-100988696.shtml#ref=my_ucindex&amp;po=guessyoulike_19">阿迪达斯 女士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>299</i></em><del>¥569</del><span class="ico_discount"><i>0.5254833040421792</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bsy68-100988671.shtml#ref=my_ucindex&amp;po=guessyoulike_20"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988671_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-bsy68-100988671.shtml#ref=my_ucindex&amp;po=guessyoulike_20">阿迪达斯 女士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>619</i></em><del>¥999</del><span class="ico_discount"><i>0.6196196196196196</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkk68-100990018.shtml#ref=my_ucindex&amp;po=guessyoulike_21"><img class="" title="阿迪休闲 adidasneo 运动 T恤" src="/static/Home/images/100990018_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 T恤" href="http://www.yougou.com/c-adidasneo/sku-fkk68-100990018.shtml#ref=my_ucindex&amp;po=guessyoulike_21">阿迪休闲 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>74</i></em><del>¥129</del><span class="ico_discount"><i>0.5736434108527132</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-fjh42-100991896.shtml#ref=my_ucindex&amp;po=guessyoulike_22"><img class="" title="阿迪三叶草 adidasoriginals 运动 T恤" src="/static/Home/images/100991896_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 T恤" href="http://www.yougou.com/c-adidasoriginals/sku-fjh42-100991896.shtml#ref=my_ucindex&amp;po=guessyoulike_22">阿迪三叶草 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>225</i></em><del>¥399</del><span class="ico_discount"><i>0.5639097744360902</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-bbc21-100990372.shtml#ref=my_ucindex&amp;po=guessyoulike_23"><img class="" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" src="/static/Home/images/100990372_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" href="http://www.yougou.com/c-adidasoriginals/sku-bbc21-100990372.shtml#ref=my_ucindex&amp;po=guessyoulike_23">阿迪三叶草 女士 休闲鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>559</i></em><del>¥799</del><span class="ico_discount"><i>0.6996245306633292</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-ao9819-100916162.shtml#ref=my_ucindex&amp;po=guessyoulike_24"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100916162_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-ao9819-100916162.shtml#ref=my_ucindex&amp;po=guessyoulike_24">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>649</i></em><del>¥969</del><span class="ico_discount"><i>0.6697626418988648</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-ekf75-100987186.shtml#ref=my_ucindex&amp;po=guessyoulike_25"><img class="" title="阿迪三叶草 adidasoriginals 运动 T恤" src="/static/Home/images/100987186_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 T恤" href="http://www.yougou.com/c-adidasoriginals/sku-ekf75-100987186.shtml#ref=my_ucindex&amp;po=guessyoulike_25">阿迪三叶草 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>145</i></em><del>¥249</del><span class="ico_discount"><i>0.5823293172690763</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-eav07-100913559.shtml#ref=my_ucindex&amp;po=guessyoulike_26"><img class="" title="阿迪达斯 adidas 运动 T恤" src="/static/Home/images/100913559_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 T恤" href="http://www.yougou.com/c-adidas/sku-eav07-100913559.shtml#ref=my_ucindex&amp;po=guessyoulike_26">阿迪达斯 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>179</i></em><del>¥329</del><span class="ico_discount"><i>0.5440729483282675</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=guessyoulike_27"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988699_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=guessyoulike_27">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>249</i></em><del>¥499</del><span class="ico_discount"><i>0.49899799599198397</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bvc62-100508019.shtml#ref=my_ucindex&amp;po=guessyoulike_28"><img class="" title="阿迪达斯 adidas 运动 T恤" src="/static/Home/images/100508019_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 T恤" href="http://www.yougou.com/c-adidas/sku-bvc62-100508019.shtml#ref=my_ucindex&amp;po=guessyoulike_28">阿迪达斯 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>95</i></em><del>¥169</del><span class="ico_discount"><i>0.5621301775147929</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-ftx05-101011336.shtml#ref=my_ucindex&amp;po=guessyoulike_29"><img class="" title="阿迪休闲 adidasneo 运动 T恤" src="/static/Home/images/101011336_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidasneo 运动 T恤" href="http://www.yougou.com/c-adidasneo/sku-ftx05-101011336.shtml#ref=my_ucindex&amp;po=guessyoulike_29">阿迪休闲 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>139</i></em><del>¥229</del><span class="ico_discount"><i>0.6069868995633187</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-aa2160-100699537.shtml#ref=my_ucindex&amp;po=guessyoulike_30"><img class="" title="耐克 nike 运动 板鞋/复刻鞋" src="/static/Home/images/100699537_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 板鞋/复刻鞋" href="http://www.yougou.com/c-nike/sku-aa2160-100699537.shtml#ref=my_ucindex&amp;po=guessyoulike_30">耐克 男士 板鞋/复刻鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>349</i></em><del>¥549</del><span class="ico_discount"><i>0.6357012750455373</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-kdv76-100914937.shtml#ref=my_ucindex&amp;po=guessyoulike_31"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100914937_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-kdv76-100914937.shtml#ref=my_ucindex&amp;po=guessyoulike_31">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>312</i></em><del>¥569</del><span class="ico_discount"><i>0.5483304042179262</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasoriginals/sku-aqv21-100987373.shtml#ref=my_ucindex&amp;po=guessyoulike_32"><img class="" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" src="/static/Home/images/100987373_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪三叶草 adidasoriginals 运动 休闲鞋" href="http://www.yougou.com/c-adidasoriginals/sku-aqv21-100987373.shtml#ref=my_ucindex&amp;po=guessyoulike_32">阿迪三叶草 中性 休闲鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>489</i></em><del>¥729</del><span class="ico_discount"><i>0.6707818930041153</i>折</span></p></div></li></ul>
		            </div>
		        </div>
		    </div>
		</div>
		<!--猜你喜欢 end-->
		
		<!--24小时热销推荐 start-->
        <div class="cnlike none" id="hot24" style="display: block;">
            <div class="zjordertop">
                <h3>24小时热销推荐</h3>
                <span class="nextBtn3 refresh">换一组</span>
            </div>
            <div class="cnlike_content">
                <div class="gd_like_pro">
                    <!--<a href="javascript:void(0);" id="prevBtn2" class="prevBtn2 ico_left scroll"></a>
                    <a href="javascript:void(0);" id="nextBtn2"  class="nextBtn2 ico_right scroll"></a>-->
                    <a class="prevBtn3 ico_left scroll" href="javascript:void(0);" style="display: none;"></a>
                    <a class="nextBtn3 ico_right scroll" href="javascript:void(0);" style="display: none;"></a>
                    <div class="uc_guessLike_box" id="uc_guessLike_box3" style="height: 490px;">
                        <ul class="uc_pro_list uc_guessLike_list clearfix" style="width: 3960px; left: 0px;"><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_ucindex&amp;po=hot24_1"><img class="" title="阿迪达斯 adidas 运动 长裤" src="/static/Home/images/100514854_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 长裤" href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_ucindex&amp;po=hot24_1">阿迪达斯 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>158</i></em><del>¥299</del><span class="ico_discount"><i>0.5284280936454849</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_ucindex&amp;po=hot24_2"><img class="" title="阿迪达斯 adidas 运动 斜挎包" src="/static/Home/images/100370348_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 斜挎包" href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_ucindex&amp;po=hot24_2">阿迪达斯 中性 斜挎包</a></p><p class="price_sc"><em class="ygprc15">¥<i>69</i></em><del>¥99</del><span class="ico_discount"><i>0.696969696969697</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_ucindex&amp;po=hot24_3"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100699750_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_ucindex&amp;po=hot24_3">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>369</i></em><del>¥499</del><span class="ico_discount"><i>0.7394789579158316</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=hot24_4"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988699_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=hot24_4">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>249</i></em><del>¥499</del><span class="ico_discount"><i>0.49899799599198397</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=my_ucindex&amp;po=hot24_5"><img class="" title="百丽 belle 女鞋 超长靴" src="/static/Home/images/101026379_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="百丽 belle 女鞋 超长靴" href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=my_ucindex&amp;po=hot24_5">百丽 女士 超长靴</a></p><p class="price_sc"><em class="ygprc15">¥<i>1599</i></em><del>¥1599</del><span class="ico_discount"><i>1.0</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_ucindex&amp;po=hot24_6"><img class="" title="阿迪达斯 adidas 运动 袜子" src="/static/Home/images/100202608_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 袜子" href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_ucindex&amp;po=hot24_6">阿迪达斯 中性 袜子</a></p><p class="price_sc"><em class="ygprc15">¥<i>25</i></em><del>¥29</del><span class="ico_discount"><i>0.8620689655172413</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=my_ucindex&amp;po=hot24_7"><img class="" title="阿迪达斯 adidas 运动 卫衣/套头衫" src="/static/Home/images/100506993_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 卫衣/套头衫" href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=my_ucindex&amp;po=hot24_7">阿迪达斯 男士 卫衣/套头衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>197</i></em><del>¥369</del><span class="ico_discount"><i>0.5338753387533876</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=my_ucindex&amp;po=hot24_8"><img class="" title="他她 tata 女鞋 超长靴" src="/static/Home/images/101018471_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="他她 tata 女鞋 超长靴" href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=my_ucindex&amp;po=hot24_8">他她 女士 超长靴</a></p><p class="price_sc"><em class="ygprc15">¥<i>368</i></em><del>¥1399</del><span class="ico_discount"><i>0.26304503216583275</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-aa7406-100916425.shtml#ref=my_ucindex&amp;po=hot24_9"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100916425_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-aa7406-100916425.shtml#ref=my_ucindex&amp;po=hot24_9">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>559</i></em><del>¥749</del><span class="ico_discount"><i>0.7463284379172229</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-belle/sku-3ux01cm5-100698111.shtml#ref=my_ucindex&amp;po=hot24_10"><img class="" title="百丽 belle 男鞋 满帮鞋" src="/static/Home/images/100698111_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="百丽 belle 男鞋 满帮鞋" href="http://www.yougou.com/c-belle/sku-3ux01cm5-100698111.shtml#ref=my_ucindex&amp;po=hot24_10">百丽 男士 满帮鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>408</i></em><del>¥1138</del><span class="ico_discount"><i>0.3585237258347979</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bk7433-100506954.shtml#ref=my_ucindex&amp;po=hot24_11"><img class="" title="阿迪达斯 adidas 运动 长裤" src="/static/Home/images/100506954_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 长裤" href="http://www.yougou.com/c-adidas/sku-bk7433-100506954.shtml#ref=my_ucindex&amp;po=hot24_11">阿迪达斯 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>219</i></em><del>¥369</del><span class="ico_discount"><i>0.5934959349593496</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bs0526-100868538.shtml#ref=my_ucindex&amp;po=hot24_12"><img class="" title="阿迪达斯 adidas 运动 长裤" src="/static/Home/images/100868538_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 长裤" href="http://www.yougou.com/c-adidas/sku-bs0526-100868538.shtml#ref=my_ucindex&amp;po=hot24_12">阿迪达斯 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>168</i></em><del>¥299</del><span class="ico_discount"><i>0.5618729096989966</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-804343-100483316.shtml#ref=my_ucindex&amp;po=hot24_13"><img class="" title="耐克 nike 运动 卫衣/套头衫" src="/static/Home/images/100483316_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 卫衣/套头衫" href="http://www.yougou.com/c-nike/sku-804343-100483316.shtml#ref=my_ucindex&amp;po=hot24_13">耐克 男士 卫衣/套头衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>239</i></em><del>¥299</del><span class="ico_discount"><i>0.7993311036789298</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-844839-100481189.shtml#ref=my_ucindex&amp;po=hot24_14"><img class="" title="耐克 nike 运动 板鞋/复刻鞋" src="/static/Home/images/100481189_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 板鞋/复刻鞋" href="http://www.yougou.com/c-nike/sku-844839-100481189.shtml#ref=my_ucindex&amp;po=hot24_14">耐克 男士 板鞋/复刻鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>419</i></em><del>¥599</del><span class="ico_discount"><i>0.6994991652754591</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-574236-100590131.shtml#ref=my_ucindex&amp;po=hot24_15"><img class="" title="耐克 nike 运动 板鞋/复刻鞋" src="/static/Home/images/100590131_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 板鞋/复刻鞋" href="http://www.yougou.com/c-nike/sku-574236-100590131.shtml#ref=my_ucindex&amp;po=hot24_15">耐克 男士 板鞋/复刻鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>269</i></em><del>¥449</del><span class="ico_discount"><i>0.5991091314031181</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=my_ucindex&amp;po=hot24_16"><img class="" title="阿迪达斯 adidas 运动 袜子" src="/static/Home/images/100202615_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 袜子" href="http://www.yougou.com/c-adidas/sku-kaw51-100202615.shtml#ref=my_ucindex&amp;po=hot24_16">阿迪达斯 中性 袜子</a></p><p class="price_sc"><em class="ygprc15">¥<i>18</i></em><del>¥29</del><span class="ico_discount"><i>0.6206896551724138</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=my_ucindex&amp;po=hot24_17"><img class="" title="阿迪达斯 adidas 运动 夹克" src="/static/Home/images/100506984_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 夹克" href="http://www.yougou.com/c-adidas/sku-bun17-100506984.shtml#ref=my_ucindex&amp;po=hot24_17">阿迪达斯 男士 夹克</a></p><p class="price_sc"><em class="ygprc15">¥<i>230</i></em><del>¥399</del><span class="ico_discount"><i>0.5764411027568922</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkk65-101011419.shtml#ref=my_ucindex&amp;po=hot24_18"><img class="" title="阿迪休闲 adidas neo 运动 卫衣/套头衫" src="/static/Home/images/101011419_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidas neo 运动 卫衣/套头衫" href="http://www.yougou.com/c-adidasneo/sku-fkk65-101011419.shtml#ref=my_ucindex&amp;po=hot24_18">阿迪休闲 男士 卫衣/套头衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>169</i></em><del>¥299</del><span class="ico_discount"><i>0.5652173913043478</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkk70-100990014.shtml#ref=my_ucindex&amp;po=hot24_19"><img class="" title="阿迪休闲 adidas neo 运动 长裤" src="/static/Home/images/100990014_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidas neo 运动 长裤" href="http://www.yougou.com/c-adidasneo/sku-fkk70-100990014.shtml#ref=my_ucindex&amp;po=hot24_19">阿迪休闲 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>178</i></em><del>¥299</del><span class="ico_discount"><i>0.5953177257525084</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-804422-100545189.shtml#ref=my_ucindex&amp;po=hot24_20"><img class="" title="耐克 nike 运动 长裤" src="/static/Home/images/100545189_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 长裤" href="http://www.yougou.com/c-nike/sku-804422-100545189.shtml#ref=my_ucindex&amp;po=hot24_20">耐克 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>195</i></em><del>¥299</del><span class="ico_discount"><i>0.6521739130434783</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=my_ucindex&amp;po=hot24_21"><img class="" title="阿迪达斯 adidas 运动 长裤" src="/static/Home/images/100503159_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 长裤" href="http://www.yougou.com/c-adidas/sku-bp8742-100503159.shtml#ref=my_ucindex&amp;po=hot24_21">阿迪达斯 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>229</i></em><del>¥399</del><span class="ico_discount"><i>0.5739348370927319</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkl62-101011461.shtml#ref=my_ucindex&amp;po=hot24_22"><img class="" title="阿迪休闲 adidas neo 运动 长裤" src="/static/Home/images/101011461_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidas neo 运动 长裤" href="http://www.yougou.com/c-adidasneo/sku-fkl62-101011461.shtml#ref=my_ucindex&amp;po=hot24_22">阿迪休闲 女士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>179</i></em><del>¥299</del><span class="ico_discount"><i>0.5986622073578596</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-aa7403-100980884.shtml#ref=my_ucindex&amp;po=hot24_23"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100980884_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-aa7403-100980884.shtml#ref=my_ucindex&amp;po=hot24_23">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>449</i></em><del>¥599</del><span class="ico_discount"><i>0.7495826377295493</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-cat/sku-p717692h3bdr44-100975380.shtml#ref=my_ucindex&amp;po=hot24_24"><img class="" title="卡特 cat 户外休闲 休闲靴" src="/static/Home/images/100975380_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="卡特 cat 户外休闲 休闲靴" href="http://www.yougou.com/c-cat/sku-p717692h3bdr44-100975380.shtml#ref=my_ucindex&amp;po=hot24_24">卡特 男士 休闲靴</a></p><p class="price_sc"><em class="ygprc15">¥<i>698</i></em><del>¥1398</del><span class="ico_discount"><i>0.49928469241773965</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidasneo/sku-fkk68-100990017.shtml#ref=my_ucindex&amp;po=hot24_25"><img class="" title="阿迪休闲 adidas neo 运动 T恤" src="/static/Home/images/100990017_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪休闲 adidas neo 运动 T恤" href="http://www.yougou.com/c-adidasneo/sku-fkk68-100990017.shtml#ref=my_ucindex&amp;po=hot24_25">阿迪休闲 男士 T恤</a></p><p class="price_sc"><em class="ygprc15">¥<i>75</i></em><del>¥129</del><span class="ico_discount"><i>0.5813953488372093</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-btn33-100986825.shtml#ref=my_ucindex&amp;po=hot24_26"><img class="" title="阿迪达斯 adidas 运动 篮球鞋" src="/static/Home/images/100986825_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 篮球鞋" href="http://www.yougou.com/c-adidas/sku-btn33-100986825.shtml#ref=my_ucindex&amp;po=hot24_26">阿迪达斯 男士 篮球鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>249</i></em><del>¥469</del><span class="ico_discount"><i>0.5309168443496801</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-916768-100981431.shtml#ref=my_ucindex&amp;po=hot24_27"><img class="" title="耐克 nike 运动 板鞋/复刻鞋" src="/static/Home/images/100981431_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 板鞋/复刻鞋" href="http://www.yougou.com/c-nike/sku-916768-100981431.shtml#ref=my_ucindex&amp;po=hot24_27">耐克 男士 板鞋/复刻鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>424</i></em><del>¥699</del><span class="ico_discount"><i>0.6065808297567954</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-942851-100916520.shtml#ref=my_ucindex&amp;po=hot24_28"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100916520_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-942851-100916520.shtml#ref=my_ucindex&amp;po=hot24_28">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>629</i></em><del>¥899</del><span class="ico_discount"><i>0.699666295884316</i>折</span></p></div></li><li style="height: 490px; position: relative;"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-cw3861-100702666.shtml#ref=my_ucindex&amp;po=hot24_29"><img class="" title="阿迪达斯 adidas 运动 卫衣/套头衫" src="/static/Home/images/100702666_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 卫衣/套头衫" href="http://www.yougou.com/c-adidas/sku-cw3861-100702666.shtml#ref=my_ucindex&amp;po=hot24_29">阿迪达斯 男士 卫衣/套头衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>244</i></em><del>¥399</del><span class="ico_discount"><i>0.6115288220551378</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-dwh18-100914950.shtml#ref=my_ucindex&amp;po=hot24_30"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100914950_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-dwh18-100914950.shtml#ref=my_ucindex&amp;po=hot24_30">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>299</i></em><del>¥499</del><span class="ico_discount"><i>0.5991983967935872</i>折</span></p></div></li><li style="height: 490px; position: relative;" class="clone"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_ucindex&amp;po=hot24_1"><img class="" title="阿迪达斯 adidas 运动 长裤" src="/static/Home/images/100514854_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 长裤" href="http://www.yougou.com/c-adidas/sku-bwd00-100514854.shtml#ref=my_ucindex&amp;po=hot24_1">阿迪达斯 男士 长裤</a></p><p class="price_sc"><em class="ygprc15">¥<i>158</i></em><del>¥299</del><span class="ico_discount"><i>0.5284280936454849</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_ucindex&amp;po=hot24_2"><img class="" title="阿迪达斯 adidas 运动 斜挎包" src="/static/Home/images/100370348_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 斜挎包" href="http://www.yougou.com/c-adidas/sku-bgb39-100370348.shtml#ref=my_ucindex&amp;po=hot24_2">阿迪达斯 中性 斜挎包</a></p><p class="price_sc"><em class="ygprc15">¥<i>69</i></em><del>¥99</del><span class="ico_discount"><i>0.696969696969697</i>折</span></p></div></li><li style="height: 490px; position: relative;" class="clone"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_ucindex&amp;po=hot24_3"><img class="" title="耐克 nike 运动 跑步鞋" src="/static/Home/images/100699750_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="耐克 nike 运动 跑步鞋" href="http://www.yougou.com/c-nike/sku-908985-100699750.shtml#ref=my_ucindex&amp;po=hot24_3">耐克 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>369</i></em><del>¥499</del><span class="ico_discount"><i>0.7394789579158316</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=hot24_4"><img class="" title="阿迪达斯 adidas 运动 跑步鞋" src="/static/Home/images/100988699_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 跑步鞋" href="http://www.yougou.com/c-adidas/sku-bsx36-100988699.shtml#ref=my_ucindex&amp;po=hot24_4">阿迪达斯 男士 跑步鞋</a></p><p class="price_sc"><em class="ygprc15">¥<i>249</i></em><del>¥499</del><span class="ico_discount"><i>0.49899799599198397</i>折</span></p></div></li><li style="height: 490px; position: relative;" class="clone"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=my_ucindex&amp;po=hot24_5"><img class="" title="百丽 belle 女鞋 超长靴" src="/static/Home/images/101026379_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="百丽 belle 女鞋 超长靴" href="http://www.yougou.com/c-belle/sku-82868dc8-101026379.shtml#ref=my_ucindex&amp;po=hot24_5">百丽 女士 超长靴</a></p><p class="price_sc"><em class="ygprc15">¥<i>1599</i></em><del>¥1599</del><span class="ico_discount"><i>1.0</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_ucindex&amp;po=hot24_6"><img class="" title="阿迪达斯 adidas 运动 袜子" src="/static/Home/images/100202608_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 袜子" href="http://www.yougou.com/c-adidas/sku-kaw51-100202608.shtml#ref=my_ucindex&amp;po=hot24_6">阿迪达斯 中性 袜子</a></p><p class="price_sc"><em class="ygprc15">¥<i>25</i></em><del>¥29</del><span class="ico_discount"><i>0.8620689655172413</i>折</span></p></div></li><li style="height: 490px; position: relative;" class="clone"><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=my_ucindex&amp;po=hot24_7"><img class="" title="阿迪达斯 adidas 运动 卫衣/套头衫" src="/static/Home/images/100506993_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="阿迪达斯 adidas 运动 卫衣/套头衫" href="http://www.yougou.com/c-adidas/sku-bvc40-100506993.shtml#ref=my_ucindex&amp;po=hot24_7">阿迪达斯 男士 卫衣/套头衫</a></p><p class="price_sc"><em class="ygprc15">¥<i>197</i></em><del>¥369</del><span class="ico_discount"><i>0.5338753387533876</i>折</span></p></div><div><p class="goods_img"><a target="_blank" href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=my_ucindex&amp;po=hot24_8"><img class="" title="他她 tata 女鞋 超长靴" src="/static/Home/images/101018471_01_s.jpg" width="160" height="160"></a></p><p class="pdt_name"><a target="_blank" title="他她 tata 女鞋 超长靴" href="http://www.yougou.com/c-tata/sku-ds661dc8-101018471.shtml#ref=my_ucindex&amp;po=hot24_8">他她 女士 超长靴</a></p><p class="price_sc"><em class="ygprc15">¥<i>368</i></em><del>¥1399</del><span class="ico_discount"><i>0.26304503216583275</i>折</span></p></div></li></ul>
                    </div>
                </div>
            </div>
        </div>
        <!--24小时热销推荐 end-->
    </div>
    
     <!--最右侧部分 start-->
    <div class="uc_last_right fr" id="umenu_right">

        <!--商品降价start-->
        <div class="price_down mb30 none" id="price_down" style="display: none;">
            <div class="cent_goods_msg">
                <div class="cent_goods_tit">
                    <span class="fl">商品降价</span>
                    <span id="funmove-page2" class="c999 fr"><span class="ce60">1</span>/1</span>
                </div>
                <div class="cent_goods_sm">
                    <a href="javascript:;" class="prevBtn4 pdown_prev"></a>
                    <a href="javascript:;" class="nextBtn4 pdown_next"></a>
                    <div id="uc_guessLike_box4" class="goods_tu">
                        <ul class="uc_pro_list uc_guessLike_list clearfix">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--商品降价end-->

		<!--秒杀start-->
        <div class="price_down start_skill mb30 none" id="seckill" style="display: none;">
            <div class="cent_goods_msg">
                <div class="cent_goods_tit">
                    <span class="fl">秒杀</span>
                    <a href="http://www.yougou.com/topics/miaosha.shtml" target="_blank" class="c999 fr">查看更多</a>
                </div>
                <div class="cent_goods_sm">
                    <a href="javascript:;" class="nextBtn5 huan_next">换一批</a>
                    <div id="uc_guessLike_box5" class="goods_tu skill_gods">
                        <ul class="uc_pro_list uc_guessLike_list clearfix">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--秒杀end-->
        
        <!--最近浏览start-->
        <div class="recent_browse none" id="recentView" style="display: none;">
            <div class="re_bro_title">最近浏览</div>
            <div class="re_bro_goods">
                <ul>
                </ul>
            </div>
        </div>
        <!--最近浏览end-->
        
    </div>
    <!--最右侧部分 end-->
    
</div>
<p class="blank20"></p>
<!--公共尾部 start-->
<!--调查问卷入口-->


<!--环信 start-->
<script type="text/javascript" src="/static/Home/js/CustomerManagement.js"></script>
<script src="/static/Home/js/easemob.js"></script><div class="easemobim-prompt-wrapper"><div class="loading"><div class="em-widget-loading"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"><circle opacity=".3" fill="none" stroke="#000" stroke-width="4" stroke-miterlimit="10" cx="35" cy="35" r="11"></circle><path fill="none" stroke="#E5E5E5" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M24 35c0-6.1 4.9-11 11-11 2.8 0 5.3 1 7.3 2.8"></path></svg></div></div></div>
<!--环信 end-->
<div class="footer-feature">
  <div class="container">
    <div class="customer-service">
      <ul class="content">
        <li>
          <i class="icon bg-bottom_logistics"></i>
          <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">正品保证</a></span>
        </li>
        <li class="item">
          <i class="icon bg-bottom_ensure"></i>
          <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">10天退换货</a></span>
        </li>
        <li class="item">
          <i class="icon bg-bottom_service"></i>
          <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">10天调补差价额</a></span>
        </li>
        <li class="item">
          <i class="icon bg-bottom_Price_difference"></i>
          <span class="title"><a href="http://www.yougou.com/help/aboutus.shtml" target="_blank" rel="nofollow">09:00—21:00在线客服</a></span>
        </li>
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
            <dt>新手帮助</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/help/agreement.shtml" target="_blank" rel="nofollow" class="link">交易条款协议</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/registration.shtml" target="_blank" rel="nofollow" class="link">注册新用户</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/memberpoints.shtml" class="link">会员积分详情</a>
            </dd>
          </dl>
        </li>
        <li class="item">
          <dl>
            <dt>购物指南</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/help/orderprocess.shtml" class="link">订购流程</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/inspectionandsign.shtml" class="link">验货与签收</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/orderinquiries.shtml" class="link">订单配送</a>
            </dd>
          </dl>
        </li>
        <li class="item">
          <dl>
            <dt>支付/配送</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/help/payonline.shtml" class="link">支付方式</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/shippingmethod.shtml" class="link">配送方式</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/deliverytf.shtml" class="link">配送时间及运费</a>
            </dd>
          </dl>
        </li>
        <li class="item">
          <dl>
            <dt>售后服务</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/help/returnpolicy.shtml" class="link">退换货政策</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/refundment.shtml" class="link">退款说明</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/invoicesystem.shtml" class="link">发票制度</a>
            </dd>
          </dl>
        </li>
        <li class="item">
          <dl>
            <dt>会员服务</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/help/forgotpassword.shtml" class="link">找回密码</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/help/contactus.shtml" class="link">联系我们</a>
            </dd>
            <dd class="dd-title">&nbsp;</dd>
          </dl>
        </li>
        <li class="item" style="display: none;">
          <dl>
            <dt>企业合作</dt>
            <dd class="dd-title-first">
              <a href="http://www.yougou.com/my/ucindex.jhtml#" class="link">分销项目</a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/my/ucindex.jhtml#" class="link">礼品卡</a>
            </dd>
            <dd class="dd-title">&nbsp;</dd>
          </dl>
        </li>
        <li class="item">
          <dl>
            <dt>优购客服</dt>
            <dd class="dd-title-first">
              <a onclick="easemobim.bind({configId: &quot;1f142cd0-a8ca-4769-b447-59f9fa01bb65&quot;})" href="javascript:;" class="link">
                <i class="icon bg-bottom_Consultation"></i> 在线咨询</a>
            </dd>
            <dd class="dd-title">
              <a href="javascript:;" class="link">Email: ygservice@belle.com.cn
              </a>
            </dd>
            <dd class="dd-title">
              <a href="http://www.yougou.com/my/ucindex.jhtml#" class="link">微信客服：优购时尚商城</a>
            </dd>
          </dl>
        </li>
      </ul>
    </div>
    <div class="national-certification">
      <ul class="content">
        <li>
          <a href="http://www.anquan.org/authenticate/cert/?site=www.yougou.com&amp;at=realname" key="521b3d2524306332d3107ff3" target="_blank">
            <img width="124" height="47" src="/static/Home/images/sm_124x47.png" style="border: medium none;" alt="安全联盟认证">
          </a>
        </li>
        <li class="item">
<!--          <a href="http://szcert.ebs.org.cn/93740fab-b419-4b67-940c-d2e808d6480b" target="_blank" title="众信网" rel="nofollow">-->
          <a href="https://szcert.ebs.org.cn/817869EF-8D9D-4C35-BABB-451984A81886" target="_blank" title="众信网" rel="nofollow">
            <img src="/static/Home/images/ebs-logo.jpg" width="124" height="47">
          </a>
        </li>
        <li class="item">
          <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">
            <img src="/static/Home/images/beian1.png" width="124" height="47">
          </a>
        </li>

        <li class="item">
          <a href="http://61.144.227.239:9002/" target="_blank" rel="nofollow">
            <img src="/static/Home/images/beian2.png" width="124" height="47">
          </a>
        </li>
      </ul>
      <ul class="qr-code">
        <li>
          <div class="border">
            <img src="/static/Home/images/app.jpg" alt="扫描下载手机客户端" class="img-app">
          </div>
          <div class="title">扫描下载手机客户端</div>
        </li>
        <li class="item">
          <div class="border">
            <img src="/static/Home/images/weChat.jpg" alt="关注公众号">
          </div>
          <div class="title">关注公众号</div>
        </li>
      </ul>
    </div>
    <div class="friendly-link">
      <ul class="content">
        <li>
          <a href="http://www.yougou.com/help/aboutus.shtml" class="title-first">关于优购</a>|
        </li>
        <li>
          <a href="http://www.yougou.com/group_purchasing.shtml" class="title">集团采购</a>|
        </li>
        <li>
          <a href="http://www.yougou.com/help/zhaopin.shtml" class="title">招贤纳士</a>|
        </li>
        <li>
          <a href="http://www.yougou.com/topics/mobile.shtml" class="title">手机优购</a>|
        </li>
        <li>
          <a href="http://www.yougou.com/help/contactus.shtml" class="title">联系我们</a>|
        </li>
        <li>
          <a href="http://www.yougou.com/friendlink.shtml" class="title">友情链接</a>
        </li>
      </ul>
    </div>
    <div class="copyright">
      <p>
        Copyright © 2011-2016 Yougou Technology Co., Ltd.
        <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">粤ICP备09070608号-4</a>
        增值电信业务经营许可证：
        <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">粤 B2-20090203
        </a>&nbsp;
        <span>深公网安备：4403101910665 </span>
        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44030502000017">
          <span>粤公网安备 44030502000017号</span>
        </a>
      </p>
    </div>
  </div>
</div>

<!-- common js -->
<span class="none">
<!-- 1. sourceChannel -->
<script type="text/javascript" src="/static/Home/js/sourceChannel.js"></script>
<!-- 2.  mv    -->
<!--<script src="http://pcs2.ygimg.cn/template/common/js/mv.js?4.3.4" type="text/javascript"></script>-->
<script type="text/javascript" src="/static/Home/js/mv.js"></script>
<!-- 4. google analytics -->
<script>
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
<!-- Google Code for &#35775;&#38382;&#39318;&#39029; Remarketing List -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1016027598;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "666666";
var google_conversion_label = "ni7GCOL2nQIQzrO95AM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="/static/Home/images/f(2).txt"></script>
<noscript>
<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1016027598/?label=ni7GCOL2nQIQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</span>
<!-- common js end -->
<!----><script>
// url添加时间戳随机数
try {
YouGou.Util.setHrefStamp('.uc_right');
YouGou.Util.setHrefStamp('.u_right');
}catch (e) {} 
</script>
<!--baidu share start-->
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6492363"></script>
<script type="text/javascript" id="bdshell_js" src="/static/Home/js/share.js"></script>
<script type="text/javascript">
var bds_config = {
'wbUid': '2170730475',
'snsKey':{
'tsina':'2051478043',
'qzone':'1991789003',
'tqq':'2352293a29264911e331ea610ea358f6'
}
};
document.getElementById("bdshell_js").src = "//www.yougou.com/js/static/api/js/share.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!--baidu share end-->


<!--公共尾部 end-->
<script>
/*点评处的tab*/
$("#uc_cmtPro").ygSwitch(".uc_proCmt > .uc_proCmt_table",{
	trigger:'a',
	triggerType: "click"
});	

// url添加时间戳随机数
try {
YouGou.Util.setHrefStamp('.uc_right');
}catch (e) {} 

// 记录网站用户登陆状况
_gaq.push(['_trackPageview','/PageAction/st/my/left_1']);
</script>
<script type="text/javascript" src="/static/Home/js/yg.newucenter.js"></script>

<script type="text/javascript">

    /*共xx件商品  若产品数量小于5件则没有下拉弹层*/
    var td_num = $(".uc_goods_item .uc_goods_list").length,id_str="",info_num;
    for(var i=1;i <= td_num;i++){
        id_str = "#uc_goods_list"+i; //合成ID名
        info_num = $(id_str).find(".info1").length;
        if(info_num < 5){
            $(id_str).find(".info3new").removeClass("info3new_hover");
            $(id_str).find(".info3new .is").hide();
            $(id_str).find(".tot_goods").css({"color":"#666","cursor":"default"});
        }

    }

    /*共9件商品下拉弹层*/
    $(".info3new_hover").live("mouseover",function(){
        $(this).css("z-index","1000");
        $(this).find(".oth_goods").css({"display":"block","zIndex":"10"});
    })
    $(".info3new_hover").live("mouseout",function(){
        $(this).find(".oth_goods").hide();
        $(this).find(".oth_goods").css("zIndex","0");
        $(this).css("z-index","0");
    })

    /*鼠标划过商品小图显示数量，尺码*/
    $(".uc_myorder_item .info1").live("mouseover",function(){
        $(this).find(".pink-size").css("display","block");
    })
    $(".uc_myorder_item .info1").live("mouseout",function(){
        $(this).find(".pink-size").css("display","none");
    })

    /*鼠标划过猜你喜欢、24小时热销模块，显示左右剪头*/
    $(".cnlike .cnlike_content").live("mouseover",function(){
        $(this).find(".scroll").css("display","block");
    })
    $(".cnlike .cnlike_content").live("mouseout",function(){
        $(this).find(".scroll").css("display","none");
    })

    /*鼠标划过商品降价模块，显示左右剪头*/
    $(".uc_last_right .price_down").live("mouseover",function(){
        $(this).find(".prevBtn4").css("display","block");
        $(this).find(".nextBtn4").css("display","block");
    })
    $(".uc_last_right .price_down").live("mouseout",function(){
        $(this).find(".prevBtn4").css("display","none");
        $(this).find(".nextBtn4").css("display","none");
    })

    function domMerge( wrapper , len ){ //此函数用来将两个li合并成一个li，以实现单行轮播转换为双行轮播
        if( $(wrapper).find("li").length <= (isNaN(len) ? 4 : len) ) return;
        $(wrapper).find("li").wrapInner('<div></div>').css('height',245*2);
        $(wrapper).find("li:odd div").each(function(){
            var parent = $(this).parent('li:first');
            var prevLi = parent.prev();
            prevLi.append($(this));
            parent.remove();
        });
        $(wrapper).css('height',245*2);
    }
	function setPageFoot(){
	    if(!$('#funmove-page2').length) return;
	    var str = $('#funmove-page2').html();
	    var page = str.match(/\d+/g);
	    $('#funmove-page2').html('<span>' + page[0] + '</span>/' + page[1] );
	}
</script>

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
<!-- Google marketing -->

<!-- Google Code Parameters -->
<script type="text/javascript">
var google_tag_params = {
    ecomm_prodid: [],
    brand:'',
    firstCategoryName:'',
    subCategoryName:'',
    thirdCategoryName:'',
    ecomm_pagetype:'usercenter',
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
<script type="text/javascript" src="/static/Home/images/f(2).txt">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



<iframe id="blockbyte-bs-sidebar" class="notranslate" data-pos="left" src="/static/Home/images/saved_resource.html"></iframe><div id="blockbyte-bs-indicator" class="blockbyte-bs-fullHeight blockbyte-bs-visible" data-pos="left" style="width: 2px; height: 100%; top: 0%;"><div><span></span></div></div></body></html>