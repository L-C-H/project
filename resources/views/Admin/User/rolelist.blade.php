<!DOCTYPE html>
<html>
 <head> 
  <meta charset="utf-8" /> 
  <meta name="renderer" content="webkit|ie-comp|ie-stand" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" /> 
  <meta http-equiv="Cache-Control" content="no-siteapp" /> 
  <link rel="Bookmark" href="/static/favicon.ico" /> 
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
  <title>管理员列表</title> 
 </head> 
 <body> 
  <nav class="breadcrumb">
   <i class="Hui-iconfont"></i> 首页 
   <span class="c-gray en">&gt;</span> 管理员管理 
   <span class="c-gray en">&gt;</span> 角色列表 
   <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont"></i></a>
  </nav> 
  @if(session('success'))
    <div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('success')}}</div>
  @endif
    @if(session('error'))
    <div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i>{{session('error')}}</div>
  @endif
  @if(session('successdel'))  
   <div class="Huialert Huialert-info"><i class="Hui-iconfont">&#xe6a6;</i>{{session('successdel')}}</div>
  @endif
    @if(session('errordel'))  
   <div class="Huialert Huialert-info"><i class="Hui-iconfont">&#xe6a6;</i>{{session('errordel')}}</div>
  @endif
  @if(session('successedit'))    
     <div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i> {{session('successedit')}}</div>
  @endif
    @if(session('erroredit'))    
     <div class="Huialert Huialert-success"><i class="Hui-iconfont">&#xe6a6;</i> {{session('erroredit')}}</div>
  @endif
  <div class="page-container"> 
<!--    <div class="text-c">
     日期范围： 
    <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;" /> - 
    <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;" /> 
    <input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" id="" name="" /> 
    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont"></i> 搜用户</button> 
   </div>  -->
   <div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont"></i> 批量删除</a> 
      <a href="/adminrolelist/create"  class="btn btn-primary radius"><i class="Hui-iconfont"></i> 添加角色</a>
    </span> 
    <span class="r">共有数据：<strong>54</strong> 条</span> 
   </div> 
   <table class="table table-border table-bordered table-bg"> 
    <thead> 
     <tr> 
      <th scope="col" colspan="5">角色列表</th> 
     </tr> 
     <tr class="text-c"> 
      <th width="25"><input type="checkbox" name="" value="" /></th> 
      <th width="40">ID</th> 
      <th width="150">角色名</th> 
      <th width="90">状态</th> 
     <!--  <th width="150">状态</th>  -->
      <!-- <th>用户等级</th> --> 
      <!-- <th width="130">加入时间</th> 
      <th width="100">是否已启用</th>  -->
      <th width="100">操作</th> 
     </tr> 
    </thead> 
    <tbody> 
      @foreach($role as $row)
     <tr class="text-c"> 
      <td><input type="checkbox" value="2" name="" /></td> 
      <td>{{$row->id}}</td> 
      <td>{{$row->name}}</td> 
      <td>{{$row->status}}</td> 
   <!--    <td>admin@mail.com</td>  -->
      <!-- <td>栏目编辑</td>  -->
      <!-- <td>2014-6-11 11:11:42</td>  -->
     <!--  <td class="td-status"><span class="label radius">已停用</span></td>  -->
      <td class="td-manage">
       <!--  <a style="text-decoration:none" onclick="admin_start(this,'10001')" href="javascript:;" title="启用"><i class="Hui-iconfont"></i></a> -->
      <!--  <a title="编辑" href="/adminrolelist/{{$row->id}}/edit" onclick="admin_edit('管理员编辑','/adminuser/1/edit','2','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a> -->
      <a href="/adminrolelist/{{$row->id}}/edit" class="btn btn-danger">修改权限</a>
        <form action="/adminrolelist/{{$row->id}}" method="post">
          {{csrf_field()}}
          {{method_field("DELETE")}}
      <!--  <a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a> -->
       <!--  <button href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></button>  -->
       <button class="btn btn-warning">删除权限</button> 
       </form>
     <!-- <a class="btn btn-warning del">删除权限</a> -->
      <!--  <a href=""><i class="Hui-iconfont">&#xe61f;</i></a> -->
      <a href="/adminauth/{{$row->id}}" class="btn btn-success">分配权限</a>
     </td> 
     </tr> 
     @endforeach
    </tbody> 
   </table> 
  </div> 
  <!--_footer 作为公共模版分离出去--> 
  <script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script> 
  <script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script> 
  <script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> 
  <!--/_footer 作为公共模版分离出去--> 
  <!--请在下方写此页面业务相关的脚本--> 
  <script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
  <script type="text/javascript" src="/static/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
  <script type="text/javascript" src="/static/lib/laypage/1.2/laypage.js"></script> 
  <script type="text/javascript">
    $('.table-sort').dataTable({});
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '',
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		
		
		$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!', {icon: 6,time:1000});
	});
}

</script>  
<script>
  // alert($);
  // 获取删除按钮
   // $(".del").click(function(){
   //      id = $(this).parents("tr").find('td').eq(1).html();
   //        // alert(id);
   //      s = $(this).parents("tr");
   //      // ss = confirm("你确定要删除吗?");
   //      // if (ss) {
   //        $.get("/adminlist",{'id':id},function(data){
   //            console.log(data);
   //            alert(data);
   //        });
   //      // }
   // });
</script>
 </body>
</html>