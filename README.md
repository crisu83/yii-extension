yii-extension
=============

Tools for building extensions for the Yii PHP framework.

## Usage

### Attaching the behavior

```php
$this->attachBehavior('extension', 'C83ExtensionBehavior');
```

### Importing classes and directories

```php
$this->createPathAlias('myExtension', __DIR__);
$this->import('MyClass');
$myClass = new MyClass;
```

### Registering of assets

```php
$this->publishAssets(__DIR__ . '/path/to/assets');
$this->registerCssFile('css/styles.css');
$this->registerScriptFile('js/script.js');
```
