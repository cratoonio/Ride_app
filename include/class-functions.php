<?php

if (!class_exists('VALIDATION')) {
    class VALIDATION
    {
        public function val($input)
        {
            if (preg_match('/^[\@\a-z\d_]{2,20}$/i', $input) && !empty($input)) {
                return true;
            } else {
                return false;
            }

        }


    }
}
$validation = new VALIDATION;








