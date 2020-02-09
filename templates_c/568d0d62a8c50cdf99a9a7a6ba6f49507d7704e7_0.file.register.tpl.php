<?php
/* Smarty version 3.1.30, created on 2020-02-07 01:34:19
  from "/var/www/html/mvc/core_one/App/Views/register/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3ca27ba6ba59_28879281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568d0d62a8c50cdf99a9a7a6ba6f49507d7704e7' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/register/register.tpl',
      1 => 1581021452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/header.tpl' => 1,
    'file:../layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5e3ca27ba6ba59_28879281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form id="register_id" action="">
  
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])) {
echo $_POST['name'];
}?>">

      <label for="email">Email:</label>
      <input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) {
echo $_POST['email'];
}?>">

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="">

      <label for="password_confurm">confurm password:</label>
      <input type="password" name="password_confurm" id="password_confurm" value="">

      <input type="submit" name="submit" value="register">
  </form>
<div id="msg">
</div>

<?php $_smarty_tpl->_subTemplateRender("file:../layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">


    // ----------------- REGISTER -----------------------
    $(document).on('submit','#register_id' , function(e) {
    e.preventDefault();
        $.ajax({
            url: "<?php echo @constant('SITE_URL');?>
/registercontroller/create",
            type:'POST',
            data: $( this ).serialize(),
            dataType:"json",
            success: function(response){
              if(response.success){
                $("#msg" ).empty();
                $("#msg" ).append('SUCCESS');
                // REDIRECT TO HOME MAYBE
              }else{
                $("#msg" ).empty();
                $("#msg" ).append((response.errors).join('<br>'));
                }
            }
        });
    });

<?php echo '</script'; ?>
><?php }
}
