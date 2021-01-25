String Manipulation
===================
String manipulation

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require joan/yii2-widget-stringmanipulation "dev-master"
```

or add

```
"joan/yii2-widget-stringmanipulation": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

1.- Minimize a string to certain numbers of characters.
```php
use joan\string\StringManipulation;

<?= StringManipulation::widget([
        'type'   => StringManipulation::TYPE_MINIMIZE_STRING,
        'string' => "Oh, you can't help that,'said the Cat:' we're all mad here. I'm mad. You're mad.",
        'length' => 40,
    ])
?>
```
```
Result => Oh, you can't help that,'said the Cat...
```

2.- Remove signs from a string.
```php
use joan\string\StringManipulation;

<?= StringManipulation::widget([
        'type'   => StringManipulation::TYPE_REMOVE_SIGN,
        'string' => "Oh, $ you can't help that,'@said the Cat:' we're*all mad here. I'm mad.*You're mad.",
    ])
?>
```
```
Result => Oh you can t help that said the Cat we re all mad here I m mad You re mad
```

2.- Random string.
```php
use joan\string\StringManipulation;

<?= StringManipulation::widget([
        'type'   => StringManipulation::TYPE_RANDOM_STRING,
        'length' => 20,
    ])
?>
```
```
Result => iGCS3gDGD3eZvgC5ZGDC
```