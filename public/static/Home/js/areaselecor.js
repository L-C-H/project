/**
 * 三级区域选择器
 * @Params: province 默认省份 city 默认市 area 默认市 valueType 值的方式 默认 name
 *          id|name
 */

jQuery.fn.areaSelecor = function(options) {

	var settings = {
		province : false,
		city : false,
		area : false,
		valueType : 'name',
		rating:3, //级数
		change : function(province, city, area) {

		},
		nameChange : function(provinceName, cityName, areaName){
			
		},
		_m : Math.ceil(Math.random() * 1000)
	};

	if (options) {
		$.extend(settings, options);
	};

	this._tmpcityarr = false;

	this._tmpareaarr = false;
	var _rating=settings.rating;
	if(typeof(settings.rating)==null || settings.rating=='') this._rating=3;

	this._init = function() {
		var str = '<span><select style="width:80px;" name="areaSelecor_province'+ settings._m + '" id="areaSelecor_province'+ settings._m+ '">' +
						'<option value="">请选择</option>' +
				  '</select></span>';
	if(_rating==2|| _rating==3)
	{
						//str+='<span style="display:inline-block">' +
						str+='<span style="display:inline-block">' +
						'	<select style="width:auto;" name="areaSelecor_city'+ settings._m+ '" id="areaSelecor_city'+ settings._m+ '">' +
								'<option value="">请选择</option>' +
							'</select>' +
						'</span>' ;
	};
	if(_rating==3)
	{
				  str+='<span><select style="width:auto;" name="areaSelecor_area'+ settings._m + '" id="areaSelecor_area' + settings._m + '">' +
						'<option value="">请选择</option>' +
				  '</select></span>';
	}

		_this.html(str);

		var _province = $("#areaSelecor_province" + settings._m);
		var _city = $("#areaSelecor_city" + settings._m);
		var _area = $("#areaSelecor_area" + settings._m);

		//加载省份
		$.ajax({
			type : "POST",
			data:{"no":settings.province},
			dataType:"json",
			url: "/my/getProvinceByNo.jhtml",
			success : function(data) {
				if(data != null){
					$.each(data, function(i, v) {
						var val = v.no;
						var name=v.name;
						if (val == settings.province) 
						{
							_province.append('<option  value="' + val + '" selected="selected">' + name + '</option>');
						} 
						else
						{
							_province.append('<option   value="' + val + '">' + name + '</option>');
						}
					});
					
					if(settings.city!='')
					{
						var proNo=_province.val();
						if(proNo != null && proNo != ''){_this.getCity(proNo);}						
					}
				}				
			}
		});
		
		//省份切换
		_province.change(function() {
			var proNo=$(this).val();
			_this.getCity(proNo);
			_this._flashValue(proNo, '', '','');
			_this._flashName($(this).find("option:selected").text(),'','');
			_city.html('<option value="" >请选择</option>');
			_area.html('<option value="" >请选择</option>');
		});
		
		//城市切换
		_city.change(function() {
			var cityNo=$(this).val();
			var province = _province.val();
			_this.getArea(cityNo);
			_area.html('<option value="" >请选择</option>');
			_this._flashValue(province, cityNo, '','');
			_this._flashName(_province.find("option:selected").text(),_city.find("option:selected").text(),'');

		});

		//地区切换
		_area.change(function(){
			var province = _province.val();
			var city = _city.val();
			var area = $(this).val();
			_this._flashValue(province, city, area,'');
			_this._flashName(_province.find("option:selected").text(),_city.find("option:selected").text(),$(this).find("option:selected").text());
		})


	};

		//获取城市
		this.getCity=function(p)
		{
			$.ajax({
				type : "POST",
				data:{"no":p},
				dataType:"json",
				url: "/my/getCityOrAreaByNo.jhtml",
				success : function(data) {
					if(data != null){
						var _city = $('#areaSelecor_city' + settings._m);
						var _area = $('#areaSelecor_area' + settings._m);
						_city.empty();
						_city.append('<option value="" selected="selected">请选择</option>');
						$.each(data, function(i, t) {
							var no=t.no;
							var name=t.name;
							if(settings.city==no)
							{
							_city.append('<option  value="'+no+'" selected >'+name+'</option>');
							}
							else
							{
							_city.append('<option value="'+no+'" >'+name+'</option>');}
						});
						
						var selProId=$("#areaSelecor_province" + settings._m).val();
						if(settings.area!='' && settings.province==selProId)
						{
							var cityNo=_city.val();
							_this.getArea(cityNo);
						}
					}				
				}
			});
		};
		
		//获取区域
		this.getArea=function(c)
		{
			$.ajax({
				type : "POST",
				data:{"no":c},
				dataType:"json",
				url: "/my/getCityOrAreaByNo.jhtml",
				success : function(data) {
					if(data != null){	
						var _area = $('#areaSelecor_area'+settings._m);
						_area.empty();
						_area.append('<option value="" selected="selected">请选择</option>');
						$.each(data, function(j, v) {
							var no=v.no;
							var name=v.name;
							if(no==settings.area)
							{
							_area.append('<option  value="' + no + '"  selected>' + name + '</option>');
							}
							else
							{
							_area.append('<option  value="' + no + '" >' + name + '</option>');
							}
						});
					}
				}
			});
		};

	this._flashValue = function(p, c, a,e) {
		settings.change(p, c, a,e);
	};

	this._flashName = function(p, c, a) {
		settings.nameChange(p, c, a);
	};
		
	var _this = this;
	_this._init();
};

/**
 * 三级区域选择器 新
 */
