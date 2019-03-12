<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 12/03/2019
 * Time: 14:49
 */

namespace SQLAdmin;


use http\Exception\InvalidArgumentException;
use mysql_xdevapi\Exception;

class SQLAdmin
{
    /**
     * @var array
     */
    private $options;

    /**
     * SQLAdmin constructor.
     * @param array $options Options array for instanciation (See doc at : )
     */
    public function __construct($options = []) {
        if (null === $options || !is_array($options)) {
            throw new \InvalidArgumentException("Options have to be an array, <i>".gettype($options)."</i> given.", 1);
        }


        $this->options = $options;
    }
}