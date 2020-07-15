<?php

namespace App;

/**
 * Class MarsRover
 * @author yourname
 */
class MarsRover
{

  private $x;
  private $y;
  private $direction;

    public function deploy(int $x, int $y, string $direction)
    {
      $this->x = $x;
      $this->y = $y;
      $this->direction = $direction;
    }

    public function getPosition()
    {
      return $this->x . $this->y . $this->direction;
    }

    public function moveForward()
    {
      $this->y++;
    }

}