function areaSelector(options){
    return new AreaSelector(options).init().drop().onchange().lihover();
}
function AreaSelector(opt){
    this.settings = {
        rating:3,
        province:false,
        city:false,
        district:false,
        strMaxLength:9,
        nameChange:function(){},
        change:function(){}
    };
    $.extend(this.settings,opt);
}
AreaSelector.prototype.init = function(){
    var html = "";
    var _this = this;
    var rating = this.settings.rating;
    if(rating > 0){
        html = html + this.drawhtml("province",_this.settings.province);
    }
    if(rating > 1){
        html = html + this.drawhtml("city",_this.settings.city);
    }
    if(rating > 2){
        html = html + this.drawhtml("district",_this.settings.district);
    }
    $(this.settings.ele).html(html);

    var listarr = ["请选择省份","请选择城市","请选择区县"];

    this.getdata("/my/getCityOrAreaByNo.jhtml?no=root",function(d){
        _this.drawCon(".province ul",d);
        if(_this.settings.province){
            listarr[0] = $(".province li[no='"+_this.settings.province+"']").html();
        }
        _this.reset(-1,listarr);
    });


    if(this.settings.province){
        this.getdata("/my/getCityOrAreaByNo.jhtml?no="+this.settings.province,function(d){
            _this.drawCon(".city ul",d);
            listarr[1] = $(".city li[no='"+_this.settings.city+"']").html();
            _this.reset(-1,listarr);
        });
    }
    if(this.settings.city){
        this.getdata("/my/getCityOrAreaByNo.jhtml?no="+this.settings.city,function(d){
            _this.drawCon(".district ul",d);
            listarr[2] = $(".district li[no='"+_this.settings.district+"']").html();
            _this.reset(-1,listarr);
        });
    }
    //this.reset(-1,listarr);
    return this;
};
AreaSelector.prototype.getdata = function(url,cb){
    var data = "";
    $.ajax({
        url:url,
        dataType:"json",
        success:function(_d){
            cb(_d);
        }
    });

};
AreaSelector.prototype.drawhtml = function(cssclass,no){
    var html = "<div class='myaddr_select "+cssclass+"'>"+
        "<span class='checked' no='"+no+"'>"+""+"</span>"+
        "<p class='ar'></p>"+
        "<p class='ar'></p>"+
        "<p class='line'></p>"+
        "<ul></ul>"+
        "</div>";
    return html;
};
AreaSelector.prototype.drawCon = function(target,data){
    var html = "";
    for(var i = 0 ; i < data.length ; i ++){
        html += "<li no='"+data[i].no+"'>"+data[i].name+"</li>";
    }
    $(target).html(html);
    return this;
};
AreaSelector.prototype.drop = function(){
    var _this = this;
    var $This = $(_this.settings.ele + ">.myaddr_select");
    $This.hover(function(){
        $(this).addClass("curr");
    },function(){
        $(this).removeClass("curr");
    });
    return this;
};
AreaSelector.prototype.reset = function(index,arr){
    var arrDft = ["请选择省份","请选择城市","请选择区县"];
    if(arr){
        arrDft = arr;
    }
    var divs = $(this.settings.ele+">div");
    for(var i = index+1 ; i < divs.length ; i ++){

        if(arrDft[i].length > this.settings.strMaxLength){
            arrDft[i] = arrDft[i].substr(0,8) + "...";
        }
        $(divs[i]).find(".checked").html(arrDft[i]);
        if(!arr){
            $(divs[i]).find("ul").html("");
        }
    }
};
AreaSelector.prototype.afterclick = function(index){
    $(this.settings.ele+">div").removeClass("curr");

};
AreaSelector.prototype.onchange = function(){
    var _this = this;
    $(_this.settings.ele+" ul > li").live("click",function(){
        var thisno = $(this).attr('no');
        var thisname = $(this).html();
        var subarea = "";
        var area = $(this).parent().parent().attr("class");
        _this.reset($(this).parent().parent().index());
        if(thisname.length > _this.settings.strMaxLength){
            thisname = thisname.substr(0,8) + "...";
        }
        $(this).parent().parent().find(".checked").html(thisname).attr("no",thisno);


        if(area.indexOf("province")!=-1){
            subarea = "city";
        }else if(area.indexOf("city")!=-1){
            subarea = "district";
        }
        if(subarea){
            _this.getdata("/my/getCityOrAreaByNo.jhtml?no="+thisno,function(d){
                _this.drawCon("."+subarea+" ul",d);
            });
        }

        _this.afterclick($(this).parent().parent().index());

        var provinceCheckedEle = $(".province>.checked");
        var cityCheckedEle = $(".city>.checked");
        var districtCheckedEle = $(".district>.checked");

        var provincestr = provinceCheckedEle.html()== "请选择省份"?"":provinceCheckedEle.html();
        var citystr = cityCheckedEle.html() == "请选择城市"?"":cityCheckedEle.html();
        var districtstr = districtCheckedEle.html() == "请选择区县"?"":districtCheckedEle.html();

        var provincestr_no = provinceCheckedEle.html()== "请选择省份"?"":provinceCheckedEle.attr("no");
        var citystr_no = cityCheckedEle.html() == "请选择城市"?"":cityCheckedEle.attr("no");
        var districtstr_no = districtCheckedEle.html() == "请选择区县"?"":districtCheckedEle.attr("no");

        _this.settings.nameChange(provincestr,citystr,districtstr);
        _this.settings.change(provincestr_no,citystr_no,districtstr_no);
    });
    return this;
};
AreaSelector.prototype.lihover = function(){
    var opt = this.settings;
    var $Thisli = $(opt.ele + " ul > li");
    $Thisli.live('mouseover',function(){
        $(this).addClass("hover");
    });
    $Thisli.live('mouseout',function(){
        $(this).removeClass("hover");
    });
    return this;
}