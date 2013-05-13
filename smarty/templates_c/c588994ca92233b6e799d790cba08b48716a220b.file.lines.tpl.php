<?php /* Smarty version Smarty-3.1.13, created on 2013-05-14 01:50:59
         compiled from "/Applications/MAMP/htdocs/lines.dev/templates/lines.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158605475519138a5b5b127-34639449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c588994ca92233b6e799d790cba08b48716a220b' => 
    array (
      0 => '/Applications/MAMP/htdocs/lines.dev/templates/lines.tpl',
      1 => 1368485410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1158605475519138a5b5b127-34639449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_519138a5ccdd51_27689960',
  'variables' => 
  array (
    'lines' => 0,
    'line' => 0,
    'proportion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519138a5ccdd51_27689960')) {function content_519138a5ccdd51_27689960($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
		body {
			margin: 0px;
			padding: 0px;
		}
	</style>
</head>
<body>

<canvas id="lines" width="1024" height="800"></canvas>
<script>
	var canvas = document.getElementById('lines');
	var context = canvas.getContext('2d');

    <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
      context.beginPath();
      	context.strokeStyle = '<?php echo $_smarty_tpl->tpl_vars['line']->value['color'];?>
';
      	context.moveTo(<?php echo $_smarty_tpl->tpl_vars['line']->value['starting_point']['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['line']->value['starting_point']['y'];?>
);
      	context.lineTo(<?php echo $_smarty_tpl->tpl_vars['line']->value['final_point']['x'];?>
, <?php echo $_smarty_tpl->tpl_vars['line']->value['final_point']['y'];?>
);
      	context.lineWidth = <?php echo $_smarty_tpl->tpl_vars['line']->value['width'];?>
;
      	context.stroke();
    <?php }
if (!$_smarty_tpl->tpl_vars['line']->_loop) {
?>
      .. no results ..
    <?php } ?>

</script>

<div>Proportion 1/<?php echo $_smarty_tpl->tpl_vars['proportion']->value;?>
</div>

</body>
</html><?php }} ?>