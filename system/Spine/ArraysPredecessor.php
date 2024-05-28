<?php

// essentials
namespace Spine;
//use Spine\Arrays;

/**
 * 
 */
if ( !class_exists( 'Arrays' ) ) {
	
	/**
	 * Create the class
	 */
	class ArraysPredecessor {
		
        /**
         * Recursively convert Arrays to Objects
         * 
         * @var         Array           The Array which will be converted to an 
         *                              stdClass Object.
         * 
         * @return      stdClass        The stdClass Object
         */
        protected function convertToObject ( $array ) {
            
            // instantiate a new object
            $object = new \stdClass();
            
            // loop thru the array
            foreach ( $array as $k => $v ) {
                
                // if there is no key, continue
                if ( strlen($k) == 0 ) continue;
                
                // if the value is an array, convert this also
                if ( is_array($v) ) $object->{$k} = $this->objectify($v);
                
                // just store it in the new object
                else $object->{$k} = $v;
            }
            
            // done
            return $object;
        }
	}
}

?>
