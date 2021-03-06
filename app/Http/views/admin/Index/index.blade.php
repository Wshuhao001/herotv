
<!DOCTYPE HTML>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="../admin/assets/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <!--<img src="/chinapost/Public/assets/img/top.png">-->
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">root</span><a href="{{url('admin/logout')}}" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title"><s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
			<li class="nav-item dl-selected"><div class="nav-item-inner nav-storage">首页</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-storage">管理</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-storage">系统</div></li>
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-storage">其他</div></li>

        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="../admin/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="../admin/assets/js/bui-min.js"></script>
<script type="text/javascript" src="../admin/assets/js/common/main-min.js"></script>
<script type="text/javascript" src="../admin/assets/js/config-min.js"></script>
<script>
//{id:'1',menu:[{text:'系统管理',items:[,{id:'3',text:'角色管理',href:'Role/index.html'},{id:'4',text:'用户管理',href:'User/index.html'},{id:'6',text:'菜单管理',href:'Menu/index.html'}]}]},{id:'7',homePage : '9',menu:[{text:'业务管理',items:[{id:'9',text:'查询业务',href:'Node/index.html'}]}]}
    BUI.use('common/main',function(){
         var config =  
           [<?php echo $json?>]



         // [{
         //  id:'index', 
         //  homePage : 'users',
         //  menu:[
            

         //  ,{
         //      text:'页面操作',
         //      items:[
         //        {id:'operation',text:'页面常见操作',href:'main/operation.html'},
         //        {id:'quick',text:'页面操作快捷方式',href:'main/quick.html'}  
         //      ]
         //    },{
         //      text:'文件结构',
         //      items:[
         //        {id:'resource',text:'资源文件结构',href:'main/resource.html'},
         //        {id:'loader',text:'引入JS方式',href:'main/loader.html'}  
         //      ]
         //    }]
         //  },{
         //    id:'form',
         //    menu:[{
         //        text:'表单页面',
         //        items:[
         //          {id:'code',text:'表单代码',href:'form/code.html'},
         //          {id:'example',text:'表单示例',href:'form/example.html'},
         //          {id:'introduce',text:'表单简介',href:'form/introduce.html'},
         //          {id:'valid',text:'表单基本验证',href:'form/basicValid.html'},
         //          {id:'advalid',text:'表单复杂验证',href:'form/advalid.html'},
         //          {id:'remote',text:'远程调用',href:'form/remote.html'},
         //          {id:'group',text:'表单分组',href:'form/group.html'},
         //          {id:'depends',text:'表单联动',href:'form/depends.html'}
         //        ]
         //      },{
         //        text:'成功失败页面',
         //        items:[
         //          {id:'success',text:'成功页面',href:'form/success.html'},
         //          {id:'fail',text:'失败页面',href:'form/fail.html'}
                
         //        ]
         //      },{
         //        text:'可编辑表格',
         //        items:[
         //          {id:'grid',text:'可编辑表格',href:'form/grid.html'},
         //          {id:'form-grid',text:'表单中的可编辑表格',href:'form/form-grid.html'},
         //          {id:'dialog-grid',text:'使用弹出框',href:'form/dialog-grid.html'},
         //          {id:'form-dialog-grid',text:'表单中使用弹出框',href:'form/form-dialog-grid.html'}
         //        ]
         //      }]
         //  },{
         //    id:'search',
         //    menu:[{
         //        text:'搜索页面',
         //        items:[
         //          {id:'code',text:'搜索页面代码',href:'search/code.html'},
         //          {id:'example',text:'搜索页面示例',href:'search/example.html'},
         //          {id:'example-dialog',text:'搜索页面编辑示例',href:'search/example-dialog.html'},
         //          {id:'introduce',text:'搜索页面简介',href:'search/introduce.html'}, 
         //          {id:'config',text:'搜索配置',href:'search/config.html'}
         //        ]
         //      },{
         //        text : '更多示例',
         //        items : [
         //          {id : 'tab',text : '使用tab过滤',href : 'search/tab.html'}
         //        ]
         //      }]
         //  },{
         //    id:'detail',
         //    menu:[{
         //        text:'详情页面',
         //        items:[
         //          {id:'code',text:'详情页面代码',href:'detail/code.html'},
         //          {id:'example',text:'详情页面示例',href:'detail/example.html'},
         //          {id:'introduce',text:'详情页面简介',href:'detail/introduce.html'}
         //        ]
         //      }]
         //  },{
         //    id : 'chart',
         //    menu : [{
         //      text : '图表',
         //      items:[
         //          {id:'code',text:'引入代码',href:'chart/code.html'},
         //          {id:'line',text:'折线图',href:'chart/line.html'},
         //          {id:'area',text:'区域图',href:'chart/area.html'},
         //          {id:'column',text:'柱状图',href:'chart/column.html'},
         //          {id:'pie',text:'饼图',href:'chart/pie.html'}, 
         //          {id:'radar',text:'雷达图',href:'chart/radar.html'}
         //      ]
         //    }]
         //  }];



        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
<div style="text-align:center;">
</div>
</body>
</html>