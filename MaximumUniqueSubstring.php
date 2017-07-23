<?php

class MaximumUniqueSubstring
{
	public function findMaximumUniqueSubstring($str) {
		$mustr='';
        $curstr='';
        for ($i=0;$i<strlen($str);$i+=1){
            if (($pos=strpos($curstr,$str[$i]))!==false){
                if (strlen($curstr)>strlen($mustr)){
                    $mustr=$curstr;
                }
                $curstr=substr($curstr,$pos+1).$str[$i];
            }
            else{
                $curstr.=$str[$i];
            }
        }
        if (strlen($curstr)>strlen($mustr)){
            $mustr=$curstr;
        }
        return $mustr;
	}
}
?>