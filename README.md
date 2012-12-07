AxisAsseticPlugin
=================

This plugin that integrates [Assetic](https://github.com/kriswallsmith/assetic) into symfony

Installation
------------

Use [Composer](http://getcomposer.org/). Just add this dependency to your `composer.json`:

```json
  "require": {
    "axis/axis-assetic-plugin": "dev-master"
  }
```

### Optional vendor libraries

#### CssMin
To use CssMin minifier add `natxet/CssMin` dependency to your project's `composer.json`.

#### LessPHP
To use LessPHP compiler add `leafo/lessphp` dependency to your project's `composer.json`.

#### JavascriptPacker
To use Javascript packer include [Dean Edwards 's Packer](http://joliclic.free.fr/php/javascript-packer/en/)
library into your project.

#### JSMin
To use JSMin minifier add `nick4fake/jsmin` dependency to your project's `composer.json`.

#### JSMinPlus
To use JSMinPlus minifier include [Tino Zijdel's JSMinPlus](https://github.com/mrclay/minify/blob/master/min/lib/JSMinPlus.php)
class into your project.

#### PhpCssEmbed
To use PhpCssEmbed filter add `ptachoire/cssembed` dependency to your project's `composer.json`.

#### ScssPhp
To use ScssPhp filter add `leafo/scssphp` dependency to your project's `composer.json`.

Usage
-----
You can use all Assetic functionality in your project.
Also plugin defines all standard Assetic filters using `factories.yml` and additionally custom FilterManager
that aware how to retrieve all that filters.

```php
$filterManager = sfContext::getInstance()->get('assetic.filter_manager');
$filterManager->get('css_min');
```

---------------
*Note*: AxisAsseticPlugin uses `factories.yml` configuration supported by 
[AxisServiceContainerPlugin](https://github.com/e1himself/axis-service-container-plugin)

