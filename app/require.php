<?php
    //Require libraries from folder libraries
    require_once 'libraries/Core.php';
    require_once 'libraries/Controller.php';
    require_once 'libraries/Database.php';

    require_once 'helpers/utilities.php';
    require_once 'helpers/session_helper.php';

    require_once 'config/config.php';

    require_once 'helpers/Mobile_Detect/src/MobileDetect.php';

    //Instantiate core class
    $init = new Core();
