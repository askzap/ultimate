<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry; if (!defined('AREA')){define('AREA','A');} require_once dirname(dirname(__FILE__)).'/init.php';
class TurnOffYaMarketAddons extends AbstractMigration
{
    public function up()
    {
        fn_uninstall_addon('yandex_market');
        fn_uninstall_addon('yandex_search');
    }

    public function down()
    {


    }
}