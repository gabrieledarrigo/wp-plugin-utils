<?php
namespace Darrigo\WpPluginUtils\Model;

/**
 * Class EmptyResult
 * @package Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
final class EmptyResult extends ViewModel
{
    const IS_EMPTY = true;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [];
    }
}