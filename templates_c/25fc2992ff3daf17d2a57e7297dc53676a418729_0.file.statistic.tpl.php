<?php
/* Smarty version 3.1.30, created on 2020-02-09 02:58:16
  from "/var/www/html/mvc/core_one/App/Views/statistic.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3f59285115d5_30729765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25fc2992ff3daf17d2a57e7297dc53676a418729' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/statistic.tpl',
      1 => 1581209888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header_survey.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5e3f59285115d5_30729765 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/header_survey.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1> Implement statistical page for all answered questionnaires </h1>

<?php echo $_smarty_tpl->tpl_vars['statistics']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
