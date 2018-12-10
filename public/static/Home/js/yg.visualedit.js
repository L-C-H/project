/*此JS为可视化编辑所有组件和布局必须的js，此JS依赖jquery.js和yg.common.js*/
YouGou.visualedit={};
var YGV=YouGou.visualedit;
(function($){
	//焦点图
	//theme:number/title/thumb
$.fn.VSfocus = function (opts) {
    var ofuntion={
        clear:function(o){
            o.removeClass('vsfocus vsfocusnumber vsfocustitle vsfocusthumb').find('.vsfocus_preNext').remove();
            o.find('.vsfocus_btn').remove();
            o.find('ul').css({'left':0,'width':'auto'});
        },
        reload:function(o){
            var opt = o.data('opt');
            o.VSfocus('clear').VSfocus(opt);
        }
    }
    if(typeof(opts)=='string'){
        return this.each(function(){
            ofuntion[opts]($(this));
        });

    }else{
        var opt = $.extend({
            speed: 5000,
            direction: 'top',
            eventType: 'click',
            theme: 'number',
            isPre: false,
            isOpacity: false,	
            isTotal: false,		//显示总数，如1/10页
            isAutoPlay: true,
            showBtn: 'always',
            isClone:false,
			iPageItems:1,	//一页个数，默认为1，适用于焦点图
            isLoop:true		
        }, opts || {});
        return this.each(function () {
            var o = $(this);
            o.data('opt',opt);
            var sWidth = $('div',o).length>0?$('div',o).width():o.width(),sHeight=o.height(); //获取焦点图的宽度（显示面积）
            var len = $("ul li", o).length; //获取焦点图个数
			var iPageItems=opt.iPageItems;
            //alert(len)
            if (len < iPageItems+1) { return; }
			var maxpage=Math.ceil(len/iPageItems);
            var lis = $("img", o);
            var index = 0;
            var picTimer;
            if(opt.isClone){o.data('dom',o.html())}
            o.addClass('vsfocus');
			if(iPageItems==1){
				o.find('li').css({'width':sWidth,'height':sHeight});
			}else{
				sWidth=$('li',o)[0].offsetWidth;
			}
            //添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
            var btn = '';
            if (opt.theme != 'none') {
                o.addClass('vsfocus'+opt.theme)
                btn = "<ol class='vsfocus_btn'>";
                for (var i = 0; i < len; i++) {
                    switch (opt.theme) {
                        case 'title':
                            btn += '<li>' + lis.eq(i).attr('alt') + '</li>';
                            break;
                        case 'thumb':
                            btn += '<li><img src="' + lis.eq(i).attr('src') + '"/></li>';
                            break;
                        case 'number':
                            btn += '<li>' + (i + 1) + '</li>';
                            break;
                    }
                }
                btn += "</ol>";
            }
            if (opt.isPre) {
                btn += '<div class="vsfocus_preNext vsfocus_pre" index="0">‹</div><div class="vsfocus_preNext vsfocus_next" index="0">›</div>';
            }
            if (opt.isTotal) {
                btn += '<div class="total">/' + len + '</div>';
            }
            o.append(btn);
            if(!opt.isLoop){
                $(".vsfocus_pre", o).addClass('vsfocus_disabled');
            }
            if (opt.showBtn == 'hover') {
                var btns = $('.slide-img').siblings().hide();
                o.hover(function () {
                    btns.show('fast');
                }, function () { btns.hide('fast'); })
            }
            //为小按钮添加鼠标滑入事件，以显示相应的内容
            $(".vsfocus_btn li", o).mouseenter(function () {
                index = $(".vsfocus_btn li", o).index(this);
                showPics(index);
            }).eq(0).trigger("mouseenter");

            //上一页、下一页按钮透明度处理
            if (opt.opacity) {
                $(".vsfocus_preNext", o).css("opacity", opt.opacity).hover(function () {
                    $(this).stop(true, false).animate({ "opacity": "0.5" }, 300);
                }, function () {
                    $(this).stop(true, false).animate({ "opacity": "0.2" }, 300);
                });
            }
            //上一页按钮
            $(".vsfocus_pre", o).click(function () {
                if($(this).hasClass('vsfocus_disabled')){return}
                $(".vsfocus_next", o).removeClass('vsfocus_disabled');
                index -= 1;
                if (index<0) {
                    if(opt.isLoop){
                        index = maxpage - 1;
                    }else{return;}
                }
                showPics(index);
                if(index==0&&!opt.isLoop){
                    $(this).addClass('vsfocus_disabled');
                }
                $(".vsfocus_preNext", o).attr('index',index);
            });

            //下一页按钮
            $(".vsfocus_next", o).click(function () {
                if($(this).hasClass('vsfocus_disabled')){return}
                $(".vsfocus_pre", o).removeClass('vsfocus_disabled');
                index += 1;
                if (index == maxpage) {
                    if(opt.isLoop){
                        index = 0;
                    }else{
                        $(this).addClass('vsfocus_disabled')
                        return;
                    }
                }
                showPics(index);
                if(index==maxpage-1&&!opt.isLoop){
                    $(this).addClass('vsfocus_disabled');
                }
                $(".vsfocus_preNext", o).attr('index',index);
            });

            //本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
            $("ul", o).css("width", sWidth *len);

            //鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
            if (opt.isAutoPlay) {
                o.hover(function () {
                    clearInterval(picTimer);
                }, function () {
                    picTimer = setInterval(function () {
                        showPics(index);
                        index++;
                        if (index == len) { index = 0; }
                    }, opt.speed);
                }).trigger("mouseleave");
            }
            //显示图片函数，根据接收的index值显示相应的内容
            function showPics(index) { //普通切换
				index=Math.floor(index);
                var nowLeft = -index*opt.iPageItems * sWidth; //根据index值计算ul元素的left值
                $("ul", o).stop(true, false).animate({ "left": nowLeft }, 300); //通过animate()调整ul元素滚动到计算出的position
                $(".vsfocus_btn li", o).stop(true, false).removeClass('vsfocus_btn_on').eq(index).addClass('vsfocus_btn_on')
            }

        })
    }
}

})(jQuery);

