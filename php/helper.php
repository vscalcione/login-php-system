<?php

    function validate_input_text($text_value){
        if(!empty($text_value)){
            $trim_text = trim($text_value);

            //remove illegal characters
             $sanitaze_string = filter_var($trim_text, FILTER_SANITIZE_STRING);
            return $sanitaze_string;
        }
        return "";
    }

    function validate_input_email($email_value){
        if(!empty($email_value)){
            $trim_text = trim($email_value);

            //remove illegal characters
             $sanitaze_string = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
            return $sanitaze_string;
        }
        return "";
    }
