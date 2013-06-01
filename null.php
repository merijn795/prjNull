<?php
/**
 * isNull :: Project by Merijn K
 * ------------------------------------------
 * This is professional developed and this source-code may not be rewritten.
 * At this page you can see what we, teh great develop0rz can do with just
 * a null. Cuz null is null and null equals to null and 'null' is not identical to null.
 
 * Love for PEfag, PEjump, PEcock, PEhump & PEdick.
 */

class isNull {	 
	 /**
	  * This is the null base of all nulls.
	  *
	  * @char $null
	  */
	  
	 private $null = 'null';
	 
	 public function __construct() { $this->_null(); }
	 
	 public function _null() {
		if ($this->null !== null || null === null) {
			$this->null = "null";
		}
		
		$this->null = json_encode($this->null);
		
	
		if (null !== $this->null) {
			/**
			 * Wait wut? It isn't null? Now 
			 * i will transform in MAD MODE :(.
			 */
			 
			 $this->nullReceiver($this->null);
		}
	 
	 }
	 
	 public function nullReceiver($theGoddyNull) {
		// This receives teh nullz of the whole world.. woot 
		// i herd u liek mudkiepz?
		
		
		$decodeLulz = json_decode($theGoddyNull);
	
		if ($decodeLulz == 'null') {
			$newNull = function ($theNullizer) {
				return $theNullizer;
			};
			
			
			$nullPownizer = $newNull("null");
			
			if (is_string ($nullPownizer)) {
				// The null is defined as string.. O.
				// lets define it as a NULL HAHA!!!
				
				$this->convertToNull($nullPownizer);
			}
		}
	 }
	 
	 public function convertToNull($inputString) {
		// I only do strings, not chars!!!!!
		
		if ($inputString !== null) {
			// It isn't, so we are going to set it as null :)
		
			$inputString = null;
	
			if ($inputString === null) {
				/// YAY IT IS COZ WE ARE RICH ' nulled ;)
				
				$newNull = array ('null');
				
				$returnNull = implode('', $newNull);
				
				
				if ($returnNull !== null) {
					/**
					 * The null is again defined as string. I'm not
					 * happy with that! :(
					 *
					 * @var $returnNull
					 */
					 
					 $this->finalize($returnNull);
				}
			
			}
		} 
	 }
	 
	 public function finalize($nullasize) {
		/**
		 * Finally, the null has rolled.
		 * Now, it's time to tr0ll everybodie
		 * in teh world. NULL HAS SURVIVED!!!!!!! 
		 * for evah.
		 */
		 
		 
		 for ($i = 0; $i <= 1337; $i++) {
			// Now, output null 1337 times.
			
			echo '<marquee>', $nullasize, '</marquee>';
		 }
	 }
}

?>