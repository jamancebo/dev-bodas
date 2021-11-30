<?php

declare(strict_types=1);

namespace DevBodas\Shared\Domain\Aggregate;

interface AggregateId
{
    /**
     * @return mixed
     */
    public function value();
}

