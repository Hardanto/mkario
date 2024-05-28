<?php

// namespace
namespace Heart;

// required
require_once($_SERVER['DOCUMENT_ROOT'] . '/portfolio/vendor/autoload.php');

//using
use Spine\FirstHandDatabase;

//
//$access = new \Spine\connect();

/**
 * 
 */

if ( !class_exists( 'DnaPull' ) ) {
	
	//$this->access = new \Spine\connect;
	
	/**
	 * 
	 */
	class DnaPull {
		
		/**
		 * 
		 */
		public function pull_data () {
			
			// done
			return parse_ini_file('../../ini/webdev.ini');
			//return $access;
		}
		
		/**
		 * 
		 */
		 public function test_storing () {
			 
			 // done
			 return "Call to function test_storing exists";
		 }
	}
}

//$db = parse_ini_file('../ini/webdev.ini');

?>
