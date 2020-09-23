<?php

// 	BEGIN of SMART FORM
function select_set($form_value, $exist_value){
	if($form_value == $exist_value){
		return ' selected="selected"';
	}
}

function check_set($form_value, $exist_value){
	if(is_array($exist_value)){
		foreach($exist_value as $ev){
			if($form_value == $ev){
				return ' checked="checked"';
				//break;
			}
		}	
	}
	else{
		if($form_value == $exist_value){
			return ' checked="checked"';
		}
	}
}

function radio_set($form_value, $exist_value){
	if($form_value == $exist_value){
		return ' checked="checked"';
		//break;
	}
}
//	END of SMART FORM

?>