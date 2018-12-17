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
<title>会员管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 会员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	@if(session('success'))
		<div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('success')}}</div>
	@endif
	@if(session('error'))
		<div class="Huialert Huialert-danger"><i class="Hui-iconfont">&#xe6a6;</i>{{session('error')}}</div>
	@endif
<div class="page-container">
	<form action="/adminmember" method="get">
		<div class="text-c">
			<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="keywords" value="{{$request['keywords'] or ''}}">
			<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="/adminmember/create" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加用户</a></span> <span class="r">共有数据：<strong>{{$total}}</strong> 条</span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="40">性别</th>
				<th width="90">手机</th>
				<th width="150">邮箱</th>
				<th width="150">地址</th>
				<th width="130">加入时间</th>
				<th width="70">状态</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			@foreach($data as $row)
			<tr class="text-c">
				<td><input type="checkbox" value="1" name=""></td>
				<td class="id">{{$row->id}}</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">{{$row->username}}</u></td>
				<td>{{$row->sex}}</td>
				<td>{{$row->phone}}</td>
				<td>{{$row->email}}</td>
				<td class="text-l">{{$row->address}}</td>
				<td>{{$row->addtime}}</td>
				<td class="td-status"><span class="label label-success radius">{{$row->status}}</span></td>
				<td class="td-manage">
					<a style="text-decoration:none" class="dis" href="javascript:;" title="停用"><i class="Hui-iconfont">{{$row->status=='已启用'?'&#xe615;':'&#xe631;'}}</i></a>
					<a title="编辑" href="/adminmember/{{$row->id}}/edit" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					<a style="text-decoration:none" class="ml-5" href="/adminmemberpwd/{{$row->id}}" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a>
					<!-- <form action="/adminmember/{{$row->id}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}
						<button title="删除" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></button>
					</form> -->
					<a title="删除" href="/adminmemberdel/{{$row->id}}" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
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
	$.get('/adminmemberdis',{'id':id},function(data){
	// alert(data);
		if(data==1){
			//1表示禁用
			//修改为禁用状态
			s.parents('td').prev().find('span').html('已禁用');
			//修改图标
			s.find('i').html('&#xe631;');
			//弹窗提示已停用
			layer.msg('已停用!',{icon: 5,time:1000});
		}else if(data==0){
			//0表示启用
			//修改为启用状态
			s.parents('td').prev().find('span').html('已启用');
			// 修改图标
			s.find('i').html('&#xe615;');
			//弹窗提示已启用
			layer.msg('已启用!',{icon: 6,time:1000});
		}
	});
});

// ajax删除
/*$('.del').click(function(){
	id=$(this).parents('tr').find('td').eq(1).html();
	// alert(id);
	s=$(this);
	ss=confirm('你确定要删除吗?');
	if(ss){
		$.get('/adminmemberdel',{'id':id},function(data){
			console.log(data);
			if(data==1){
				s.parents('tr').remove();
				$('nav').after('<div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>删除成功</div>');
				$('.Huialert').click(function(){
					$(this).css('display','none');
				});
			}else{
				$('nav').after('<div class="Huialert Huialert-danger"><i class="Hui-iconfont">&#xe6a6;</i>删除失败</div>');
				$('.Huialert').click(function(){
					$(this).css('display','none');
				});
			}
		});
	}
});*/
</script> 
</body>
</html>
