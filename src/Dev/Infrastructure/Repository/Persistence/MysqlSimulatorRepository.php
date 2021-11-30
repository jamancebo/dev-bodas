<?php

declare(strict_types=1);

namespace DevBodas\Dev\Infrastructure\Repository\Persistence;

use DevBodas\Dev\Domain\Entity\Simulator;
use DevBodas\Dev\Domain\Repository\SimulatorRepository;
use DevBodas\Shared\Infrastructure\Repository\Doctrine\DoctrineRepository;
use DevBodas\Dev\Domain\ValueObject\Id;
use Doctrine\ORM\EntityManager;

class MysqlSimulatorRepository extends DoctrineRepository implements SimulatorRepository
{
    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        parent::__construct($entityManager);
    }

    /**
     * @inheritDoc
     */
    public function create(Simulator $simulator): void
    {
        $this->persist($simulator);
    }

    /**
     * @inheritDoc
     */
    public function find(Id $id): ?Simulator
    {
        return $this->entityManager->find(Simulator::class, $id->value());
    }

    /**
     * @inheritDoc
     */
    public function findAllElements(Simulator $simulator): array
    {
        return $this->findAll($simulator);
    }
}
