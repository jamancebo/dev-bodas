<?php

declare(strict_types=1);

namespace DevBodas\Dev\Infrastructure\Repository\Persistence\Doctrine\CustomType;

use DevBodas\Dev\Domain\ValueObject\Id;
use DevBodas\Shared\Infrastructure\Repository\Doctrine\CustomType\StringCustomType;

class IdType extends StringCustomType
{
    /**
     * @inheritDoc
     */
    protected function typeClassName(): string
    {
        return Id::class;
    }
}
