<?php
declare(strict_types = 1);

class Action
{
    private $rover = null;

    //constructor that makes a variable rover's interface type
    public function __construct(rover_inter $rover)
    {
        $this->rover = $rover;
    }

    // now we make an array for the movement
    /*the array is 5x5 and must work as x,y axis*/
    public function act(array $movement): string
    {
        foreach ($movement as $operation) {
            try {
                $this->rover->spin(new Spin($operation));
            } catch (InvalidArgumentException $exception) {
                try {
                    $this->rover->move(new Move($operation));
                } catch (InvalidArgumentException $exception) {
                    throw new InvalidArgumentException('Operation is not executable');
                }
            }
        }
        return (string)$this->rover;
    }
