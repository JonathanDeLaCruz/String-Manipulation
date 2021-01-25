<?php

namespace joan\string;

use yii\base\Widget;

/**
 * This is just an example.
 */
class StringManipulation extends Widget
{
    public $string = '';

    public $length = 50;

    const TYPE_MIN_STRING = 1;

    const TYPE_REM_SIGN   = 2;

    public $type = self::TYPE_MIN_STRING;

    public function run()
    {
        return $this->renderString();
    }

    public function renderString()
    {
        $string = $this->string;
        if       ($this->type==self::TYPE_MIN_STRING) {
            if(strlen($string)>$this->length){
                $tmp = str_split($string, $this->length-3);
                $string = $tmp[0]."...";
            }
        } elseif ($this->type==self::TYPE_REM_SIGN) {
            $string = preg_replace('/\W+/',' ', $string);
        }
        return $string;
    }
}