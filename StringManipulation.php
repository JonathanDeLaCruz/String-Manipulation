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
    const TYPE_RANDOM_STRING   = 3;

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
        } elseif ($this->type==self::TYPE_RANDOM_STRING) {
            $allowedcharacters = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"), 0, $this->length); 
            $allowednumbers    = substr(str_shuffle("0123456789"), 0, $this->length); 
            $allowed           = substr(str_shuffle($allowedcharacters.$allowednumbers), 0, $this->length); 
            for($i=0;$i<$this->length; $i++) {
                $string .= $allowed[rand(0,strlen($allowed)-1)];
            }
        }
        return $string;
    }
}