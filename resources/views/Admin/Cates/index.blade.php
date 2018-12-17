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
<title>分类管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	@if(session('success'))
		<div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('success')}}</div>
	@endif
	@if(session('error'))
		<div class="Huialert Huialert-danger"><i class="Hui-iconfont">&#xe6a6;</i>{{session('error')}}</div>
	@endif
<div class="page-container">
	<form action="/admincates" method="get">
		<div class="text-c">
			<input type="text" name="keywords" id="" placeholder=" 分类名称" style="width:250px" class="input-text" value="{{$request['keywords'] or ''}}">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜分类名称</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" data-title="添加品牌" data-href="/admincates/create" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加分类</a></span> <span class="r">共有数据：<strong>{{count($cate)}}</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="70">ID</th>
					<th width="80">分类名称</th>
					<th width="70">pid</th>
					<th width="120">path</th>
					<th width="25">是否上架</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cate as $row)
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td class="id">{{$row->id}}</td>		
					<td>{{$row->name}}</td>
					<td>{{$row->pid}}</td>
          			<td>{{$row->path}}</td>
          			<td><span class="label label-success radius">{{$row->display}}</span></td>
					<td class="f-14 td-manage">
						<a style="text-decoration:none" class="dis" href="javascript:;" title="下架"><i class="Hui-iconfont">{{$row->display=='下架'?'&#xe6de;':'&#xe6dc;'}}</i></a>
						<!-- onClick="article_stop(this,{{$row->id}})" -->
						<a style="text-decoration:none" class="ml-5" href="/admincates/{{$row->id}}/edit" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<!-- <form action="/admincates/{{$row->id}}" method="post">
							{{csrf_field()}}
							{{ method_field('DELETE') }}
							<button type="submit" style="text-decoration:none" class="ml-5" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></button>
						</form> -->
						<a href="javascript:;" style="text-decoration:none" class="ml-5 del" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>	
				@endforeach
			</tbody>
		</table>
		{{$cate->appends($request)->render()}}
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
<script>
	// ajax删除
	// alert($);
	$('.del').click(function(){
		id=$(this).parents('tr').find('td').eq(1).html();
		s=$(this).parents('tr');
		ss=confirm('确定要删除吗?');
		$.get('/admincatessss',{'id':id},function(data){
			// console.log(data);
			if(ss){
				if (data==1) {
					alert('删除成功');
					s.remove();
				}else{
					alert('请先删除子类');
				}	
			}			
		});
	});

//ajax下架发布
$('.dis').click(function(){
	id=$(this).parents('tr').find('.id').html();
	// alert(id);
	s=$(this);
	$.get('/admincatesdis',{'id':id},function(data){
	// alert(data);
		if(data==1){
			//1表示下架
			//修改为禁用状态
			s.parents('td').prev().find('span').html('下架');
			//修改图标
			s.find('i').html('&#xe6de;');
			//弹窗提示已下架
			layer.msg('下架成功!',{icon: 5,time:1000});
		}else if(data==0){
			//0表示上架
			//修改为上架状态
			s.parents('td').prev().find('span').html('上架');
			// 修改图标
			s.find('i').html('&#xe6dc;');
			//弹窗提示发布成功
			layer.msg('发布成功!',{icon: 6,time:1000});
		}
	});
});

</script> 
</body>
</html>
