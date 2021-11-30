<?php

declare(strict_types=1);

namespace DevBodas\Tests\Unit\Dev\Infrastructure\PhpUnit;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Mockery\MockInterface;

class UnitTestCase extends MockeryTestCase
{
    /**
     * @param string $className
     * @return MockInterface
     */
    protected function mock(string $className): MockInterface
    {
        return Mockery::mock($className);
    }
}
