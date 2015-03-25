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
<form action="{{url('admin/auth')}}" method="post" name='#J_Form'>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table>

		<tr>
			<td>菜单名称 :</td>
			<td><input type="text" name='routename' ></td>
		</tr>
		<tr>
			<td>地址</td>
			<td><input type="text" name='routeurl'></td>
		</tr>
		<tr>
			<td>父级</td>
			<td>
			<select name="fid">
				<option value="0">顶级栏目</option>
				@foreach($ret as $val)
				@if($val->fid == 0)
					<option value="{{$val->id}}">{{$val->routename}}</option>
				@endif
				@endforeach
			</select>
				

			</td>
		</tr>
		<tr>
			<td><button class="btn btn-lg btn-info">新增 Page</button></td>
		</tr>



	</table>
	
</form>


	



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