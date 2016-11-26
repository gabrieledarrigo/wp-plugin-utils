<?php
namespace Darrigo\WpPluginUtils\Utils;

/**
 * Class IsEmpty
 * @package Darrigo\WpPluginUtils\Utils
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
trait IsEmpty
{
    /**
     * @param mixed $value
     * @return bool
     */
    public function isEmpty($value)
    {
        return empty($value);
    }
}