<?php
namespace Darrigo\WpPluginUtils\Dao;

/**
 * Class DbProxy
 * @package Darrigo\WpPluginUtils\Dao
 * @author Gabriele D'Arrigo - darrigo.g@gmail.com
 */
class DbProxy
{
    /**
     * @var \wpdb
     */
    private $db;

    /**
     * DbProxy constructor.
     * @param \wpdb $db
     */
    public function __construct(\wpdb $db)
    {
        $this->db = $db;
    }

    /**
     * @param $query
     * @return array|null|object
     */
    public function getResults($query)
    {
        return $this->db->get_results($query, OBJECT);
    }

    /**
     * @param $query
     * @return array|null|object|void
     */
    public function getRow($query)
    {
        return $this->db->get_row($query, OBJECT);
    }

    /**
     * @param $query
     * @param array $args
     * @return string|void
     */
    public function prepare($query, array $args)
    {
        return $this->db->prepare($query, $args);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array(
            [$this->db, $name],
            $arguments
        );
    }
}