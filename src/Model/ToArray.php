<?php
namespace Darrigo\WpPluginUtils\Model;

/**
 * Interface ToArray
 * @package Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
interface ToArray
{
    /**
     * @return array
     */
    public function __toArray();
}