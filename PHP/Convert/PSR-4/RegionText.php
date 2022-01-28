<?php

namespace Muhimbi\PDFConverterServices;

class RegionText
{

  /**
   * 
   * @var string $RegionId
   * @access public
   */
  public $RegionId = null;

  /**
   * 
   * @var int $PageNumber
   * @access public
   */
  public $PageNumber = null;

  /**
   * 
   * @var string $Text
   * @access public
   */
  public $Text = null;

  /**
   * 
   * @param int $PageNumber
   * @access public
   */
  public function __construct($PageNumber)
  {
    $this->PageNumber = $PageNumber;
  }

}
