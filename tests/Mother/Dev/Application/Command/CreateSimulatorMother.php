<?php

declare(strict_types=1);

namespace DevBodas\Tests\Mother\Dev\Application\Command;

use DevBodas\Dev\Application\Command\CreateSimulator;
use Faker\Factory;

class CreateSimulatorMother
{
    private const points = ["este","sur","norte","oeste"];

    /**
     *  constructor.
     * @param String $name
     * @param Int $number
     * @param String $direction
     * @param Int $route
     * @param string $date
     * @return CreateSimulator
     */
    public static function create(
        String $name,
        Int $number,
        String $direction,
        Int $route,
        string $date
    ) {
        return new CreateSimulator($name, $number, $direction, $route,$date);
    }

    /**
     * @return CreateSimulator
     */
    public static function random()
    {
        $faker = Factory::create('es_ES');
        return self::create(
            'NUPTIC-43',
            $faker->numberBetween(1,60),
            self::points[$faker->numberBetween(0,3)],
            $faker->numberBetween(10,20),
            $faker->date()
        );
    }
}
