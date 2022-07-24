<?php
namespace APP;
class Validate{
    public static function email($email){
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value){
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }
}
?>