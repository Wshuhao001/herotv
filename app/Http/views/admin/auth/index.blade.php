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
<form id="J_Form" class="form-horizontal span24">
	<div class="row">
		<div class="span12"><a href="auth/create">添加菜单</a></div>
			<table class='table' width='100%'>
				<tr>
					<td>id</td>
					<td>菜单名称</td>
					<td>是否为顶级菜单</td>
					<td>访问路径</td>
					<td>父级菜单</td>
					<td>操作</td>
				</tr>
				@foreach ($ret as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->routename}}</td>
					<td>
						@if($user->fid == 0)
							是

						@else
							否

						@endif

					</td>
					<td>{{$user->routesurl}}</td>
					<td>{{$user->fid}}</td>
					<td><a href="auth/{{$user->id}}/edit">编辑</a>&nbsp;&nbsp;&nbsp;

 					<form action="{{ URL('admin/auth/'.$user->id) }}" method="POST" style="display: inline;">
             	 	<input name="_method" type="hidden" value="DELETE">
             		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
              		<button type="submit" class="btn btn-danger">删除</button>
              		</form>



					</td>
				</tr>
				@endforeach




			</table>



	</div>

</form>
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