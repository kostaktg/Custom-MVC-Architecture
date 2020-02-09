<?php
/* Smarty version 3.1.30, created on 2020-02-07 01:50:44
  from "/var/www/html/mvc/core_one/App/Views/layouts/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3ca6546f3651_53019822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f7b027418e313d41d37cc125225f208181a09d' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/layouts/header.tpl',
      1 => 1581033043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3ca6546f3651_53019822 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <?php echo '<script'; ?>

    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"><?php echo '</script'; ?>
>

    <title>Login/Register</title>
</head>
<body>
<h1 id="login_msg"></h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <input type="button" <?php if (!isset($_SESSION['log_in'])) {?> style="display:none" <?php }?> value="Logout"  class="navbar-brand" id="logout" href="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo @constant('SITE_URL');?>
homecontroller/read">Survey <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                    <a class="nav-link" href="<?php echo @constant('SITE_URL');?>
logincontroller/read">login</a>
                  </li>
                  <li class="nav-item active">
                        <a class="nav-link" href="<?php echo @constant('SITE_URL');?>
registercontroller/read">register</a>
                      </li>
    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              register
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">login</a>
              <a class="dropdown-item" href="#">register</a>

            </div>
          </li> -->
    </ul>
  </div>
</nav>
<?php }
}
