<?php
/**
 * This file is part of the ${PROJECT_NAME} package.
 *
 * (c) Fuero Interactive
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Task\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Task\Domain\TaskId;

class TaskIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('1');
        $this->shouldHaveType(TaskId::class);
    }

    function it_validates_a_value_is_given()
    {
        $this->shouldThrow()->during__construct(null);
    }

    function it_validates_a_valid_id_is_given()
    {

        $this->shouldThrow()->during__construct(1.013);
    }
}