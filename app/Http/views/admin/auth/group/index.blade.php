<!DOCTYPE HTML>
<html>
<head>
<title> 资源文件结构</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/bui-min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/page-min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">

	<div class="row">
		<div class="span12"><a href="{{url('admin/group/create')}}">添加用户组</a></div>
			<table class='table' width='100%'>
				<tr>
					<td class="tableleft">id</td>
					<td class="tableleft">用户组名称</td>
					<td>在此用户组的用户id</td>
					<td>此用户组的权限</td>
					<td>操作</td>
				</tr>
				@foreach($ret as $val)
				<tr>
					<td>{{$val->id}}</td>
					<td>{{$val->groupname}}</td>
					<td>{{$val->uid}}</td>
					<td>{{$val->route}}</td>
					<td>{{$val->id}}</td>
				</tr>
				@endforeach

			</table>



	</div>


</div>
<script type="text/javascript" src="../assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../assets/js/bui-min.js"></script>
<!-- 如果不使用页面内部跳转，则下面 script 标签不需要,同时不需要引入 common/page -->
<script type="text/javascript" src="../assets/js/config-min.js"></script>
 
<script type="text/javascript">
BUI.use('common/page'); //页面链接跳转
BUI.use('bui/form',function (Form) {
var form = new Form.HForm({
srcNode : '#J_Form'
});
 
form.render();
});
</script>
 
<body>
</html> 