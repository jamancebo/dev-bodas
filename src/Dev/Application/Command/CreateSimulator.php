<?php

declare(strict_types=1);

namespace DevBodas\Dev\Application\Command;

class CreateSimulator
{
    private string $id;
    private string $name;
    private int $number;
    private string $direction;
    private int $route;
    private string $date;


    /**
     * Simulator constructor.
     * @param String $id
     * @param String $name
     * @param Int $number
     * @param String $direction
     * @param Int $route
     */
    public function __construct(
        String $name,
        Int $number,
        String $direction,
        Int $route,
        String $date
    ) {
        $this->name = $name;
        $this->number = $number;
        $this->direction = $direction;
        $this->route = $route;
        $this->date = $date;
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
