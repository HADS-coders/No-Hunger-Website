<?php

    defined('DS') ? null : define('DS',DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT',DS.'opt'.DS.'lampp'.DS.'htdocs'.DS.'php-api');

    defined('INC_PATH')? null : define('INC_PATH',SITE_ROOT.DS.'includes');
    defined('CORE_PATH')? null : define('CORE_PATH',SITE_ROOT.DS.'core');

    //load the config files
    require_once(INC_PATH.DS.'config.php');

    //core classes
    require_once(CORE_PATH.DS.'person.php');

?>