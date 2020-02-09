<?php
/* Smarty version 3.1.30, created on 2020-02-07 01:58:09
  from "/var/www/html/mvc/core_one/App/Views/layouts/header_survey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3ca8112168f3_37502416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d4abafbd09c149b7e104e6f869bbd295f3f656f' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/layouts/header_survey.tpl',
      1 => 1581033487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3ca8112168f3_37502416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo '<script'; ?>

    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"><?php echo '</script'; ?>
>

    <title>Login/Register</title>
</head>
<body>
  <input type="button"  value="Logout"  class="navbar-brand" id="logout" href="">
    <a class="navbar-brand" href="<?php echo @constant('SITE_URL');?>
logincontroller/read">HOME</a>

<?php }
}
