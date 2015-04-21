<?php
/**
 * This file is part of the t-prototype package.
 *
 * (c) Fuero Interactive
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Task\Domain;

/**
 * Class TaskId
 *
 * @author  Michał Rybnik <michal.rybnik@fuero.pl> 
 */
class TaskId
{
    /** @var string  */
    private $value;

    /**
     * @param string $value
     */
    public function __construct($value)
    {
        \Assert\that($value)->string();
        $this->value = $value;
    }


}