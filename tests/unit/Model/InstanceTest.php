<?php
namespace Tests\Darrigo\WpPluginUtils\Model;

use Darrigo\WpPluginUtils\Model\Instance;
use PHPUnit\Framework\TestCase;

/**
 * Class InstanceTest
 * @package Tests\Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class InstanceTest extends TestCase
{
    public function testItServeToBringWidgetData()
    {
        $raw = ['name' => 'instance', 'data' => 12, ];
        $instance = new Instance($raw);

        $this->assertEquals($raw, $instance->__toArray());
    }

    public function testItShouldBehaveLikeAnArray()
    {
        $instance = new Instance([]);

        $instance['field'] = 12;
        $instance->offsetSet('name', 'xyz');
        $instance->offsetSet('data', 12);

        $this->assertEquals('xyz', $instance->offsetGet('name'));
        $this->assertEquals(12, $instance->offsetGet('data'));
        $this->assertTrue($instance->offsetExists('field'));
        $this->assertFalse($instance->offsetExists('field.abc'));

        $instance->offsetUnset('name');
        $this->assertNull($instance->offsetGet('name'));
    }
}