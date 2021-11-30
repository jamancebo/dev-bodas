<?php

declare(strict_types=1);

namespace DevAway\Tests\Unit\KartCompetition\Competition\Application\Command\Handler;

use DevBodas\Dev\Application\Command\Handler\CreateSimulatorHandler;
use DevBodas\Tests\Mother\Dev\Application\Command\CreateSimulatorMother;
use DevBodas\Tests\Unit\Dev\Infrastructure\PhpUnit\ModuleUnitCase;

class CreateSimulatorTest extends ModuleUnitCase
{
    private CreateSimulatorHandler $handler;

    public function setUp(): void
    {
        parent::setUp();
        $this->handler = new CreateSimulatorHandler($this->simulatorRepository());
    }

    public function testCreateSimulator()
    {
        $command = CreateSimulatorMother::random();

        $this->shouldCreateSimulator();

        $simulator = $this->handler->handle($command);

        $this->assertEquals($command->name(), $simulator->name());
        $this->assertEquals($command->number(), $simulator->number());
        $this->assertEquals($command->direction(), $simulator->direction());
        $this->assertEquals($command->route(), $simulator->route());
        $this->assertEquals($command->date(), $simulator->date());
    }
}
