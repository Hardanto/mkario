<?php

// essentials
namespace Required;

// uses
use Spine\FirstHandDatabase;

/**
 * For requests to the database we will use this class
 */
if (!class_exists('DatabasePreparations')) {
	
	/**
	 * Create the class
	 */
	class DatabasePreparations extends FirstHandDatabase {
		
		// required variables
		private $arrays;
		
		/**
		 * Construct
		 */
		function __construct () {
			
			// construction
			$this->arrays = new \Required\Arrays;
			
		}
		
		protected function register_test () {
			
			// object
			$obj = array();//new \stdClass;
			
			// create details
			$username = 'MitchK';
			$userhash = hash_hmac('sha256', $username,'1234567890');
			$password = password_hash('Mitch1006', PASSWORD_DEFAULT);
			
			// data details
			$obj['data'] = [
				'userhash'=>$userhash,
				'username'=>$username,
				'password'=>$password
			];
			
			// set the data
			//$obj['data'] = $this->set_data($obj['data']);
			
			// the tables
			$obj['cat'] = array('registration');
			
			// done
			//return $this->arrange_data($obj['data'], $obj['cat']);
			return $this->arrays->objectify($obj);
			//return $obj;
		}
		
		/**
		 * 
		 */
		protected function set_data ( $data ) {
			
			// set the data
			foreach ( $data as $k=>$v ) {
				
				// add to array
				$result['colvars'][] = $k;
				$result['colvals'][] = $v;
			}
			
			// done
			return $result;
		}
		
		public function testStoring () {
			return $this->register_test();
			
			// the statement
			//$query = "INSERT INTO `$database` (`user_hash`, `username`, `password`) VALUES (:hash, :uname, :passw)";
			
			//$connect = $this->stable_connection();
			
			// $prep = $connect->prepare($query);
			return $this->arange_data($data, $cat);// $connect->prepare($query);
			
			//$prep->execute($data);
			
			// closing
			//$prep = null;
			
			return;
		}
		
		/**
		 * Arrange the data to the correct form
		 * 
		 * @var			Array||Object		A list of the data with key and value
		 * 									in an array or object
		 * 
		 * @var			Array||Object		A list of the type of storing to know
		 * 									which tables to use
		 * 
		 * @return		Object				The correct form of the list
		 */
		protected function arrange_data ($data, $storecat) {
			
			// arrange the tables
			foreach ( $storecat as $k=>$v ) $stored = $this->select_table($v, $data);
			
			// done
			return $this->arrays->objectify($stored);
		}
		
		/**
		 * Set the table
		 * 
		 * @var			String
		 * 
		 * @return		Object
		 */
		protected function select_table ( $cat, $data ) {
			
			// which table to use?
			switch ( $cat ) {
				
				// for registration
				case 'registration':
					
					// whats needed
					//$result['t'] = ['login_credentials', 'user_login_details', 'user_personal_details'];
					//$result['d'] = $data;
					/*$result = [
						'login_credentials'		=>	$data, 
						'user_login_details'	=>	['colvars'=>[$data['colvars'][0]], 'colvals'=>[$data['colvals'][0]]], 
						'user_personal_details'	=>	['colvars'=>[$data['colvars'][0]], 'colvals'=>[$data['colvals'][0]]]
					];*/
					$result = [
						'login_credentials'		=>	['cols'=>['user_hash'=>$data->userhash, 'username'=>$data->username, 'password'=>$data->password]], 
						'user_login_details'	=>	['cols'=>['user_hash', 'email', 'mobile']],
						'user_personal_details'	=>	['cols'=>['user_hash', 'first_name', 'initials', 'last_name', 'gender', 'birthday']]
					];
					
					// done
					//return $this->set_tables_data($result, $data);
					return $data;
					
				// for login
				case 'login':
					
					// done
					return $this->arrays->objectify(array('login_credentials', 'user_login_details'));
					
				// user details update
				case 'user_update':
					
					//@Todo
					return;
				
				// if no correct cat, leap out
				default:
					
					// done
					return;
			}
		}
		
		/**
		 * 
		 */
		protected function set_tables_data ( $tables, $data ) {
			
			// loop through
			foreach ( $tables as $table => $val ) {
				
				switch ( $table ) {
					
					// for login credentials
					case 'login_credentials':
						
						// attach the columns
						$tables['login_credentials']['colvars'] = $data['colvars'];
						$tables['login_credentials']['colvals'] = $data['colvals'];
						
						// done
						//return $tables;
						
					// for user login details
					case 'user_login_details':
						
						// attach the columns
						$tables['user_login_details']['colvars'] = $data['colvars'];
						$tables['user_login_details']['colvals'] = $data['colvals'];
						
						// done
						//return $tables;
						
					// for user login details
					case 'user_personal_details':
						
						// attach the columns
						$tables['user_personal_details']['colvars'] = $data['colvars'];
						$tables['user_personal_details']['colvals'] = $data['colvals'];
						
						// done
						//return $tables;
						
					// for no cases default
					default:
						
						// done
						//return ['result'=>'error', 'message'=>'Error while processing to store'];
						return $tables;
				}
			}
		}
		
		/**
		 * Prepare for storing in the database
		 * 
		 * @var				Object		Containing the details for storing into the database
		 * 
		 * @return			Object		An object containing the details
		 */
		public function insertPrep ( $data ) {
			
			// for each table
			//foreach ( $data as $table => $details ) return $this->connect()->
			
			// done
			return 'Hello';
		}
		
		/**
		 * 
		 */
		public function selectPrep () {
			
			// done
			return;
		}
		
	}
}

?>
