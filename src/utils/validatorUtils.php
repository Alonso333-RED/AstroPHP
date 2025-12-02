<?php
class validatorUtils {
    public static function checkStringLength($string, $minLength, $maxLength) {
        $length = strlen($string);
        return ($length >= $minLength && $length <= $maxLength);
    }
}