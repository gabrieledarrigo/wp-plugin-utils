<?php
namespace Tests\Darrigo\WpPluginUtils\Model;

use Darrigo\WpPluginUtils\Model\EmptyResult;
use PHPUnit\Framework\TestCase;

/**
 * Class EmptyResultTest
 * @package Tests\Darrigo\WpPluginUtils\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class EmptyResultTest extends TestCase
{
    public function testItRepresentAnEmptyValue()
    {
        $empty = new EmptyResult();
        $this->assertEquals(true, $empty::IS_EMPTY);
    }

    public function testItImplementsA__toArrayMethod()
    {
        $empty = new EmptyResult();
        $this->assertEquals([], $empty->__toArray());
    }

    public function testCountShouldAlwayReturnZero()
    {
        $empty = new EmptyResult();
        $this->assertEquals(0, $empty->count());
    }
}