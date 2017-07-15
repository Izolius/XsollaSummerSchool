<?php

class Brackets
{
	const OPEN_BRACKETS='([{';
	const CLOSE_BRACKETS=')]}';

	public function isBracketSequenceCorrect($str) {
		$stack = new SplStack();
		for($i=0;$i<strlen($str);$i++){
			$smb=$str[$i];
			if (strpos(self::OPEN_BRACKETS,$smb)!==false){
				$stack->push($smb);
			}
			elseif (($pos=strpos(self::CLOSE_BRACKETS,$smb))!==false){
				if ($stack->isEmpty())
					return false;
			    if ($stack->top()==self::OPEN_BRACKETS[$pos])
					$stack->pop();
				else
					return false;
			}
			else
				return false;
		}
		return $stack->isEmpty();
	}
}
?>