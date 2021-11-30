<?php

declare(strict_types=1);

namespace DevBodas\Dev\Domain\ValueObject;

use DevBodas\Shared\Domain\Aggregate\AggregateId;
use DevBodas\Shared\Domain\ValueObject\Uuid;

class Id extends Uuid implements AggregateId
{

}

