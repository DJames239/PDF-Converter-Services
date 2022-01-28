<?php

namespace Muhimbi\PDFConverterServices;

class Status
{

  /**
   * 
   * @var StatusResultItem[] $Items
   * @access public
   */
  public $Items = null;

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
   * @param int $MaximumInstances
   * @param int $CurrentInstances
   * @access public
   */
  public function __construct($MaximumInstances, $CurrentInstances)
  {
    $this->MaximumInstances = $MaximumInstances;
    $this->CurrentInstances = $CurrentInstances;
  }

}
