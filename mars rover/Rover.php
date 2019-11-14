<?php

class Rover implements rover_inter{

    private $pos = null;
    private $exploring = null;

    //rover constructor
   public function _construct(Position $pos, Heading $exploring){

     $this->pos = $pos;
     $this->exploring= $exploring;
   }

   //now we are creating the get set functions
   public function get_pos(){return $this->pos;}

   public function get_expl(){return $this->exploring;}

   //now we are creating the  set functions
   public function set_expl($pos){
     $this->pos=$pos;
   }

   public function set_expl($exploring){
     $this->exploring=$expl;
   }

   //this changes rover's direction
   public function spin(Spin $spin): void
    {
        $this->expl = $this->expl->change($spin);
    }

    //this moves the rover
    public function move(Move $move): void
   {
       $value = $move->factor($this->exploring->axisValue());
       if (Direction::X_AXIS === $this->exploring->axis()) {
           $this->pos = $this->pos->change(
               $this->pos->valueX()->increaseCoordinateBy($value),
               $this->pos->valueY()
           );
           return;
       }
       $this->pos = $this->pos->change($this->pos->valueX(),
           $this->position->valueY()->increaseCoordinateBy($value)
       );
   }

   //returns the exploring and positioning to string
   public function __toString(): string
    {
        return (string)($this->pos . ' ' . $this->expl);
    }

   public function relativePosition(positionable_inter $object): positionable_inter
   {
       return $object;
   }

}




?>
