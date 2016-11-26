<?php
namespace Darrigo\WpPluginUtils\Model;

use Darrigo\WpPluginUtils\Utils\ArrayCheck;
use Darrigo\WpPluginUtils\Utils\IsEmpty;

/**
 * Class Instance
 * @package Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
final class Instance implements \ArrayAccess, ToArray
{
    use ArrayCheck, IsEmpty;

    /**
     * @var array
     */
    protected $instance = [];

    /**
     * Instance constructor.
     * @param array $instance
     */
    public function __construct(array $instance)
    {
       $this->instance = $instance;
    }

    /**
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset)
    {
        return $this->isValueSet($this->instance, $offset);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->instance[$offset] = $value;
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->instance[$offset];
    }

    /**
     * @param mixed $offset
     */
    public function offsetUnset($offset)
    {
        $this->instance[$offset] = null;
    }

    /**
     * @return array
     */
    public function __toArray()
    {
       return $this->instance;
    }
}