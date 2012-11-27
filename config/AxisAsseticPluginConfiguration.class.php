<?php
/**
 * Date: 30.10.12
 * Time: 3:08
 * Author: Ivan Voskoboynyk
 */
class AxisAsseticPluginConfiguration extends sfPluginConfiguration
{
  public function configure()
  {
    parent::configure();

//    $vendorDir = __DIR__.'/../lib/vendor';
//    $baseDir = dirname(dirname($vendorDir));
//
//    $map = require $vendorDir . '/composer/autoload_namespaces.php';

    $autoloader = new \Symfony\Component\ClassLoader\UniversalClassLoader();
    $autoloader->registerNamespace('Axis\\S1\Assetic', __DIR__.'/../lib/');
//    $autoloader->registerNamespaces($map);
    $autoloader->register(true);

//    $classMap = require $vendorDir . '/composer/autoload_classmap.php';
//
//    $autoloader = new \Symfony\Component\ClassLoader\MapClassLoader($classMap);
//    $autoloader->register(true);
  }
}
