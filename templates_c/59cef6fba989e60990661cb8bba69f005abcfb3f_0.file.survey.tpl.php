<?php
/* Smarty version 3.1.30, created on 2020-02-09 01:19:19
  from "/var/www/html/mvc/core_one/App/Views/survey.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3f41f7626aa1_18860018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59cef6fba989e60990661cb8bba69f005abcfb3f' => 
    array (
      0 => '/var/www/html/mvc/core_one/App/Views/survey.tpl',
      1 => 1581203956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/header_survey.tpl' => 1,
    'file:layouts/footer.tpl' => 1,
  ),
),false)) {
function content_5e3f41f7626aa1_18860018 (Smarty_Internal_Template $_smarty_tpl) {
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


    <br/><br/><br/><br/><br/><br/>
    <h2 id="submit_msg"></h2>
    <input type="button" id="save_all_id" data-id="save_all_id"  value="Submit All Your Answers">
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">

    // ----------------- SUBMIT -----------------------
    $( "#save_all_id" ).click(function() {
            $("#submit_msg").empty();
            $.ajax({
                url: "<?php echo @constant('SITE_URL');?>
homecontroller/create",
                type:'GET',
                dataType:"json",
                success: function(response){
                    if(response.success){
                        location.replace('/mvc/core_one/useranswerscontroller/read');
                    } else {
                        if(response.error_answers) {
                            $("#submit_msg").empty();
                            $("#submit_msg").append(response.error_answers);
                            setTimeout(function(){ 
                                $("#submit_msg").empty();
                            }, 5000);
                        } else {
                            $("#submit_msg").empty();
                            $("#submit_msg").append(response.error_db);
                            setTimeout(function(){ 
                                $("#submit_msg").empty();
                            }, 5000);
                        }

                    }
                }
            });
    

    });

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
                    $("#results_" + question_id).empty();
                    $("#results_" + question_id).append('Committed');
                    setTimeout(function(){ 
                        $("#results_" + question_id).empty();
                    }, 1500);
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

        data[question_id] =  'submission';
        $.ajax({
            url: "<?php echo @constant('SITE_URL');?>
homecontroller/update",
            type:'GET',
            data: { 'question': data } ,
            success: function(response){
                console.log(response);
                $("#results_" + question_id).empty();
                //$("#results_" + question_id).append('Submission');
                $('input.answer[data-id='+ question_id +']').prop('disabled', true);
                GiveAnswers(question);
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
        $("#answer_" + question_id).append('Correct answers:<br>');
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
