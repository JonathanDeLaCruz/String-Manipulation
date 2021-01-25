<?php

namespace \joan\string;

use yii\base\Widget;

/**
 * This is just an example.
 */
class StringManipulation extends Widget
{
    public $string = '';

    public $length = 50;

    public function run()
    {
        return $this->minString();
    }

    public function minString()
    {
        $string = $this->string;
        if(strlen($string)>$this->length){
            $tmp = str_split($string, $this->length);
            $string = $tmp[0]."...";
        }
        return $string;
    }
}