<?php

class config
{
    /*
     * Application settings
     */
    const MODE_INDEX_PAGE       = 'index';
    const MODE_404_PAGE         = '404';
    const MODE_PREFIX           = 'mode_';
    const MODE_DIR              = '/mode';

    /*
     * PHP settings
     */
    const PHP_NEED_VERSION      = '5.4';

    /*
     * MySQL connection settings
     */
    const MYSQL_HOST			= 'localhost';
    const MYSQL_DB				= 'gulden_site';
    const MYSQL_USER			= 'gulden_site';
    const MYSQL_PASS			= "jee9Tu7zoh";
    const MYSQL_ENCODE			= "UTF8";


    /*
     * Templates settings
     */
    const HEADER_LINK           = 'component/header';
    const FOOTER_LINK           = 'component/footer';
    const TEMPLATE_PATH         = '/templates/';

    private static $DEV_ENVIRONMENT = false;

    static function devEnvironment($bool)
    {
        if($bool)
        {
            self::$DEV_ENVIRONMENT = true;
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            ini_set("display_startup_errors", 1);
        }
        else
        {
            self::$DEV_ENVIRONMENT = false;
            error_reporting(0);
            ini_set("display_errors", 0);
            ini_set("display_startup_errors", 0);
        }
    }

    static function isDevEnvironment()
    {
        return self::$DEV_ENVIRONMENT;
    }

    static function checkRequirements()
    {
        if(version_compare(phpversion(), self::PHP_NEED_VERSION, '<'))
            die('Need PHP version '.self::PHP_NEED_VERSION.' or higher
                <br> Your version is '.phpversion());
    }
}
?>