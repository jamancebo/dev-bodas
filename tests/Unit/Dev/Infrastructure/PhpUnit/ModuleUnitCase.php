<?php

declare(strict_types=1);

namespace DevBodas\Tests\Unit\Dev\Infrastructure\PhpUnit;

use DevBodas\Dev\Domain\Repository\SimulatorRepository;
use Mockery\MockInterface;

class ModuleUnitCase extends UnitTestCase
{
    private SimulatorRepository $simulatorRepository;

    /**
     * @return SimulatorRepository|MockInterface
     */
    protected function simulatorRepository(): MockInterface
    {
        if (empty($this->simulatorRepository)) {
            $this->simulatorRepository = $this->mock(SimulatorRepository::class);
        }
        return $this->simulatorRepository;
    }

    /**
     * @return void
     */
    public function shouldCreateSimulator(): void
    {
        $this->simulatorRepository()
            ->expects('create');
    }

    /**
     * @return array
     */
    public function shouldFindAllSimulator(): void
    {
        $this->simulatorRepository()
            ->expects('findAllElements')
            ->andReturn([]);
    }
}
