<?php

use App\MarsRover;
use PHPUnit\Framework\TestCase;


/**
 * @author yourname
 */
class MarsRoverTest extends TestCase
{
  public function testInit()
  {
    $mars = new MarsRover();
    $mars->deploy(0, 1, 'N');
    $position = $mars->getPosition();
    $this->assertEquals('01N', $position);
  }

  /**
   * @test
   * @dataProvider dataSet
   */
  public function moveForward($direction, $expectedX, $expectedY)
  {
    $mars = new MarsRover();
    $mars->deploy(1, 4, $direction);
    $mars->moveForward();
    $position = $mars->getPosition();
    $this->assertEquals($expectedX . $expectedY . $direction, $position);
  }

  public function dataSet()
  {
    return [
      ['N', 1, 2],
      ['S', 1, 0],
    ];
  }

}
