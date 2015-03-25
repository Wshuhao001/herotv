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
<form action="index.html" method="post" class="definewidth m20">
    <table class="table table-bordered table-hover definewidth m10">
        <tr>
            <td width="10%" class="tableleft">规则名称</td>
            <td><input type="text" name="title"/></td>
        </tr>
        <tr>
            <td class="tableleft">状态</td>
            <td>
                <input type="radio" name="status" value="1" checked/> 启用  <input type="radio" name="status" value="0"/> 禁用
            </td>
        </tr>
        <tr>
            <td class="tableleft">权限</td>
            <td>
<ul><li><label class='checkbox inline'><input type='checkbox' name='group[]' value='' />公用节点</label><ul><li>
	<li><label class='checkbox inline'><input type='checkbox' name='node[]' value='21' />省市区级联数据</label><li><label class='checkbox inline'><input type='checkbox' name='node[]' value='22' />省市区数据获取</label></ul></li>
            </td>
        </tr>
        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary" type="button">保存</button> &nbsp;&nbsp;<button type="button" class="btn btn-success" name="backid" id="backid">返回列表</button>
            </td>
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