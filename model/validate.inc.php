<?php
    function val_dni($text){
        $reg="^[0-9]{8}[A-Z]{1}$";
		return ereg($reg,$text);
	}
    function val_nombre($text){
        $reg="^[A-Za-z ]{2,20}$";
		return ereg($reg,$text);
	}
    function val_apellidos($text){
        $reg="^[A-Za-z ]{2,40}$";
		return ereg($reg,$text);
	}
    function val_birthday($text){
        if($text !== ""){
            return true;
        }
	}
    function val_phone($text){
        $reg="^[0-9]{9}$";
		return ereg($reg,$text);
	}
    function val_email($text){
        if($text !== "")
			return true;
    }
    function val_user($text){
        if($text !== "")
			return true;
    }
    function val_pass($text){
        if($text !== "")
			return true;
    }