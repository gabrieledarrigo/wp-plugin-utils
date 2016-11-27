<?php
namespace Darrigo\WpPluginUtils\Model;

/**
 * Class EmptyResult
 * @package Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
final class EmptyResult extends ViewModel implements \Countable
{
    const IS_EMPTY = true;

    /**
     * @return int
     */
    public function count()
    {
        return 0;
    }

    /**
     * @return array
     */
    public function __toArray()
    {
        return [];
    }
}