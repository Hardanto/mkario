<?php

// essentials
namespace Required;
use Spine\ArraysPredecessor;

/**
 * 
 */
if ( !class_exists( 'Arrays' ) ) {
	
	/**
	 * Create the class
	 */
	class Arrays extends ArraysPredecessor {
		
        /**
         * Recursively convert Arrays to Objects
         * 
         * @var         Array           The Array which will be converted to an 
         *                              stdClass Object.
         * 
         * @return      stdClass        The stdClass Object
         */
        public function objectify ( $array ) {
			
			// done
			return $this->convertToObject( $array );
		}
	}
}
?>
