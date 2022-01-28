<?php

namespace Muhimbi\PDFConverterServices;

class StatusResultItem
{

  /**
   * 
   * @var string $RequestID
   * @access public
   */
  public $RequestID = null;

  /**
   * 
   * @var int $MaximumInstances
   * @access public
   */
  public $MaximumInstances = null;

  /**
   * 
   * @var int $CurrentInstances
   * @access public
   */
  public $CurrentInstances = null;

  /**
   * 
   * @var OperationStatus $OperationStatus
   * @access public
   */
  public $OperationStatus = null;

  /**
   * 
   * @param int $MaximumInstances
   * @param int $CurrentInstances
   * @param OperationStatus $OperationStatus
   * @access public
   */
  public function __construct($MaximumInstances, $CurrentInstances, $OperationStatus)
  {
    $this->MaximumInstances = $MaximumInstances;
    $this->CurrentInstances = $CurrentInstances;
    $this->OperationStatus = $OperationStatus;
  }

}
