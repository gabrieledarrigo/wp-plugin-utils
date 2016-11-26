<?php
namespace Darrigo\WpPluginUtils\Widget;

interface Widgetable
{
    public function widget($args, $instance);

    public function form($instance);

    public function update($newInstance, $oldInstance);
}