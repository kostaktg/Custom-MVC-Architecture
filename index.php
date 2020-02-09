<?php

use Core\Init;

//autoload
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__).'/Autoload.php';


//controllers
require_once INCLUDE_DIR.'App/Controllers/HomeController.php';
require_once INCLUDE_DIR.'App/Controllers/RegisterController.php';
require_once INCLUDE_DIR.'App/Controllers/LoginController.php';
require_once INCLUDE_DIR.'App/Controllers/UserAnswersController.php';





//Models
require_once INCLUDE_DIR.'App/Models/UserAnswer.php';
require_once INCLUDE_DIR.'App/Models/Survey.php';
require_once INCLUDE_DIR.'App/Models/User.php';

//Helpers
require_once INCLUDE_DIR.'App/Helpers/StatisticHelper.php';

// require_once INCLUDE_DIR.'/models/Box.php';



//  --------- INDEX LOAD CONTROLLER  -------------

$init = new Init();

