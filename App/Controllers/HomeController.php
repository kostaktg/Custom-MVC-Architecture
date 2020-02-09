<?php

namespace App\Controllers;

use Models\Survey;
use Models\UserAnswer;
use Core\BaseController;


class HomeController extends BaseController{



    public function Read(){
        // destroy the session JUST FOR EXAMPLE AND TESTS
        if (isset($_SESSION['question'])) {
            unset($_SESSION['question']);

        }
        
        $model      = Survey::getInstance();
        $questions  = $model->get_questions();
        $answers    = $model->get_answers();
        // var_dump($query);
        $this->smarty->assign('questions',$questions);
        $this->smarty->assign('answers',$answers);

        $this->smarty->show('survey');
    }


    // Routers can make all ptotected methods has been load only by Ajax XMLHttpRequest    
    protected function create(){
        $model = UserAnswer::getInstance();
        $result = $model->add();
        echo json_encode($result);
        
    }


    // Routers can make all ptotected methods has been load only by Ajax XMLHttpRequest    
    protected function update(){
        // Start the session
        foreach($_GET['question'] as $key=>$question){
            if($question === 'submission'){
                $_SESSION['question'][$key] = $question;
            } else {
                foreach($question as $answer){
                    $answers[] = $answer;
                }
                $_SESSION['question'][$key] = $answers;
            }
        }

        echo json_encode($_SESSION);
    }
}