<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"D:\wwwroot\gw/app/admin\view\wechat\menu.html";i:1504236458;s:45:"D:\wwwroot\gw/app/admin\view\common\head.html";i:1505459050;s:45:"D:\wwwroot\gw/app/admin\view\common\foot.html";i:1503623995;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo config('sys_name'); ?>后台管理</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="__STATIC__/plugins/layui/css/layui.css" media="all" />
    <link rel="stylesheet" href="__ADMIN__/css/global.css" media="all">
    <link rel="stylesheet" href="__STATIC__/common/css/font.css" media="all">
</head>
<body class="skin-0">
<div class="admin-main layui-anim layui-anim-upbit">
    <fieldset class="layui-elem-field layui-field-title">
        <legend>菜单管理</legend>
    </fieldset>
    <blockquote class="layui-elem-quote">
        <a href="<?php echo url('addMenu'); ?>" class="layui-btn layui-btn-small"><?php echo lang('add'); ?>菜单</a>
        <a  href="javascript:;" onclick="return createMenu();" class="layui-btn layui-btn-small">生成菜单</a>
    </blockquote>
    <table class="layui-table" id="list" lay-filter="list"></table>
</div>
<script type="text/javascript" src="__STATIC__/plugins/layui/layui.js"></script>


<script type="text/html" id="name">
    {{d.lefthtml}}{{d.name}}
</script>
<script type="text/html" id="listorder">
    <input name="{{d.id}}" data-id="{{d.id}}" class="list_order layui-input" value=" {{d.listorder}}" size="10"/>
</script>
<script type="text/html" id="status">
    {{# if(d.open==1){ }}
    <a class="layui-btn layui-btn-mini layui-btn-warm" lay-event="open">开启</a>
    {{# }else{  }}
    <a class="layui-btn layui-btn-mini layui-btn-danger" lay-event="open">关闭</a>
    {{# } }}
</script>
<script type="text/html" id="action">
    <a href="<?php echo url('editMenu'); ?>?id={{d.id}}" class="layui-btn layui-btn-mini">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>
</script>
<script>
    var $;
    layui.use('table', function() {
        var table = layui.table;
        $ = layui.jquery;
        var tableIn = table.render({
            id: 'menu',
            elem: '#list',
            url: '<?php echo url("menu"); ?>',
            method: 'post',
            cols: [[
                {field: 'id', title: '<?php echo lang("id"); ?>', width: 80, fixed: true},
                {field: 'name', title: '主菜单名称', width: 120,templet:'#name'},
                {field: 'type', title: '菜单类型', width: 100},
                {field: 'open', align:'center',title: '<?php echo lang("status"); ?>', width: 100, toolbar: '#status'},
                {field: 'listorder', align:'center', title: '<?php echo lang("order"); ?>', width: 100,toolbar:'#listorder'},
                {field: 'value', title: '菜单操作值', width: 320},
                {width: 160, align: 'center', toolbar: '#action',title:'操作'}
            ]]
        });
        $('body').on('blur','.list_order',function() {
            var id = $(this).attr('data-id');
            var listorder = $(this).val();
            var loading = layer.load(1, {shade: [0.1, '#fff']});
            $.post('<?php echo url("menuOrder"); ?>',{id:id,listorder:listorder},function(res){
                layer.close(loading);
                if(res.code === 1){
                    layer.msg(res.msg, {time: 1000, icon: 1});
                    tableIn.reload();
                }else{
                    layer.msg(res.msg,{time:1000,icon:2});
                }
            })
        });
        table.on('tool(list)', function(obj) {
            var data = obj.data;
            if (obj.event === 'open') {
                var loading = layer.load(1, {shade: [0.1, '#fff']});
                $.post('<?php echo url("menuState"); ?>', {'id': data.id}, function (res) {
                    layer.close(loading);
                    if (res.code === 1) {
                        if (res.open === 1) {
                            obj.update({
                                open: '<a class="layui-btn layui-btn-mini layui-btn-warm" lay-event="open">开启</a>'
                            });
                        } else {
                            obj.update({
                                open: '<a class="layui-btn layui-btn-mini layui-btn-danger" lay-event="open">关闭</a>'
                            });
                        }
                    } else {
                        layer.msg('操作失败！', {time: 1000, icon: 2});
                        return false;
                    }
                })
            }else if(obj.event === 'del'){
                layer.confirm('您确定要删除该菜单吗？', function(index){
                    var loading = layer.load(1, {shade: [0.1, '#fff']});
                    $.post("<?php echo url('delMenu'); ?>",{id:data.id},function(res){
                        layer.close(loading);
                        if(res.code===1){
                            layer.msg(res.msg,{time:1000,icon:1});
                            obj.del();
                        }else{
                            layer.msg('操作失败！',{time:1000,icon:2});
                        }
                    });
                    layer.close(index);
                });
            }
        });
    });
    function createMenu() {
        $.post('<?php echo url("createMenu"); ?>', function(data){
            if(data.code==1){
                layer.alert(data.info, {icon: 6});
            }else{
                layer.alert(data.info, {icon: 5});
            }
        });
        return false;
    }

</script>