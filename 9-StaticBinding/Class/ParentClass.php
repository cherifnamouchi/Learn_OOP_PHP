<?php

namespace Class;


class ParentClass {

    protected static string $name = 'ParentClass';

   /*  public function getName() : string {
        var_dump(get_class($this));
        return $this->name;
    } */

    public static function getName() : string {
        return static::$name;
    } 

    public function factory() : static{
        #return new ParentClass();
        return new static;
    }
}