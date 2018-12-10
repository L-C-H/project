
/*mv统计变量*/
var arrMVQDanpinRecommend=[];

var $GoodBar=$('.bindSaleTj>.goodsBar'),str='',strCon='';

/*mv统计*/
var _mvq = window._mvq || [];
window._mvq = _mvq;
_mvq.push([ '$setGeneral', 'recommend', ' ', '', '' ]);
_mvq.push([ '$addItem', '',arrMVQDanpinRecommend.join(','), '', '', '' ]);
_mvq.push([ '$logData' ]);
var src=$('#jsmvqscript').attr('src1');
if(src){
	$('#jsmvqscript').attr('src',src);
}
/*mv统计结束RecentlyViewed*/

try{
	showFavorite('#my_collection','#ref=my_ucindex&po=newfavorites',4,true);//我最近的收藏
}catch(e){}

try{
	showGuessLike('#uc_guessLike_box2 .uc_guessLike_list','#ref=my_ucindex&po=guessyoulike',32,true);//猜你喜欢
}catch(e){}


try{
	showHottop24r('#uc_guessLike_box3 .uc_guessLike_list','#ref=my_ucindex&po=hot24',32,true);//24小时热销推荐
}catch(e){}

try{
	showlowerPrice('#uc_guessLike_box4 .uc_guessLike_list','#ref=my_ucindex&po=reduceprice',8,true);//商品降价
}catch(e){}

try{
	ShowSeckill('#uc_guessLike_box5 .uc_guessLike_list','#ref=my_ucindex&po=secKill',true);//秒杀
}catch(e){}

try{
	ShowRecentlyViewed('.re_bro_goods ul','#ref=my_ucindex&po=recent',8,true);//最近浏览
}catch(e){}


