<?php

namespace joan\string;

use yii\base\Widget;

/**
 * This is just an example.
 */
class StringManipulation extends Widget
{
    const TYPE_MINIMIZE_STRING = 1;
    const TYPE_REMOVE_SIGN     = 2;

    public $string = '';
    public $length = 50;
    public $type   = 0;

    public function run()
    {
        return $this->renderString();
    }

    public function renderString()
    {
        $string = $this->string;
        if       ($this->type==self::TYPE_MINIMIZE_STRING) {
            if(strlen($string)>$this->length){
                $tmp = str_split($string, $this->length-3);
                $string = $tmp[0]."...";
            }
        } elseif ($this->type==self::TYPE_REMOVE_SIGN) {
            $string = preg_replace('/\W+/',' ', $string);
        }
        return $string;
    }
}