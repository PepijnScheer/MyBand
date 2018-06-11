<?php
/* Smarty version 3.1.30, created on 2017-05-31 12:04:03
  from "C:\MAMP\htdocs\bovi\MVCFramework_MyBand\MyBandV_M\MyBandV_M\views\about.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592eb13330f113_84499716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27dc719b548612fc7fd3adc9da473be13998d55' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\bovi\\MVCFramework_MyBand\\MyBandV_M\\MyBandV_M\\views\\about.tpl',
      1 => 1496231643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592eb13330f113_84499716 (Smarty_Internal_Template $_smarty_tpl) {
?>
<content class="wrap">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_list']->value, 'x');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
?>

        <p><?php echo $_smarty_tpl->tpl_vars['x']->value['content'];?>
</p>

        <img src="<?php echo $_smarty_tpl->tpl_vars['x']->value['image'];?>
">

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</content><?php }
}