//我最近的收藏
function showFavorite(strDom,urlParam,maxCon,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$dom = $(strDom);
	//异步加载最近收藏数据
	$.ajax({
		type : "POST",
		url : "/my/recentFavorites.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#zjcollection").hide();
				return;
			}else if(obj.code == 'ok'){
				var objData = obj.data;
				var lowerListCount = objData[0]; //已降价数量
				var promotionListCount = objData[1]; //正促销数量
				var brokenListCount = objData[2]; //已断货数量
				var data = objData[3]; //最近收藏的商品列表
				var oHtml = [],d;
				var len = data.length;
				//收藏里面各种状态的数量展示
				if(lowerListCount>0){
					$("#lowerCount").addClass("crOrg");
				}else{
					$("#lowerCount").removeClass("crOrg");
					$("#lowerCountHref").removeAttr("href");
				}
				if(promotionListCount>0){
					$("#promotionCount").addClass("crOrg");
				}else{
					$("#promotionCount").removeClass("crOrg");
					$("#promotionCountHref").removeAttr("href");
				}
				if(brokenListCount>0){
					$("#brokenCount").addClass("crOrg");
				}else{
					$("#brokenCount").removeClass("crOrg");
					$("#brokenCountHref").removeAttr("href");
				}
				$("#lowerCount").html(lowerListCount);
				$("#promotionCount").html(promotionListCount);
				$("#brokenCount").html(brokenListCount);
				//最近收藏
				for(var i = 0 ; i < maxCon && i < len ; i ++){
					var d = data[i];
					var link;
					if(d.flag!=null && d.flag=="1"){
						link = d.dpUrl+urlParam+"_"+(i+1); //收藏商品链接
					}else{
						link = d.dpUrl + "#ref=my_ucindex&po=gessfavorites_"+(i+1);//推荐商品链接
					}
					oHtml.push('<div class="pdt_wrap" style="height:260px;"><p class="img_box">');
					oHtml.push('<a target="_blank"  href="'+link+'">')
					oHtml.push('<img class="lazy_loading" original="');
					oHtml.push(d.thumbnail);
					oHtml.push('" src="')
					oHtml.push(YouGou.UI.baseUrl);
					oHtml.push('/template/common/images/blank.gif" width="160" height="160"/></a></p><p class="pdt_name setheights">');
					oHtml.push('<a href="');
					oHtml.push(link);
					oHtml.push('">')
					oHtml.push(d.name);
					oHtml.push('</a></p><p class="price_sc"><em class="ygprc15">&yen;<i>');
					oHtml.push(d.salePrice);
					oHtml.push('</i></em><del>&yen;');
					oHtml.push(d.marketPrice);
					oHtml.push('</del>');
					if(d.rebate!=null && d.rebate!=""){
						oHtml.push('<span class="ico_discount"><i>');
						oHtml.push(d.rebate);
						oHtml.push('</i>折</span>');
					}
					oHtml.push('</p>');
					if(d.flag!=null && d.flag=="1"){ //收藏商品
						if(d.downPrice!=null && d.downPrice!="0"){
							oHtml.push('<p class="jiang_jia">比收藏时降低');
							oHtml.push(d.downPrice);
							oHtml.push('元</p>');
						}
					}else{ //推荐商品
						oHtml.push('<p class="jiang_jia">根据收藏商品为您推荐</p>');
					}
					oHtml.push('</div>');
				}
				$dom.html(oHtml.join(''));
				$("#zjcollection").show();
				if(lazy){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}

//猜您喜欢
function showGuessLike(strDom,urlParam,maxCon,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$.ajax({
		type : "POST",
		url : "/my/guessYouLikes.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#cnlike").hide();
				return;
			}else if(obj.code == 'ok'){
				var data = obj.data;
				var len = data.length,d,$dom = $(strDom);
				var sHtml = [],d;
				for(var i=0;i < maxCon && i<len;i++){
					d = data[i];
					var link = d.dpUrl+urlParam+"_"+(i+1);
					sHtml.push('<li><p class="goods_img"><a target="_blank" href="'+link+'">');
					sHtml.push('<img class="lazy_loading" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  original="');
					sHtml.push(d.thumbnail);
					sHtml.push('" src="');
					sHtml.push(YouGou.UI.baseUrl);
					sHtml.push('/template/common/images/blank.gif" width="160" height="160"/></a></p><p class="pdt_name">');
					sHtml.push('<a target="_blank" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  href="');
					sHtml.push(link);
					sHtml.push('">');
					sHtml.push(d.skuShowName);
					sHtml.push('</a></p><p class="price_sc"><em class="ygprc15">&yen;<i>');
					sHtml.push(d.salePrice);
					sHtml.push('</i></em><del>&yen;');
					sHtml.push(d.marketPrice);
					sHtml.push('</del><span class="ico_discount"><i>');
					sHtml.push(d.rebate);
					sHtml.push('</i>折</span></p></li>');
				}
				$dom.html(sHtml.join(''));
				$("#cnlike").show();
				var li_wid = $dom.find("li").width()+30;
				var ul_wid = Math.ceil((maxCon+8)/2) * li_wid;
				$dom.css("width",ul_wid+"px");
				$dom.find("li.clone").remove();
				if(maxCon<9){
					$dom.css("width","795px");
					$dom.parents(".gd_like_pro").find(".scroll").hide();
				}

				//猜您喜欢1左右循环滚动
				domMerge('#uc_guessLike_box2');
				$("#uc_guessLike_box2").ygSwitch('#uc_guessLike_box2>ul>li',{
					nextBtn:'.nextBtn2',
					prevBtn:'.prevBtn2',
					steps:4,
					visible:4,
					lazyload:true,
					effect: "scroll",
					circular:true
					//pagenation:'#funmove-page2'
				}).carousel();
				if($("#uc_guessLike_box2>ul>li").length<8){
					$(".nextBtn2,.prevBtn2").remove();
				}
				if($dom.find('img').length>0){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}

//24小时热销推荐
function showHottop24r(strDom,urlParam,maxCon,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$.ajax({
		type : "POST",
		url : "/my/hot24.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#hot24").hide();
				return;
			}else if(obj.code == 'ok'){
				var data = obj.data;
				var len = data.length,d,$dom = $(strDom);
				var sHtml = [],d;
				for(var i=0;i < maxCon && i<len;i++){
					d = data[i];
					var link = d.dpUrl+urlParam+"_"+(i+1);
					sHtml.push('<li><p class="goods_img"><a target="_blank" href="'+link+'">');
					sHtml.push('<img class="lazy_loading" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  original="');
					sHtml.push(d.thumbnail);
					sHtml.push('" src="');
					sHtml.push(YouGou.UI.baseUrl);
					sHtml.push('/template/common/images/blank.gif" width="160" height="160"/></a></p><p class="pdt_name">');
					sHtml.push('<a target="_blank" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  href="');
					sHtml.push(link);
					sHtml.push('">');
					sHtml.push(d.skuShowName);
					sHtml.push('</a></p><p class="price_sc"><em class="ygprc15">&yen;<i>');
					sHtml.push(d.salePrice);
					sHtml.push('</i></em><del>&yen;');
					sHtml.push(d.marketPrice);
					sHtml.push('</del><span class="ico_discount"><i>');
					sHtml.push(d.rebate);
					sHtml.push('</i>折</span></p></li>');
					/*mv*/
					try {
						arrMVQDanpinRecommend.push(d.id);
					} catch(e) {}
				}
				$dom.html(sHtml.join(''));
				$("#hot24").show();
				var li_wid = $dom.find("li").width()+30;
				var ul_wid = Math.ceil((maxCon+8)/2) * li_wid;
				$dom.css("width",ul_wid+"px");
				$dom.find("li.clone").remove();
				if(maxCon<9){
					$dom.css("width","795px");
					$dom.parents(".gd_like_pro").find(".scroll").hide();
				}

				//24小时热销推荐1左右循环滚动
				domMerge('#uc_guessLike_box3');
				$("#uc_guessLike_box3").ygSwitch('#uc_guessLike_box3>ul>li',{
					nextBtn:'.nextBtn3',
					prevBtn:'.prevBtn3',
					steps:4,
					visible:4,
					lazyload:true,
					effect: "scroll",
					circular:true
					//pagenation:'#funmove-page2'
				}).carousel();
				if($("#uc_guessLike_box3>ul>li").length<8){
					$(".nextBtn3,.prevBtn3").remove();
				}
				if($dom.find('img').length>0){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}

//收藏降价
function showlowerPrice(strDom,urlParam,maxCon,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$.ajax({
		type : "POST",
		url : "/my/lowerFavorites.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#price_down").hide();
				$("#recentView").removeClass("mb30");
				return;
			}else if(obj.code == 'ok'){
				var data = obj.data;
				var len = data.length,d,$dom = $(strDom);
				var sHtml = [],d;
				for(var i=0;i < maxCon && i<len;i++){
					d = data[i];
					var link = d.commodity.commodityDesc + urlParam +"_"+(i+1);
					sHtml.push('<li><a target="_blank" href="'+link+'">');
					sHtml.push('<img class="lazy_loading" original="');
					sHtml.push(d.commodityImage);
					sHtml.push('" src="')
					sHtml.push(YouGou.UI.baseUrl);
					sHtml.push('/template/common/images/blank.gif" width="160" height="160"/></a>');
					sHtml.push('<p class="price_sc"><em class="ygprc15">&yen;<i>');
					sHtml.push(d.nowPrice);
					sHtml.push('</i></em><del>&yen;');
					sHtml.push(d.commodity.markPrice);
					sHtml.push('</del><span class="ico_discount"><i>');
					sHtml.push(d.commodity.discount);
					sHtml.push('</i>折</span></p><p class="jiang_jia">');
					sHtml.push('比收藏时降低');
					sHtml.push(d.downPrice);
					sHtml.push('元</p></div>')
					/*mv*/
					try {
						arrMVQDanpinRecommend.push(d.id);
					} catch(e) {}
				}
				$dom.html(sHtml.join(''));
				$("#price_down").show();

				//商品降价1左右循环滚动
				if(!$("#price_down").is(":hidden")){
					domMerge('#uc_guessLike_box4',1);
					$("#uc_guessLike_box4").ygSwitch('#uc_guessLike_box4>ul>li',{
						nextBtn:'.nextBtn4',
						prevBtn:'.prevBtn4',
						steps:1,
						visible:1,
						lazyload:true,
						effect: "scroll",
						circular:true,
						pagenation:'#funmove-page2'
					}).carousel();
				}
				$('.nextBtn4,.prevBtn4').live('click',setPageFoot);
				setPageFoot();
				if($('#uc_guessLike_box4>ul>li').length == 1 && $('#uc_guessLike_box4>ul>li>div').length == 1){
					$('#uc_guessLike_box4,#uc_guessLike_box4 ul').css("height","206px");
					$('#uc_guessLike_box4').parents('.cent_goods_msg,.price_down,.cent_goods_sm').css("height","226px");
					$("#funmove-page2,.prevBtn4,.nextBtn4").remove();
				};
				if($('#uc_guessLike_box4>ul>li').length == 1 && $('#uc_guessLike_box4>ul>li>div').length == 0){
					$('#uc_guessLike_box4,#uc_guessLike_box4 ul').css("height","206px");
					$('#uc_guessLike_box4').parents('.cent_goods_msg,.price_down,.cent_goods_sm').css("height","226px");
					$("#funmove-page2,.prevBtn4,.nextBtn4").remove();
				};
				if($('#uc_guessLike_box4>ul>li').length == 1 && $('#uc_guessLike_box4>ul>li>div').length == 2){
					$("#funmove-page2,.prevBtn4,.nextBtn4").remove();
				};
				if($dom.find('img').length>0){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}

//秒杀
function ShowSeckill(strDom,urlParam,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$.ajax({
		type : "POST",
		url : "/my/seckillGoods.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#seckill").hide();
				return;
			}else if(obj.code == 'ok'){
				var data = obj.data;
				var len = data.length,d,$dom = $(strDom);
				var sHtml = [],d;
				for(var i=0;i<len;i++){
					d = data[i];
					var link = d.dpUrl+urlParam+"_"+(i+1);
					sHtml.push('<li><a target="_blank" href="'+link+'">');
					sHtml.push('<img class="lazy_loading" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  original="');
					sHtml.push(d.commodity_image);
					sHtml.push('" src="')
					sHtml.push(YouGou.UI.baseUrl);
					sHtml.push('/template/common/images/blank.gif" width="160" height="160"/></a>');
					sHtml.push('<p class="pdt_name setheights"><a target="_blank" ');
					sHtml.push('title="');
					sHtml.push(d.skuSliderName);
					sHtml.push('"  href="');
					sHtml.push(link);
					sHtml.push('">');
					sHtml.push(d.skuShowName);
					sHtml.push('</a></p><p class="price_sc ce60 skill_po"><span class="no_start_kill">');
					if(d.type=="coming")
					{
						sHtml.push(d.start_date);
						sHtml.push('</span>秒杀价<span class="ml5">');
						sHtml.push('？？？');
					}else
					{
						sHtml.push('</span>秒杀价<span class="ml5">&yen;');
						sHtml.push(d.price);
					}
					sHtml.push('</span></p></li>');
					/*mv*/
					try {
						arrMVQDanpinRecommend.push(d.id);
					} catch(e) {}
				}
				$dom.html(sHtml.join(''));
				$("#seckill").show();

				//秒杀1左右循环滚动
				domMerge('#uc_guessLike_box5',1);
				$("#uc_guessLike_box5").ygSwitch('#uc_guessLike_box5>ul>li',{
					nextBtn:'.nextBtn5',
					//prevBtn:'.prevBtn4',
					steps:1,
					visible:1,
					lazyload:true,
					effect: "scroll",
					circular:true
					//pagenation:'#funmove-page2'
				}).carousel();
				if($('#uc_guessLike_box5>ul>li').length == 1 && $('#uc_guessLike_box5>ul>li>div').length == 1){
					$('#uc_guessLike_box5,#uc_guessLike_box5 ul').css("height","226px");
					$('#uc_guessLike_box5').parents('.cent_goods_msg,.price_down,.cent_goods_sm').css("height","226px");
					$(".huan_next").remove();
				};
				if($('#uc_guessLike_box5>ul>li').length == 1 && $('#uc_guessLike_box5>ul>li>div').length == 0){
					$('#uc_guessLike_box5,#uc_guessLike_box5 ul').css("height","226px");
					$('#uc_guessLike_box5').parents('.cent_goods_msg,.price_down,.cent_goods_sm').css("height","226px");
					$(".huan_next").remove();
				};
				if($('#uc_guessLike_box5>ul>li').length == 1 && $('#uc_guessLike_box5>ul>li>div').length == 2){
					$(".huan_next").remove();
				};
				if($dom.find('img').length>0){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}

//最近浏览
function ShowRecentlyViewed(strDom,urlParam,maxCon,islazy){
	var lazy=islazy?islazy:false;
	var urlParam = urlParam?urlParam:'';
	$.ajax({
		type : "POST",
		url : "/my/recentViews.jhtml",
		async: true,
		success : function(allData) {
			var obj = eval("("+allData+")");
			if(obj.code == 'nan'){
				$("#recentView").hide();
				return;
			}else if(obj.code == 'ok'){
				var data = obj.data;
				var len = data.length,d,$dom = $(strDom);
				var sHtml = [],d;
				for(var i=0;i < maxCon && i<len;i++){
					d = data[i];
					var link = d.url+urlParam+"_"+(i+1);
					sHtml.push('<li><a target="_blank" href="'+link+'">');
					sHtml.push('<img class="lazy_loading" original="');
					sHtml.push(d.img);
					sHtml.push('" src="')
					sHtml.push(YouGou.UI.baseUrl);
					sHtml.push('/template/common/images/blank.gif" width="72" height="72"/></a>');
					sHtml.push('<p class="small_prices ce60">&yen;');
					sHtml.push(d.activePrice);
					sHtml.push('</p></li>');
					/*mv*/
					try {
						arrMVQDanpinRecommend.push(d.id);
					} catch(e) {}
				}
				$dom.html(sHtml.join(''));
				$("#recentView").show();
				if($dom.find('img').length>0){
					$dom.find('img').lazyload();
				}
			}
		}
	});
}



