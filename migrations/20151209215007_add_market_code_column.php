<?php

use Phinx\Migration\AbstractMigration;
use Tygh\Registry; if (!defined('AREA')){define('AREA','A');} require_once dirname(dirname(__FILE__)).'/init.php';
class AddMarketCodeColumn extends AbstractMigration
{
    public function up()
    {
		$table = $this->table('cscart_companies');
		if (!$table->hasColumn('market_code')) {
			fn_print_r('market code added!');
			$this->execute("ALTER TABLE cscart_companies ADD market_code VARCHAR(64) DEFAULT '';");
		}
    }

    public function down()
    {


    }
}