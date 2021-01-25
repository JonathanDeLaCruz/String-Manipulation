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
"joan/yii2-widget-stringmanipulation": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

1.- Minimize a string to certain characters.
```php
<?= StringManipulation::widget([
        'string' => 'Ojala y funcione jajajaja',
        'length' => 15,
        'type'   => StringManipulation::TYPE_MIN_STRING,
    ])
?>
```

2.- Remove signs from a string.
```php
<?= StringManipulation::widget([
        'string' => 'Ojala * y *funcione 2 jajajaja',
        'type'   => StringManipulation::TYPE_REM_SIGN,
    ])
?>
```