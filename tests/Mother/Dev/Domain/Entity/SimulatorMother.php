<?php

declare(strict_types=1);

namespace DevBodas\Dev\Mother\Signings\Domain\Entity;

use DevBodas\Dev\Domain\Entity\Simulator;
use DevBodas\Dev\Domain\ValueObject\Id;
use DevBodas\Tests\Mother\Signings\Domain\ValueObject\IdMother;
use Faker\Factory;

class SimulatorMother
{
    private const points = ["este","sur","norte","oeste"];
    public static function create(
        Id $id,
        String $name,
        Int $number,
        String $direction,
        Int $route,
        string $date
    ): Simulator {
        return Simulator::instantiate($id, $name, $number, $direction, $route,$date);
    }

    /**
     * @return Simulator
     */
    public static function random(): Simulator
    {
        $faker = Factory::create('es_ES');
        return self::create(
            IdMother::random(),
            'NUPTIC-43',
            $faker->numberBetween(1,60),
            self::points[$faker->numberBetween(0,3)],
           $faker->numberBetween(10,20),
            $faker->date()
        );
    }

}