YGV.Module={
	/*组件部分*/
	initModule:function(d){
		//焦点图
		$('.focusimg_box').VSfocus();
		//品牌墙 ||热门品牌
		$('.brand_wall').VSfocus({isPre:true,theme:'none',isAutoPlay:false,isLoop:true}).find('a').hover(function(){
				$(this).find('.logolayer').show();
			},function(){
				$(this).find('.logolayer').hide();
			});
		//产品列表四翻页
		$('.tpc_lst_module2_wrap').VSfocus({isPre:true,theme:'none',isAutoPlay:false,iPageItems:3});
		//图片懒加载??
		$('#focusImg img:first,ul.prolist img,ul.imglst img').lazyload();
			//tab轮播
			var tabtime = 3;
			var tabSwitchOption = {
				currCls: 'on',
				circular:true,
				trigger:'li'
			};
		//热销排行
		var indmd4=$('.ind_md4');
		if(indmd4.length>0){
			$('.tab',indmd4).ygSwitch(".ind_md4 .imglst",tabSwitchOption)/*.autoplay(tabtime)*/;		
		}
		//楼层
		 $('.chn_md').each(function(){
			var $this = $(this);
			$this.find('.tabhd ul').ygSwitch($this.find('.bd'),tabSwitchOption)/*.autoplay(tabtime)*/;
		 });
        //特卖专区
        var indsale=$('.indxsale');
        if(indsale.length>0){
            $('.tab',indsale).ygSwitch(".indxsale .tabbd",tabSwitchOption);
        }
		//优购导购
		if($('#ygGuid')[0]){
			//优购导购品牌
			$("#ygGuid .item_bom").ygSwitch('#brand-list>a',{
				nextBtn:'#brand-right',
				prevBtn:'#brand-left',
				steps:48,
				lazyload:true
			});
		}		
	},
	/*布局部分*/
	initLayout:function(d){
		//浮动布局

		 ;(function(){
			 /**
			 * IE下 window.onresize 有bug 可以使用debounce封装监听函数
			 */

			/**
			 *
			 * @param {Function} callback 回调函数
			 * @param {Integer} delay   延迟时间，单位为毫秒(ms)，默认150
			 * @param {Object} context  上下文，即this关键字指向的对象，默认为null
			 * @return {Function}
			 */
				function debounce(callback, delay, context){
					if (typeof(callback) !== "function") {
						return;
					}
					delay = delay || 150;
					context = context || null;
					var timeout;
					var runIt = function(){
						callback.apply(context);
					};
					return (function(){
						window.clearTimeout(timeout);
						timeout = window.setTimeout(runIt, delay);
					});
				}

			//控制右侧浮动飘层
				var ele=$(".floatlayout"),w_flt;
				//设置位置（浏览器大于页面+浮窗宽度，则显示紧贴视窗右侧，否则紧贴1190页面右侧）
				function setElepos(){
					var _windowW=$(window).width();
					if(_windowW>1190+w_flt){
						var left=(_windowW-1190)/2+1190;
						ele.css("left",left+'px');
					}else{
						ele.css({"left":'auto',"right":0});
						ele.one("mouseover", function(){
                            ele.hover(function(){
                                $(this).css('right',0);
                            },function(){
                                $(this).css('right','-108px');
                            });
                        });
					}
				}
				
				if(ele.length>0){

					w_flt=ele.width()*2;
					var w_screen=window.screen.width;
					if(w_screen<1190+w_flt){
						ele.css({"left":'auto',"right":0});
					}else{
						ele.css("right",'auto');
					}
                    window.onresize= debounce(setElepos, 300);
                    setElepos();
					var isIE6 = $.browser.msie && $.browser.version == "6.0"
					if(isIE6){

						ele.css('position','absolute');
						var _windowH = $(window).height(),_docH = $(document).height();

						$(window).scroll(function(){
							var scrollTop = $(document).scrollTop();
							var top;
							if(scrollTop<_docH-_windowH-10){
								top = scrollTop+_windowH-300;
								ele.css('top',top);
							}

						});
					}
				}
			 
			 
			 })();
	},
	initPage:function(d){
		//宽度自适应1190/990
		var resetLayout=function(){
			if($('body').attr('id')==='ppqjd')
			{
				return;
			}
			if($(window).width()<1190){
				$('body').removeClass('selfadaptat');
			}else{
				$('body').addClass('selfadaptat');
			}		
		}
		//自适应
		resetLayout();
		$(window).unbind('resize',resetLayout).resize(resetLayout);
	}
}

var doWhileExist = function(sModuleId,oFunction){
	if(document.getElementById(sModuleId)){oFunction(document.getElementById(sModuleId));}
};
//获取主要内容 newtopicbd 目前只针对专题页

doWhileExist('newtopicbd',YGV.Module.initModule);
doWhileExist('newtopicbd',YGV.Module.initLayout);
doWhileExist('newtopicbd',YGV.Module.initPage);
 