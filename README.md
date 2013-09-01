yii-extension
=============

A convenient way to start building your own extensions for the Yii PHP framework.

This project was created to minimize boilerplate code required when creating new extensions for Yii. It includes separate behaviors for Widgets, Components and Modules that all extend the ExtensionBehavior class. 

## Usage

### Widgets

#### Attaching the behavior

```php
Yii::import('vendor.crisu83.yii-extension.behaviors.*');

MyWidget extends CWidget
{
  public function init() 
  {
    parent::init();
    $this->attachBehavior('ext', new WidgetBehavior);
  }
}
```

#### Registering assets

```php
$this->publishAssets(__DIR__ . '/path/to/assets');
$this->registerCssFile('css/styles.css');
$this->registerScriptFile('js/script.js');
```

### Components

#### Attaching the behavior

```php
Yii::import('vendor.crisu83.yii-extension.behaviors.*');

MyApplicationComponent extends CApplicationComponent
{
  public function init() 
  {
    parent::init();
    $this->attachBehavior('ext', new ComponentBehavior);
  }
}
```

#### Importing classes and directories

```php
$this->createPathAlias('myExtension', __DIR__);
$this->import('MyClass');
$myClass = new MyClass;
```

#### Registering assets

```php
$this->publishAssets(__DIR__ . '/path/to/assets');
$this->registerCssFile('css/styles.css');
$this->registerScriptFile('js/script.js');
```

### Modules

#### Attaching the behavior

```php
Yii::import('vendor.crisu83.yii-extension.behaviors.*');

MyModule extends CWebModule
{
  public function init() 
  {
    parent::init();
    $this->attachBehavior('ext', new ModuleBehavior);
  }
}
```

#### Importing classes and directories

```php
$this->import('MyClass');
$myClass = new MyClass;
```

#### Registering assets

```php
$this->publishAssets(__DIR__ . '/path/to/assets');
$this->registerCssFile('css/styles.css');
$this->registerScriptFile('js/script.js');
```
