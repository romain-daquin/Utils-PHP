<?php
	/*
	* Utils Class
	* Useful functions php development
	*
	* PHP Version 5
	*
	* License GNU GPL
	* This program is free software: you can redistribute it and/or modify
    * it under the terms of the GNU General Public License as published by
    * the Free Software Foundation, either version 3 of the License, or
    * (at your option) any later version.
	*
    * This program is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU General Public License for more details.
 	*
    * You should have received a copy of the GNU General Public License
    * along with this program.  If not, see <http://www.gnu.org/licenses/>.
	*
	*
	* @category	development
	* @package 	
	* @author 	Romain Daquin <daquin.romain@gmail.com>
	* @website 	www.rdaquin.fr
	* @license GNU GPL
	* @version 1.0
	*/

	class Utils
	{
		function __construct() {
		}

		function __destruct() {
    	}

    	/*
    	* function applyTheCasseBeginning
    	* @param : String (word or setence)
    	* @return : Word or sentence with the case
    	* 
    	* Apply the breaks at the beginning of the string
    	*/
		public function applyTheCasseBeginning($param) {
			$string = $param;

			$start 	= substr($string, 0,1);
			$end 	= substr($string, 1);
			return strtoupper($start).strtolower($end);
		}

		/*
    	* function applyTheCasse
    	* @param : String (setence)
    	* @return : Sentence with the case
    	* 
    	* Applies to break each word in a sentence
    	*/
		public function applyTheCasse($param) {
			$string 	= $param;
			$previous 	= " ";
			$return 	= "";

			for($i=0;$i<strlen($string);$i++) {
				if(strcmp($previous," ")){
					$return .= strtolower($string[$i]);

				}else{
					$return .= strtoupper($string[$i]);
				}

				$previous = $string[$i];	
			}

			return $return;
		}
	}
?>