<?php

declare(strict_types=1);

namespace DevBodas\Dev\Application\Command\Handler;

use DevBodas\Dev\Domain\Entity\Simulator;
use DevBodas\Dev\Domain\Exception\PercentageError;
use DevBodas\Dev\Domain\Repository\SimulatorRepository;
use DevBodas\Dev\Domain\ValueObject\Id;
use DevBodas\Dev\Application\Command\CreateSimulator;
use Exception;

class CreateSimulatorHandler
{
    private SimulatorRepository $repository;
    private CONST PERCENTAGEERROR = 10;

    /**
     * CreateSimulatorHandler constructor.
     * @param SimulatorRepository $repository
     */
    public function __construct(SimulatorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param CreateSimulator $command
     * @return Simulator
     * @throws SimulatorRepository|Exception
     */
    public function handle(CreateSimulator $command): Simulator
    {
        $simulator = Simulator::instantiate(
            Id::random(),
            $command->name(),
            $command->number(),
            $command->direction(),
            $command->route(),
            $command->date()
        );

        $this->repository->create($simulator);

        return $simulator;
    }
}
