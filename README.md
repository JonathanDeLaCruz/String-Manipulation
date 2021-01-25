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
<?= StringManipulation::widget([
        'string' => "Oh, you can't help that,' said the Cat: 'we're all mad here. I'm mad. You're mad.",
        'length' => 35,
        'type'   => StringManipulation::TYPE_MINIMIZE_STRING,
    ])
?>
```
```
Result => Oh, you can't help that,' said ...
```

2.- Remove signs from a string.
```php
<?= StringManipulation::widget([
        'string' => "'Oh, $ you can't help that,' @ said the Cat: 'we're * all mad here. I'm mad. * You're mad.'",
        'type'   => StringManipulation::TYPE_REMOVE_SIGN,
    ])
?>
```
```
Result => Oh you can t help that said the Cat we re all mad here I m mad You re mad
```