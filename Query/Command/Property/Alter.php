<?php

/*
 * This file is part of the Orient package.
 *
 * (c) Alessandro Nadalin <alessandro.nadalin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Alter class
 *
 * @package
 * @subpackage
 * @author     Alessandro Nadalin <alessandro.nadalin@gmail.com>
 */

namespace Orient\Query\Command\Property;

use Orient\Query\Command\Property;

class Alter extends Property
{
    const SCHEMA = "ALTER PROPERTY :Class.:Property :Attribute :Value";

    public function changing($attribute, $value)
    {
        $this->setToken('Attribute', $attribute);
        $this->setToken('Value', $value);

        return $this;
    }

    protected function getTokenFormatters()
    {
        return array(
            'Class'         => "Orient\Formatter\Query\Regular",
            'Property'      => "Orient\Formatter\Query\Regular",
            'Attribute'     => "Orient\Formatter\Query\Regular",
            'Value'         => "Orient\Formatter\Query\Regular",
        );
    }
}

