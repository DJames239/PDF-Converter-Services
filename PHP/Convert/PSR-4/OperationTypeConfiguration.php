<?php

namespace Muhimbi\PDFConverterServices;

class OperationTypeConfiguration
{

  /**
   * 
   * @var OperationType $OperationType
   * @access public
   */
  public $OperationType = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var boolean $Enabled
   * @access public
   */
  public $Enabled = null;

  /**
   * 
   * @var int $MaximumInstances
   * @access public
   */
  public $MaximumInstances = null;

  /**
   * 
   * @var int $MaximumRunDuration
   * @access public
   */
  public $MaximumRunDuration = null;

  /**
   * 
   * @param OperationType $OperationType
   * @param boolean $Enabled
   * @param int $MaximumInstances
   * @param int $MaximumRunDuration
   * @access public
   */
  public function __construct($OperationType, $Enabled, $MaximumInstances, $MaximumRunDuration)
  {
    $this->OperationType = $OperationType;
    $this->Enabled = $Enabled;
    $this->MaximumInstances = $MaximumInstances;
    $this->MaximumRunDuration = $MaximumRunDuration;
  }

}
