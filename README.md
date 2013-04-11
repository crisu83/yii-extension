yii-extension
=============

A convenient way to start building your own extensions for the Yii PHP framework. 
This project was created to minimize boilerplate code when creating extensions for Yii.

## Usage

The extension behavior provides basic functionality often required by extensions so that you don't need to write it yourself.

### Attaching the behavior

```php
Yii::import('vendor.crisu83.yii-extension.behaviors.ExtensionBehavior');

use crisu83\yii_extension\behaviors\ExtensionBehavior;

MyApplicationComponent extends CApplicationComponent
{
  public function init() 
  {
    parent::init();
    $this->attachBehavior('extension', new ExtensionBehavior);
  }
}
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
