<?php

namespace Darrigo\WpPluginUtils\View;
use Doctrine\Common\Collections\Collection;

/**
 * Class View
 * @package Darrigo\WpPluginUtils\View
 */
class View implements Renderer
{
    /**
     * @var string
     */
    protected $templatePath;


    protected $viewArgs;


    public function __construct($templatePath, Collection $viewArgs)
    {
        if (file_exists($templatePath) === false) {
            throw new \InvalidArgumentException(self::class . ' cannot found template ' . $templatePath);
        }

        $this->templatePath = $templatePath;
        $this->viewArgs = $viewArgs;
    }

    /**
     * @return string
     */
    public function getTemplatePath()
    {
        return $this->templatePath;
    }


    public function getViewArgs()
    {
        return $this->viewArgs;
    }

    /**
     * @return void
     */
    public function render()
    {
        if (!$this->viewArgs->isEmpty()) {
            extract($this->viewArgs->toArray());
        }

        ob_start();
        include($this->templatePath);
        $out = ob_get_contents();
        ob_end_clean();
        echo $out;
    }
}
