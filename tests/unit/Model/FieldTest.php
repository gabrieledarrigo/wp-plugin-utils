<?php
namespace Tests\Darrigo\WpPluginUtils;

use PHPUnit\Framework\TestCase;
use Darrigo\WpPluginUtils\Model\Field;

/**
 * Class FieldTest
 * @package Tests\Darrigo\FeaturedBanners
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class FieldTest extends TestCase
{
    public function testItRepresentAFieldWithIdAndName()
    {
        $raw = [
            Field::ID => 'widget-12-xyz',
            Field::NAME => 'widget-23[id][name]'
        ];

        $field = new Field($raw[Field::ID], $raw[Field::NAME]);
        $this->assertEquals($raw[Field::ID], $field->getId());
        $this->assertEquals($raw[Field::NAME], $field->getName());
        $this->assertEquals($raw, $field->__toArray());
    }
}