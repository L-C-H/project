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

<title>评论列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 评论列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="adminevaluate" method="get">
		<div class="text-c">
			<input type="text" class="input-text" style="width:250px" placeholder="输入关键词" id="" name="keywords">
			<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜搜</button>
		</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r">共有数据：<strong>{{$count}}</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">ID</th>
					<th width="60">用户名</th>
					<th width="60">商品名</th>
					<th width="60">商品图片</th>
					<th>评论内容</th>
					<th>评论时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $v)
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>{{$v->id}}</td>
					<td>{{$v->menber_name}}</td>
					<td>{{$v->goods_name}}</td>
					<td><img src="{{$v->goods_pic}}" style="width: 30px"></td>
					<td class="text-l">
						<!-- <div class="c-999 f-12"> -->
							<!-- <u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u> <time title="2014年8月31日 下午3:20" datetime="2014-08-31T03:54:20">2014-8-31 15:20</time> <span class="ml-20">13000000000</span> <span class="ml-20">admin@mail.com</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div> -->
						<div>{{$v->content}}</div></td>
						<td>{{date('Y/m/d H:i:s',$v->time)}}</td>
					<td class="td-manage">
						<a title="删除" class="ml-5 del" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>  
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

$('.table-sort').dataTable({});
 $('.del').click(function(){
 id = $(this).parents('tr').find('td').eq(1).html();
 s = $(this).parents('tr');
 ss = confirm('你确定删除吗');
	 if(ss){
	     $.get('/adminevaluatedel',{id:id},function(data){
	     	console.log(data);
	        if(data==1){
	            s.remove();
	        }
	    });
	 }
 });
</script>
</body>
</html>