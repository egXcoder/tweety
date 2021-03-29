<?php

namespace App\Enum\Contract;

abstract class Enum{
    public static function isValid($constant){
        $constants = (new \ReflectionClass(static::class))->getConstants();

        foreach($constants as $key=>$value){
            if($value == $constant){
                return true;
            }
        }

        return false;
    }

    public static function validate($constant){
        if(!static::isValid($constant)){
            throw new \Exception("Passed constant is not a valid constant");
        }
    }
}