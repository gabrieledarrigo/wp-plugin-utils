<?php
namespace Darrigo\WpPluginUtils\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Collection
 * @package Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class Collection extends ArrayCollection
{
    /**
     * Collection constructor.
     * @param array $elements
     */
    public function __construct(array $elements)
    {
        parent::__construct($elements);
    }
}