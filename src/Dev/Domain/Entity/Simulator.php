<?php

declare(strict_types=1);

namespace DevBodas\Dev\Domain\Entity;

use DevBodas\Dev\Domain\ValueObject\Id;
use DevBodas\Shared\Domain\Aggregate\AggregateRoot;

class Simulator extends AggregateRoot
{
    private Id $id;
    private string $name;
    private int $number;
    private string $direction;
    private int $route;
    private string $date;

    /**
     * Simulator constructor.
     * @param Id $id
     * @param String $name
     * @param Int $number
     * @param String $direction
     * @param Int $route
     */
    public function __construct(
        Id $id,
        String $name,
        Int $number,
        String $direction,
        Int $route,
        string $date
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->number = $number;
        $this->direction = $direction;
        $this->route = $route;
        $this->date = $date;
    }

    /**
     * @param Id $id
     * @param String $name
     * @param Int $number
     * @param String $direction
     * @param Int $route
     */
    public static function instantiate(
        Id $id,
        String $name,
        Int $number,
        String $direction,
        Int $route,
        string $date
    ): self {
        return new Simulator($id, $name, $number, $direction, $route,$date);
    }

    /**
     * @return Id
     */
    public function id(): Id
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function name(): String
    {
        return $this->name;
    }

    /**
     * @return Int
     */
    public function number(): Int
    {
        return $this->number;
    }

    /**
     * @return String
     */
    public function direction(): String
    {
        return $this->direction;
    }

    /**
     * @return Int
     */
    public function route(): Int
    {
        return $this->route;
    }

    /**
     * @return String
     */
    public function date(): String
    {
        return $this->date;
    }
}
