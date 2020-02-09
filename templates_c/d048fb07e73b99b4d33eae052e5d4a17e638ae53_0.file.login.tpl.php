<?php
/* Smarty version 3.1.30, created on 2020-02-07 01:52:42
  from "/var/www/html/mvc/core_one/App/Views/register/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3ca6cae89cd2_82807874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd048fb07e73b99b4d33eae052e5d4a17e638ae53' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/register/login.tpl',
      1 => 1581033159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/header.tpl' => 1,
    'file:../layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5e3ca6cae89cd2_82807874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../layouts/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form id="login_id" <?php if (isset($_SESSION['log_in']) && $_SESSION['log_in']) {?> style="display:none" <?php }?> action="" > 
    <div class="container col-md-6">

        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Check me out
          </label>
        </div>

        <input type="submit" class="btn btn-primary" value="Submit">

    </div>
</form>
<div id="msg">
</div>

      <?php $_smarty_tpl->_subTemplateRender("file:../layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">


    // ----------------- LOGIN -----------------------
    $(document).on('submit','#login_id' , function(e) {
    e.preventDefault();
        $.ajax({
            url: "<?php echo @constant('SITE_URL');?>
/logincontroller/login",
            type:'POST',
            data: $( this ).serialize(),
            dataType:"json",
            success: function(response){
              if(response.success){
                $("#msg" ).empty();
                $("#login_id" ).hide();
                location.reload();
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
