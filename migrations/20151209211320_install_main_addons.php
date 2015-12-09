<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry; if (!defined('AREA')){define('AREA','A');} require_once dirname(dirname(__FILE__)).'/init.php';
class InstallMainAddons extends AbstractMigration
{
    public function up()
    {
        fn_install_addon('ak_union_web', false, false);
        fn_install_addon('ak_partkom', false, false);
        fn_install_addon('ak_ixora', false, false);
        fn_install_addon('ak_autopiter', false, false);

        db_query("UPDATE ?:addons SET status = 'A' WHERE addon in (?a);", array('ak_union_web', 'ak_partkom', 'ak_ixora', 'ak_autopiter'));
    }

    public function down()
    {


    }
}