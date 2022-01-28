<?php

namespace Muhimbi\PDFConverterServices;

class StatusRequestItem
{

  /**
   * 
   * @var string $RequestID
   * @access public
   */
  public $RequestID = null;

  /**
   * 
   * @var OperationType $OperationType
   * @access public
   */
  public $OperationType = null;

  /**
   * 
   * @var string $Data
   * @access public
   */
  public $Data = null;

  /**
   * 
   * @param OperationType $OperationType
   * @access public
   */
  public function __construct($OperationType)
  {
    $this->OperationType = $OperationType;
  }

}
