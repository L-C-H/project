<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>轮播图列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>轮播图管理 <span class="c-gray en">&gt;</span> 轮播图列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
@if(session('success'))
	<div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('success')}}</div>
@endif
@if(session('error'))
	<div class="Huialert Huialert-danger"><i class="Hui-iconfont">&#xe6a6;</i>{{session('error')}}</div>
@endif
<div class="page-container">
	<form action="/adminrotation" method="get">
		<div class="text-c">
			<input type="text" name="keywords" id="" placeholder=" 轮播图名称" style="width:250px" class="input-text" value="{{$request['keywords'] or ''}}">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜图片</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
			<a class="btn btn-primary radius" href="/adminrotation/create"><i class="Hui-iconfont">&#xe600;</i> 添加轮播图</a></span> <span class="r">共有数据：<strong>54</strong> 条
		</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">轮播图名称</th>
					<th width="100">轮播图</th>
					<th width="60">状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $row)
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td class="id">{{$row->id}}</td>
					<td>{{$row->picname}}</td>
					<td><img src="{{$row->pic}}" alt="" width="300"></td>
					<td><span class="label label-success radius">{{$row->status}}</span></td>
					<td class="td-manage">
						<a style="text-decoration:none" class="dis" href="javascript:;" title="下架"><i class="Hui-iconfont">{{$row->status=='显示'?'&#xe615;':'&#xe631;'}}</i></a>
						<a style="text-decoration:none" class="ml-5" href="/adminrotation/{{$row->id}}/edit" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" href="javascript:;" title="删除"><i class="Hui-iconfont del">&#xe6e2;</i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{$data->appends($request)->render()}}
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
	//ajax修改状态
$('.dis').click(function(){
	id=$(this).parents('tr').find('.id').html();
	// alert(id);
	s=$(this);
	$.get('/adminrotationdis',{'id':id},function(data){
	console.log(data);
		if(data==1){
			//1表示禁用
			//修改为禁用状态
			s.parents('td').prev().find('span').html('不显示');
			//修改图标
			s.find('i').html('&#xe631;');
			//弹窗提示已停用
			layer.msg('不显示',{icon: 5,time:1000});
		}else if(data==0){
			//0表示启用
			//修改为启用状态
			s.parents('td').prev().find('span').html('显示');
			// 修改图标
			s.find('i').html('&#xe615;');
			//弹窗提示已启用
			layer.msg('显示',{icon: 6,time:1000});
		}
	});
});

// ajax删除
	// alert($);
	$('.del').click(function(){
		id=$(this).parents('tr').find('td').eq(1).html();
		s=$(this).parents('tr');
		ss=confirm('确定要删除吗?');
		$.get('/adminrotationdel',{'id':id},function(data){
			// console.log(data);
			if(ss){
				if (data==1) {
					layer.msg('删除成功!',{icon: 6,time:1000});
					s.remove();
				}else{
					layer.msg('删除失败!',{icon: 5,time:1000});
				}	
			}
		});
	});
</script>
</body>
</html>