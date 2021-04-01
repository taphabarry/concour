<?php
class Test{
	public static function repeter($a, $b){
		while ($a != $b ) {
			if ($a > $b) {
				$a= $a - $b;
			}else{
			
				$b= $b - $a; 
			}
		}
		return $a AND $b;
	}
}
?>