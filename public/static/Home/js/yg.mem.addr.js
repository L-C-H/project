YouGou.member.address = function() {
	function showAddrDialog() {
		$('span[id*="_tip"]').removeClass("errorHint").removeClass("successHint").text("");
		var posT = ($(window).height() - $("#newAddressDiv").height()) / 2 + $(document).scrollTop();
		$("#newAddressDiv").css({
			'top' : posT
		}).fadeIn();
		// 锁屏
		var _mask = '<div id="bodyMask" style="width:100%;height:100%;position:absolute;left:0;top:0;background:#333;z-index:8000;"></div>';
		$("body").append(_mask);
		$("#bodyMask").height($(document).height()).css('opacity', '0.3');
	}
	// 新增地址
	function AddressDialog() {
		$('#addressForm')[0].reset();
		$("#actionTitle").html("新增收货地址").val("create");
		initAddressSelector(null, null, null);
		showAddrDialog();
	}
	// 修改地址
	function updateAddress(id) {
		if (YouGou.Util.isEmpty(id)) {
			return;
		}
		var data = addressMap.get(id);
		if (YouGou.Util.isEmpty(data)) {
			return;
		}
		$("#addressId").val(data.id);
		$("#receivingName").val(data.receivingName);
		$("#email").val(data.email);
		$("#receivingMobilePhone").val(data.receivingMobilePhone);
		$("#province").val(data.receivingProvince);
		$("#city").val(data.receivingCity);
		$("#area").val(data.receivingDistrict);
		$("#receivingZipCode").val(data.receivingZipCode);
		$("#receivingAddress").val(data.receivingAddress);
		$("#distributionType").val(data.distributionType);
		if (data.isDefaultAddress == 1) {
			$("#defaultAddress").attr("checked", true);
		} else {
			$("#defaultAddress").attr("checked", false);
		}
		$("#actionTitle").html("修改收货地址").val("update");
		$("#actionType").val("update");
		initAddressSelector(data.receivingProvince, data.receivingCity, data.receivingDistrict);
		showAddrDialog();
	}
	// 初始化地区select
	function initAddressSelector(province, city, area) {
		$("#district").areaSelecor({
			valueType : 'id',
			province : province,
			city : city,
			area : area,
			change : function(province, city, area) {
				if (YouGou.Util.isEmpty(area)) {
					$("#area").val('');
					$("#area_tip").removeClass("successHint").addClass("errorHint").text("请选择地区");
				} else {
					$("#province").val(province);
					$("#city").val(city);
					$("#area").val(area);
					$("#area_tip").removeClass("errorHint").addClass("successHint").text("");
				}
			}
		});
	}
	// 设为默认
	function setAddressQuick() {
		$.ajax({
			type : "POST",
			url : "/my/quickAddressSet.jhtml",
			data : {
				"memberAddressId" : $(this).attr('dataid')
			},
			dataType : "json",
			success : function(data) {
				if (parseInt(data.flag) == 1) {
					alert("设置成功");
					location.reload();
				} else {
					alert("设置快速订购地址失败!");
				}
			}
		});
	}
	jQuery.validator.addMethod("phone", function(value, element) {
		var rePhone = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0-9]|17[0-9]|19[8|9]|166)\d{8}$/;
		return this.optional(element) || rePhone.test(value);
	}, "请您输入正确格式的手机号码");
	jQuery.validator.addMethod("zipcode", function(value, element) {
		var zipcode = /^\d{6}$/;
		return this.optional(element) || zipcode.test(value);
	}, "邮政编码格式不对");
	jQuery.validator.addMethod("containSpecial", function(value, element) {
		var containSpecial = /([#$%^*+=<>?]+)/;
		return this.optional(element) || !containSpecial.test(value);
	}, "请输入正确格式字符");
	jQuery.validator.addMethod("email", function(value, element) {
		var reEmail = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		return this.optional(element) || reEmail.test(value);
	}, "请您输入正确格式的电子邮箱");
	// 收货人姓名长度
	jQuery.validator.addMethod("receivingNameLengthRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value == null || value == "") {
			pass = false;
		}
		var strLength = value.replace(/[^\x00-\xff]/g, "**").length;
		if (strLength <= 2 || strLength >= 25) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请输入收货人姓名，要求3-25个字符");

	var numberRule = /(^\d*$)/; // 全为数字
	var englishAllRule = /^[a-z|A-Z]+$/;// 全部为英文
	var symbolAllRule = /[a-z\d\s\u4e00-\u9fa5]/;// 全部为标点符号
	var symbolRule = new RegExp(
			".*(`|~|%|!|@|\\+|#|\\[|\\]|<|>|《|》|\/|\\^|=|\\?|~|！|:|；|;|：|·|\\$|￥|【|】|…|&|‘|“|”|\"|？|\\*|\\(|\\)|{|}|（|）|、|\\\\|\\|)+"); // 标点符号
	var followNumberRule = /\d{8}/;// 连续8个数字

	// 收货人姓名标点符号等
	jQuery.validator.addMethod("receivingNameSymbolRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value.match(numberRule) || !value.match(symbolAllRule) || value.match(symbolRule)) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请您使用真实姓名，不能全部是数字，不能包含特殊符号（括号、井号等）");

	// 收货详细地址长度
	jQuery.validator.addMethod("receivingAddressLengthRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value == null || value == "") {
			pass = false;
		}
		var strLength = value.replace(/[^\x00-\xff]/g, "**").length;
		if (strLength <= 5 || strLength >= 120) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请输入收货人地址，要求5-120个字符");

	// 收货人详细地址标点符号等
	jQuery.validator.addMethod("receivingAddressSymbolRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value.match(numberRule) || !value.match(symbolAllRule) || value.match(englishAllRule)
				|| value.match(symbolRule) || followNumberRule.test(value)) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请填写详细地址，不能全部是数字/英文/包含特殊符号（括号、井号等）");

	var validator = null;
	// 初始化initAddressFormValidator
	function initAddressFormValidator() {
		validator = $(".newAddressDiv #addressForm").validate({
			rules : {
				receivingName : {
					required : true,
					receivingNameLengthRule : [],
					receivingNameSymbolRule : []
				},
				receivingMobilePhone : {
					phone : []
				},
				email : {
					required : true,
					email : []
				},
				receivingDistrict : {
					required : true
				},
				receivingAddress : {
					required : true,
					receivingAddressLengthRule : [],
					receivingAddressSymbolRule : []
				},
				receivingZipCode : {
					required : false,
					zipcode : []
				}
			},
			messages : {
				receivingName : {
					required : "请输入收货人姓名，要求3-25个字符"
				},
				receivingMobilePhone : {
					required : "请输入手机号码"
				},
				email : {
					required : "请输入电子邮箱"
				},
				receivingDistrict : {
					required : "请选择地区"
				},
				receivingAddress : {
					required : "请输入收货人地址，要求5-120个字符",
					maxlength : jQuery.format("详细地址长度最多不能超过{0}位")
				},
				receivingZipCode : {
					required : "请输入邮政编码",
					maxlength : ""
				}
			},
			onkeyup : false,
			focusInvalid : true,
			errorPlacement : function(error, element) {
				var errorHint = $(".newAddressDiv #" + element.attr("id") + "_tip");
				if (error.text() == "") {
					errorHint.text("").removeClass("errorHint").addClass("successHint");
				} else {
					errorHint.text(error.text()).removeClass("successHint").addClass("errorHint");
				}
			},
			success : function(element) {
			},
			submitHandler : function(form) {
				if (!validator.form()) {
					return;
				} else {
					if ($("#defaultAddress").is(":checked")) {
						$("#isDefaultAddress").val("1");
					} else {
						$("#isDefaultAddress").val("0");
					}
					if ($("#canAdd").val() == "false" && $("#actionType").val() == "create") {
						alert(msgAdd);
						return;
					} else {
						if ($("#actionType").val() == "update") {
							document.addressForm.action = "/my/updateAddressBook.jhtml";
						} else {
							document.addressForm.action = "/my/saveAddressBook.jhtml";
						}
						document.addressForm.submit();
					}
				}
			}
		});
	}
	// 判断报错提示
	function getQueryParameter(qs) {
		var s = location.search.replace("?", "").split("&"), re = "";
		for (i = 0; i < s.length; i++) {
			if (s[i].indexOf(qs + "=") == 0)
				re = s[i].replace(qs + "=", "");
		}
		return re;
	}
	var msgUpdate = "对不起，您本周新增或者修改收货地址已超过" + maxOperationNum + "次，请您下次再操作。";
	var msgAdd = "对不起，地址簿中最多能添加10个地址，您可以在已有的地址上做修改或者删除再添加新地址，但每周只能修改或添加" + maxOperationNum + "个收货地址。";
	var msg = getQueryParameter("msg");
	if (msg == "1") {
		alert(msgUpdate);
		window.location.href = '/my/address_list.jhtml';
	} else if (msg == "2") {
		alert(msgAdd);
		window.location.href = '/my/address_list.jhtml';
	}

	// 验证初始化
	initAddressFormValidator();
	$(".thickbox").click(function() {
		$(".vis").css("visibility", "hidden");
	});
	// 滑过变色
	$(".myaddress_tb>tbody>tr").hover(function() {
		$(this).addClass('on');
	}, function() {
		$(this).removeClass('on');
	});
	// 新增收货地址
	$("#newAddressBtn").click(function() {
		AddressDialog();
	});
	// 关闭地址弹窗
	$(".newAddressCloseBtn,.JcloseDialog").click(function() {
		$("#bodyMask").remove();
		$("#newAddressDiv").hide();
	});
	// 设为默认
	$('.set_default').click(setAddressQuick);
	// 修改
	$('.updateAddress').click(function() {
		if ($(this).attr('isupdate') == 'true') {
			updateAddress($(this).attr('dataid'));
		} else {
			alert(msgUpdate);
		}
		return false;
	});
};

$(function() {
	var doWhileExist = function(sModuleId, oFunction) {
		if (document.getElementById(sModuleId)) {
			oFunction(document.getElementById(sModuleId));
		}
	};
	doWhileExist('myaddr', YouGou.member.address);
	doWhileExist('myaddr_v2', YouGou.member.address.v2);
});

// ------------新版收货地址-------------
YouGou.member.address.v2 = function() {
	var cacheObj = {};
	var hideTimeout;
	// 地址数据变量
	var maxOperationNum = 10;
	var operateCount = 0;
	var canOperate = false;
	var canAdd = false;
	var addressMap = new YouGou.Util.Map();

	// 显示地址清单
	function showAddressList() {
		$("#addressListDiv").show();
		$("#addressFormDiv").hide();
		$("#addressFormDiv div").removeClass('ph-wrap-has ph-wrap-focus');
		$("#addressFormDiv span").val('');
	}

	function initBaseData(hasList) {
		var url = "/my/getAddressListAjax.jhtml?hasList=" + hasList + "&t=" + Math.random();
		$.getJSON(url, function(json) {
			// -----初始化全局变量----
			maxOperationNum = json.maxOperationNum;
			operateCount = json.operateCount;
			canOperate = json.canOperate;
			canAdd = json.canAdd;
			if (hasList == 'true') {
				var address = json.address;
				renderTableContent(address);
			}
		});
	}

	function initAddressTable() {
		initBaseData('true');
	}

	function initOperateLimit() {
		initBaseData('false');
	}

	function getNoDataHtml() {
		return '<tr><td colspan="6"><p class="norecords">您还没有添加收货地址！</p></td></tr>';
	}

	function renderTableContent(address) {
		$("#tbl_address tr:gt(0)").remove();
		if (address == null || address.length == 0) {
			$("#tbl_address").append(getNoDataHtml());
			return;
		}
		var content = '';
		$.each(address, function(i, item) {
			addressMap.put(item.id, item);
			var temp = getAddressTrHtml(item);
			content = content + temp;
		});
		$("#tbl_address").append(content);

		bindTableEvent();
	}

	// 滑过变色
	function hoverTableTrColor() {
		$("#tbl_address>tbody>tr").hover(function() {
			$(this).addClass('myaddr_deft');
			$(this).find('.set_default').show();
		}, function() {
			$(this).removeClass('myaddr_deft');
			$(this).find('.set_default').hide();
		});
	}

	// 填充基本的TR元素
	function getAddressTrHtml(data) {
		var html = '';
		if (data.isDefaultAddress == 1) {
			html = html + '<tr id=' + data.id + ' default="true">';
		} else {
			html = html + '<tr id=' + data.id + '>';
		}
		html = html + '<td>' + data.receivingName + '</td>';
		html = html + '<td>' + data.simpleDistrictName + '</td>';
		html = html + '<td>' + data.receivingAddress + '</td>';
		html = html + '<td>' + data.receivingMobilePhone + '</td>';
		if (data.isDefaultAddress == 1) {
			html = html + '<td><span class="cOrg">默认地址</span></td>';
		} else {
			html = html + '<td><a class="set_default" style="display:none" href="javascript:void(0);">设为默认</a></td>';
		}
		html = html
				+ '<td><p class="cC0c0"><a class="myaddr_mdf" href="javascript:void(0);">修改</a>|<span class="myaddr_del">&nbsp;</span></p></td>';
		html = html + '</tr>';
		return html;
	}

	function bindTableEvent() {
		// 设为默认按钮
		$('.set_default').die().live("click",function(){
			setDefaultAddress($(this).parent().parent());
		});

		// 修改按钮
		$('.myaddr_mdf').die().live("click",function(){
			updateAddressForm($(this).parent().parent().parent());
		});

		// 删除按钮
		$('.myaddr_del').die().live("click",function(){
			delAddress($(this).parent().parent().parent());
		});
		hoverTableTrColor();
	}

	// 删除地址
	function delAddress(obj) {
		var id = obj.attr('id');
		$.ajax({
			type : "POST",
			url : YouGou.Util.setUrlStamp("/my/deleteAddressAjax.jhtml"),
			data : {
				"id" : id
			},
			dataType : "json",
			success : function(data) {
				if (data == '3') {
					initOperateLimit();
					insertRecoverTd(obj, id);
				} else {
					alert("删除地址失败!");
				}
			}
		});
	}

	// 设为默认地址
	function setDefaultAddress(obj) {
		var id = obj.attr('id');
		$.ajax({
			type : "POST",
			url : YouGou.Util.setUrlStamp("/my/quickAddressSet.jhtml"),
			data : {
				"memberAddressId" : id
			},
			dataType : "json",
			success : function(data) {
				if (parseInt(data.flag) == 1) {
					promptSuccess("设置成功");
					initAddressTable();
				} else {
					promptOperate("设置失败");
				}
			}
		});
	}

	function promptDialog(str, className) {
		var target = $("#addr_alert");
		target.text(str);
		target.attr("class", className);
		target.show();
		setTimeout(function() {
			target.fadeOut(500);
		}, 3000);
	}

	// 操作成功
	function promptSuccess(str) {
		promptDialog(str, "myaddr_dialog myaddr_right");
	}

	// 提示信息
	function promptOperate(str) {
		promptDialog(str, "myaddr_dialog");
	}

	function insertRecoverTd(obj, id) {
		var html = '<td colspan="5"><span class="myaddr_delsucc">删除成功!</span></td><td><p class="myaddr_undel"><a href="javascript:;" class="recoverBtn">撤销删除</a></p></td>';
		var children = obj.children();
		// 缓存TD元素
		$.data(cacheObj, id, children);
		// 插入元素
		obj.html(html);
		$('.recoverBtn').click(function() {
			recoverAddress(obj, id);
		});
		// 如果是默认地址 则提示
		alertSetDefaultAddress(obj);
		// 隐藏撤销列
		hideTimeout = setTimeout(function() {
			obj.remove();
			insertNoAddressTr();
		}, 3000);
	}

	function alertSetDefaultAddress(obj) {
		var tag = obj.attr('default');
		var count = $("#tbl_address>tbody>tr").length;
		if (tag == 'true' && count > 2) {
			promptOperate('请设置默认地址');
		}
	}

	function insertNoAddressTr() {
		var html = '<tr><td colspan="6"><p class="norecords">您还没有添加收货地址！</p></td></tr>';
		var count = $("#tbl_address>tbody>tr").length;
		if (count == 1) {
			$("#tbl_address").append(html);
		}
	}

	// 恢复删除
	function recoverAddress(obj, id) {
		$.ajax({
			type : "POST",
			url : YouGou.Util.setUrlStamp("/my/recoverAddressAjax.jhtml"),
			data : {
				"id" : id
			},
			dataType : "json",
			success : function(data) {
				if (data == '3') {
					initOperateLimit();
					insertAddressCacheTd(obj, id);
				} else {
					alert("恢复地址失败!");
				}
			}
		});
	}

	function insertAddressCacheTd(obj, id) {
		if (hideTimeout != null)
			clearInterval(hideTimeout);
		var cache = $.data(cacheObj, id);
		obj.html(cache);
		bindTableEvent();
	}

	// 修改地址
	function updateAddressForm(obj) {
		if (!isCanOperate("update"))
			return;
		$("#addressListDiv").hide();
		$("#addressFormDiv").show();
		$('#addressForm')[0].reset();
		$("#actionTitle").text("修改收货地址");
		$("#actionType").val("update");
		var id = obj.attr('id');
		initEditAddressForm(id);
	}

	// 计算剩余操作次数
	function countOperateTimes() {
		operateCount = operateCount + 1;
		var extra = maxOperationNum - operateCount;
		if (operateCount < 7)
			return;
		var str = '您已新增(修改)了' + operateCount + '次，本周还可再进行' + extra + '次操作';
		if (extra == 0) {
			str = '您已新增(修改)了' + operateCount + '次，本周不可以再操作';
		}
		alert(str);
	}

	// 判断是否能操作
	function isCanOperate(actionType) {
		if (!canOperate) {
			alert("对不起，本周不可再进行操作");
			return false;
		}
		if ((actionType == 'create') && !canAdd) {
			alert("您已保存10个地址,删除已有地址后才可进行新增");
			return false;
		}
		return true;
	}

	// 打开新增地址表单
	function initNewAddressForm() {
		if (!isCanOperate("create"))
			return;
		$("#addressListDiv").hide();
		$("#addressFormDiv").show();
		$('#addressForm')[0].reset();
		$("#actionTitle").text("新增收货地址");
		$("#actionType").val("create");
		initAddressSelector('', '', '');
		// 触发验证 清理错误提示样式
		$("#addressForm").valid();
		$(".myaddr_tip").hide();
		$('span.placeholder').html('');
		$('#receivingAddress').attr('placeholder','');
		$('#receivingMobilePhone').attr('placeholder','');
		// $("#receivingAddress").attr("placeholder","");	
		// $("#receivingMobilePhone").attr("placeholder","");
	}
	// 修改地址
	function initEditAddressForm(id) {
		if (YouGou.Util.isEmpty(id)) {
			return;
		}
		var data = addressMap.get(id);
		if (YouGou.Util.isEmpty(data)) {
			return;
		}
		$("#addressId").val(data.id);
		$("#receivingName").val(data.receivingName);
		$("#email").val(data.email);
		$("#province").val(data.receivingProvince);
		$("#city").val(data.receivingCity);
		$("#area").val(data.receivingDistrict);
		$("#simpleDistrictName").val(data.simpleDistrictName);
		$("#receivingZipCode").val(data.receivingZipCode);
		$("#distributionType").val(data.distributionType);
		$("#receivingMobilePhone").attr("placeholder",data.receivingMobilePhone);
		$("#receivingAddress").attr("placeholder",data.receivingAddress);
		if($.browser.msie){
			$('#receivingMobilePhone').placeholder();
			$('#receivingAddress').placeholder();
			$("#receivingMobilePhone").prev().html(data.receivingMobilePhone);
			$("#receivingAddress").prev().html(data.receivingAddress);
		}
		if (data.isDefaultAddress == 1) {
			$("#defaultAddress").attr("checked", true);
		} else {
			$("#defaultAddress").attr("checked", false);
		}
		$("#addressForm").valid();
		initAddressSelector(data.receivingProvince, data.receivingCity, data.receivingDistrict);
	}

	function checkAddressInput(province, city, area) {
		var valid = true;
		var msg = '';
		if (YouGou.Util.isEmpty(province)) {
			msg = "请选择省份";
			valid = false;
		} else if (YouGou.Util.isEmpty(city)) {
			msg = "请选择城市";
			valid = false;
		} else if (YouGou.Util.isEmpty(area)) {
			msg = "请选择区县";
			valid = false;
		}
		$("#province").val(province);
		$("#city").val(city);
		$("#area").val(area);
		if (valid) {
            $("#area_tip").attr("class","myaddr_tiperr").text("").show();
		} else {
            $("#area_tip").attr("class","myaddr_tip").text(msg).show();
		}
	}

	// 初始化地区select
	function initAddressSelector(province, city, area) {
		checkAddressInput(province, city, area);
		areaSelector({
			ele : "#district",
			province : province,
			city : city,
			district : area,
			change : function(province, city, area) {
				checkAddressInput(province, city, area);
			},
			nameChange : function(provinceName, cityName, areaName) {
				if (!YouGou.Util.isEmpty(provinceName)) {
					$("#simpleDistrictName").val(provinceName + ' ' + cityName + ' ' + areaName);
				}
			}
		});
	}

	jQuery.validator.addMethod("phone", function(value, element) {
		var rePhone = /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0-9]|17[0-9]|19[8|9]|166)\d{8}$/;
		return this.optional(element) || rePhone.test(value);
	}, "请您输入正确格式的手机号码");
	jQuery.validator.addMethod("containSpecial", function(value, element) {
		var containSpecial = /([#$%^*+=<>?]+)/;
		return this.optional(element) || !containSpecial.test(value);
	}, "请输入正确格式字符");
	// 收货人姓名长度
	jQuery.validator.addMethod("receivingNameLengthRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value == null || value == "") {
			pass = false;
		}
		var strLength = value.replace(/[^\x00-\xff]/g, "**").length;
		if (strLength <= 2 || strLength >= 25) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请输入收货人姓名，要求3-25个字符");

	var numberRule = /(^\d*$)/; // 全为数字
	var englishAllRule = /^[a-z|A-Z]+$/;// 全部为英文
	var symbolAllRule = /[a-z\d\s\u4e00-\u9fa5]/;// 全部为标点符号
	var symbolRule = new RegExp(
			".*(`|~|%|!|@|\\+|#|\\[|\\]|<|>|《|》|\/|\\^|=|\\?|~|！|:|；|;|：|·|\\$|￥|【|】|…|&|‘|“|”|\"|？|\\*|\\(|\\)|{|}|（|）|、|\\\\|\\|)+"); // 标点符号
	var followNumberRule = /\d{8}/;// 连续8个数字

	// 收货人姓名标点符号等
	jQuery.validator.addMethod("receivingNameSymbolRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value.match(numberRule) || !value.match(symbolAllRule) || value.match(symbolRule)) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请您使用真实姓名，不能全部是数字，不能包含特殊符号（括号、井号等）");

	// 收货详细地址长度
	jQuery.validator.addMethod("receivingAddressLengthRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value == null || value == "") {
			pass = false;
		}
		var strLength = value.replace(/[^\x00-\xff]/g, "**").length;
		if (strLength <= 5 || strLength >= 120) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请输入收货人地址，要求5-120个字符");

	// 收货人详细地址标点符号等
	jQuery.validator.addMethod("receivingAddressSymbolRule", function(value, element) {
		value = value.replace(/(^\s*)|(\s*$)/g, "");// 去除左右空格
		var pass = true;
		if (value.match(numberRule) || !value.match(symbolAllRule) || value.match(englishAllRule)
				|| value.match(symbolRule) || followNumberRule.test(value)) {
			pass = false;
		}
		return this.optional(element) || pass;
	}, "请填写详细地址，不能全部是数字/英文/包含特殊符号（括号、井号等）");

	var validator = null;
	// 初始化initAddressFormValidator
	function initAddressFormValidator() {
		validator = $("#addressForm").validate({
			rules : {
				receivingName : {
					required : true,
					receivingNameLengthRule : [],
					receivingNameSymbolRule : []
				},
				receivingMobilePhone : {
					required : true,
					phone : []
				},
				receivingDistrict : {
					required : true
				},
				receivingAddress : {
					required : true,
					receivingAddressLengthRule : [],
					receivingAddressSymbolRule : []
				}
			},
			messages : {
				receivingName : {
					required : "请输入收货人姓名，要求3-25个字符"
				},
				receivingMobilePhone : {
					required : "请输入手机号码"
				},
				receivingDistrict : {
					required : "请选择地区"
				},
				receivingAddress : {
					required : "请输入收货人地址，要求5-120个字符",
					maxlength : jQuery.format("详细地址长度最多不能超过{0}位")
				}
			},
			onkeyup : false,
			focusInvalid : true,
			errorPlacement : function(error, element) {
				checkAddressInput($("#province").val(), $("#city").val(), $("#area").val());
				var	target = $("#"+element.attr("id")+"_tip");
				target.html(error.text());
				if (error.text() == "") {
					target.attr('class', 'myaddr_tiperr');
				} else {
					target.attr('class', 'myaddr_tip');
				}
				target.show();
			},
			success : function(element) {
			},
			submitHandler : function(form) {
				if ($("#defaultAddress").is(":checked")) {
					$("#isDefaultAddress").val("1");
				} else {
					$("#isDefaultAddress").val("0");
				}
				var formData = {
					"id" : $("#addressId").val(),
					"receivingProvince" : $("#province").val(),
					"receivingCity" : $("#city").val(),
					"receivingDistrict" : $("#area").val(),
					"simpleDistrictName" : $("#simpleDistrictName").val(),
					"receivingAddress" : $("#receivingAddress").val(),
					"receivingName" : $("#receivingName").val(),
					"receivingMobilePhone" : $("#receivingMobilePhone").val(),
					"sex" : $("#sex").val(),
					"payType" : $("#payType").val(),
					"isDefaultAddress" : $("#isDefaultAddress").val()
				};
				var actionType = $("#actionType").val();
				if (isCanOperate(actionType)) {
					submitForm(formData, actionType);
				}
			}
		});
	}

	// 提示设置默认地址
	function setDefaultIfCancel(data, actionType) {
		if (actionType == 'create') {
			return;
		}
		var id = data.id;
		var oldItem = addressMap.get(id);
		if (YouGou.Util.isEmpty(oldItem)) {
			return;
		}
		if (oldItem.isDefaultAddress == "1" && data.isDefaultAddress == "0") {
			promptOperate("请设置默认地址");
		}
	}

	// 提交表单
	function submitForm(formData, actionType) {
		var msg = "修改失败";
		var url = "/my/updateAddressAjax.jhtml";
		if (actionType == 'create') {
			url = "/my/addAddressAjax.jhtml";
			msg = "保存失败";
		}
		$.ajax({
			type : "POST",
			data : formData,
			url : YouGou.Util.setUrlStamp(url),
			error : function(XmlHttpRequest, textStatus, errorThrown) {
				alert(msg);
			},
			success : function(data) {
				if (data == 'false') {
					alert(msg);
					return;
				}
				setDefaultIfCancel(formData, actionType);
				countOperateTimes();
				initAddressTable();
				showAddressList();

			}
		});
	}

	initAddressTable();
	// 验证初始化
	initAddressFormValidator();

	// 新增收货地址按钮
	$("#newAddressBtn").click(function() {
		initNewAddressForm();
	});
	// 关闭收货地址表单按钮
	$("#closeFormBtn").click(function() {
		showAddressList();
	});
	$("#cancelBtn").click(function() {
		showAddressList();
	});
};
