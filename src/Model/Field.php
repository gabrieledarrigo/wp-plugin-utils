<?php
namespace Darrigo\WpPluginUtils\Model;

/**
 * Class Field
 * @package Darrigo\FeaturedBanners\Model
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
final class Field extends ViewModel
{
    const ID = 'id';

    const NAME = 'name';

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Field constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->id = (string) $id;
        $this->name = (string) $name;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            self::ID => $this->getId(),
            self::NAME => $this->getName()
        ];
    }
}