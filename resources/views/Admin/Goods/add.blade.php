<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/static/favicon.ico" >
<link rel="Shortcut Icon" href="/static/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->


<title>添加商品</title>
<style>
.btn-upload{position: relative; display:inline-block;height:36px; *display:inline;overflow:hidden;vertical-align:middle;cursor:pointer}
.upload-url{cursor: pointer;}
.input-file{position:absolute; right:0; top:0; cursor: pointer; z-index:1; font-size:30em; *font-size:30px;opacity:0;filter: alpha(opacity=0)}
.btn-upload .input-text{ width:300px}
.form-group .upload-btn{ margin-left:-1px}


</style>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" action="/admingoods" method="post" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品类型：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<select class="input-text" name="c_id">
				<option value="0">--请选择--</option>
				@foreach($cate as $row)
				<option value="{{$row->id}}">{{$row->name}}</option>
				@endforeach
				</select>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('goods_name')}}" placeholder="" id="articletitle" name="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('goods_price')}}" placeholder="" id="articletitle" name="goods_price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品原价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('original_price')}}" placeholder="" id="articletitle" name="original_price">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品库存：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('stock')}}" placeholder="" id="articletitle" name="stock">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品颜色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('color')}}" placeholder="" id="articletitle" name="color">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品材质：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('material')}}" placeholder="" id="articletitle" name="material">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">性别：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('sex')}}" placeholder="" id="articletitle" name="sex">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品款式：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('pattern')}}" placeholder="" id="articletitle" name="pattern">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品风格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="{{old('style')}}" placeholder="" id="articletitle" name="style">
			</div>
		</div>
		<div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">商品图片：</label>
            <div class="formControls col-xs-8 col-sm-9">
             <span class="btn-upload form-group">
  				<input class="input-text upload-url radius" type="text" name="pic" id="uploadfile-1" value="{{old('pic')}}"><a href="javascript:void();" class="btn btn-primary radius"><i class="iconfont">&#xf0020;</i> 选择文件</a>
  				<input type="file" multiple name="pic" class="input-file"></span>
            </div>
        </div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="goods_des" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" value="">{{old('goods_des')}}</textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
			{{csrf_field()}}
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<a class="btn btn-default radius" type="button" href="/admingoods">&nbsp;&nbsp;取消&nbsp;&nbsp;</a>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/static/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="/static/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="/static/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
