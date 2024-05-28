<?php

// the namespace
namespace Spine;

// uses
use Required\Arrays;
use Heart\DnaPull;

/**
 * The data in the database is called with this class.
 * It can only be called by one other class which extends this one.
 */

if ( !class_exists('FirstHandDatabase') ) {
	
	/**
	 * Create the class
	 */
	class FirstHandDatabase {
		
		// private variables
		private $username;
		private $password;
		private $database;
		
		// for the arrays
		private $arrays;
		
		/**
		 * Construction for the class
		 */
		public function __construct () {
			
			// the constructions
			$this->arrays = new \Required\Arrays();
			$this->username = $this->configuration()->username;
			$this->password = $this->configuration()->password;
			$this->database = $this->configuration()->database;
			
			// done
			return;
		}
		
		/**
		 * Private use only
		 */
		private function configuration () {
			
			// done
			return $this->arrays->objectify(parse_ini_file(dirname($_SERVER['DOCUMENT_ROOT']) . '/ini/webdev.ini'));
		}
		
		/**
		 * An attempt connection to the database
		 */
		protected function connect () {
			
			// mysqli
			//$mysqli = mysqli_connect();
			
			// PDO connection done
			return new \PDO(
				'mysql:host=localhost;dbname=' . $this->database, 
				$this->username, 
				$this->password,
				$this->connection_options()
			);
		}
		
		/**
		 * Options for the PDO connection
		 */
		protected function connection_options () {
			
			// send the options
			return array(
				\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
				\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
				\PDO::ATTR_EMULATE_PREPARES   => false
			);
		}
		
		/**
		 * A stabilized connection to the database
		 */
		protected function stable_connection () {
			
			// try it 
			try { 
				
				// return the connection
				return $this->connect();
				
			}
			catch ( PDOException $e ) { 
				
				// done with a message
				return json_encode(array('outcome'=>false,'message'=>'Unable to connect to database!'));
				
			}
		}
		
		/**
		 * Clean up the details before querying
		 * 
		 * @var		Object		Everything that needs to be scanned
		 */
		protected function clean ( $query ) {
			
			// 
			
			// done
			return $details;
		}
		
		/**
		 * Retrieving data from the database
		 * 
		 * @var			String		Information that goes into the query statement
		 * 
		 * @Return		stdObject	A list with details of the results
		 */
		protected function retrieve ( $query ) {
			
		}
		
		/**
		 * 
		 */
		protected function store ( $data ) {
			
			// connection
			$connect = $this->stable_connection();
			
			// for each table
			foreach ( $data as $table => $details ) {
				
				// prepare
				// statement: "INSERT INTO table (name1, name2, name3,...) VALUES (:col1, :col2, :col3,...)"
				$prep = $connect->prepare("INSERT INTO `$table` (`" . implode('`, `', $details->colnames) . "`) VALUES (" . implode(',', $details->colvars) . ")");
				
				// execute
				$prep->execute($details->colvals);
				
				//done
				return;
			}
			
		}
		
		/**
		 * 
		 */
		protected function update ( $query ) {
			
		}
		
		/**
		 * 
		 */
		protected function delete ( $query ) {
			
		}
		
		/**
		 * 
		 *
		protected function get_table_names () {
			
			//$connect = $this->stable_connection();
			
			$query = $this->stable_connection()->query("SHOW TABLES");
			
			return $query->fetchAll(\PDO::FETCH_COLUMN);
			
		}*/
	}
	
}

?>
