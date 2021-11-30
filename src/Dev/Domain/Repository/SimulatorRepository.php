<?php

declare(strict_types=1);

namespace DevBodas\Dev\Domain\Repository;

use DevBodas\Dev\Domain\Entity\Simulator;
use DevBodas\Dev\Domain\ValueObject\Id;
use Doctrine\Common\Collections\Criteria;
use Exception;

interface SimulatorRepository
{
    /**
     * @param Simulator $Simulator
     */
    public function create(Simulator $Simulator): void;

    /**
     * @param Id $id
     * @throws Exception
     * @return Simulator|null
     */
    public function find(Id $id): ?Simulator;

    /**
     * @throws Exception
     * @return Simulator|null
     */
    public function findAllElements(Simulator $simulator): ?Array;
}
