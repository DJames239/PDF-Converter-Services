<?php

namespace Muhimbi\PDFConverterServices;

class TaskMonitorSettings
{

  /**
   * 
   * @var int $MaxHungCount
   * @access public
   */
  public $MaxHungCount = null;

  /**
   * 
   * @var int $MaxPendingCount
   * @access public
   */
  public $MaxPendingCount = null;

  /**
   * 
   * @var int $MaxRunDuration
   * @access public
   */
  public $MaxRunDuration = null;

  /**
   * 
   * @param int $MaxHungCount
   * @param int $MaxPendingCount
   * @param int $MaxRunDuration
   * @access public
   */
  public function __construct($MaxHungCount, $MaxPendingCount, $MaxRunDuration)
  {
    $this->MaxHungCount = $MaxHungCount;
    $this->MaxPendingCount = $MaxPendingCount;
    $this->MaxRunDuration = $MaxRunDuration;
  }

}
