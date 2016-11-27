<?php
namespace Tests\Darrigo\WpPluginUtils\Model;

use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use Darrigo\WpPluginUtils\Model\Collection;

/**
 * Class CollectionTest
 * @package Tests\Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class CollectionTest extends TestCase
{
    public function testItIsAGenericCollectionOfData()
    {
        $collection = new Collection(['a' => 1, 'b' => 2, 'object' => new \stdClass()]);
        $this->assertInstanceOf(ArrayCollection::class, $collection);
        $this->assertTrue($collection->containsKey('a'));
        $this->assertTrue($collection->containsKey('object'));
    }
}