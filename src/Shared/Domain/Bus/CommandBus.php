<?php

declare(strict_types=1);

namespace DevBodas\Shared\Domain\Bus;

interface CommandBus
{
    /**
     * @param object $command
     */
    public function handle($command);
}
