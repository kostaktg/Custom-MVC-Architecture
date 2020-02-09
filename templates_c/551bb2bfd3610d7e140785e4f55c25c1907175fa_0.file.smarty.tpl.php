<?php
/* Smarty version 3.1.30, created on 2020-02-06 23:27:19
  from "/var/www/html/mvc/core_one/App/Views/smarty.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3c84b73c7669_75284994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '551bb2bfd3610d7e140785e4f55c25c1907175fa' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/smarty.tpl',
      1 => 1581024437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header_survey.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5e3c84b73c7669_75284994 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:layouts/header_survey.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
?>
    <fieldset id="question1" data-id="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">
        <legend><?php echo $_smarty_tpl->tpl_vars['question']->value['text'];?>
</legend>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answers']->value, 'answer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['answer']->value['question_id'] == $_smarty_tpl->tpl_vars['question']->value['id']) {?>
                <label><INPUT TYPE="checkbox" NAME="input" data-answertext="<?php echo $_smarty_tpl->tpl_vars['answer']->value['text'];?>
" data-istrue="<?php echo $_smarty_tpl->tpl_vars['answer']->value['is_true_answer'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['answer']->value['id'];?>
" VALUE="wrong"><?php echo $_smarty_tpl->tpl_vars['answer']->value['text'];?>
<BR></label>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <h3 id="answer_<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"></h3>
    <h2 id="results_<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"></h2>
    </fieldset>
    <input type="button" class="answer" data-id="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"  value="Save">
    <input type="button" class="submission" data-id="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
" value="Submission">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">


    // ----------------- ANSWER -----------------------
    $( ".answer" ).click(function() {

        var question = $(this);
        var answers = [];
        var data = {};
        var question_id = question.data('id');

        $('input[type=checkbox]:checked').each(function () {
            if($(this).closest("fieldset").data('id') === question.data('id')){
                let answer_id = $(this).data('id')

                answers.push(answer_id);
                data[question_id] =  answers;

            }
        });
        if(typeof data[question_id] !== 'undefined'){
            $.ajax({
                url: "<?php echo @constant('SITE_URL');?>
homecontroller/update",
                type:'GET',
                data: { 'question':data } ,
                success: function(response){
                console.log(response);
                $("#results_" + question_id).empty();
                $("#results_" + question_id).append('Answered');
                question.prop('value', 'Update');
                }
            });
        }
    

    });


    // -------------- SUBMISSION -----------------------
    $( ".submission" ).click(function() {
        var question = $(this);
        var question_id = question.data('id');
        var data = {};

        UnCheckedAll(question);
        GiveAnswers(question);

        data[question_id] =  'submission';
        $.ajax({
            url: "<?php echo @constant('SITE_URL');?>
homecontroller/update",
            type:'GET',
            data: { 'question': data } ,
            success: function(response){
            console.log(response);
            $("#results_" + question_id).empty();
            $("#results_" + question_id).append('Submission');
            $("#results_" + question_id).append('Answered');
            $('input.answer[data-id='+ question_id +']').prop('disabled', true);
            }
        });

    });


    // Uncheck all checkbox in fieldset
    function UnCheckedAll(question){
        $('input[type=checkbox]:checked').each(function () {
            if($(this).closest("fieldset").data('id') === question.data('id')){
                $(this).prop("checked", false);
            }
        });
    }


    // Give Answers
    function GiveAnswers(question){
        var question_id = question.data('id');

        $("#answer_" + question_id).empty();
;
        $('input[type=checkbox]').each(function () {
            if($(this).closest("fieldset").data('id') === question.data('id')){
                if ($(this).data('istrue') == '1'){
                $("#answer_" + question_id).append('<br/>' + $(this).data('answertext'));
                }
            }
        });
    }

<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
