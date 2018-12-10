//判断专题过期
var expireTime=$('body').attr('expire');
if(expireTime&&expireTime!=''){
	var now=new Date();
	var expireTime=new Date(expireTime);
	if(expireTime<now){
		$(".yg_category_nav").next().prepend('<div class="ygwrap topic_expire"></div>');
	}
}

//控制右侧浮动飘层
var rfixed=$("#rightFixed");
if($.trim(rfixed.html())!='')
{
	rfixed.jqScrollTop();
	/*#10673 时尚商城首页和专题页飘窗导航位置调整*/
	//var rfixedW=rfixed.outerWidth(true);由于已有css样式问题，导致js为了兼容ie7要做相应处理
	var rfixedW=parseInt(rfixed.find(".fltlayer").css("width"));
	rfixed.css('width',rfixedW+'px');
	//var eleW=ele.outerWidth(true);
	//.yg_category_nav
	$(window).resize(function(){
		var _windowW=$(window).width();
		//console.log((_windowW/2)>=(1190/2)+10+rfixedW);
		if((_windowW/2)>=(1190/2)+10+rfixedW)
		{
			var left=(_windowW-1190)/2+1190+10;
			rfixed.css("right",'auto');
			rfixed.css("left",left+'px');
		}else{
			rfixed.css("left",'auto');
			rfixed.css("right",0);
		}
		
	});
	//$(window).resize();	
	$('#mainBox').addClass('hasfloatbar');//有浮层时 查看更多>>左移，以免被浮层挡住

}
//新专题浮窗class name为floatlayout
if($('.floatlayout').length>0){
    $('#mainBox').addClass('hasfloatbar');//有浮层时 查看更多>>左移，以免被浮层挡住
}



//积分换券
$('.integral_exchange ').click(function(){
    if(confirm('是否确认兑换？')){
        var activeId = $(this).attr("redeemId");
        $.ajax({
            type: "POST",
            data:{"activeId" : activeId},
            dataType : "json",
            url : "/my/redeemCoupon.jhtml",
            success: function(data){
                var state = parseInt(data.state);
                if(state == 1){
                    ygDialog({
                        title:'提示',
                        width:250,
                        height:100,
                        content:'<div style="padding:20px 60px;line-height:25px;font-size:14px;">兑换成功<br/>立即<a class="cblue" href="http://www.yougou.com/my/coupon.jhtml?couponState=1" target="_blank">查看</a>我的优惠券</div>'
                    });
                }else if(state == 3){
                    ygDialog({url:"/my/checkMobile.jhtml?activeId="+activeId+"&type=1&r="+Math.random(),title:"手机绑定",width:460,height:300,closable:true,loaded:YGM.Base.SafeCheck});
                }else if(state == 2){
                    alert(data.result);
                }else if(state == 0){
                    ygDialog({url:"/my/checkMobile.jhtml?activeId="+activeId+"&type=2&r="+Math.random(),title:"手机安全验证",width:460,height:300,closable:true,loaded:YGM.Base.SafeCheck});
                }else if(state == 9){
                    YouGou.Biz.loginPop({title : '您尚未登录',lock: true,closable:true,refreshTopWin:true});
                }else if(state == 10){
					ygDialog({url:"/my/showImgCode.jhtml?activeId="+activeId+"&type=2&r="+Math.random(),title:"兑换验证",width:460,height:300,closable:true,loaded:YGM.Base.SafeCheck});
				}
            }
        });
    }
    return false;
});
//自由代码轮播
$('.JSfree_VSfocus').each(function(){
    var me=$(this);

    var isPre=me.attr('ispre')=='true'?true:false;
    var iPageItems=me.attr('iPageItems')?me.attr('iPageItems'):1,
        isAutoPlay=me.attr('isAutoPlay')?me.attr('isAutoPlay'):false,theme=me.attr('theme')?me.attr('theme'):'none';
    me.VSfocus({isPre:isPre,theme:theme,isAutoPlay:isAutoPlay,iPageItems:parseInt(iPageItems)});
});
 //== brand move function ==
   var nfun_move=function(position_left,position_right,position_id){	      
	$("#"+position_left).click(function(){
	$("#"+position_id+" img").each(function() {
       if($(this).attr("src")!=$(this).attr("original")){
		   $(this).attr("src",$(this).attr("original"));
		   } 
    });
		  var index = $("#"+position_id+" a").length-20;
		  $("#"+position_id+" a:lt("+index+")").appendTo("#"+position_id);

	})
	  $("#"+position_right).click(function(){
		$("#"+position_id+" img").each(function() {
       if($(this).attr("src")!=$(this).attr("original")){
		   $(this).attr("src",$(this).attr("original"));
		   } 
    });  
		$("#"+position_id+" a:lt(20)").appendTo("#"+position_id);
	})
	}
//专题页使用的loazylod
$.fn.lazyloadImg=function(){
	var dThis = this;
	this.each(function(){
		$(this).attr('load','unload');
	})
	$(window).scroll(function(){
		var $window = $(window),nTop = $window.scrollTop()+$window.height();
		dThis.each(function(){
			if($(this).attr('load')=='unload'&&nTop>$(this).offset().top){
				var dImgs = $(this).find('p.proImg img[original]');
				dImgs.each(function(){
					$(this).attr('src',$(this).attr('original'));
				});
				$(this).attr('load','loaded');
			}
		});
	});	
	return this;
}
$('.topicProList').lazyloadImg();
if($('#newtopicbd')[0]){
	$('.lazy_loading').lazyload();
	//自适应
	$(window).resize(function(){
		if($(window).width()>=1190){
			$("body").addClass("selfadaptat");
		}else{
			$("body").removeClass("selfadaptat");
		}
	});
	$(window).resize();
}
/*
$(".proImg img").lazyload({
     placeholder:YouGou.UI.uimg.img160,
     threshold:200,
     placeholder:YouGou.UI.uimg.img1
}); 
*/

//加载自动完成
$('#kword').focus(function(){
		$('body').append($('#jsAutocomplete').text());
});
nfun_move("brand-left","brand-right","brand-list");


//10009控制头部手机优购点中 
if($('#sjyg').length>0)
{
	$('#top_nav .yg a.clicked').removeClass('clicked');
	if(!$('#top_nav .phone a.phone_text').hasClass('clicked'))
	{
		$('#top_nav .phone a.phone_text').addClass('clicked');
	}
	
}
//版式2增加轮播效果
if(!document.getElementById('newtopicbd')){
	$(".tpc_lst_module2_wrap").each(function(){
		if($(this).find('ul>li').length>3){
			var id='#'+$(this).parents('.tpc_lst_module2:first').attr('id');
			$(this).find('span').show();
			$(id+" .tpc_lst_module2_wrap").ygSwitch(id+' .tpc_lst_module2_wrap>ul>li',{
				prevBtn:id+' .tpc_lst_module2_pre',
				nextBtn:id+' .tpc_lst_module2_nxt',
				steps:3,
				visible:3,
				lazyload:true,
				effect: "scroll",
				circular:true
			}).carousel();
		}
	});
}
/*$('.tpc_lst_module2_wrap ').VSfocus({isPre:true,theme:'none',isAutoPlay:false,iPageItems:3});   */
//噢来变成专题页后，要处理定位问题
$(function(){
	
	var url=window.location.href;
	var str=/1394617951051/;
	if(str.test(url))
	{
		$('#top_nav .yg a.clicked').removeClass('clicked');
		if(!$('#top_nav .outlets a').hasClass('clicked'))
		{
			$('#top_nav .outlets a').addClass('clicked');
		}
	}
});