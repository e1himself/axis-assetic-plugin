<?php
/**
 * Date: 16.11.12
 * Time: 4:16
 * Author: Ivan Voskoboynyk
 */

namespace Axis\S1\Assetic;

use \Assetic\Filter\FilterInterface;

class FilterManager extends \Assetic\FilterManager
{
  /**
   * @var \Axis\S1\ServiceContainer\TaggedServiceContainer
   */
  protected $serviceContainer;

  /**
   * @param \Axis\S1\ServiceContainer\TaggedServiceContainer $service_container
   */
  function __construct($service_container)
  {
    $this->serviceContainer = $service_container;
  }

  /**
   * @param $alias
   * @param FilterInterface $filter
   * @throws \InvalidArgumentException if alias is not a correct filter name
   */
  public function set($alias, FilterInterface $filter)
  {
    $this->checkName($alias);
    $this->serviceContainer['assetic.filter.'.$alias] = $filter;
  }

  /**
   * @param $alias
   * @return FilterInterface
   */
  public function get($alias)
  {
    return $this->serviceContainer['assetic.filter.'.$alias];
  }

  /**
   * @param string $alias
   * @return bool
   */
  public function has($alias)
  {
    return $this->serviceContainer->offsetExists('assetic.filter.'.$alias);
  }

  /**
   * @return array|string[]
   */
  public function getNames()
  {
    $keys = $this->serviceContainer->getKeysByTag('assetic.filter');
    $names = array_filter($keys, function($key) {
      return substr($key, 0, 15) == 'assetic.filter.';
    });
    $names = array_map(function($name) {
      return substr($name, 15);
    }, $names);
    return $names;
  }

  /**
   * @param string $name
   * @throws \InvalidArgumentException
   */
  protected function checkName($name)
  {
    // allow dots
    parent::checkName(str_replace('.', '_', $name));
  }
}
