<?php
namespace kcmerrill\tdd;
require_once dirname(__FILE__) . "/phpwebunit.php";

class phpwebunitkit {
	public static $bin = 'phpunit';
	public static function Exec($cmd) {
		new phpwebunit('', array('bin'=>self::$bin, "switches"=>$cmd), array('SCRIPT_FILENAME'=>''));
	}
	public static function Test($file_path) {
		new phpwebunit($file_path, array('bin'=>self::$bin));
	}
}
